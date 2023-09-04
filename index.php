
<?php require "includes/header.php"; ?>
<?php require "config/config.php";?>


<?php

$sql = $conn->prepare("SELECT * FROM products WHERE status = 1");
$sql->execute();

//Fetch data as an object from the database.
$rows = $sql->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container">
    <div class="row mt-5">
        <?php foreach ($rows as $row) : ?>
        <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
            <div class="card">
                <img height="213px" class="card-img-top" src="images/<?php echo $row->image;?>">
                <div class="card-body">
                    <h5 class="d-inline"><b><?php echo $row->name;?></b></h5>
                    <h5 class="d-inline">
                        <div class="text-muted d-inline">(<?php echo $row->price ." ksh" ;?>/item)</div>
                    </h5>
                    <p><?php echo substr($row->description, 0, 120);?></p>
                    <a href="<?php echo APPURL; ?>/shopping/single.php?id=<?php echo $row->id;?>" class="btn btn-primary w-100 rounded my-2">More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<?php require "includes/footer.php"; ?>