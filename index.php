<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>
  </head>
  <style media="screen">
    body{
      background-image: url(2.jpg);
      font-family: sans-serif;
    }
    h2 {
      color: #fff;
    }

    .login {
      padding: 1em;
      margin: 2em auto;
      width: 17em;
      background: #fff;
      border-radius: 3px;
    }

    label {
      font-size: 10pt;
      color: #555;
    }

    input[type="text"],
    input[type="password"]{
      padding: 8px;
      width: 95%;
      background: #efefef;
      border: 0;
      font-size: 10pt;
      margin: 6px 0px;
    }

    .tombol {
      background: #3498db;
      color: #fff;
      border: 0;
      padding: 5px 8px;
    }
  </style>
  <body>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "wrong") {
          echo '<h1>NIS dan Password salah</h1>';
        }
      }
    ?>
    <center><h2>LOG IN ADMIN SMK TELKOM MALANG</h2></center>
    <div class="login">
      <form action="login.php" method="post">
        <div>
          <label>NIS: </label>
          <input type="text" name="nis" id="nis"><br>
        </div>
        <div>
          <label>Password: </label>
          <input type="password" name="password" id="password"><br>
        </div>
        <div>
          <input type="submit" name="submit" class="tombol" value="SIGN IN">
        </div>
      </form>
    </div>

  </body>
</html>
