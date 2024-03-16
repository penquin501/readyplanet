<?php

function countUniqueVowels($word) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $uniqueVowels = [];
    $count = 0;

    $word = strtolower($word);

    foreach ($vowels as $vowel) {
        if (substr_count($word, $vowel) === 1) {
            $uniqueVowels[] = $vowel;
            $count++;
        }
    }

    // Check if vowels are next to each other
    foreach ($uniqueVowels as $key => $vowel) {
        if (isset($uniqueVowels[$key + 1]) && abs(ord($uniqueVowels[$key]) - ord($uniqueVowels[$key + 1])) == 1) {
            return 0;
        }
    }

    return ($count == count($uniqueVowels) && count($uniqueVowels) > 0) ? $count : 0;
}

// Example usage
$word = "queen";
echo countUniqueVowels($word); // Output: 0

?>