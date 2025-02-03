```php
function incrementArrayValue(array &$arr, string $key): void {
  if (!array_key_exists($key, $arr)) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

$myArray = [];
incrementArrayValue($myArray, 'count'); //Works fine
incrementArrayValue($myArray, 1); //This will cause an error
```