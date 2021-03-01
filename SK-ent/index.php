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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylings/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b6aa1f1735.js" crossorigin="anonymous"></script>
  </head>

<?php include("../SK-ent/partials/navigation.php")?>

<body>
    <div class="wrapper">
<div class="content">

    <div class="bg-box-left">

      <h1>Male dancers in South-Korean entertainment</h1>  
      <div class="intro-text">
        <p> &ensp; &ensp; It’s in K-Pop where you can find some of the most talented dancers in the world. One thing you’ll notice very quickly is that almost all of the best Kpop dancers of this 
           era and of all-time belong to some of the most popular groups in the world. In other words, if you really want 
           to know which is the best K-pop group, start with the best 30 K-pop dancers! <br></p>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/media/DteOQOHVAAA5rOB.jpg" class="d-block w-100" alt="Image of a dance performance">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.kstarlive.com/resource/2018/06/11/temp_c0c7f8782e30e761a5c631817f9d1eaf.jpg" class="d-block w-100" alt="Image of a dance performance">
    </div>
    <div class="carousel-item">
      <img src="https://pm1.narvii.com/7031/cf79bbfa595e0fa0eea6566d90c134866eac72a1r1-1280-854v2_hq.jpg" class="d-block w-100" alt="Image of a dance performance">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <p><br> &ensp; &ensp; Make sure to follow the latest news from top dancers on the News Page</p>
        </div>
    </div>

  <div class="bg-box-right">

      <div class="intro-img-container">     
        <a href="..\sk-ent\classical.php">
          <div class="box-one">
            <img class="img-1" src=".\pictures\img1.png" alt="Dance image">
              <div class="img-text">
                Classical dance
              </div>
          </div>
        </a>
        <a href="..\sk-ent\modern.php">
          <div class="box-two">
            <img class="img-3" src=".\pictures\img2.png" alt="Dance image">
              <div class="img-text">
                Modern dance
              </div>
          </div>
        </a>
        <a href="..\sk-ent\idol-groups.php">
          <div class="box-three">
            <img class="img-2" src=".\pictures\img3.png" alt="Dance image">
              <div class="img-text">
                Idol groups
              </div>
          </div>
        </a>
      </div>

        <p class="watch-text">Check out our Youtube playlist!</p>
          <!--Playlist button-->  
          <div class="button1">
            <a href="https://www.youtube.com/playlist?list=PLpdWCd6RQrwlEBOEfxh5xn5lOALQ2SBc1">
        <INPUT type="submit" id="nctu" name="nctu" value="▶"></a>
          </div>

  </div>
</div>
    </div>

<div class="newsfeed">
  <h2>What's New?</h2>
  <div class="container">
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
      </div> 

    </div>
  </div> 

</div>

<?php endif;
    $conn->close(); ?>

<?php include("../SK-ent/partials/footer.php")?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>      
  </body>
</html>