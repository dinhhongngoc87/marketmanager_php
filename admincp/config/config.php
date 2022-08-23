<?php
define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','hocphp2');
$mysqli = new mysqli("localhost","root","","hocphp2");
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 function execute($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //insert, update, delete
    mysqli_query($conn,$sql);

    //close connection
    mysqli_close($conn);
 }

 function executueResult ($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $result = mysqli_query($conn,$sql);
    $data = [];
    while($row = mysqli_fetch_array($result,1)){
        $data[] = $row;
    }
    mysqli_close($conn);
    return $data;
 }

 function executeSingleResult($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,1);
    mysqli_close($conn);
    return $row;
 }
?>
