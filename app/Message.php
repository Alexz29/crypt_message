<?php
namespace CryptMessage;


use \Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use Encryptable;

    protected $table = 'messages';

    protected $fillable = [
        'id',
        'name',
        'crypt_message',
        'hash',  //require field
        'created_at',
        'updated_at'
    ];

    protected $encryptable = [
        'name',
        'crypt_message'
    ];
}