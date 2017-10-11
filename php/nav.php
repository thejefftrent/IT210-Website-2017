<?php

$page = strtok(strtok($_SERVER["REQUEST_URI"],'.'),'/');

?>
<nav class="col-lg-4 navbar-right">
  <ul class="list-unstyled nav nav-stacked nav-pills">
    <li class="nav-item">
      <a href="php/logout.php" class="nav-link">Logout</a>
    </li>
    <li class="nav-item">
      <a href="home.php" class=" nav-link"><span class="glyphicon glyphicon-home"></span> Home</a>
    </li>
    <li class="nav-item">
      <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> My projects <span class="glyphicon glyphicon-menu-down"></span></a>
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
      <a href="endorsements.php" class=" nav-link"><span class="glyphicon glyphicon-gift"></span> Endorsements from others</a>
    </li>
    <li class="nav-item">
      <a href="contact.php" class=" nav-link"><span class="glyphicon glyphicon-envelope"></span> Contact me</a>
    </li>
  </ul>
</nav>
