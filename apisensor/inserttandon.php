<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_GET['ppm']) && isset($_GET['suhu'])) {
 
   
    $ppm = $_GET['ppm'];
    $suhu = $_GET['suhu'];
 
    $koneksi = mysqli_connect('localhost', 'root', '', 'gh');
    // Fire SQL query to insert data in weather
    $result = mysqli_query($koneksi,"INSERT INTO monitortandon(ppm,suhu) VALUES('$ppm','$suhu')");
 
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