<?php
require_once('./partials/config.php');

$sql = 'SELECT * FROM posts ORDER BY id DESC';
$result = $conn->query($sql);
// var_dump($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>K-pop male dancers</title>
    <meta name ="viewport" content="width=device-width">
    <meta name="description" content="Male dancers in SK entertainment">
    <link rel="stylesheet" href="./stylings/newsblog.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/b6aa1f1735.js" crossorigin="anonymous"></script>
  </head>

<?php include("../SK-ent/partials/navigation.php")?>

  <body>
  <div class="bg-box">
    <h1>Latest News</h1>
      <div class="container">
        <?php if ($result->num_rows > 0) : ?>
        <?php while($row = $result->fetch_assoc()) : ?>
              <div class="row">
                <a href="./post.php?post=<?php echo $row['id']; ?>">
                    <div class="box">                    
                        <img class="thumbnail-img" src="<?php echo $row['img']; ?>" alt="">
                        <h2 class="title"><?php echo $row['title']; ?></h2>
                    </div>
                </a>
              </div>
        <?php endwhile;?>
      </div> 
  </div>
    <?php endif;
    $conn->close(); ?>
    <br><br><br>
    <?php include("../SK-ent/partials/footer.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>