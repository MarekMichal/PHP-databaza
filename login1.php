



<?php require_once('connection.php');?>

<?php include('./parts/header.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="login1.css">
  <link rel="stylesheet"  http-equip="Content-Type" >
 
</head>
<body>

  
      
        <form method="POST" class="formular" action="login_scr.php" method="POST">
          <h1>Login</h1>
          <label for="uname"><b>Username</b></label>
          <br>
          <input type="text" placeholder="Enter Username" id="username" name="username" required>
          <p>
          <label for="psw"><b>Password</b></label>
          <br>
          <input type="password" placeholder="Enter Password" id="password" name="password" required>
          <p>
          <div class = login>
          <button type="submit" id = "login" value="login" name="login">Login</button>
          <p>
         
        </div>


        </form>
        <p>


      

      </form>
 
    </body>
</html>