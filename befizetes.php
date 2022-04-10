<?php require_once './header.php'; 
 require_once './navbar.php';
 
  ?>
<?php
//echo $_SESSION['uname'];

   if(isset($_POST["osszeg"]) ){
       if($_POST["osszeg"] <= 0){
          echo '<script>alert("Az összegnek pozitívnak kell lennie!")</script>';;
       }else{
          
            $osszeg = filter_input(INPUT_POST, "osszeg", FILTER_SANITIZE_NUMBER_INT);
            $id = filter_input(INPUT_POST, "ID", FILTER_SANITIZE_NUMBER_INT);
            $tmpdatum = date(filter_input(INPUT_POST, 'datum', FILTER_SANITIZE_STRING));
            $datum = date_format(date_create($tmpdatum), "Y-m-d");
            // echo  $tmpdatum . " " . $datum ; 
            $sql3 = "INSERT INTO befizetes(id, datum, befizetes) VALUES(?,?,?);";
            $stmt2 = $conn -> prepare($sql3);
            $stmt2->bind_param("isi",$id, $datum, $osszeg);
            $stmt2 -> execute();
           
     echo' <script type="text/javascript">setDefault($id);</script>';
    echo' <script type="text/javascript"> showBefizetes();</script>';
        echo '<script>alert("Sikeres rögzítés!")</script>';
                }
    
   
} ?>


<div class="container listazo">
   
    <form method="POST" class="needs-validation" novalidate>

        <div>
            <script  type="text/javascript" >setDefault(1) </script>
           <script  type="text/javascript" > showBefizetes()</script>
       
            <label for="ID">Befizető neve: </label>
            <select name="ID" id="ID" onchange="showBefizetes()" >
            <?php
            $sql = "SELECT `id`, `csaladnev`,`utonev` FROM `tagok` WHERE 1;";
            $result = $conn ->query($sql);
            while($row = $result -> fetch_assoc()){
                echo '<option value ="' .$row["id"].'">'. $row["csaladnev"]. ' '.  $row["utonev"].'</option>';
            }
           
            ?>
              
            </select>
        </div>
        <div>
            <input type="date" class="form-control" id="start" name="datum" required value=<?php date("Y-m-d");?> min="2022-01-01">
      
        </div>
        <div>
            <input type = "number" class="form-control" name="osszeg" placeholder="Összeg" required>
            <div class="invalid-feedback">
     Töltse ki a mezőt!
    </div>
        </div>
        <div>
            <button class="btn btn-primary" type = "submit" >Befizetés </button>
        </div>
        
    </form>
    <div id="befizetes">
    </div> 
    
</div>

