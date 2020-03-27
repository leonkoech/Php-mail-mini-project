
<?php 
session_start();
    include_once 'userclass.php';
    $user = new User();
    $uid = $_SESSION['id'];
    if (!$user->get_session()){
       header("location:login.php");
    }
    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  </head>

  <body>
    <div id="container" class="container">
      <div id="header">
        <a href="login.php?q=logout">LOGOUT</a>
      </div>
      <div id="main-body">
        <br/>
        <br/>
        <br/>
        <br/>
        <h1>
                  Hello <?php $user->get_username($uid); ?>
    			</h1>
      </div>
      <div id="footer"></div>
    </div>
  </body>

  </html>