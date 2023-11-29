<?php require "../config/config.php"; ?>
<?php require "../includes/header.php"; ?>


<?php

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $product_amount = $_POST['pro_amount'];

    $insert = $conn->prepare("UPDATE cart SET pro_amount = '$product_amount' WHERE id = '$id'");
    $insert->execute();
     // Execute the query
/*      if($insert->execute()) {
       // echo "Quantity updated successfully";
    } else {
        echo "Error updating record: ";
    }
 */

}
?>

<?php require "../includes/footer.php"; ?>