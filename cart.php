<?php
// Terima data dari request
$data = json_decode(file_get_contents('php://input'), true);

// Detail pesanan
$orderDetails = "Detail Pesanan:\n";
foreach ($data['items'] as $item) {
    $orderDetails .= $item['name'] . " - " . $item['quantity'] . " pcs - Rp " . number_format($item['price'], 0, ',', '.') . "\n";
}
$orderDetails .= "Total: Rp " . number_format($data['total'], 0, ',', '.') . "\n";

// Nomor WhatsApp penerima
$recipientNumber = "62895341009049"; // Ganti dengan nomor WhatsApp kamu

// URL untuk mengirim pesan WhatsApp
$whatsappUrl = "https://api.whatsapp.com/send?phone=$recipientNumber&text=" . urlencode($orderDetails);

// Redirect ke URL WhatsApp
echo "Silakan klik tautan berikut untuk menyelesaikan pesanan Anda:\n";
echo "<a href='$whatsappUrl' target='_blank'>Kirim Detail Pesanan ke WhatsApp</a>";
?>
