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
 // Fire SQL query to get all data from sens
$result = mysqli_query($koneksi,"SELECT *FROM sensor") or die(mysql_error());
 
// Check for succesfull execution of query and no results found
if (mysqli_num_rows($result) > 0) {
    
	// Storing the returned array in response
    $response["sensor"] = array();
 
	// While loop to store all the returned response in variable
    while ($row = mysqli_fetch_array($result)) {
        // temperoary user array
        $sens = array();
        $sens["id_no"] = $row["id_no"];
        $sens["sensor1"] = $row["sensor1"];
        $sens["sensor2"] = $row["sensor2"];
        $sens["sensor3"] = $row["sensor3"];
        $sens["sensor4"] = $row["sensor4"];
        $sens["sensor5"] = $row["sensor5"];
        $sens["sensor6"] = $row["sensor6"];
        $sens["ph1"] = $row["ph1"];
        $sens["ph2"] = $row["ph2"];
        $sens["ph3"] = $row["ph3"];
        $sens["ph4"] = $row["ph4"];
        $sens["ph5"] = $row["ph5"];
		$sens["ph6"] = $row["ph6"];
		// Push all the items 
        array_push($response["sensor"], $sens);
    }
    // On success
    $response["success"] = 1;
 
    // Show JSON response
    echo json_encode($response);
//     $ho=json_encode($response);
//    //$ho=json_decode($ho);
//     foreach($ho->sensor as $tes){
// echo $tes->sensor1;
//     }
    
}	
else 
{
    // If no data is found
	$response["success"] = 0;
    $response["message"] = "No data on sens found";
 
    // Show JSON response
    echo json_encode($response);
}
?>