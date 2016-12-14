
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

<h1>Sugi Keith Photography</h1>

<?php
include_once('../include/connect.php');
$sql = "SELECT * FROM slogans";

$res = pg_query($db, $sql);

if (!$res) {

    die("Error in query: " . pg_last_error());

}

while ($row = pg_fetch_array($res)) {

    echo "Slogan: " . $row[0] . "<p />";

    echo $row[1] . "<p />";

    echo $row[2] . "<p />";

}

?>

<div class="imageSlide">
        <ul class="images" id="slides">
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Effects of Time</figcaption>
            <form method="post" action="index.php">
            Comment: <input type="text" name="name">
              <input type="submit" name="submit" value="Submit">
            </form>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Autumn Graves</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Coastal Gull</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Chorotega Child</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Jellyfish</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Curled Up</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Looking out of the Hagia Sophia</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Blue Mosque</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Children of Petra</figcaption>
          </li>
          <li class="mySlides">
            <figure><img src="https://unsplash.it/200/300/?random" alt="Wanderer"/></figure>
            <figcaption>Meet Me at the Midway</figcaption>
          </li>
        </ul>
      </div>

      <?php

      $query = "INSERT INTO comments VALUES ('$_POST[comment]')";
      $res = pg_query($query);

      if (!$res) {

          die("Error in query: " . pg_last_error());

      }
      ?>

</body>

</html>
