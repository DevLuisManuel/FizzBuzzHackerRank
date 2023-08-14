<?php
function fizzBuzz($n): void
{
    for ($i = 1; $i <= $n; $i++) {
        echo match (true) {
            $i % 3 === 0 && $i % 5 === 0 => "FizzBuzz" . PHP_EOL,
            $i % 3 === 0 => "Fizz" . PHP_EOL,
            $i % 5 === 0 => "Buzz" . PHP_EOL,
            default => $i . PHP_EOL,
        };
    }
}

fizzBuzz(15);