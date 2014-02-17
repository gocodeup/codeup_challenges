<?php

require_once 'morsecodes.php';

$heap[0] = ' ';

foreach ($morseCodes as $morse) {
    $heapKey = bindec('1'.str_replace(['.', '-'], ['0', '1'], $morse['morse']));
    $heap[$heapKey - 1] = $morse['char'];
}

function getEnglish($line, &$strIndex, $treeIndex) {
    global $heap;

    switch ($line[$strIndex]) {
        case '.':
            return getEnglish($line, ++$strIndex, ($treeIndex * 2 + 1));
        case '-':
            return getEnglish($line, ++$strIndex, ($treeIndex * 2 + 2));
        case '/':
            ++$strIndex;
        default:
            return $heap[$treeIndex];
    }
}

if ($argc < 2) die ('Need a file with morse code to translate.');

$filename = $argv[1];

$lines = file($filename, FILE_IGNORE_NEW_LINES);

foreach ($lines as $line) {
    $str = '';

    for ($i=0; $i < strlen($line); $i++) {
        $str .= getEnglish($line, $i, 0);
    }

    echo "$str\n";
}
