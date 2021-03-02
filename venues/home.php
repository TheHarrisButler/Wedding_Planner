<?php
	include_once 'boilerplate.php'
?>
  <div class="row">
    <?php
      if (isset($_SESSION["useruid"]))
      {
        echo "<h1>Hello there ". $_SESSION["useruid"] ."</h1>";
      }
      else
      {
        echo "<h1>Your dream wedding awaits</h1>";
      }
    ?>
  </div>
<?php
  include_once 'boilerplatefoot.php'
?>
