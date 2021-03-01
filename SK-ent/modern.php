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

<h1>Dancers trained in modern dance</h1>

<div class="top-box">
  <i class="fas fa-sort-alpha-down fa-lg"></i>
    <form id="search-box" action="">
      <input type="text" placeholder="Search for a name...">
    </form>
</div>

  <div class ="container">

<ul id="listing">
<li>
    <a class="btn" href="..\sk-ent\profiles\jeon-jungkook.php">
    <div class="performer-box">
      <img class="artist-img" src="https://www.nacionrex.com/__export/1587505867804/sites/debate/img/2020/04/21/88230709_139514010887502_5866920301073225026_n_crop1587503388846.jpg_423682103.jpg" alt="">
        <div class="profile-text">
          <h2>Jeon Jungkook</h2>
          <p>Stage name: Jungkook <br> Group: BTS</p>   
        </div>     
    </div>
  </a>
  </li>
  <li>    
  <a class="btn" href="..\sk-ent\profiles\jung-hoseok.php">
    <div class="performer-box">
      <img class="artist-img" src="https://data.whicdn.com/images/327886827/original.jpg" alt="">
        <div class="profile-text">
          <h2>Jung Hoseok</h2>
          <p>Stage name: J-Hope <br> Group: BTS</p>
        </div>
    </div>
  </a>
  </li>
  <li>    
  <a class="btn soon" href="">
    <div class="performer-box">
      <img class="artist-img" src="https://6.viki.io/image/94f1e64332ec4dc49d516fd13ff7b8f4.jpeg" alt="">
        <div class="profile-text">
          <h2>Lee Yeongheum</h2>
          <p>Stage name: Ten <br> Group: NCT, WayV, SuperM</p>
          <p class= "red-text">Coming Soon</p>
        </div>
    </div>
  </a>
  </li>
  <li>
  <a class="btn soon" href="">
    <div class="performer-box">
      <img class="artist-img" src="https://pbs.twimg.com/profile_images/920655920157278213/ao2mHfPP_400x400.jpg" alt="">
        <div class="profile-text">
          <h2>Lee Taemin</h2> 
          <p class= "description">Stage name: Taemin <br> Group: SHINee, SuperM</p>
          <p class= "red-text">Coming Soon</p>
        </div>
    </div>
  </a>
  </li>
  <li>
    <a class="btn soon" href="">
      <div class="performer-box">
        <img class="artist-img" src="https://i.pinimg.com/564x/82/91/5c/82915c82cc4b3e38b452aa7fe1237336.jpg" alt="">
          <div class="profile-text">
            <h2>Lee Taeyong</h2>
            <p>Stage name: Taeyong <br> Group: NCT, SuperM</p>
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