### [Simple Encryption #1 - Alternating Split](https://www.codewars.com/kata/57814d79a56c88e3e0000786/php)
![6kyu](https://img.shields.io/badge/6kyu-yellow)
![ALGORITHMS](https://img.shields.io/badge/ALGORITHMS-grey)
![ARRAYS](https://img.shields.io/badge/ARRAYS-grey)
![CRYPTOGRAPHY](https://img.shields.io/badge/CRYPTOGRAPHY-grey)
![FUNDAMENTALS](https://img.shields.io/badge/FUNDAMENTALS-grey)
![STRINGS](https://img.shields.io/badge/STRINGS-grey)

Implement a pseudo-encryption algorithm which given a string `S` and an integer `N` 
concatenates all the odd-indexed characters of `S` with all the even-indexed characters of `S`, 
this process should be repeated `N` times.

Examples:

```php
encrypt("012345", 1)  =>  "135024"
encrypt("012345", 2)  =>  "135024"  ->  "304152"
encrypt("012345", 3)  =>  "135024"  ->  "304152"  ->  "012345"

encrypt("01234", 1)  =>  "13024"
encrypt("01234", 2)  =>  "13024"  ->  "32104"
encrypt("01234", 3)  =>  "13024"  ->  "32104"  ->  "20314"
```
Together with the encryption function, you should also implement a decryption function which reverses the process.

If the string `S` is an empty value or the integer `N` is not positive, 
return the first argument without changes.

---

This kata is part of the Simple Encryption Series:

* [Simple Encryption #1 - Alternating Split](https://www.codewars.com/kata/simple-encryption-number-1-alternating-split)
* [Simple Encryption #2 - Index-Difference](https://www.codewars.com/kata/simple-encryption-number-2-index-difference)
* [Simple Encryption #3 - Turn The Bits Around](https://www.codewars.com/kata/simple-encryption-number-3-turn-the-bits-around)
* [Simple Encryption #4 - Qwerty](https://www.codewars.com/kata/simple-encryption-number-4-qwerty) 

Have fun coding it and please don't forget to vote and rank this kata! :-)

---

[My solution](https://www.codewars.com/kata/reviews/57cac06135ef62d286000025/groups/6351a55bff584a00019c7b4b)