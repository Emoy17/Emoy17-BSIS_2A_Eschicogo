<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 


            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);

          ?>


          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              DASHBOARD <span class="sr-only">(current)</span>
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="add-bus.php">
              <span data-feather="users"></span>
              BUS
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="time.php">
              <span data-feather="users"></span>
              TIME
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="customers.php">
              <span data-feather="users"></span>
              CUSTOMERS
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="feedback.php">
              <span data-feather="users"></span>
              FEEDBACKS
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="users"></span>
              USERS
            </a>
          </li>
           
        </ul>


       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">HELLO, <?php echo $_SESSION["admin"]; ?>.</h1>
        
      </div>