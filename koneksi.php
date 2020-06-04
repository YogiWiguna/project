<?php 
$server = 'localhost';
$username = 'id13861416_project1';
$password  = ')lwXO-y6S4r{QHsB';
$dbname = 'id13861416_uasyogi1';

//koneksi
$conn = new mysqli ($server, $username, $password,$dbname);

//check koneksi
if ($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
$sql= "SELECT * FROM tmenu";
$result = $conn->query($sql);
$data=array();

if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        $data[]=$row;
    }
}
else{
    echo"data kosong";
}
echo json_encode($data);
$conn->close();
?>