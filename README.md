## Bitrix PHPUnit

## Установка
- Выполнить команду ```composer require --dev phpunit/phpunit```
- Подключить автолоадер в ```/local/php_interface/init.php```
```
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';
}
```
- Скопировать папку ```/local/tests/```

## Запуск тестов
```
./vendor/bin/phpunit --configuration local/tests/phpunit.xml.dist
```