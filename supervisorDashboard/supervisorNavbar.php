<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-white" >Supervisor Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Projects
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="pendingProjects.php">Pending Projects</a>
          <a class="dropdown-item" href="currentProjects.php">Currently Approved Projects</a>
          <a class="dropdown-item" href="rejectedProjects.php">Rejected Projects</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projectIdeas.php">Project Ideas & Interests</a>
      </li>
    </ul>
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link"><?php echo $_SESSION['login_user']; ?></a>
      <a class="nav-item nav-link" id="Username" onClick="location.href='../logout.php'">Sign Out</a>
    </div>
  </div>
</nav>