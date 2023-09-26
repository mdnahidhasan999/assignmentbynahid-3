<?php
$text = "The quick brown fox jumps over the lazy dog";
function newText($text) {
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    
    return $text;

}
echo newText($text);

