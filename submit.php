<?php
if (!isset($_POST)) {
    exit;
}
$name = isset($_POST["name"]) ? $_POST["name"] : null;
$email = $_POST["email"] ? $_POST["email"] : null;
$mobile = $_POST["mobile"] ? $_POST["mobile"] : null;
if (!$name) {
    echo "Name is required";
    return;
}
if(!$email){
    echo "Email is required";
}
if(!$mobile){
    echo "Contact is required";
}
else if(!$name && !$email && !$mobile ){
    echo "details are required";
}
/**
 * @return PDO|null
 * 
 */
function db_connect()
{

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=spiti_valley_form", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return null;
    }
}
$pdo = db_connect();
if(!$pdo){
   echo "Unable to connect to database";
   return;
}


$sql = "INSERT INTO leads (name, email, mobile) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $mobile]);

echo "Leads Submitted Successfully";

