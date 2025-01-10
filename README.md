# PHP Pass-by-Reference Bug

This example demonstrates a subtle issue related to pass-by-reference in PHP when working with arrays containing objects.

The `increment_array_values` function intends to increment the values of elements within an array. While it works correctly for simple arrays of numbers, it fails to modify the original objects within an array of objects. This is due to the way pass-by-reference interacts with object properties.

See `bug.php` for the problematic code and `bugSolution.php` for a corrected version.