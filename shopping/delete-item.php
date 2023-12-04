<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>


<?php

if (isset($_POST['delte'])){
    $id = $_POST['id'];

    $delete = $conn->prepare("DELET FROM cart  WHERE id = '$id'");
    $delete->execute();
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