##Install

```
# clone repo
git clone https://github.com/Alexz29/crypt_message.git

# go to dir app
cd crypt_message

# install vendors 
composer install

```


reconfigure  <path>/config/database.php :
```
'database' => env('DB_DATABASE', ''),
'username' => env('DB_USERNAME', 'root'),
'password' => env('DB_PASSWORD', ''),
```


up migration
```
php artisan migrate
```

run server 
```
php artisan serve
```

[http://127.0.0.1:8000](http://127.0.0.1:8000)


##About

.../app/Message.php - Example model

```php

// Use tarit Encryptable (Important!)
 use Encryptable;
 
 
//This model contain encryptable field
 protected $encryptable = [
        'name',
        'crypt_message'
    ];
    
//And require field hash (Important!)
protected $fillable = [
        'id',
        'name',
        'crypt_message',
        'hash',  //require field
        'created_at',
        'updated_at'
    ];
```