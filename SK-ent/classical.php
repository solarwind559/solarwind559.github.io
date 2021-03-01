<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>K-pop male dancers</title>
    <meta name ="viewport" content="width=device-width">
    <meta name="description" content="K-pop male dancers">
    <link rel="stylesheet" href="./stylings/listings.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b6aa1f1735.js" crossorigin="anonymous"></script>
  </head>

  <?php include("../SK-ent/partials/navigation.php")?>

  <body>

<div class="bg-box">

<h1>Dancers trained in classical dance</h1>

<div class="top-box">
  <i class="fas fa-sort-alpha-down fa-lg"></i>
    <form id="search-box" action="">
      <input type="text" placeholder="Search for a name...">
    </form>
</div>

<ul id="listing">
<li>
    <a class="btn" href="..\sk-ent\profiles\cha-hakyeon.php">
      <div class="performer-box">
        <img class="artist-img" src="https://i.pinimg.com/236x/0c/7b/71/0c7b7159f9fa80c52523db4f25e3cdf9.jpg" alt="">
          <div class="profile-text">
            <h2>Cha Hakyeon</h2>
            <p>Stage name: N <br> Group: VIXX</p>
          </div>
      </div>
    </a>
  </li>
  <li>
    <a class="btn" href="..\sk-ent\profiles\dong-sicheng.php">
      <div class="performer-box">
        <img class="artist-img" src="https://i.pinimg.com/originals/62/01/22/620122a3e8a969a45e9aadca938de11f.jpg" alt="">
          <div class="profile-text">
            <h2>Dong Sicheng</h2>
            <p>Stage name: WinWin <br> Group: NCT, WayV</p>
          </div>
      </div>
    </a>
  </li>
  <li>
    <a class="btn" href="..\sk-ent\profiles\kim-jongin.php">
      <div class="performer-box">
        <img class="artist-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKYRbSXmy9stUYylE9plswgWKfklSIAQSEXg&usqp=CAU" alt="">
          <div class="profile-text">
            <h2>Kim Jongin</h2>
            <p>Stage name: Kai <br> Group: EXO, SuperM</p>   
          </div>     
      </div>
    </a>
  </li>
  <li>
    <a class="btn soon" href="">
      <div class="performer-box">
        <img class="artist-img" src="https://www.nacionrex.com/__export/1604332037021/sites/debate/img/2020/11/02/bts-jimin-be-foto-conceptual_crop1604330443540.jpg_1902800913.jpg" alt="">
          <div class="profile-text">
            <h2>Park Jimin</h2>
            <p>Stage name: Jimin <br> Group: BTS</p>
            <p class= "red-text">Coming Soon</p>
          </div>
      </div>
    </a>
  </li>
  <li>
    <a class="btn soon" href="">
      <div class="performer-box">
        <img class="artist-img" src="https://6.viki.io/image/99205218513b45b0aa9742918b943dd6.jpeg?s=900x600&e=t" alt="">
          <div class="profile-text">
            <h2>Kwon Soonyoung</h2>
            <p>Stage name: Hoshi <br> Group: Seventeen</p>
            <p class= "red-text">Coming Soon</p>
          </div>
      </div>
    </a>
  </li>
</ul>


  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close">X</span>
      <h3>Coming soon!</h3>
      <a class="btn" href=""></a>
    </div>
  </div>



  </div>
  </div>   

  <?php include("../SK-ent/partials/footer.php")?>

    <script src="./js-files/listings.js"></script>
  </body>
</html>