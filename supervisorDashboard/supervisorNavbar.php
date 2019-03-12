<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-white" >Supervisor Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
      <a class="nav-item nav-link" id="Projects" onClick="location.href='projects.php'">Projects</a>
      <a class="nav-item nav-link" id="Students" href="supervisors.php">Students</a>
    </div>
        <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link" id="Username" onClick="location.href='userSupervisor.php'"><?php echo $userName; ?></a>
    </div>
  </div>
</nav>