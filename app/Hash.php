<?php

namespace CryptMessage;

use Illuminate\Database\Eloquent\Model;

class Hash extends Model
{
    protected $table = 'hash';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'key',
    ];
}
