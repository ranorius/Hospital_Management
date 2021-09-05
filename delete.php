<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Font Awwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="myStyle.css" rel="stylesheet">

    <title>Home Page</title>

  </head>
  <body>
    
<div class="social-box">
  <div class="container">



    <div class="row">
        
        <div class="text-center">
            <?php

            $id= $_GET['id'];
            //Deleting Database


            //Connecting Database
            $con=mysqli_connect('localhost','root','','hospital_management');
 
            //Passing DELETE query
            $sql = "DELETE FROM employee WHERE emp_Id='$id'";     

            //Executing the query
            $exec =mysqli_query($con,$sql);

            //Conditioning the Deleted post

            IF ($exec){

            ?>
                <div class="row">
                    <div class="col-12 bg-success test-white text-center">
                        <h1>Deleted Successful</h1><a href="index.php">Click here to go back to all post</a>
                    </div>
                </div>
            <?php
            }

            ELSE{
            ?>
                <div class="row">
                    <div class="col-12 bg-danger test-white text-center">
                        <h1>Error</h1><a href="index.php">Something wrong go back to all post</a>
                    </div>
                </div>
                <?php    
            }       

            ?>
        </div>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>