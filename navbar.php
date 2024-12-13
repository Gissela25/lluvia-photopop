<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0">
  <div class="container-fluid nav-principal px-0">
    <button
      class="navbar-toggler my-2"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav col-7 mx-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo $activePage == 'home' ? 'active' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $activePage == 'myhistory' ? 'active' : ''; ?>" href="myhistory.php">Mi history</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Investment</a>
        </li>
        <div class="nav-logo"></div>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
