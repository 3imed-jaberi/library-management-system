<?php $title = 'Library Management System - edit books page' ?>

<?php ob_start() ?>

<section class="container text-center">
  <br/> 
  <h1> Edit exist book </h1>
  <div class="card py-10 my-3">
    <?php 
      include "db-manager/port.php";
      $data = $modelManager->query("SELECT * FROM books WHERE id = :id;", ["id" => $_GET['id']]);
      $row = $data[0];

      echo("
        <form onsubmit='return checkFormPayload()' method='POST' action='/actions/update-book.php'>

          <input type='hidden' name='id' value='".$_GET['id']."' />

          <label class='form-label my-3 col-sm-10'>
            Title:
            <input class='form-control my-2' name='title' id='title' value='".$row['title']."' />
          </label> <br/>

          <label class='form-label mb-3 col-sm-10'>
            Author:
            <input class='form-control my-2' name='author' id='author' value='".$row['author']."' />
          </label> <br/>

          <label class='form-label mb-3 col-sm-10'>
            Published:
            <input class='form-control my-2' name='published' id='published' value='".$row['published']."' />
          </label> <br/>

          <label class='form-label mb-3 col-sm-10'>
            Price:
            <input class='form-control my-2' name='price' id='price' value='".$row['price']."' />
          </label> <br/>

          <label class='form-label mb-3 col-sm-10'>
            Category:
            <select class='form-select my-2 col-sm-10' name='category' id='category'>
              <option value='-1'>Not Selected</option>    
              <option value='IT' ".($row['category'] == 'IT' ? "selected='selected'" : null)."'>IT</option>
              <option value='Eco' ".($row['category'] == 'Eco' ? "selected='selected'" : null).">Eco</option>
              <option value='Musique' ".($row['category'] == 'Musique' ? "selected='selected'" : null).">Musique</option>
              <option value='Politique' ".($row['category'] == 'Politique' ? "selected='selected'" : null).">Politique</option>
            </select>
          </label> <br/>
        
          <button class='btn btn-warning btn-block mb-3 col-sm-10' type='submit'>submit</button>
        </form>
      ");
    ?>
  </div>
  <br/>
</section>

<?php $page = ob_get_clean() ?>

<?php include 'layout/layout.php' ?>
