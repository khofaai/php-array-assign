# php-array-assign
Similar to javascript Object.assign

## Example
```php
$merged = assign(['name' => 'just a name'], ['key' => true], ['value' => 'test', 'key' => false]);
die(var_dump($merged));
/*
array (size=3)
  'name' => string 'just a name' (length=11)
  'key' => boolean false
  'value' => string 'test' (length=4)
*/
```
