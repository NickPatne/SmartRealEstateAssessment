<?php


// require_once 'vendor/autoload.php';

$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=smartEstimate";
$cred = "user=postgres password=Nickpatne";
$db = pg_connect("$host $port $dbname $cred");

// Open the file for reading
if (($h = fopen("C:\Users\Nick\PycharmProjects\RealEstateAssessment\DNN_prediction.csv", "r")) !== FALSE) {
    
    $i = 0;
    // Convert each line into the local $data variable
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {

        if ($data[0]!='0') {

            ++$i;

            if (pg_query($db, "UPDATE properties SET price=$data[0] WHERE id=$i")) {
                //echo(nl2br("\nValue : ".$data[0]." has been inserted\n"));
                echo(nl2br("\nPrice of a property ".$i." has been updated to ".$data[0]."\n"));
                // header('location:admin_dashboard.php');
               

            }else {

                echo 'Updation Failed';
            }
        } 
    }
    // Close the file
    fclose($h);
}