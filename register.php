<?php
// register.php
$pageTitle = "Register";
require 'inc/header.inc.php';
require 'inc/db_connect.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = hash('sha512', $_POST['password']);

    $sql = "SELECT * FROM user WHERE email=:email";
    $stmt = $db->prepare($sql);
    $stmt->execute(["email" => $email]);

    if ($stmt->rowCount() == 1) {
        echo "<div class='container mt-3'><h4>There was a problem registering your account. Please try again.</h4></div>";
    } else {
        $sql = "INSERT INTO user (email,first_name,last_name,password) ";
        $sql .= "VALUES (:email,:first_name,:last_name,:password)";

        $stmt = $db->prepare($sql);
        $stmt->execute(["email" => $email, "first_name" => $first_name, "last_name" => $last_name, "password" => $password]);

        echo "<div class='container mt-3'><h4>You are now ready to go!</h4></div>";
    }
}
?>

<div class="container mt-3">
    <div class="row">
        <div class="col jumbotron p-3">
            <h1>Register</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="register.php" method="POST">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required>
                <br><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" required>
                <br><br>
                <label for="first_name">First Name</label><br>
                <input type="text" id="first_name" name="first_name" required>
                <br><br>
                <label for="last_name">Last Name</label><br>
                <input type="text" id="last_name" name="last_name" required>
                <br><br>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</div>

<?php require 'inc/footer.inc.php' ?>