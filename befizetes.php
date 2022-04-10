<?php require_once './header.php'; 
 require_once './navbar.php';
 session_start() ;
  ?>
<?php
//echo isset($_SESSION["id"]) . "\n";
//echo $_SESSION["id"]. "\n";
//echo isset($_SESSION["id"])?$_SESSION["id"]:1;

   if(isset($_POST["osszeg"]) ){
       if($_POST["osszeg"] <= 0){
          echo '<script>alert("Az összegnek pozitívnak kell lennie!")</script>';;
       }else{
          echo '<script>alert("Sikeres rögzítés!")</script>';
            $osszeg = filter_input(INPUT_POST, "osszeg", FILTER_SANITIZE_NUMBER_INT);
            $id = filter_input(INPUT_POST, "ID", FILTER_SANITIZE_NUMBER_INT);
            $_SESSION["id"] = $id;
            $tmpdatum = date(filter_input(INPUT_POST, 'datum', FILTER_SANITIZE_STRING));
            $datum = date_format(date_create($tmpdatum), "Y-m-d");
             
            // echo  $tmpdatum . " " . $datum ; 
            $sql3 = "INSERT INTO befizetes(id, datum, befizetes) VALUES(?,?,?);";
            $stmt2 = $conn -> prepare($sql3);
            $stmt2->bind_param("isi",$id, $datum, $osszeg);
            $stmt2 -> execute();
           echo '<script>setDefault('. $id.');</script>';
           '<script>showBefizetes();</script>';
      //  header("Location: ./befizetes.php");
        }
    
   
}
?>


<div class="container listazo">
   
    <form method="POST" class="needs-validation" novalidate>

        <div>
          
       
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
<script>var y = document.getElementById("befizet");
    y.classList.add("active");
 </script>
   <script > 
       var mySelect = document.getElementById('ID');
             var id =   <?php echo isset($_SESSION["id"])?$_SESSION["id"]:1; ?>;
             console.log(id);
            for(var i, j = 0; i = mySelect.options[j]; j++) {
            if(i.value == id) {
                mySelect.selectedIndex = j;
                console.log(j)
                //break;
            }
        }   
            }</script>
           <script> var x = document.getElementById("ID").value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload=function(){
        document.getElementById("befizetes").innerHTML = this.responseText;
        };
        xhttp.open("GET", "egyenibefizetesek.php?id="+x);
        xhttp.send();</script>

 <?php require_once './footer.php'; 