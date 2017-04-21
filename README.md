# Time Laravel


Time laravel is a package for work with times in Laravel. Is a extension on WallaceMaxters\Timer\Time, a library for work with times, specially the greathers than 24 hours.


# Instalation

Add the folow code in your composer.json file.

```json
{
    "phplegends/timer-laravel" : "2.*"
}
```

Run the comando `composer update`.


After installation complete, add in your `config/app.php` file the follow code:

```php
'providers' => array(
    /* providers definitions */
    'PHPLegends\TimerLaravel\TimeServiceProvider'
),

'facades' => array(
    /* facades definitions */
    'Time' => 'PHPLegends\TimerLaravel\Facade'
)
```

# Usage

For a simple test, you can use the follow code:

```php
$time = Time::make(23, 59, 59);

echo $time->format('%h:%i:%s'); // '23:59:59'

$time->addHours(5);

echo $time->format('%h:%i:%s'); // 28:59:59
```


You can use the `collection` method to generate a collection of times.


```php
$seconds = [10, 20, 30];

$collection = Time::collection([10, 20, 30]);

// or

$collection = Time::collection([
    Time::make(0, 0, 10),
    Time::createFromFormat('%s seconds', '3 seconds'),
    Time::createFromString('+30 seconds')
]);

echo $collection->sum()->format('%h:%i:%s'); // '00:01:00
```



**Suggestion for tests**: Use the `php artisan tinker` command:

```bash
> php artisan tinker
> $collection = Time::collection([10, 20, 30]);
> $collection->average()->format();
> '00:20:00'

```
