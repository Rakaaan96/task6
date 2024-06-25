<?php
function findPrimeNumbersInRange($start, $end) {
    $primeNumbers = [];

    for ($number = $start; $number <= $end; $number++) {
        if (isPrime($number)) {
            $primeNumbers[] = $number;
        }
    }

    return $primeNumbers;
}

function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
$start = 1;
$end = 100;
$primeNumbers = findPrimeNumbersInRange($start, $end);

echo "Prime numbers between $start and $end:\n";
echo implode(', ', $primeNumbers);