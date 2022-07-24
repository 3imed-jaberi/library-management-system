<?php $title = 'Library Management System - home books page' ?>


<?php ob_start() ?>

<section class="container">
  <h1 class="text-center my-5"> Welcome to System Mangement Library!</h1>
  <table class="table table-striped mb-5">
    <tr class="thead-dark">
      <th>Id</th>
      <th>Title</th>
      <th>Author</th>
      <th>Published</th>
      <th>Price</th>
      <th>Category</th>
      <th>Action</th>
    </tr>
    <?php
      include "db-manager/port.php";
      $data = $modelManager->query("SELECT * FROM books;");
      foreach ($data as $row) {
        echo("
          <tr>
          <td>".$row["id"]."</td> 
          <td>".$row["title"]."</td> 
          <td>".$row["author"]."</td> 
          <td>".$row["published"]."</td> 
          <td>".$row["price"]."</td> 
          <td>".$row["category"]."</td> 
            <td>
              <a href='/edit-book.php?id=".$row["id"]."' class='btn btn-warning px-5'>Edit</a>              
              <a href='/actions/delete-book.php?id=".$row["id"]."' class='btn btn-danger px-5'>Delete</a>             
            </td>
          </tr>
        ");
      }
    ?>
  </table>
</section>

<?php $page = ob_get_clean() ?>

<?php include 'layout/layout.php' ?>
