


<?php include '../indexFunction.inc.php';

?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
  
  <?php if(isset($_SESSION['login_id'])){?>
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="../index_folder/index.inc.php">Home<span class="" ></span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../login_Master/logout.inc.php">logout</a>
      </li>
      <?php } else {?>
      <li class="nav-item" style = "float:right;">
          <a class="nav-link" href="../login_Master/login.inc.php">Login</a>
      </li>
        
    </ul>
    <?php } ?>
  </div>
</nav>

