```php
function incrementArrayValue(array &$arr, string $key): void {
  if (!array_key_exists($key, $arr)) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

function incrementArrayValueImproved(array &$arr, $key): void {
  if (!is_string($key)){
    throw new InvalidArgumentException('Key must be a string.');
  }
  if (!array_key_exists($key, $arr)) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

$myArray = [];
incrementArrayValue($myArray, 'count'); // Works fine
incrementArrayValueImproved($myArray, 'newKey'); // Works fine

try {
  incrementArrayValueImproved($myArray, 1); // Throws an exception
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}

```