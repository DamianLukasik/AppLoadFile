<?

    if(isset($_FILES['upload'])){

        $errors= array();
        $file_name = $_FILES['upload']['name'];
        $file_size =$_FILES['upload']['size'];
        $file_tmp =$_FILES['upload']['tmp_name'];
        $file_type=$_FILES['upload']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['upload']['name'])));

        $expensions= array("txt");

        if(in_array($file_ext,$expensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if($file_size > '2097152'){
            $errors[]='File size must be excately 2 MB';
        }
    }


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/przycisk.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div>Program dla pana Zbyszka - Kontrolka do ładowania plków</div><br><br>
        
        <form name="uploadForm" action="index.php" method="POST" enctype="multipart/form-data">         
            <div class="browse-wrap">
               <input class="title" value="Pobierz plik główny" />
               <input type="file" name="upload" class="upload" title="Wybierz plik do odczytania">
           <!--    <input type="submit" value="Odczytaj" name="submit" class="title" /> -->
            </div>
            <span class="upload-path"></span>                 
            <script>
                // Span
                var span = document.getElementsByClassName('upload-path');
                // Button
                var uploader = document.getElementsByName('upload');
                // On change
                for( item in uploader ) {
                    // Detect changes
                    uploader[item].onchange = function() {
                        // Echo filename in span
                        span[0].innerHTML = this.files[0].name;                           
                    }
                }    
            </script>                
            <!-- 
            <input type="file" name="file" value="" width="100" />            
            -->            
        </form>
           
     
    </body>
</html>
