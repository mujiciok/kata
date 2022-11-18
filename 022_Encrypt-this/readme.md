### [Encrypt this!](https://www.codewars.com/kata/5848565e273af816fb000449/php)
![6kyu](https://img.shields.io/badge/6kyu-yellow)
![ALGORITHMS](https://img.shields.io/badge/ALGORITHMS-grey)
![ARRAYS](https://img.shields.io/badge/ARRAYS-grey)
![CIPHERS](https://img.shields.io/badge/CIPHERS-grey)
![CRYPTOGRAPHY](https://img.shields.io/badge/CRYPTOGRAPHY-grey)
![FUNDAMENTALS](https://img.shields.io/badge/FUNDAMENTALS-grey)
![REGULAR EXPRESSIONS](https://img.shields.io/badge/REGULAR_EXPRESSIONS-grey)
![SECURITY](https://img.shields.io/badge/SECURITY-grey)
![STRINGS](https://img.shields.io/badge/STRINGS-grey)

#### Acknowledgments:
I thank [yvonne-liu](https://www.codewars.com/users/yvonne-liu) for the idea and for the example tests :)

#### Description:
Encrypt this!

You want to create secret messages which can be deciphered by the [Decipher this!](https://www.codewars.com/kata/decipher-this) kata. 
Here are the conditions:

1. Your message is a string containing space separated words.
2. You need to encrypt each word in the message using the following rules:
- The first letter must be converted to its ASCII code.
- The second letter must be switched with the last letter
3. Keepin' it simple: There are no special characters in the input.

#### Examples:
```shell
encryptThis("Hello") === "72olle"
encryptThis("good") === "103doo"
encryptThis("hello world") === "104olle 119drlo"
```

---

[My solution](https://www.codewars.com/kata/reviews/614c70cab361650001557cc5/groups/6377f350af766d0001ea77d6)
    