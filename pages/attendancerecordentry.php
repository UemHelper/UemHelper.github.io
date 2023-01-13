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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- add fixed-top to keep nav bar in place -->
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
                <li class="nav-item">
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
                            <h3 class="top-c-sep">ATTENDANCE DATA ENTRY</h3>
                        </div>
                        <!-- Enter data -->
                        <form action="attendancerecordentry.php" method="POST" class="career-form mb-60" enctype="multipart/form-data">
                            <div class="row insidecard">

                                <!-- Filters -->

                                <div class="col-md-6 col-lg-3 my-3">
                                    <div class="">
                                        <input type="text" name="enrollment" id="enrollment" placeholder="Enter enrollment number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 my-3">
                                    <div class="">
                                        <input type="text" name="registration" id="registration" placeholder="Enter registration number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 my-3">
                                    <div class="">
                                        <input type="text" name="present" id="present" placeholder="Enter present number">
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 col-lg-3 my-3">
                                    <div class="">
                                        <input type="text" name="chaptername" id="chaptername" placeholder="Enter chapter name">
                                    </div>
                                </div> -->
                                <div class="col-md-6 col-lg-3 my-3">
                                    <button name="submit" class="btn btn-lg btn-block btn-light btn-custom" id="submit">SUBMIT</button>
                                </div>
                                <!-- Filter end -->

                            </div>
                        </form>

                        <div class="filter-result" style="margin-top: 10px">

                            <?php

                            include '../scripts/connect.php';

                            if (isset($_POST['submit'])) {
                                $enrollment = $_POST['enrollment'];
                                $registration = $_POST['registration'];
                                $present = $_POST['present'];


                                $sql = "SELECT * FROM `studentlogin` WHERE `enrollment` = '$enrollment' AND `registration` = '$registration'";
                                $result = mysqli_query($connect, $sql);

                                $count = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $count = $count + 1;
                                    echo '<script>console.log("'.$row['name'].'")</script>';
                                    $sql = "UPDATE `studentlogin` SET `present` = '" . $present . "' WHERE `studentlogin`.`enrollment` = ".$enrollment." AND `studentlogin`.`registration` = ".$registration;
                                    mysqli_query($connect, $sql);
                                }

                                if ($count == 0)
                                    echo '<script>window.open("attendancerecordentry.php","_self");alert("Wrong login credentials");</script>';
                            }


                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>