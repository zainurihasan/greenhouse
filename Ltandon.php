<?php
     // include 'load.php'
      $koneksi = mysqli_connect('localhost', 'root', '', 'gh');
      $qlsub=
      $result = mysqli_query($koneksi,"SELECT *,DATE_FORMAT(waktu, '%H:%i') AS waktu FROM monitortandon ORDER BY id desc limit 12 ") or die(mysql_error());
      
     
      if (mysqli_num_rows($result) > 0) {
          
        
          $sens1["waktu"] = '';
          $sens1["ppm"] = '';
          $sens1["suhu"] = '';
         
          
        
          while ($row = mysqli_fetch_array($result)) {
            
            
            $sens1["waktu"] .= ''.$row['waktu'].',';
            $sens1["ppm"] .= ''.$row['ppm'].',';
            $sens1["suhu"] .= ''.$row['suhu'].',';
           
            
          }
          
        }
         
      ?>    