<?php
require('./partials/config.php');

$post = isset($_GET['post']) ? trim(strip_tags($_GET['post'])) : 1;

$sql = "SELECT * FROM posts WHERE id = $post";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>K-pop male dancers</title>
    <meta name ="viewport" content="width=device-width">
    <meta name="description" content="Male dancers in SK entertainment">
    <link rel="stylesheet" href="./stylings/post.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous">
    </script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/b6aa1f1735.js" crossorigin="anonymous"></script>
  </head>

<?php include("../SK-ent/partials/navigation.php")?>

  <body>
    <div class="content">

      <div class="bg-box">
        <div class="container">

            <?php if ($result->num_rows > 0) : ?>
            <?php while($row = $result->fetch_assoc()) : ?>

                  <h1><?php echo $row['title']; ?></h1>   
                <div class="body"> 
                    <div class="main-image">     
                      <img src="<?php echo $row['img']; ?>" alt="...">
                    </div>           
                    <p class="text-body"><?php echo $row['body'] ?></p>
                    <div class="extra-img">
                      <img src="<?php echo $row['extra-img']; ?>" alt="">
                    </div>
                </div>
              <div class="video">
                <?php echo $row['video']; ?>
              </div>

            <?php endwhile;?>
            <?php endif;
            $conn->close(); ?>
            
        </div> <!-- Container end -->
      </div> <!-- BG-box end -->


      <?php
        require('./partials/config.php');
        
        $sql = "SELECT * FROM posts 
        ORDER BY id DESC 
        LIMIT 3
        ";
        $result = $conn->query($sql);
      ?>

      <div class="row newsfeed">
          <div class="container2">
              <?php if ($result->num_rows > 0) : ?>
              <?php while($row = $result->fetch_assoc()) : ?>
                    <div class="row">
                      <a href="./post.php?post=<?php echo $row['id']; ?>">
                          <div class="news-box">
                            <div class="div-this">
                              <img class="thumbnail-img" src="<?php echo $row['img']; ?>" alt="">
                              <h3 class="title"><?php echo $row['title']; ?></h3>
                            </div>
                          </div>
                      </a>
                    </div>
              <?php endwhile;?>
            <!-- </div>  -->

          </div>
      </div> 


        <?php endif;
                $conn->close(); ?>

    </div><!-- Content end -->
    
      <?php include("../SK-ent/partials/footer.php")?>
  </body>
</html>