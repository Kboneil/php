
<!DOCTYPE html>
<html>
<body>

  <nav>
    <ul class="links">
        <li><a href="index.php">Featured Photos</a></li>
        <!-- <li><a href="albums.html">Albums</a></li>
        <li><a href="about.html">About</a></li> -->
        <li><a href="contact.php">Contact</a></li>
    </ul></div>
  </nav>

  <?php
  include_once('../include/connect.php');
  ?>

  <form method="post" action="../include/mailer.php">
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
