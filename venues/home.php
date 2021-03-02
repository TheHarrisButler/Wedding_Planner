<?php
	include_once 'boilerplate.php'
?>
  <div class="row">
    <?php
      if (isset($_SESSION["useruid"]))
      {
        echo "<h1>Hello ". $_SESSION["useruid"] ."</h1>";
      }
      else
      {
        echo "<h1>Your dream wedding awaits</h1>";
      }
    ?>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">My Venues</h5>
            <p class="card-text">A list of venue that I have made</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <div class="col-sm-8">
      <div class="card mb-3">

        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="true" href="#">Choose a Venue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Filter</a>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Find an existing venue</h5>

          <div class="card mb-3">
            <img class="card-img-top img-fluid" src="../images/carousel_img_5.jpg">
            <div class="card-body">
              <h5 class="card-title">Venue Example</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-primary">Decorate</a>
            </div>
          </div>

          <div class="card mb-3">
            <img class="card-img-top img-fluid" src="../images/carousel_img_4.jpg">
            <div class="card-body">
              <h5 class="card-title">Venue Example 2 </h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-primary">Decorate</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
<?php
  include_once 'boilerplatefoot.php'
?>
