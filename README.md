# PHP Foreach Loop and Unset() Pitfall
This repository demonstrates a common yet subtle error in PHP involving the use of `unset()` within a `foreach` loop while iterating over array elements.

## The Bug
The issue occurs when you attempt to remove elements from an array while iterating over it using a `foreach` loop.  The `unset()` function changes the internal array pointer, causing the loop to skip elements unexpectedly. This is most noticeable with associative arrays that have non-numeric keys.  The provided `bug.php` file shows a clear example of this problem.

## The Solution
The solution involves iterating over a copy of the array's keys or using a different looping mechanism that doesn't rely on internal array pointers, avoiding the unexpected behavior demonstrated in the bug file.  The `bugSolution.php` file showcases several methods to address this effectively.

## How to Reproduce
Clone this repository and run `bug.php` using a PHP interpreter. You'll observe the unexpected skipping of array elements. Then, execute `bugSolution.php` to see the corrected behavior.

## Lessons Learned
Be mindful of modifying arrays during iteration using `foreach` loops, especially when handling associative arrays. To avoid such issues, consider using a copy of the array keys or alternative methods like `for` loops or `array_filter()` for manipulating arrays during iteration.