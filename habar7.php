<?php

function average($numbers) {
    $count = count($numbers);
    if ($count === 0) {
        return 0; // Возвращаем 0, если массив пустой, чтобы избежать деления на ноль
    }

    $sum = array_sum($numbers); // Суммируем все элементы массива
    return $sum / $count; // Возвращаем среднее значение
}

// Пример использования функции
$numbers = [2, 4, 6, 8, 10];
echo "Среднее значение: " . average($numbers); // Выведет: Среднее значение: 6

