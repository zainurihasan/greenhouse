<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
//Creating Array for JSON response
$response = array();
 
// // Include data base connect class
// $filepath = realpath (dirname(__FILE__));
// require_once($filepath."/db_connect.php");
//  // Connecting to database
// $db = new DB_CONNECT();
$koneksi = mysqli_connect('localhost', 'root', '', 'gh');
// Check if we got the field from the user
if (isset($_GET["id_no"])) {
    $id = $_GET['id_no'];
 
     // Fire SQL query to get weather data by id
    $result = mysqli_query($koneksi,"SELECT *FROM sensor WHERE id_no = '$id'");
	
	//If returned result is not empty
    if (!empty($result)) {
        // Check for succesfull execution of query and no results found
        if (mysqli_num_rows($result) > 0) {
			
			// Storing the returned array in response
            $result = mysqli_fetch_array($result);
			
			// temperoary user array
            $weather = array();
            $weather = array();
            $weather["id_no"] = $result["id_no"];
            $weather["sensor1"] = $result["sensor1"];
            $weather["sensor2"] = $result["sensor2"];
            $weather["sensor3"] = $result["sensor3"];
            $weather["sensor4"] = $result["sensor4"];
            $weather["sensor5"] = $result["sensor5"];
            $weather["sensor6"] = $result["sensor6"];
          
            $response["success"] = 1;
            $response["weather"] = array();
			
			// Push all the items 
            array_push($response["weather"], $weather);
 
            // Show JSON response
            echo json_encode($response);
        } else {
            // If no data is found
            $response["success"] = 0;
            $response["message"] = "No data on weather found";
 
            // Show JSON response
            echo json_encode($response);
        }
    } else {
        // If no data is found
        $response["success"] = 0;
        $response["message"] = "No data on weather found";
 
        // Show JSON response
        echo json_encode($response);
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    // echoing JSON response
    echo json_encode($response);
}
?>