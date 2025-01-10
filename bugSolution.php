```php
<?php
function increment_object_values(&$arr) {
  foreach ($arr as &$obj) {
    $obj->value++;
  }
}

class MyClass {
    public $value;
    public function __construct($value) {
        $this->value = $value;
    }
}

$myObjects = [new MyClass(1), new MyClass(2), new MyClass(3)];
increment_object_values($myObjects);
print_r($myObjects); //This will now correctly increment the values
?>
```