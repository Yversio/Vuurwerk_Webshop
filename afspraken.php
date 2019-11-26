<style>
    table{
        font-family: "Comic Sans MS";
        background-color: white;
    }
    body{
        background-color: yellow;

    }
</style>

<?php

/*
 * Team naam: SkengGang
 * Klas: 1G
 * Opdracht: Afspraken
 */

// PDO connection voor database
$servername = "localhost";
$username = "skenggang";
$password = "1234";

// Dit maakt de database en zorgt ervoor dat die kan blijven hermaken.
$dropsql = "DROP DATABASE IF EXISTS overzicht;";
$createsql = "CREATE DATABASE overzicht;";


// Dit maakt de table in SQ
$tablesql = "CREATE TABLE `afspraken`(
  `product_backlog` VARCHAR(60),
  `sprint_backlog` VARCHAR(60),
  `to_do` VARCHAR(60),
  `busy` VARCHAR(60),
  `testen` VARCHAR(60),
  `done` VARCHAR(60)
)";

// Dit insert het in the table
$insert_table = (
"INSERT INTO `Afspraken` VALUES(NULL, 'Alles in afspraken(php)', 'Print table', 'Design in word bestand', NULL, 'Create Database');" .
"INSERT INTO `Afspraken` VALUES(NULL, NULL, 'Website design met CSS', 'Maken van HTML table voor database', NULL, 'Create Table');" .
"INSERT INTO `Afspraken` VALUES(NULL, NULL, 'Print table', 'Scrumboard in afspraken database', NULL, 'insert table');" .
"INSERT INTO `Afspraken` VALUES(NULL, NULL, NULL, 'Product testen', NULL, 'account testen');" .
"INSERT INTO `Afspraken` VALUES(NULL, NULL, NULL, NULL, NULL, 'connection testen');" .
"INSERT INTO `Afspraken` VALUES(NULL, NULL, NULL, NULL, NULL, 'account aanmaken in de database met de juiste rechten');"
);

$conn1 = new PDO("mysql:host=$servername; dbname=overzicht",$username, $password);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM `afspraken`";

$result = $conn1->prepare($sql);

function Connection($servername, $username, $password)
{
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully";
        echo "<br>";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}


function CreateDatabase($createsql, $dropsql, $conn){
try {
        $conn->exec($dropsql);
        $conn->exec($createsql);
        echo "Created the database";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
}

function CreateTable($conn1, $tablesql, $insert_table){

        $conn1->exec($tablesql);
        echo "Table created<br>";
        $conn1->exec($insert_table);
        echo "Injected perfectly<br><br>";
}

function TablePrint($result){
    echo "<table border='1' cellspacing='5' cellpadding='5' width='100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th style='background-color: purple;'>Product_backlog</th>";
    echo "<th style='background-color: purple;'>Sprint_backlog</th>";
    echo "<th style='background-color: magenta;'>to_do</th>" ;
    echo "<th style='background-color: orange;'>busy</th>";
    echo "<th style='background-color: orange;'>Testen</th>";
    echo "<th style='background-color: green;'>Done</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 0; $row = $result->fetch(); $i++) {
        echo "<tr>";
        echo "<td><label>" . $row['product_backlog'] . "</label></td>";
        echo "<td><label>" . $row['sprint_backlog'] . "</label></td>";
        echo "<td><label>" . $row['to_do'] . "</label></td>";
        echo "<td><label>" . $row['busy'] . "</label></td>";
        echo "<td><label>" . $row['testen'] . "</label></td>";
        echo "<td><label>" . $row['done'] . "</label></td>";
        echo "</tr>";
    }
    echo "</tbody>";

    echo "</table>";
}

// main
CreateDatabase($createsql, $dropsql, Connection($servername, $username, $password));
CreateTable($conn1, $tablesql, $insert_table);
$result->execute();
TablePrint($result);

?>

