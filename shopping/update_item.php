<?php require "../config/config.php"; ?>

<?php
// update_quantity.php
/* if(isset($_POST['product_id']) && isset($_POST['new_quantity'])) {
    $productId = $_POST['product_id'];
    $newQuantity = $_POST['new_quantity'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE cart SET pro_amount = ? WHERE pro_id = ?");
    $stmt->bind_param("ii", $newQuantity, $productId);

    // Execute the query
    if($stmt->execute()) {
        echo "Quantity updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
 */
    ?>