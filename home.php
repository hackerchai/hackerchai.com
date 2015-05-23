<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://raw.github.com/hackerchai/hackerchai/master/home-classical.html');
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$data = curl_exec($curl);
if ($data === false) {
    echo 'Curl error: ' . curl_error($curl);
}
else {
    echo $data;
}
curl_close($curl);
?>
