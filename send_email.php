<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $to = "echojelan5@gmail.com"; // Ganti dengan email Anda
    $subject = "New Contact Form Submission";
    $headers = "From: ".$email."\r\n" .
               "Reply-To: ".$email."\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan";

    if(mail($to, $subject, $body, $headers)){
        echo "Email berhasil dikirim.";
    } else {
        echo "Gagal mengirim email. Silakan coba lagi.";
    }
} else {
    echo "Metode pengiriman tidak didukung.";
}
?>
