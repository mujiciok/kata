### [Can you get the loop?](https://www.codewars.com/kata/52a89c2ea8ddc5547a000863/php)
![5kyu](https://img.shields.io/badge/5kyu-yellow)
![ALGORITHMS](https://img.shields.io/badge/ALGORITHMS-grey)
![DATA_STRUCTURES](https://img.shields.io/badge/DATA_STRUCTURES-grey)
![LINKED_LISTS](https://img.shields.io/badge/LINKED_LISTS-grey)

You are given a node that is the beginning of a linked list. This list contains a dangling piece and a loop. 
Your objective is to determine the length of the loop.

For example in the following picture the size of the dangling piece is 3 and the loop size is 12:
```
A -- B -- C -- 1 -- 2 -- 3 -- 4 -- 5
              /                     \
            12                       6
             \                      /
             11 -- 10 -- 9 -- 8 -- 7
```

```shell
# Use the `next' method to get the following node.
node.next
```

Use the `Node::getNext()` instance method to get the following node.
```php
$node->getNext();
```

Notes:
- do NOT mutate the nodes!
- in some cases there may be only a loop, with no dangling piece

> "Thanks to shadchnev, I broke all of the methods from the Hash class."

> "Don't miss dmitry's article in the discussion after you pass the Kata !!"


---

[My solution](https://www.codewars.com/kata/reviews/59ad655542bd184c16000a6c/groups/6359a9dc804d2000012f6f9a)