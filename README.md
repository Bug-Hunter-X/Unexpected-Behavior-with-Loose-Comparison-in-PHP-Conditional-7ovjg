# PHP Loose Comparison Bug

This repository demonstrates a common error in PHP related to loose comparison (`==`) versus strict comparison (`===`) in conditional statements.  Loose comparison can lead to unexpected behavior when comparing values of different types.

## The Bug
The `bug.php` file contains two functions, `foo` and `bar`.  `foo` uses strict comparison (`===`), while `bar` uses loose comparison (`==`).  Observe how they behave differently when comparing values of different types, such as comparing 0 to '0' and comparing null and ''.

## The Solution
The `bugSolution.php` file demonstrates the correct usage of strict comparison (`===`) to avoid these types of issues.  Strict comparison ensures that the type and the value being compared are the same.

## How to reproduce
1. Clone this repository
2. Run `bug.php` and observe the output. Note the differences in results.
3. Run `bugSolution.php` and observe the consistent and expected results when using strict comparison.