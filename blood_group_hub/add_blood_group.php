    <?php

    $insert = false;

    if (isset($_POST['name'])) {



        // databse variables
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "trip";

        // Create database connection
        $con = mysqli_connect($servername, $username, $password, $database);

        // die of connection not successful
        if (!$con) {
            die("Sorry connection failed" . mysqli_connect_error());
        } else {
            // echo "Connection Successful" . "<br>";
        }


        $name = $_POST['name'];
        $blood = $_POST['blood'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];



        $sql = "INSERT INTO `bloodhubb` (`sl`, `name`, `blood`, `phone`, `address`) VALUES (NULL, '$name', '$blood', '$phone', '$address');";

        $result = $con->query($sql);

        if ($result == true) {
            // echo "data inserted successfully";
            $insert = true;
        }else{echo "Please enter valid data";}
    }

    ?>


    <?php  // data adding UI
    ?>

    <!doctype html>
    <html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

        <title>Blood Group Hub</title>
    </head>

    <body style="background-image: url('cyberbangla.jpg'); background-repeat: no-repeat; background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 60% 90%; background-position: center bottom; background-blend-mode: darken;">




        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Blood Group Hub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="container my-5">
            <h2>Please enter your information</h2>

            <form action="add_blood_group.php" method="POST">


                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                </div>

                <div class="mb-3">
                    <label for="blood" class="form-label">Blood Group</label>
                    <input type="text" name="blood" class="form-control" id="blood" placeholder="Enter your blood group">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your Phone No.">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="name" placeholder="Enter your Present District">
                </div>

                <?php

                // if ($_SERVER['REQUEST_METHOD']=='POST'){
                //     $email = $_POST['email'];
                //     $password = $_POST['password'];

                //     echo " <div class='alert alert-success' role='alert'>
                //     Thanks for submitting
                //     </div> " ;

                // if($ins == True){
                //     echo " <div class='alert alert-success' role='alert'>
                //           Thanks for submitting
                //       </div> " ;
                //  }


                ?>

                <?php
                if ($insert == True) {
                    echo " <div class='alert alert-success' role='alert'>
                                    Thanks for submitting
                                </div> ";
                }
                ?>



                <button type="submit" class="btn btn-dark">Update</button>


            </form>

        </div>





        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        -->
    </body>

    </html>