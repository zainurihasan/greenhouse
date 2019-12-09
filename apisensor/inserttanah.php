<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_GET['s1']) && isset($_GET['s2'])&& isset($_GET['s3'])&& isset($_GET['s4'])&& isset($_GET['s5'])&& isset($_GET['s6'])&&isset($_GET['ph1']) && isset($_GET['ph2'])&& isset($_GET['ph3'])&& isset($_GET['ph4'])&& isset($_GET['ph5'])&& isset($_GET['ph6'])) {
 
    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
    $s4 = $_GET['s4'];
    $s5 = $_GET['s5'];
    $s6 = $_GET['s6'];
    $ph1 = $_GET['ph1'];
    $ph2 = $_GET['ph2'];
    $ph3 = $_GET['ph3'];
    $ph4 = $_GET['ph4'];
    $ph5 = $_GET['ph5'];
    $ph6 = $_GET['ph6'];
 
    $koneksi = mysqli_connect('localhost', 'root', '', 'gh');
    // Fire SQL query to insert data in weather
    $result = mysqli_query($koneksi,"INSERT INTO sensor(sensor1,sensor2,sensor3,sensor4,sensor5,sensor6,ph1,ph2,ph3,ph4,ph5,ph6) VALUES('$s1','$s2','$s3','$s4','$s5','$s6','$ph1','$ph2','$ph3','$ph4','$ph5','$ph6')");
 
    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "berhasil";
 
        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "gagal";
 
        // Show JSON response
        echo json_encode($response);
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "tidak ada data/ lengkapi data dulu";
 
    // Show JSON response
    echo json_encode($response);
}
?>