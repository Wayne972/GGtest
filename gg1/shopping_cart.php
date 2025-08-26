<?php
function calculateTotalCost($shoppingCart) {
    $total = 0.0;

    foreach ($shoppingCart as $item => $price) {
        $total += $price;
    }

   
    return $total;
}

$shoppingCart = [
    "Apple" => 1.20,
    "Banana" => 0.75,
    "Orange" => 0.90,
    "Grapes" => 2.50
];


$totalCost = calculateTotalCost($shoppingCart);
echo "Total cost: $" . number_format($totalCost, 2);
?>