<?php

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
if (!$pdo) {
    echo "Unable to connect to database";
    return;
}


$sql = "SELECT * FROM `leads`";
$stmt = $pdo->prepare($sql);
$stmt->execute([]);

$rows = $stmt->fetchAll();
?>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($rows as $row) {
        ?>
            <tr>
                <td>
                    <?php echo $row["name"];  ?>
                </td>
                <td>
                    <?php echo $row["email"];  ?>
                </td>
                <td>
                    <?php echo $row["mobile"];  ?>
                </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>