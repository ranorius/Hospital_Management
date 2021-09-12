<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Font Awwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="myStyle.css" rel="stylesheet">
    <!-- J-Query CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <title>Home Page</title>

  </head>
  <body>

<div class="social-box">
  <div class="container">

  <!-- Navigaion bar -->
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

    <!-- Posts -->
	<div class="row">

        <?php
            //connect data base
            $con = mysqli_connect('localhost','root','','hospital_management');//servername, username, password, databasename

            // SELECT query passing
            $sql= "SELECT * from employee ORDER BY emp_Id DESC";

            //Executing my query
            $exec=mysqli_query($con,$sql);

            //Fetching the data from executed query using WHILE loop

            while ($row=mysqli_fetch_array($exec)){
                // Closing tag here inorder to loop the card
                ?>

                <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">

                        <!-- Delete Button -->
                        <div class="col-12 text-right">
                            <button class="btn btn-danger " onclick="deleteThis(<?php echo $row['emp_Id']; ?>)">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>

                            <a class="btn btn-secondary " href="update.php">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                        </div>


                        <div class="p-2"></div> <!-- Space -->

                        <i class="fa-3x" aria-hidden="true"></i>

						<div class="box-title">
							<h3><?php echo $row['emp_Name'] ?></h3>
						</div>

						<div class="box-text">
							<span><?php echo $row['emp_Address'] ?></span>
						</div>

                        <div class="box-text">
							<span><?php echo $row['emp_Telephone'] ?></span>
						</div>

					 </div>
				</div>

                <?php
            }   //we started php above inorder to restart the programing language

        ?>

	</div>
</div>



    <!-- J-query Library load -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; jquery-confirm -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


  </body>
</html>



<script>
    function deleteThis(empid){
        $.confirm({
            title: 'Confirm!',
            type : 'red',
            icon : 'fa fa-trash',
            changeIcon : true,
            title: 'Success!',
            content: 'Do You want to delete this?',
            buttons: {
                conform: {
                    text: 'Confirm',
                    btnClass: 'btn-red',
                    action: function(){
                        window.location.href="delete.php?id="+empid;
                    }
                },
                cancel: function () {
                },
            }
        });
    }
</script>
