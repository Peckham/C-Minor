<?php
session_start();
?>

<?php
//$mysql_hostname = "localhost";
//$mysql_user = "root";
//$mysql_password = "root";
//$mysql_database = "Database";
//$prefix = "";
//
//$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
$id=$_SESSION['SESS_MEMBER_ID'];
//$sql = "SELECT * FROM members where mem_id='$id'";
//$statement = $conn -> prepare($sql);
//$statement->execute();
//$r = $statement->fetch();



include "header.php";
?>

<html lang="en">

    <div class="sidenav white">
      <br><br>
      <p class="bodyText option"><a class="white" href="all_events.php">See All Upcoming Events</a></p>
      <p class="bodyText option"><a class="white" href="Organizations.php">See All Organizations</a></p>
      <?php
      if (isset($_SESSION['SESS_MEMBER_ID'])) {
        ?>
        <br>
        <p class="bodyText option"><a class="white" href="add_event.php">Add Event</a></p>
        <p class="bodyText option"><a class="white" href="add_orgs.php">Add Organization</a></p>
        <?php
      }
      ?>
    </div>


    <div class="eventsCarouselCol">
    <div id="myCarousel" class="carousel slide eventsCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/TempCarousel0.jpg" alt="Black Girls Code">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Black Girls Code</h1>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/TempCarousel1.jpg" alt="Black Googler Network">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Black Googler Network</h1>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/TempCarousel2.jpg" alt="Grace Hopper">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>AnitaB</h1>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <p class="upcomingEvents white">
        Spotlight Organizations
      </p>
    </div>


<?php
try {

    require "connection.php";

    $sql = "SELECT event_name, organization, event_date, event_time, location FROM events WHERE event_id < 100";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();

} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}


?>
    
    <div class="card example-1 square scrollbar-cyan bordered-cyan">
      <div class="card-body">
        <h1 class="upcomingEvents"><strong>Upcoming Events</strong></h1>
        <div class="bodyText">
          <table id = 'table1' style="width:100%; border-spacing: 5px;">
              <tr>
                  <th>Event Name</th>
                  <th align="right">Event Info</th>
              </tr>
              <?php foreach ($result as $row) : ?>
                  <tr>
                      <td><?php echo $row["event_name"]; ?></td>
                      <td><?php echo $row["event_date"]; ?></td>

                  </tr>
              <?php endforeach; ?>
          </table>

        </div>
      </div>
    </div>

  </body>
</html>
