<div class="container bloc-sm">
  <div class="page-header" style="padding-top: 10px; padding-bottom: 10px;">
    <div style="display: flex;">
      <a href="/TPC-management-app/index.php"><img src="/TPC-management-app/pictures/iitp_logo.png" height="80"></a>
        <div style="padding-bottom: 5px; padding-left: 20px; padding-top: 5px;">
          <h3>Training &amp; Placement Cell</h3>
          <h5><strong>Indian Institute of Technology Patna</strong></h5>
        </div>
    </div>
  </div>
</div>
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/TPC-management-app/index.php" style="font-size: inherit;">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Why IIT Patna?</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Departments</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Email</a>
          <a class="dropdown-item" href="#">Phone</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Set Appointment</a>
        </div>
      </li>
    </ul>
    <span class="navbar-text">
      <ul class="navbar-nav mr-auto">
        <?php if(!isset($_SESSION['access_token'])){ ?>
          <li class="nav-item active">
            <a class="nav-link" href="/TPC-management-app/recruiter/login.php">Recruiter Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/TPC-management-app/student/login.php">Student Login</a>
          </li>
        <?php
          } else {
        ?>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
            if(isset($_SESSION['username'])){
              echo $_SESSION['username'];
            ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if($_SESSION['user_role']=='student'){
              ?>
                <a class="dropdown-item" href="/TPC-management-app/student/profile.php">Profile</a>
            <?php
              } else{
              ?>
                <a class="dropdown-item" href="/TPC-management-app/admin/dashboard.php">dashboard</a>
              <?php
              }
              ?>
          <?php
            } else if(isset($_SESSION['company_name'])){
              echo $_SESSION['company_name'];
            ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/TPC-management-app/recruiter/createPosition.php">New Position</a>
          <?php } ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/TPC-management-app/logout.php">Logout</a>
          </div>
        </li>
        <?php
          }
          ?>
      </ul>
    </span>
  </div>
</nav>
</div>
<br />
