<?php

$connection = mysqli_connect('localhost', 'root', '', 'career_db');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM career_form where name = '$name' and email = '$email'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            echo '<center>
            <h1>YOUR DETAILS</h1><br>
            <table border="2" cellspacing="3" cellpadding="2">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Location</th>
            <th>Gender</th>
            <th>Date</th>
            </tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                '<tr>
            <td>' . $row['name'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['mobile'] . '</td>
            <td>' . $row['location'] . '</td>
            <td>' . $row['gender'] . '</td>
            <td>' . $row['date'] . '</td>
            </tr>';
            }
            echo '</table>';
            echo '</center>';
        } else {
            echo 'No details found for you ';
        }
    }
} else {
    echo 'something went wrong please try again!';
} ?>
<link rel="stylesheet" href="css/style4.css">
<center>
    <h1><a href="index.php" style="font-family: 'Syncopate', sans-serif;
    color: black;
    text-transform: uppercase;
    text-align: center;">Home Page</a></h1>
</center>