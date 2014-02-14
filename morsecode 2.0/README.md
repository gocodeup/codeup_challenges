# Morse Code 2.0

By now you all have become experts at translating English to morse code, it's time to do the reverse. **But there's a catch!** Unlike the previous challenge, we aren't giving you a PHP array for doing your lookup; in fact you are **not allowed** to use any kind of lookup array. Instead, you must parse the string using nested `if` and/or `switch` statements. Just like before spaces will be replaced with `/` characters, but to make things simpler we will also separate each letter with a space. So for example, the following:

```
.... . .-.. .-.. --- / .-- --- .-. .-.. -..
```

would translate to:

```
hello world
```

We've created three separate input files for you to work from, divided into three different tiers. The first file contains sentences using **only** alphabetic characters. The second file uses both alpha and numeric characters. Finally, the third file contains sentences with alpha numeric characters as well as special characters.

Below are the tables you'll need to construct the logic; we've sorted them in a manner that should make them easier to work with. They are also in the file `morse.tables.txt`.

## Alpha Characters

    Morse | Alpha
--------- | ------
 `-`      | T
 `--`     | M
 `---`    | O
 `--.`    | G
 `--.-`   | Q
 `--..`   | Z
 `-.`     | N
 `-.-`    | K
 `-.--`   | Y
 `-.-.`   | C
 `-..`    | D
 `-..-`   | X
 `-...`   | B
 `.`      | E
 `.-`     | A
 `.--`    | W
 `.---`   | J
 `.--.`   | P
 `.-.`    | R
 `.-..`   | L
 `..`     | I
 `..-`    | U
 `..-.`   | F
 `...`    | S
 `...-`   | V
 `....`   | H

## Numeric Characters

    Morse | Alpha
--------- | ------
 `-----`  | 0
 `----.`  | 9
 `---..`  | 8
 `--...`  | 7
 `-....`  | 6
 `.----`  | 1
 `..---`  | 2
 `...--`  | 3
 `....-`  | 4
 `.....`  | 5

## Other Characters

    Morse | Alpha
--------- | ------
 `---...` | :
 `--..--` | ,
 `-.--.-` | )
 `-.--.-` | (
 `-.-.--` | !
 `-.-.-.` | ;
 `-..-.`  | /
 `-...-`  | =
 `-....-` | -
 `.-.-.`  | +
 `.-.-.-` | .
 `.-..-.` | "
 `.-...`  | &
 `..--.-` | _
 `..--..` | ?
 `...-..-` | $
