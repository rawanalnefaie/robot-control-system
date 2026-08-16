<?php
// بيانات الاتصال بقاعدة البيانات - غيّرها ببياناتك من InfinityFree
$host = "sql202.infinityfree.com";      // اسم السيرفر (Hostname)
$user = "if0_42666332";                // اسم المستخدم
$pass = "fCaDDpONVFq4";           // كلمة المرور
$dbname = "if0_42666332_control_db";   // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
