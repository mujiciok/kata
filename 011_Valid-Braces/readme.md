### [Valid Braces](https://www.codewars.com/kata/5277c8a221e209d3f6000b56/php)
![6kyu](https://img.shields.io/badge/6kyu-yellow)
![ALGORITHMS](https://img.shields.io/badge/ALGORITHMS-grey)

Write a function that takes a string of braces, and determines if the order of the braces is valid. 
It should return `true` if the string is valid, and `false` if it's invalid.

This Kata is similar to the [Valid Parentheses](https://www.codewars.com/kata/valid-parentheses) Kata, but introduces new characters: brackets `[]`, and curly braces `{}`. 
Thanks to `@arnedag` for the idea!

All input strings will be nonempty, and will only consist of parentheses, brackets and curly braces: `()[]{}`.

##### What is considered Valid?
A string of braces is considered valid if all braces are matched with the correct brace.

Examples
```php
"(){}[]"   =>  True
"([{}])"   =>  True
"(}"       =>  False
"[(])"     =>  False
"[({})](]" =>  False
```

---

[My solution](https://www.codewars.com/kata/reviews/578d09fba6ea7047de000024/groups/63540dde8a857400019a95b0)