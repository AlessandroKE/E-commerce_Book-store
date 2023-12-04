<?php 
require "../includes/header.php"; 
require "../config/config.php";

//header('Content-Type: application/json');


if (isset($_POST['delete'])){
    $id = $_POST['id'];

    $delete = $conn->prepare("DELETE FROM cart WHERE id = :id");
    $delete->bindParam(':id', $id, PDO::PARAM_INT);
   $delete->execute();
  
}
?>

<?php require "../includes/footer.php"; ?>

