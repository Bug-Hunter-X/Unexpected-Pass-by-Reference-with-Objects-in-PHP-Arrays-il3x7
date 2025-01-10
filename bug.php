```php
<?php
function increment_array_values(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$myArray = [1, 2, 3];
increment_array_values($myArray);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

//Problem arises when using array of objects
class MyClass {
    public $value;
    public function __construct($value) {
        $this->value = $value;
    }
}

$myObjects = [new MyClass(1), new MyClass(2), new MyClass(3)];
increment_array_values($myObjects); //This will not work as expected.
print_r($myObjects); // Output will still be the initial array

?>
```