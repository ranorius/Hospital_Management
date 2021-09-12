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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
    <title>Hospital Management Website</title>
  </head>
  <body>


    <div class="container">

        <div class="col-12">

            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="employee.php">Employee</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

    </div>


        <div class="row">


            <div class="col-12 p-3 bg-white text-center text-dark fw-bold">Employee Form</div>


            <div class="row p-3"></div>


            <form method="post">

                <!-- Employee Name section -->
                <div class="form-group">
                    <label>Employee Name</label>
                    <input type="text" name="employeeName" class="form-control" required>
                </div>

                <div class="row p-3"></div>


                <!-- Employee Address section -->
                <div class="form-group">
                    <label>Employee Address</label>
                    <textarea rows="5" class="form-control" name="employeeAddress" required ></textarea>
                </div>


                <div class="row p-3"></div>

                <!-- Employee Address section -->
                <div class="form-group">
                    <label>Employee Telephone</label>
                    <input type="number" class="form-control" name="employeeTelephone" required ></input>
                </div>


                <div class="row p-3"></div>



                <!-- buttttonnnn section -->
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-outline-success">               
                        Create
                    </button>
                </div>

            </form>


        </div>
    </div>




    <!-- J-Query CD -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    <!-- query Alert popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

    if(isset($_POST['submit'])){


    //GET DATA FROM END USING post METHOD

        $employeeName = $_POST['employeeName'];
        $employeeAddress = $_POST['employeeAddress'];
        $employeeTelephone =$_POST['employeeTelephone'];

        //connect database
                            
        $con = mysqli_connect('localhost','root','','hospital_management');//servername, username, password, databasename
        
        
        //Insert query
        $sql="INSERT INTO employee(emp_Name,emp_Address,emp_Telephone) VALUES ('$employeeName','$employeeAddress','$employeeTelephone')";

        //Execute the Query
        $exec = mysqli_query($con,$sql);

        //Validation and Display msg
        if($exec){
        ?>
        <script>
            $.alert
            ({  
                type : 'green',
                icon : 'fa fa-check',
                changeIcon : true,
                title: 'Success!',
                content: 'Insert Successful..!',
            });
        </script>

        <?php
        }

        else{
            ?>
            <script>
            ({  
                type  : 'red',
                icon : 'fa fa-warning',
                changeIcon :'true',
                title: 'Error!',
                content: 'Something went wrong..!',
            });
            </script>
            <?php
        }


    }

    



?>