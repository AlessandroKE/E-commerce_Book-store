<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php

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
                                <input name="pro_id" type="text" class="form-control" value = "<?php echo $row->id; ?>">
                            </div>

                            <div class="">
                                <input name="pro_name" type="text" class="form-control" value = "<?php echo $row->name; ?>" >
                            </div>

                            <div class="">
                                <input name="pro_image" type="text" class="form-control"value = "<?php echo $row->image; ?>" >
                            </div>

                            <div class="">
                                <input name="pro_price" type="text" class="form-control" value = "<?php echo $row->price; ?>">
                            </div>

                            <div class="">
                                <input name="pro_amount" type="text" class="form-control" value = "1" >
                            </div>

                            <div class="">
                                <input name="pro_file" type="text" class="form-control" value = "<?php echo $row->file; ?>">
                            </div>

                            <div class="">
                                <input name="user_id" type="text" class="form-control" value = "<?php echo $_SESSION['user_id'] ?>" >
                            </div>


                    <!--     </form> -->
                        <div class="cart mt-4 align-items-center"> <!-- <a href=http://localhost/bookstore/shopping/cart.php> --> <button name = "submit" type = "submit "class="btn btn-primary text-uppercase mr-2 px-4"><i class="fas fa-shopping-cart"></i> Add to cart</button> <!-- </a>  --></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "../includes/footer.php"; ?>