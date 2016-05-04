<?php
/**
 * Created by PhpStorm.
 * User: 0206755
 * Date: 14/03/2016
 * Time: 09:57
 */

define ('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define ('DB_USERNAME', 'b9b4f1f2913587');
define ('DB_PASSWORD', '81a7c479');
define ('DB_DATABASE','acsm_3a7bd64b8322cf2');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>


