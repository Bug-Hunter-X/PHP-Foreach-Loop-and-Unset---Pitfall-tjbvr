In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
$myArray = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($myArray as $key => $value) {
  if ($key === 'b') {
    unset($myArray[$key]); // Removing an element during iteration 
  }
}

print_r($myArray); //Notice how 'c' is skipped
```

The issue is that unset()ing an element while iterating affects the internal array pointer, leading to unexpected skips.  This might go unnoticed in smaller arrays but can have significant consequences in large datasets.