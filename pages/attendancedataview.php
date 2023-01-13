<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>THE UEM HELPER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>

  <!--navbar initiated-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- add fixed-top to keep nav bar in place -->
    <a class="navbar-brand" href="#"><b>T h e &nbsp;U E M &nbsp;h e l p e r</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Attendace Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="classnote.php">Class Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="questionpaper.php">Previous Year Question Papers</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contacts
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Heads</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Faculty</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Assistants</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--navbar ended-->

  <!-- LOGIN PAGE -->
  <main class="d-flex align-items-center min-vh-80 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../images/logo.jpg" alt="login" class="login-card-img">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link text-small">
              Free <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Bootstrap dashboard templates</a> from Bootstrapdash
            </p>
          </div>
          <div class="col-md-7">
            <div class="card-body" id="dataView">
              <div class="brand-wrapper">
                <img src="../images/ajax.jpg" alt="logo" class="logo">
              </div>

              <!-- CARD DATA -->
              <?php
              include '../scripts/connect.php';

              if (isset($_POST['login'])) {
                $enrollment = $_POST['enrollment'];
                $registration = $_POST['registration'];

                $sql = "SELECT * FROM `studentlogin` WHERE `enrollment` = '$enrollment' AND `registration` = '$registration'";
                $result = mysqli_query($connect, $sql);

                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                  $totalworkingday = 273;
                  $percentage = number_format((float)(($row['present'] / $totalworkingday) * 100), 2, '.', '');
                  $count = $count + 1;
                  echo '<div>
                  <ul>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th>Student name</th>
                          <th>Total number of working days</th>
                          <th>Number of days present</th>
                          <th>Attendace Percentage</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>' . $row['name'] . '</td>
                          <td>' . $totalworkingday . '</td>
                          <td>' . $row['present'] . '</td>
                          <td>' . $percentage . '</td>
                      </tbody>
                    </table>
                  </ul>
                </div><script>console.log("name: ' . $row['name'] . ' and present days: ' . $row['present'] . '")</script>';
                }
                if ($count == 0)
                  echo '<script>window.open("attendancerecord.php","_self");alert("Wrong login credentials");</script>';
              }


              ?>



            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>