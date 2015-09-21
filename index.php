<?php include('header.php') ?>        
<?php
    $mysqli = mysqli_connect("localhost", "root", "root", "instasomething");
    $query = "SELECT * FROM Posts;";
    $result = mysqli_query($mysqli, $query);
    if (!$result) {
        exit('Database query error: '. mysql_error($mysqli));
    }
?>

<div class="row">
    <div class="col-lg-12">
        <h1>Instasomething</h1>
        <p class="lead"><a href="new_photo.php">Add New Photo</a></p>
    </div>
</div>

<div class="row">
  <?php while ($record = mysqli_fetch_assoc($result)) { ?>
      <div class="col-lg-12">
          <img class="img-responsive center-block" 
               src="/uploads/<?= $record["file_path"]?>" width="300" alt="">
          <p>
              <span class="glyphicon glyphicon-time"></span> 
              Posted on August 24, 2013 at 9:00 PM
          </p>
          <p class="lead">
              <?= $record["description"]?>
          </p>
          <hr>
      </div>
  <?php } ?>
</div>
<?php include('footer.php') ?>        
