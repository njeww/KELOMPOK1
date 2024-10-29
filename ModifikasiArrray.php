<?php
// Array of products with names, quantities, and prices
$products = [
    ["name" => "Baju Bayi", "quantity" => 7, "price" => 50000],
    ["name" => "Diapers", "quantity" => 20, "price" => 15000],
    ["name" => "Bedak", "quantity" => 11, "price" => 20000],
    ["name" => "Minyak Telon", "quantity" => 17, "price" => 30000],
    ["name" => "Baby Oil", "quantity" => 7, "price" => 25000]
];

$total = 0;
$discount = 0.1; // 10% discount

echo "<table border='1'>";
echo "<tr><th>Product</th><th>Quantity</th><th>Unit Price</th><th>Subtotal</th></tr>";

foreach ($products as $product) {
    $subtotal = $product["quantity"] * $product["price"];
    $total += $subtotal;
    echo "<tr>
            <td>{$product['name']}</td>
            <td>{$product['quantity']}</td>
            <td>Rp " . number_format($product['price'], 0, ',', '.') . "</td>
            <td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>
          </tr>";
}

$discountAmount = $total * $discount;
$totalAfterDiscount = $total - $discountAmount;

echo "<tr><td colspan='3'>Total</td><td>Rp " . number_format($total, 0, ',', '.') . "</td></tr>";
echo "<tr><td colspan='3'>Discount (10%)</td><td>Rp " . number_format($discountAmount, 0, ',', '.') . "</td></tr>";
echo "<tr><td colspan='3'>Total After Discount</td><td>Rp " . number_format($totalAfterDiscount, 0, ',', '.') . "</td></tr>";
echo "</table>";
?>