<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php

/**
 * Add forgot password
 * CAPTCHA or Rate Limiting:
 */



session_start();

if (isset($_SESSION['id']) && $_SESSION['username']) {
    header("Location: http://localhost/bookstore/index.php");
}else{
    header("http://localhost/bookstore/auth/login.php");
}

?>

<?php 
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    /* $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); */
    /**
     * 
     */
    $email = filter_var($_POST['email']);
    $password = filter_var($_POST['password']);

    if ($email != "" && $password != "") {
        try {

            $sql = "SELECT * from users WHERE email = :email";
            $query = $conn->prepare($sql);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();
            $count = $query->rowCount();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            

            if ($query->rowCount() > 0) {
                if(password_verify($password, $row['password'])){
          
                  $_SESSION['username'] = $row['username'];
                  $_SESSION['user_id'] = $row['id'];
          
                    if ($row['userType'] == 'admin'){
                        header('Location:http://localhost/bookstore/auth/register.php');
                    }else{
                 // echo "Logged in sucessfully";
                 header("Location: http://localhost/bookstore/index.php");
                    }

                }else{
                    echo "wrong username or password"; 
                }
            }
            
            else{
                echo "user not found";
            }
          

        }catch(PDOException $e){

            echo "Error : " . $e->getMessage();

        }

}else{
    $msg = "Both fields are required!";
}

}



?>


<script src="../Assets/validation.js"></script>
<div class="row justify-content-center">
    <div class="col-md-6">
        <form class="form-control mt-5" method='POST' action='login.php'>
            <h4 class="text-center mt-3"> Login </h4>

            <div class="">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="">
                    <input name="email" type="email" class="form-control" id="" value="">
                </div>
            </div>

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

            <button class="w-100 btn btn-lg btn-primary mt-4" name="submit" type="submit">login</button>

        </form>
    </div>
</div>

<!--  kcb388Gibbs# -->


<?php require "../includes/footer.php"; ?>