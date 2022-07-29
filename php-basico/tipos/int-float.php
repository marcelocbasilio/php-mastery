<?php

// Inteiros (1, 2, 3, 4, 5, 6, 7, 8, 9, -1, -2, ...)
echo -2; echo "<br>"; echo 2; echo "<br>";

// Sistema Octal no PHP
echo 0777; // Representa o inteiro 511
echo "<br>";

// Sistema Hexadecimal
echo 0x1FF; // Representa o inteiro 511
echo "<br>";

// Float
echo 10.99; echo "<br>"; echo 0.90; echo "<br>";

echo gettype(10); echo "<br>"; echo gettype(10.90); echo "<br>";

echo PHP_INT_MIN; echo "<br>"; echo PHP_INT_MAX; echo "<br>"; echo PHP_INT_SIZE; echo "<br>";
echo PHP_FLOAT_MIN; echo "<br>"; echo PHP_FLOAT_MAX; echo "<br>"; echo PHP_FLOAT_DIG; echo "<br>"; echo PHP_FLOAT_EPSILON; echo "<br>";

echo 13.3e+2; // 1300.00
echo "<br>";
echo 13.3e-2; // 0.133

echo "<br><a href=\"./../..\">Voltar</a>";