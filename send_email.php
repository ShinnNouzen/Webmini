<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set email recipient
    $to = "rizzzajakak@gmail.com"; // Ganti dengan email tujuan
    $subject = "Pesan dari $nama";

    // Create email content
    $body = "Nama: $nama\n";
    $body .= "Email: $email\n\n";
    $body .= "Pesan:\n$message";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Email berhasil dikirim!</p>";
    } else {
        echo "<p>Terjadi kesalahan, coba lagi nanti.</p>";
    }
} else {
    echo "<p>Form tidak valid.</p>";
}
?>
