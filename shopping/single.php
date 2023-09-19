<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$isLoggedIn = isset($_SESSION['user_id']);

if (isset($_POST['submit'])) {
   $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_image = $_POST['pro_image'];
    $pro_price = $_POST['pro_price'];
    $pro_amount = $_POST['pro_amount'];
    $pro_file = $_POST['pro_file'];
    $user_id = $_POST['user_id'];

    $sql = "INSERT INTO cart (pro_id,pro_name,pro_image,pro_price,pro_amount,pro_file,user_id)
        VALUES(:pro_id,:pro_name,:pro_image,:pro_price,:pro_amount,:pro_file,:user_id)";

    $insert = $conn->prepare($sql);
    $insert->execute([
        'pro_id' => $pro_id,
        'pro_name' => $pro_name,
        'pro_image' => $pro_image,
        'pro_price' => $pro_price,
        'pro_amount' => $pro_amount,
        'pro_file' => $pro_file,
        'user_id' => $user_id,
    ]);

    /* if ($insert->rowCount() > 0) {
        echo "Success";
        exit;  // Exit after sending response
    } else {
        echo "Failed to add to cart.";
        exit;  // Exit after sending response
    } */
}

if (isset($_GET['prod_id'])) {
    $id = $_GET['prod_id'];

    $sql = "SELECT * FROM products WHERE id = :id"; // Updated SQL query using parameter binding

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id); // Bind the ID parameter
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_OBJ); // Assign the fetched post object to the $post variable
} else {
    header("Location:http://localhost/bookstore/404.php");
}

?>

<div class="row d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <div class="images p-3">
                        <div class="text-center p-4"> <img id="main-image" src="../images/<?php echo $row->image; ?>" width="250" /> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center"> <a href="http://localhost/bookstore/index.php" class="ml-1 btn btn-primary"><i class="fa fa-long-arrow-left"></i> Back</a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                        </div>
                        <div class="mt-4 mb-3">
                            <h5 class="text-uppercase"><?php echo $row->name; ?></h5>
                            <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $row->price . " ksh"; ?></span>
                            </div>
                        </div>
                        <p class="about"><?php echo $row->description; ?></p>

                        <!-- Processing Form using AJAX -->
                        <form method="POST" id="form-data">

                            <div class="">
                                <input name="pro_id" type="text" class="form-control" value="<?php echo $row->id; ?>">
                            </div>

                            <div class="">
                                <input name="pro_name" type="text" class="form-control" value="<?php echo $row->name; ?>">
                            </div>

                            <div class="">
                                <input name="pro_image" type="text" class="form-control" value="<?php echo $row->image; ?>">
                            </div>

                            <div class="">
                                <input name="pro_price" type="text" class="form-control" value="<?php echo $row->price; ?>">
                            </div>

                            <div class="">
                                <input name="pro_amount" type="text" class="form-control" value="1">
                            </div>

                            <div class="">
                                <input name="pro_file" type="text" class="form-control" value="<?php echo $row->file; ?>">
                            </div>

                            <div class="">
                                <input name="user_id" type="text" class="form-control" value="<?php echo $_SESSION['user_id'] ?>">
                            </div>

                            <div class="cart mt-4 align-items-center">
                                <?php if ($isLoggedIn) :
                                ?>
                                    <button name="submit" type="submit" class="btn btn-primary text-uppercase mr-2 px-4"><i class="fas fa-shopping-cart"></i> Add to cart</button>
                                <?php else :
                                ?>
                                    <button type="button" class="btn btn-secondary text-uppercase mr-2 px-4" disabled><i class="fas fa-shopping-cart"></i> Log in to add to cart</button>
                                <?php endif;
                                ?>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "../includes/footer.php"; ?>

<script>
$(document).ready(function() {
    $("#form-data").submit(function(e) {
        e.preventDefault();

        <?php if (!$isLoggedIn): ?>
            alert('Please log in to add items to the cart.');
            return; 
        <?php endif; ?>

        var formdata = $(this).serialize() + '&submit=submit';

        $.ajax({
            type: "POST",
            url: "single.php?id=<?php echo $id ?>",
            data: formdata,
            success: function(response) {
                if(response === "Success") {
                    alert("Added to cart successfully");
                } else {
                    alert(response); // This will alert "Failed to add to cart."
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
                alert("Error: " + textStatus + "\n" + errorThrown);
            }
        });
    });
});
</script>
