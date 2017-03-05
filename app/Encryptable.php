<?php
namespace CryptMessage;

use \Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Config;

trait Encryptable
{
    public function cryptInstance()
    {
        if(!isset($this->hash))
            $this->hash = md5(rand());

        $hash=Hash::find($this->hash);

        if(!$hash)
            $hash=Hash::create(['id' => $this->hash, 'key'=>md5(rand())]);

        return new Encrypter($hash->key,Config::get( 'app.cipher' ));
    }

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (in_array($key, $this->encryptable)) {
            $value = $this->cryptInstance()->decrypt($value);
        }

        return $value;
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable)) {
            $value = $this->cryptInstance()->encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }
}