<html>
  <head>
    <title>EdwardsHub Teacher Mode</title>
  </head>
  <body>
    <?php
      if ($_POST['username'] == 'MSESub' && $_POST['password'] == 'msesharks' || $_POST['username'] == 'JMTest' && $_POST['password'] == '11Joey2007' || $_POST['username'] == 'JEdwards' && $_POST['password'] == 'password') {
        echo 'Username and password correct.<br /><br />No links yet. Check back later.'
      } elseif ($_POST['username'] == '' && $_POST['password'] == '') {
        echo 'Login:<br /><form action="./teacher.php">Username:<br><input type="text" name="username" value="MSESub"><br>Password:<br><input type="password" name="password" value="msesharks"><br><br><input type="submit" value="Submit"></form>'
      } else {
        echo 'Username or password incorrect.<br /><br />Login:<br /><form action="./teacher.php">Username:<br><input type="text" name="username" value="MSESub"><br>Password:<br><input type="password" name="password" value="msesharks"><br><br><input type="submit" value="Submit"></form>'
      }
    ?>
  </body>
</html>
