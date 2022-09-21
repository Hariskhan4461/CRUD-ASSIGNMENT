<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile' ,'$password')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        //echo 'data inserted successfully';
        header('location:display.php');
    } else {
        die(mysqli_error($connection));
    }
}
?>

<!doctype html>
<html lang="en">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>Crud Operation</title>
    <style>
        body {
            background-color: #F8F8FF;
        }
    </style>


<div class="container my-5 mx-5">
    <form method="post">

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="password" name="password"
                   autocomplete="off">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

</html>