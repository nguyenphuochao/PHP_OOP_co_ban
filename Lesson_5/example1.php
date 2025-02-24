<?php
function divide($numerator, $denomonator)
{
    if ($denomonator == 0) {
        throw new Exception("Lỗi : Không thể chia cho 0"); // bắn vào catch
    }

    return $numerator / $denomonator;
}

echo '<pre>';

try {
    echo divide(10, 2) . PHP_EOL;
    echo divide(10, 0) . PHP_EOL;
} catch (Exception $e) {
    echo "Bắt lỗi : " . $e->getMessage(); // bắt lỗi ngoại lệ
}
