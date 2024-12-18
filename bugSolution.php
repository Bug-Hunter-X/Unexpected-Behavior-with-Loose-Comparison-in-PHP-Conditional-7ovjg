function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

function bar(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//Example calls demonstrating strict comparison
echo foo(0, '0') . "\n"; // Output: false
echo foo(null, '') . "\n"; // Output: false
echo foo(true, 1) . "\n"; //Output: false

//Demonstrates that using strict comparison in bar function solves the loose comparison issue
echo bar(0, '0') . "\n"; // Output: false
echo bar(null, '') . "\n"; // Output: false
echo bar(true, 1) . "\n"; //Output: false