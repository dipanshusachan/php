<?php
if(isset($_SERVER['REMOTE_ADDR'])){
     if( $_SERVER['REMOTE_ADDR']=="::1"){

        include 'conn.php';

        if(isset($_POST['done'])){
        
            $name = $_POST['name1'];
            $password = $_POST['password'];
            
            $q = "INSERT INTO `employee`(`name`, `password`) VALUES ('$name', '$password')";
            $query = mysqli_query($conn, $q);
        
        }
        
        ?>
        
        <?php
        // if(isset($_SERVER['HTTP_CLIENT_IP'])){
        // echo 'IP address of user: '. $_SERVER['HTTP_CLIENT_IP'];
        // echo getenv('HTTP_CLIENT_IP');
        // }
        ?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Document</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        </head>
        
        
        <body>
            
        
            <div class = "col-lg-3 m-auto"><br><br>
           
        
                <form method="post">
                            <br><br> 
                            <button  style="background-color:cyan; border: 2px; radius: 25px;">
                            <a href = "display.php" target="_blank" >Show All Data</a></button>
                          
                            <br><br>
                    <div class = "card">
                       
        
                        <div class = "card-header bg-dark">
                            <h1 class = "text-white text-center">Taiki-Sha</h1>
                    </div>
        
                    <label> Name : </label>
                    <input type="text" name = "name1"  class = "form-control" ><br>
        
                    <label> Password : </label>
                    <input type="text" name = "password"  class = "form-control"><br>
        
                    <button class = "btn btn-success" type = "submit" name="done"> Submit </button>
        
                    
        <br>
        
                    </div>
                   
                </form>
        
            </div>
        </body>
        </html>
        <?php
     }
     else{
         echo 'you are not allowed';
     }
    }
   ?>


