<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_POST['dj'])&& isset($_POST['dm'])&& isset($_POST['jj'])&& isset($_POST['jm'])&& isset($_POST['minK'])) {
 
    $id = '1';
    $dj= $_POST['dj'];
    $dm= $_POST['dm'];
    $jj= $_POST['jj'];
    $jm= $_POST['jm'];
    $kel= $_POST['minK'];
 
    
 
    $koneksi = mysqli_connect('localhost', 'root', '', 'gh');
	// Fire SQL query to update weather data by id
    $result = mysqli_query( $koneksi,"UPDATE setting SET durasij= '$dj',durasim='$dm',jadwalj='$jj',jadwalm='$jm',minK='$kel' WHERE id = '$id'");
 
    // Check for succesfull execution of query and no results found
    if ($result) {
        header("Location: http://localhost:8080/ghs");
    } else {
 
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    // Show JSON response
    echo json_encode($response);
}
?>