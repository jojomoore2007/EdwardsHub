<html>
  <head>
    <title>EdwardsHub Teacher Mode</title>
  </head>
  <body>
    <?php
      if ($_POST['username'] == 'MSESub' && $_POST['password'] == 'msesharks' || $_POST['username'] == 'JMTest' && $_POST['password'] == '11Joey2007' || $_POST['username'] == 'JEdwards' && $_POST['password'] == 'password') {
        echo 'Username and password correct.<br /><br />No links yet. Check back later.'
      } else {
        echo 'Username or password incorrect.'
      }
    ?>
  </body>
</html>
