### [Find the unknown digit](https://www.codewars.com/kata/546d15cebed2e10334000ed9/train/php)
![4kyu](https://img.shields.io/badge/4kyu-yellow)
![ALGORITHMS](https://img.shields.io/badge/ALGORITHMS-grey)
![MATHEMATICS](https://img.shields.io/badge/MATHEMATICS-grey)
![PUZZLES](https://img.shields.io/badge/PUZZLES-grey)

The professor will give you a simple math expression, of the form
```
[number][op][number]=[number]
```

He has converted all of the runes he knows into digits. The only operators he knows are addition (`+`),subtraction(`-`),
and multiplication (`*`), so those are the only ones that will appear. Each number will be in the range 
from -1000000 to 1000000, and will consist of only the digits 0-9, possibly a leading -, and maybe a few ?s. 
If there are ?s in an expression, they represent a digit rune that the professor doesn't know 
(never an operator, and never a leading -). All of the ?s in an expression will represent the same digit (0-9), 
and it won't be one of the other given digits in the expression. No number will begin with a 0 
unless the number itself is 0, therefore 00 would not be a valid number.

Given an expression, figure out the value of the rune represented by the question mark. 
If more than one digit works, give the lowest one. If no digit works, well, that's bad news for the professor - 
it means that he's got some of his runes wrong. output -1 in that case.

Complete the method to solve the expression to find the value of the unknown rune. 
The method takes a string as a paramater repressenting the expression and will return an int value 
representing the unknown rune or -1 if no such rune exists.

**Most of the time, the professor will be able to figure out most of the runes himself, but sometimes, 
there may be exactly 1 rune present in the expression that the professor cannot figure out 
(resulting in all question marks where the digits are in the expression) so be careful ;)**

---

[My solution](https://www.codewars.com/kata/reviews/59bb71499fc229ca460002b8/groups/635857c13ea24a0001221316)
