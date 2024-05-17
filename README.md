##########String Functions:
strlen(): Returns the length of a string.
str_replace(): Replaces all occurrences of a search string with a replacement string in a given string.

substr(): Returns a part of a string.
strtolower(), strtoupper(): Converts a string to lowercase or uppercase, respectively.
trim(), ltrim(), rtrim(): Removes whitespace or other specified characters from the beginning, end, or both ends of a string.
Array Functions:
count(): Returns the number of elements in an array.

  array_pop(): Adds an element to the end of an array or removes the last element from an array, respectively.
array_merge(): Merges one or more arrays into a single array.
array_key_exists(): Checks if the specified key exists in the array.

Mathematical Functions:
sqrt(): Returns the square root of a number.
rand(): Generates a random integer.
round(), ceil(), floor(): Rounds a floating-point number to the nearest integer, rounds up, or rounds down, respectively.

File Handling Functions:
fopen(), fclose(): Opens and closes a file, respectively.
fread(), fwrite(): Reads from and writes to a file, respectively.
file_get_contents(), file_put_contents(): Reads the content of a file into a string or writes a string to a file, respectively.
Database Functions (if using MySQL):
mysqli_connect(), mysqli_close(): Establishes and closes a connection to a MySQL database, respectively.
mysqli_query(): Performs a query against the database.
Date and Time Functions:
date(): Formats a local time/date.
strtotime(): Parses any English textual datetime description into a Unix timestamp.
Miscellaneous Functions:
isset(), empty(): Checks if a variable is set and is not NULL, or if a variable is empty, respectively.
print(), echo(): Output one or more strings.
 */

##########PHP String Built-In Functions
--->strpos(): Finds the position of the first occurrence of a substring in a string.
$position = strpos("Hello, world!", "world"); // 7
-->substr(): Returns a part of a string.
$substring = substr("Hello, world!", 7); // $substring will be "world
-->str_replace(): Replaces all occurrences of a substring in a string.
$newString = str_replace("world", "universe", "Hello, word
-->explode(): Splits a string by a specified delimiter into an array of substrings.
$array = explode(",", "apple,banana,orange"); // $array will be ["apple", "banana", "orange"]
-->implode() (or join()): Joins array elements with a string.
$string = implode(", ", ["apple", "banana", "orange"]); // $string will be "apple, banana, orange"
-->strrev(): Reverses a string.
-->$ucfirst = ucfirst("hello"); // $ucfirst will be "Hello"
$ucwords = ucwords("hello world"); // $ucwords will be "Hello World"
-------------Replace Multiple Substrings
$string = "The quick brown fox jumps over the lazy dog.";
$search = array("quick", "brown", "fox");
$replace = array("slow", "red", "cat");
$newString = str_replace($search, $replace, $string);
echo $newString; // Output: The slow red cat jumps ove
-------- Replace with Limitation
$string = "one, two, three, four, five";
$newString = str_replace(",", ";", $string, 2); // Replace only first 2 occurrences
echo $newString; // Output: one; two; three, four, fiv
------. Regular Expression Replacement with preg_replace()
$string = "The quick brown fox jumps over the lazy dog.";
$newString = preg_replace("/\b[A-Z]+\b/", "animal", $string);
echo $newString; // Output: The animal animal animal animal over the animal animal.
-------Using Callback Function with preg_replace_callback()
$string = "April 15, 2024";
$newString = preg_replace_callback("/\d+/", function($matches) {
    return (int)$matches[0] * 2;
}, $string);
echo $newString; // Output: April 30, 4048
$string = "Hello! How are you?";
$newString = preg_replace("/[^a-zA-Z0-9]+/", " ", $string);
echo $newString; // Output: Hello How are you
