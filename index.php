<?php
/**
 * Created by PhpStorm.
 * User: mtruty
 * Date: 8/19/14
 * Time: 3:46 PM
 */

echo "Hello World - PHP";




  $connectionInfo = array("UID" => "mtruty@xy70sqt4b9", "pwd" => "JMJpray4MDT$$", "Database" => "phpapp", "LoginTimeout" => 30, "Encrypt" => 1);
  $serverName = "tcp:xy70sqt4b9.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);



if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
