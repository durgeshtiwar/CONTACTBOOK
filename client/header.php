<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./public/logo.png"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <?php if (!isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signUp=true">SignUp</a>
          </li>
        <?php }?>
        <?php if (isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
          </li>
        <?php }?>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
        <form class="d-flex" action ="">
        <input class="form-control me-2" name = "search" type="search" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </ul>
    </div>
  </div>
</nav>