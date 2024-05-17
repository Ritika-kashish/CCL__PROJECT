<?
$server = "localhost";
$fname = "root";
$password = "";
$database = "client";

$conn = mysqli_connect($server, $fname, $password, $database);
if (!$conn){
//  echo "Success";
//}
//else{
    die("Error". mysqli_connect_error());
}
?>
