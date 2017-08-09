# PHP Tricks (Second session)

####Concatening
- Concatening variables is faster than just putting them in a double-quotation mark string.
```
$var = 'Hello ' . $world; // is faster than 
$var = "Hello $world"; // or 
$var = "Hello {$world}";
```
Yes, it's faster, but the second and third form are even more readable and the loss of speed is so low it doesn't even matter.

####Working with loops
- When using a loop, if your condition uses a constant, put it before the loop. For instance: 
```
for ($i = 0; $i < count($my_array); $i++)
```
This will evaluate count($my_array) every time. Just make an extra variable before the loop, or even inside:
```
for ($i = 0, $count = count($my_array); $i < $count; $i++)
```
####echo vs print()
- Use echo instead of print(). As a language construct rather than a function, echo has a slight performance advantage over print().

####include or include_one...
- Use include() and require() instead of include_once() and require_once(). There’s a lot of work involved in checking to see if a file has already been included. Sometimes it’s necessary, but you should default to include() and require() in most situations.
####Use full paths
- Use full file paths on include/require statements. Normalizing a relative file path can be expensive; giving PHP the absolute path (or even “./file.inc”) avoids the extra step.
####Built-in functions vs custom functions
- Favor built-in functions over custom functions. Since PHP has to take the extra step of interpreting your custom functions, built-in functions have a performance advantage. More importantly, there are a lot of useful built-in functions that you may never learn about if you always default to writing your own.
#### JSON vs XML
-  Use JSON Instead of XML: Speaking of which, native PHP functions such as json_encode( ) and json_decode( ) are incredibly fast, which is why using JSON is preferable to using XML. If you are committed to XML, be sure to parse it using regular expressions rather than DOM manipulation.
#### Double quotes vs simple quotes
- Ditch double quotes for single quotes. There’s some disagreement, but the common wisdom is that PHP has to do extra processing on a string in double quotes to see if it contains any variables. Concatenation with single quotes is marginally faster.
#### Use isset()
- Compared to count( ), strlen( ) and sizeof( ), isset( ) is a faster and simpler way to determine if a value is greater than 0.
```
if (isset($author))
{
   echo 'The Author is ' . $author;
}
else
{
   echo 'No authors';
}
```
#### Use the Strongest Str Functions
- While str_replace is faster than preg_replace, the strtr function is four times faster than str_replace.
```
echo strtr("baab", "ab", "01"),"\n";

$conv = array("ab" => "01");
echo strtr("baab", $conv);
```
#### Three Equal Signs
- Since “= = =” only checks for a closed range, it is faster than using “= =” for comparisons.
#### Regular Expressions
- Regular expressions are very useful, but also very time-consuming. For this reason, limiting their use is, to say the least, highly recommended. Regular expressions are known to be much slower than their PHP counterparts. For example, use str_replace instead of preg_replace
#### PHP Version
- The team of developers who maintain the PHP engine have made a number of significant performance improvements over the years. If your web server is still running an older version, such as PHP 3 or PHP 4, you may want to investigate upgrading before you try to optimize your code.
#### Getters and Setters
- When writing classes in PHP, you can save time and speed up your scripts by working with object properties directly, rather than writing naive setters and getters. In the following example, the dog class uses the setName() and getName() methods for accessing the name property.
#### Don't copy variables for no reason
- Sometimes PHP novices attempt to make their code "cleaner" by copying predefined variables to variables with shorter names before working with them. What this actually results in is doubled memory consumption (when the variable is altered), and therefore, slow scripts. In the following example, if a user had inserted 512KB worth of characters into a textarea field. This implementation would result in nearly 1MB of memory being used.

