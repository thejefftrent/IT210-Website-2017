<?php

$page = strtok(strtok($_SERVER["REQUEST_URI"],'.'),'/');
  $login = false;
if(isset($_SESSION['logged_in']) && isset($_SESSION['username']))
{
  $login = true;
}
?>
<nav class="col-lg-4 navbar-right">
  <ul class="list-unstyled nav nav-stacked nav-pills">
    <li class="nav-item">
      <a href="<?php if($login){echo "php/logout.php";}else{echo "login.php";} ?>" class="nav-link"><?php if($login){echo "Logout";}else{echo "Login";} ?></a>
    </li>
    <li class="nav-item">
      <a href="register.php" class="<?php if($page == 'register'){echo 'active';} ?>nav-link">Register</a>
    </li>
    <li class="nav-item">
      <a href="home.php" class="<?php if($page == 'home'){echo 'active';} ?> nav-link"><span class="glyphicon glyphicon-home"></span> Home</a>
    </li>
    <li class="nav-item">
      <a href="#" class="<?php if($page == 'project'){echo 'active';} ?> nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> My projects <span class="glyphicon glyphicon-menu-down"></span></a>
      <ul class="dropdown-menu">
        <li>
          <a href="project.php?project=0" class="nav-link"><span class="glyphicon glyphicon-king"></span> Project 1</a>
        </li>
        <li>
          <a href="project.php?project=1" class="nav-link"><span class="glyphicon glyphicon-queen"></span> Project 2</a>
        </li>
        <li>
          <a href="project.php?project=2" class="nav-link"><span class="glyphicon glyphicon-pawn"></span> Project 3</a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="endorsements.php" class="<?php if($page == 'endorsements'){echo 'active';} ?> nav-link"><span class="glyphicon glyphicon-gift"></span> Endorsements from others</a>
    </li>
    <li class="nav-item">
      <a href="contact.php" class="<?php if($page == 'contact'){echo 'active';} ?> nav-link"><span class="glyphicon glyphicon-envelope"></span> Contact me</a>
    </li>
  </ul>
</nav>
