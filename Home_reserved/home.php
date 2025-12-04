<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>MakeOver</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="container">
    <div class="header"><img src="img/logo.svg" alt="">
      <!-- ul.nav_list>li.nav_item*4>a.nav_link -->
      <ul class="nav_list">
        <li class="nav_item"><a href="#" class="nav_link">DESIGN</a></li>
        <li class="nav_item"><a href="#" class="nav_link">TECHNOLOGY</a></li>
        <li class="nav_item"><a href="#" class="nav_link">SOLUTIONS</a></li>
        <li class="nav_item"><a href="logout.php" class="nav_linkblack">LOGOUT</a></li>
      </ul>
      
    </div>
<div class="auth"><p>Benvenuto <?php echo $_SESSION['username']; ?></p> </div>
  
<div class="content">
Inserire contenuto
</div>
    



  </div>
</body>

</html>

<?php 
} else {
     header("Location: index.php");
     exit();
}
?>