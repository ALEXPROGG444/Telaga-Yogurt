<?php
// Contoh skrip PHP untuk menangani penambahan produk
$product_name = $_POST['product-name'];
$product_price = $_POST['product-price'];
$product_flavor = $_POST['product-flavor'];
$product_image = $_POST['product-image'];

// Simpan produk ke dalam database atau file JSON (contoh ini menggunakan file JSON)
$products_file = 'products.json';
$products = json_decode(file_get_contents($products_file), true);
array_unshift($products, [
    'name' => $product_name,
    'price' => $product_price,
    'flavor' => $product_flavor,
    'image' => $product_image
]);
file_put_contents($products_file, json_encode($products));

// Redirect kembali ke halaman admin
header("Location: admin.html");
?>
