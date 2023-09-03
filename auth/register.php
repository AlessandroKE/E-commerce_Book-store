<?php
require "../includes/header.php";
require "../config/config.php";


if (isset($_SESSION['user_id']) && $_SESSION['username']) {
    header("Location: " . APPURL . "");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    if (empty($username) || empty($password)) {
        echo "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        try {
            // Check if the username or email already exists
            $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username OR email = :email");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                echo "Username or email already exists. Please choose a different one.";
            } else {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insert the new user
                $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashedPassword);

                if ($stmt->execute()) {
                    header("Location: http://localhost/bookstore/auth/login.php");
                } else {
                    echo "Registration failed.";
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "Registration failed";
}
?>

?>
<script src="../Assets/validation.js"></script>
<!-- user fill in form -->
<div class="row justify-content-center">
    <div class="col-md-6">
        <form class="form-control mt-5" method='POST' action='register.php'>
            <h4 class="text-center mt-3"> Register </h4>
            <div class="">
                <label for="" class="col-sm-2 col-form-label">Username</label>
                <div class="">
                    <input name="username" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="">
                    <input name="email" type="email" class="form-control" id="" value="">
                </div>
            </div>

            <!-- <div class="">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="">
                            <input name="password" type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                -->
            <div class="">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="input-group">
                    <input name="password" type="password" class="form-control" id="inputPassword">
                    <div class="input-group-append">
                        <button type="button" id="showPasswordBtn" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('inputPassword')">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                    </div>
                </div>
            </div>


            <div class="">
                <label for="confirmPassword" class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" name="confirm_password" class="form-control" id="confirmPassword" value="">
                    <div class="input-group-append">
                        <button type="button" id="showConfirmPasswordBtn" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('confirmPassword')">
                            <i class="fas fa-eye" id="confirmPasswordIcon"></i>
                        </button>
                    </div>
                </div>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit" name="submit">register</button>

        </form>
    </div>
</div>

<?php require "../includes/footer.php"; ?>