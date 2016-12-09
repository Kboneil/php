
<!DOCTYPE html>
<html>
<body>

  <nav>
    <ul class="links">
        <li><a href="public/index.php">Featured Photos</a></li>
        <!-- <li><a href="albums.html">Albums</a></li>
        <li><a href="about.html">About</a></li> -->
        <li><a href="public/contact.php">Contact</a></li>
    </ul></div>
  </nav>

  <?php
  include_once('../server.php');
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
