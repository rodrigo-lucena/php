<?php

$email = $_POST["inputEmail"];

var_dump($_POST);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LemWTAaAAAAAHxVz2AEx_fGwAuJDGNvRzocH0Jx",
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recapthca = json_decode(curl_exec($ch),true);
curl_close($ch);
if ($recapthca["success"]===true) {
    echo "Ok".$_POST["inputEmail"];
}else {
    header("Location: recaption.php");
}

?>