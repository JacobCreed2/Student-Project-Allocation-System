<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-white" >Admin Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
      <a class="nav-item nav-link" id="Students" onClick="location.href='students.php'">Students</a>
      <a class="nav-item nav-link" id="Supervisors" href="supervisors.php">Supervisors</a>
      <a class="nav-item nav-link" id="Projects" href="projects.php">Projects</a>
      <a class="nav-item nav-link" id="Settings" href="settings.php">Admin Settings</a>
      <a class="nav-item nav-link" id="Testing" href="testing.php">Testing</a>
    </div>
        <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link" id="Username" onClick="location.href='userAdmin.php'"><?php echo $userName; ?></a>
    </div>
  </div>
</nav>