<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THE UEM HELPER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/classNoteStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

    <!--navbar initiated-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- add fixed-top to keep nav bar in place -->
  <a class="navbar-brand" href="../index.php"><b>T h e &nbsp;U E M &nbsp;h e l p e r</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendancerecord.php">Attendace Record</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="classnote.php">Class Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://drive.google.com/drive/folders/1nLzbbFZ6KfLnAnlViYDILBbdnO3sNFH2">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="questionpaper.php">Previous Year Question Papers</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
    </ul>
  </div>
</nav>
    <!--navbar ended-->

    <div class="container">
        <section id="searchSection">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">
                        <div class="section-title text-center ">
                            <h3 class="top-c-sep">CONTACTS</h3>
                        </div>
                        <form action="contact.php" method="POST" class="career-form mb-60">
                            <div class="row insidecard">
                                
                                <!-- Filters -->
                                <div class="col-md-6 col-lg-2 my-3">
                                    <div class="select-container">
                                        <select class="custom-select" name="courseSelectc" id="courseSelectc">
                                            <option selected="" value="error">Course</option>
                                            <option value="btech">Btech</option>
                                            <option value="bba">BBA</option>
                                            <option value="bca">BCA</option>
                                            <option value="bsc">BSC</option>
                                            <option value="bhhm">BHHM</option>
                                            <option value="mba">MBA</option>
                                            <option value="mca">MCA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 my-3">
                                    <div class="select-container">
                                        <select class="custom-select" name="yearSelectc" id="yearSelectc">
                                            <option selected="" value="error">Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 my-3">
                                    <div class="select-container">
                                        <select class="custom-select" name="streamSelectc" id="streamSelectc">
                                        <option selected="" value="error">Stream</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 my-3">
                                    <div class="select-container">
                                        <select class="custom-select" name="subjectSelectc" id="subjectSelectc">
                                        <option selected="" value="error">Subject</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 my-3">
                                    <button name="classnotefilter" class="btn btn-lg btn-block btn-light btn-custom" id="classnotefilter">Search</button>
                                </div>
                                <!-- Filter end -->
                            
                            </div>
                        </form>


                        <!-- DATA -->
                        <div class="filter-result">
                            
                            <?php

                                include '../scripts/connect.php';

                                if(isset($_POST['classnotefilter'])){
                                    $courseSelectFilter = $_POST['courseSelectc'];
                                    $yearSelectFilter = $_POST['yearSelectc'];
                                    $streamSelectFilter = $_POST['streamSelectc'];
                                    $subjectSelectFilter = $_POST['subjectSelectc'];

                                    $flag=true;

                                    if($subjectSelectFilter != "error"){
                                    $sql = "SELECT * FROM `contact` WHERE `course`='$courseSelectFilter' AND `year`='$yearSelectFilter' AND `stream`='$streamSelectFilter' AND `subject`='$subjectSelectFilter'";
                                    $flag=true;
                                    }
                                    else if($streamSelectFilter != "error" && $subjectSelectFilter == "error"){
                                        $sql = "SELECT * FROM `contact` WHERE `course`='$courseSelectFilter' AND `year`='$yearSelectFilter' AND `stream`='$streamSelectFilter'";
                                        $flag=true;
                                    }
                                    else if($yearSelectFilter != "error" && $streamSelectFilter == "error"){
                                        $sql = "SELECT * FROM `contact` WHERE `course`='$courseSelectFilter' AND `year`='$yearSelectFilter'";
                                        $flag=true;
                                    }
                                    else if($courseSelectFilter != "error" && $yearSelectFilter == "error"){
                                        $sql = "SELECT * FROM `contact` WHERE `course`='$courseSelectFilter'";
                                        $flag=true;
                                    }
                                    else{
                                        echo '<p class="mb-30 ff-montserrat">Nothing selected</p>';
                                        $flag=false;
                                    }

                                    if($flag){
                                        $result = mysqli_query($connect,$sql);
                                        $num = mysqli_num_rows($result);
                                        echo '<p class="mb-30 ff-montserrat">Number of pdf found : ' . $num . ' </p>';
                                        
                                        $count=1;
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo '<div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">'.$count.'</div>
                                                <div class="job-content">
                                                    <h5 class="text-center text-md-left">'.$row['teachername'].'</h5>
                                                    <h6 class="text-center text-md-left">'.$row['phno'].'</h6>
                                                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                        <li class="mr-md-4">
                                                            <i class="mr-2">course: '.$row['course'].'</i>
                                                        </li>
                                                        <li class="mr-md-4">
                                                            <i class="mr-2">Year: '.$row['year'].'</i>
                                                        </li>
                                                        <li class="mr-md-4">
                                                            <i class="mr-2">Stream: '.$row['stream'].'</i>
                                                        </li>
                                                        <li class="mr-md-4">
                                                            <i class="mr-2">Subject: '.$row['subject'].'</i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>';
                                        $count = $count + 1;
                                        }

                                    }
                            }

                            ?>
                            
                         <!-- DATA END -->

                        </div>
                    </div>

                </div>
            </div>
    </div>

    </section>

    <script src="../scripts/selectioncontact.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>