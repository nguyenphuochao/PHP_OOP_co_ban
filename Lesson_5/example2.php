<?php
class CustomException extends Exception {}
class DivisionByZeroException extends CustomException {}
class InvalidNumberException extends CustomException {}

function performDivision($numerator, $denominator)
{
    if (!is_numeric($numerator) || !is_numeric($denominator)) {
        throw new InvalidNumberException("Lỗi : Tham số không phải là số.");
    }

    if ($denominator == 0) {
        throw new DivisionByZeroException("Lỗi : Không thể chia cho 0.");
    }

    return $numerator / $denominator;
}

echo '<pre>';

try {
    performDivision(10, 2);
    // performDivision(10, 0);
    performDivision(10, "a");
} catch (DivisionByZeroException $e) {
    echo "Bắt lỗi chia cho 0 : " . $e->getMessage() . "\n";
} catch (InvalidNumberException $e) {
    echo "Bắt lỗi không phải là số : " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "Bắt lỗi không xác định : " . $e->getMessage() . "\n";
} finally {
    echo "Kết thúc chương trình";
}
