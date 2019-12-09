<?php
 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$response = array();
 
$koneksi = mysqli_connect('localhost', 'root', '', 'gh');

if (isset($_GET["id"])) {
    $id = $_GET['id'];
 
    
    $result = mysqli_query($koneksi,"SELECT *FROM setting WHERE id = '$id'");
	
	
    if (!empty($result)) {
     
        if (mysqli_num_rows($result) > 0) {
			
		
            $result = mysqli_fetch_array($result);
			
			
            $jadwal = array();
            $jadwal["id"] = $result["id"];
            $jadwal["durasij"] = $result["durasij"];
            $jadwal["durasim"] = $result["durasim"];
            $jadwal["jadwalj"] = $result["jadwalj"];
            $jadwal["jadwalm"] = $result["jadwalm"];
            $jadwal["mink"] = $result["mink"];
          
            $response["success"] = 1;
            $response["jadwal"] = array();
			
	
            array_push($response["jadwal"], $jadwal);
 
          
            echo json_encode($response);
        } else {
          
            $response["success"] = 0;
            $response["message"] = "tidak ada jadawal";
 
           
            echo json_encode($response);
        }
    } else {
       
        $response["success"] = 0;
        $response["message"] = "tidak ada jadawal";
 
      
        echo json_encode($response);
    }
} else {
    
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
   
    echo json_encode($response);
}
?>