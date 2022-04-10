<?php 
 require_once './response.php'; 
  ?>

<div class="container-fluid" style="width:50%;">
<div class="row">
    
        <?php
       for($i = 0;$i < count($djson);$i++){
           echo '<div class="col-lg-4 col-sm-12 col-md-6">';
           echo '<div class="card">';
           echo '<div class="card-body">';
           $neme = $djson[$i]['nem'] =="ffi" ? "imgffi" : "imgNo";
           $file = "./images/" . $djson[$i]["csaladnev"]. " ". $djson[$i]["utonev"] . ".jpg";
           $alt_file ="./images/" . $neme . ".png";
           //echo $file;
           //echo $alt_file;
       //    echo '<p> Neme: ' . $neme . '</p>';
      
            if(file_exists($file)){
                 echo "<p><img src='".$file."'  /></p>";
            }else if($alt_file){
                 // the alternative file too might not exist not exist
                 echo "<p><img src='".$alt_file."' /></p>";
            }else{
              echo "smily face";
            }
        // echo  '<p> <img src="./images/' . $djson[$i]["csaladnev"]. ' '. $djson[$i]["utonev"] . '.jpg" srcset="./images/' .$neme . '.png"  alt="Nincs kép"  style="width:100px;"></p>';
	echo '<p class="card-title"> <b>' . $djson[$i]["csaladnev"]. ' ' . $djson[$i]["utonev"]. '</b></p>';
         //date in mm/dd/yyyy format; or it can be in other formats as well
        $birthDate = $djson[$i]['szuletett'];
        //explode the date to get month, day and year
        $birthDate = explode("-", $birthDate);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
          ? ((date("Y") - $birthDate[0]) - 1)
          : (date("Y") - $birthDate[0]));
        echo  "<p class='card-text'>" . "Kora: " . $age.  "</p>";

      // echo "<p>" . $djson[$i]['szuletett'].  "</p>";

       echo "<p class='card-text'> Belépett: " . $djson[$i]['belepett']. "</p>";
       echo '<a href="#" class="btn btn-primary">Befizetések</a>';

       echo " </div></div></div>";}
        ?>
        </div>
    </div>

<script>var y = document.getElementById("tagok");
    y.classList.add("active");
 </script>
