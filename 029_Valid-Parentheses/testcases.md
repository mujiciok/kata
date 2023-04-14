### Testcases
|        | Input            | Output  | Expected |
|--------|------------------|---------|----------|
| Case 1 | `s = "([{]})"`   | `false` | `false`  |
| Case 2 | `s = "([{()}])"` | `true`  | `true`   |
| Case 3 | `s = "()"`       | `true`  | `true`   |
| Case 4 | `s = "()[]{}"`   | `true`  | `true`   |
| Case 5 | `s = "(]"`       | `false` | `false`  |
    