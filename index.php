<?php
$headers = apache_request_headers();

echo "\$headers['X-Ms-Client-Principal-Name'] : ", $headers['X-Ms-Client-Principal-Name'], '<br>';
echo "\$headers['X-MS-CLIENT-PRINCIPAL-NAME'] : ", $headers['X-MS-CLIENT-PRINCIPAL-NAME'], '<br>';
echo "\$headers['X-MS-CLIENT-PRINCIPAL-ID'] : ", $headers['X-MS-CLIENT-PRINCIPAL-ID'], '<br>';
echo "\$headers['X-MS-CLIENT-PRINCIPAL-IDP'] : ", $headers['X-MS-CLIENT-PRINCIPAL-IDP'], '<br>';

echo "\$headers['X-MS-TOKEN-AAD-ID-TOKEN'] : ", substr($headers['X-MS-TOKEN-AAD-ID-TOKEN'], 0, 10), '******************** <br>';
echo "\$headers['X-MS-TOKEN-AAD-ACCESS-TOKEN'] : ", substr($headers['X-MS-TOKEN-AAD-ACCESS-TOKEN'], 0, 10), '******************** <br>';
echo "\$headers['X-MS-TOKEN-AAD-REFRESH-TOKEN'] : ", substr($headers['X-MS-TOKEN-AAD-REFRESH-TOKEN'], 0, 10), '******************** <br>';
echo "\$headers['X-MS-TOKEN-AAD-EXPIRES-ON'] : ", $headers['X-MS-TOKEN-AAD-EXPIRES-ON'], '<br>';

echo "\$_SERVER['REMOTE_USER'] : ", $_SERVER['REMOTE_USER'], '<br>'; // 取得できない
echo "\$_SERVER['PHP_AUTH_USER'] : ", $_SERVER['PHP_AUTH_USER'], '<br>'; // 取得できない

$current_user = get_current_user();
echo "\$current_user : ", $current_user, '<br>'; // nobody になる

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
?>
