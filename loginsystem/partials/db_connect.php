<?
$server = "localhost";
$fname = "root";
$database = "records";

$conn = mysqli_connect($server, $fname, $database);
if (!$conn){
//  echo "Success";
//}
//else{
    die("Error". mysqli_connect_error());
}
?>
