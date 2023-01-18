<?php
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

$sql = "SELECT * FROM `bloodhubb`";

$result = $con->query($sql);

$row_number = mysqli_num_rows($result);
if ($row_number > 0) {
    // $row = mysqli_fetch_assoc($result);
    // echo $row['name'] . " " . $row['blood'] . " " . $row['phone'] . " " . $row['address'];
    // echo "<br>";

    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo $row['name'] . " " . $row['blood'] . " " . $row['phone'] . " " . $row['address'];
    //     echo "<br>";


    //     $c1 = $row['name'];
    //     $c2 = $row['blood'];
    //     $c3 = $row['phone'];
    //     $c4 = $row['address'];
    // }
}


// INSERT INTO `bloodhubb` (`sl`, `name`, `blood`, `phone`, `address`) VALUES (NULL, 'sadu', 'O+', '01745270410', 'Dhaka bd to .');
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





    <!-- // table:  -->


 

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Sl No.</th>
                <th scope="col">Name</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo $row['name'] . " " . $row['blood'] . " " . $row['phone'] . " " . $row['address'];
                    // echo "<br>";
            
                
                ?>
            <tr>
                <th scope="row"><?php echo $row['sl']; ?>  </th>
               
                
                    
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <b><?php echo $row['blood']; ?></b> </td>
                    <td><b>  <?php echo $row['phone'] ;?> </b> </td>
                    <td> <?php echo $row['address']; ?> </td>


            </tr>
            <?php
                    
                    }
                ?>

            <!-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
            </tr>

            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
            </tr> -->

        </tbody>
    </table>














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