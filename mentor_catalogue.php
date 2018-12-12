<?php
/**
 * Created by PhpStorm.
 * User: Hudson
 * Date: 10/29/18
 * Time: 5:28 PM
 */

try {
    require "config.php";
    require "common.php";
    require "connection.php";

    $sql = "SELECT fname, lname, email FROM members WHERE typeof = 'Mentor'";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();

} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<?php include "header.php"; ?>

<style>

    #header2 {
        position: relative;
        left: 5%;
    }

    table {
        width: 80%;
        position: relative;
        left: 5%;
    }

    th {


    }

    td {

        padding: 10px;
    }

    .b {
        position: relative;
        top: 40px;
    }
</style>

<div class="container">

      <!-- Page Heading -->
      <h1 class="my-4 white">Mentor Catalogue</h1>

      <div class="row">
        <?php foreach ($result as $row) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
              <div class="card">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo escape($row["fname"]);?> <?php echo escape($row["lname"]);?></a>
                  </h4>
                  <p class="card-text"><?php echo escape($row["email"]); ?></p>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                </div>
              </div>
            </div>
        <?php endforeach; ?>
    </div>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
</div>
