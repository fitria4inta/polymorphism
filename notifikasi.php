<?php

// Interface
interface Notifikasi {
    public function kirim();
}

// Class Email
class Email implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui Email";
    }
}

// Class SMS
class SMS implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS";
    }
}

// Class WhatsApp
class WhatsApp implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp";
    }
}


// Membuat object
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

// Memanggil method
$email->kirim();
echo "<br>";

$sms->kirim();
echo "<br>";

$wa->kirim();

?>