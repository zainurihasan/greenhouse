<?php
     // include 'load.php'
      $koneksi = mysqli_connect('localhost', 'root', '', 'gh');
      $qlsub=
      $result = mysqli_query($koneksi,"SELECT *,DATE_FORMAT(waktu, '%y-%m-%d-%H:%i') AS waktu FROM sensor ORDER BY id_no desc limit 12 ") or die(mysql_error());
      
     
      if (mysqli_num_rows($result) > 0) {
          
        
          $sens["waktu"] = '';
          $sens["sensor1"] = '';
          $sens["sensor2"] = '';
          $sens["sensor3"] = '';
          $sens["sensor4"] = '';
          $sens["sensor5"] = '';
          $sens["sensor6"] = '';
          $sens["ph1"] = '';
          $sens["ph2"] = '';
          $sens["ph3"] = '';
          $sens["ph4"] = '';
          $sens["ph5"] = '';
          $sens["ph6"] = '';
          
        
          while ($row = mysqli_fetch_array($result)) {
            
            
            $sens["waktu"] .= ''.$row['waktu'].',';
            $sens["sensor1"] .= ''.$row['sensor1'].',';
            $sens["sensor2"] .= ''.$row['sensor2'].',';
            $sens["sensor3"] .= ''.$row['sensor3'].',';
            $sens["sensor4"] .= ''.$row['sensor4'].',';
            $sens["sensor5"] .= ''.$row['sensor5'].',';
            $sens["sensor6"] .= ''.$row['sensor6'].',';
            $sens["ph1"] .= ''.$row['ph1'].',';
            $sens["ph2"] .= ''.$row['ph2'].',';
            $sens["ph3"] .= ''.$row['ph3'].',';
            $sens["ph4"] .= ''.$row['ph4'].',';
            $sens["ph5"] .= ''.$row['ph5'].',';
            $sens["ph6"] .= ''.$row['ph6'].',';
            
          }
          
        }
         
      ?>    