<?php $title = 'Library Management System - add books page' ?>

<?php ob_start() ?>

<section class='container text-center'>
  <br/>
  <h1> Add new book </h1>
  <div class='card py-10 my-3'>
    <form onsubmit='return checkFormPayload()' method='POST' action='/actions/add-book.php'>
      <label class='form-label my-3 col-sm-10'>
        Title:
        <input class='form-control my-2' name='title' id='title' />
      </label> <br/>

      <label class='form-label mb-3 col-sm-10'>
        Author:
        <input class='form-control my-2' name='author' id='author' />
      </label> <br/>

      <label class='form-label mb-3 col-sm-10'>
        Published:
        <input class='form-control my-2' name='published' id='published' />
      </label> <br/>

      <label class='form-label mb-3 col-sm-10'>
        Price:
        <input class='form-control my-2' name='price' id='price' />
      </label> <br/>

      <label class='form-label mb-3 col-sm-10'>
        Category:
        <select class='form-select my-2 col-sm-10' name='category' id='category'>
          <option value='-1'>Not Selected</option>    
          <option value='IT'>IT</option>
          <option value='Eco'>Eco</option>
          <option value='Musique'>Musique</option>
          <option value='Politique'>Politique</option>
        </select>
      </label> <br/>

      <button class='btn btn-success btn-block mb-3 col-sm-10' type='submit'>submit</button>
    </form>
  </div>
  <br/>
</section>

<?php $page = ob_get_clean() ?>

<?php include 'layout/layout.php' ?>