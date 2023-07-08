<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/man.png" type="image/ico" />
    <link rel="stylesheet" href="css/additional.css">

    <title>Admin|Dashboard</title>

    <?php include "../components/bootstraplink.php"; ?>
</head>
<?php
include "../../helper/subject_dao.php";
include "../../helper/database.php";
include "../../services/subject.php";
$subject_dao = new SubjectDao($conn);
$subject_data_dao = new SubjectService();
$slug = $_GET['slug'];
$subjects = $subject_dao->get_subjects_topic_subtopic($slug);
$newSubject = $subject_data_dao->transformData($subjects);
// print_r($newSubject);
// rating variable
$tottal_rating = 5;

$subject = $newSubject[0];
$topicnumber = 1;

$reset = null;

// print_r($number);
?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- sidebar menu -->
            <?php include "../components/side_menu.php" ?>
            <!-- /sidebar menu -->

            <!-- top navigation -->
            <?php include "../components/header.php" ?>
            <!-- /top navigation -->

            <!-- main content -->

            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="x_content">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                                       <!-- subject Section Title -->
                                       <div class="container section-title " data-aos="fade-up">
                        <h2>Summary of the Course</h2>
                    </div><!-- End Section Title -->
                    <div class="description" data-aos="fade-up">

                        <p>
                            <?= $subject['shortDescription'] ?>
                        </p>

                    </div>
                    <!-- end -->



              
                <!-- subject Section Title -->
                <div class="container section-title " data-aos="fade-up">
                    <h2>Description of the Course</h2>
                </div><!-- End Section Title -->

                <div class="description" data-aos="fade-up">

                    <p>
                        <?= $subject['longDescription'] ?>
                    </p>

                </div>
                <!-- end -->


                </div>

            </div>
                </div>
              </div>
 

        </div>
    </div>
    <!-- /main content -->
    <!-- footer content -->

    <?php include "../components/footer.php" ?>
    <!-- /footer content -->
    </div>
    </div>
    <?php include "../components/commonscript.php"; ?>

</body>

</html>