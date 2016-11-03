## Illuminate

Sample project showing usage of illuminate database

### Installing with composer

```bash
$ composer require "illuminate/html":"5.0.*"
$ composer install
```

### Usage

```php
$users = $db->table('users')
	->where('is_active', '=', true)
	->get();
 
var_dump($users)
```

### Running

```bash
$ ./run.sh
```
