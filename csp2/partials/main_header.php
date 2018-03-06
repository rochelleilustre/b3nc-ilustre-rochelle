<?php

include 'assets/functions.php';

?>


<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
      </button>
      <div><a class="navbar-brand" href="index.php">SCENT OF ADALINE</a></div>
    </div>


    
    <div id="bs-example-navbar-collapse-1" class="navbar-collapse">
      <ul class="nav navbar-nav navbar-right" >
        <li><a href="mycart.php">My Cart <span class="glyphicon glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        <?php

            if (isset($_SESSION['current_user']) && isset($_SESSION['item_count'])) {
              echo '
                <strong style="color:red;">( '.$_SESSION['item_count'].' )</strong>
              ';
            }

            ?>
          </a></li>
        <li><a href="catalog.php">Catalog</a></li>
        <li><a href="login.php">Log In <span class="glyphicon glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
        <li><a href="register.php">Register</a></li>
       </ul>
    </div>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

	<nav class="navbar navbar-default ">
  <div class="container navbar2-section">

    

    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="dropdown">
      <button class="dropbtn"><a href="">BRAND <span class="caret"></span></a></button>
      <div class="dropdown-content">
        <ul id="brands">
            <!-- <li><a href="#">Brand 1</a></li>
            <li><a href="#">Brand 2</a></li>
            <li><a href="#">Brand 3</a></li> -->

            <?php getBrands(); ?>   

        </ul>

    </div>
  </div>

  <div class="dropdown">
      <button class="dropbtn">MEN <span class="caret"></span></button>
      <div class="dropdown-content">
        <ul id="men" class="bscrollbar">         
            <?php getMen(); ?>  
        </ul>


    </div>
  </div>

  <div class="dropdown">
      <button class="dropbtn">WOMEN <span class="caret"></span></button>
      <div class="dropdown-content">
        
        <ul id="women" class="bscrollbar">
            <?php getWomen(); ?>  
        </ul>

        
    </div>
  </div>

  <div class="dropdown">
      <button class="dropbtn">UNISEX <span class="caret"></span></button>
      <div class="dropdown-content">
        
        <ul id="unisex" class="bscrollbar">
            <?php getUnisex(); ?>  
        </ul>

    </div>
  </div>
      <form class="navbar-form navbar-right">
        <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>


   

  </div><!-- /.container-fluid -->
</nav>