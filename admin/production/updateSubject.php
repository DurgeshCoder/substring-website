<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="icon" href="images/man.png" type="image/ico" />

  <title>Admin|Dashboard</title>

  <?php include "../components/bootstraplink.php"; ?>
</head>
<?php

include "../../helper/database.php";

$id = $_GET['id'];
$sub = $_GET['subject'];
$fee = $_GET['fe'];
$dis = $_GET['dis'];
$af_dis = $_GET['dis_after'];
$slg = $_GET['slg'];
$ln = $_GET['lan'];
$ra = $_GET['rate'];


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
      <div class="right_col " role="main">
        <!-- top tiles -->
        <div class="x_content d-flex justify-content-center">


          <div class="col-md-6 col-sm-12 col-lg-9">
            <div class="x_panel">
              <div class="x_title">
                <h2>Form Buttons <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                        class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <form class="form-horizontal form-label-left"  method="post">
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Subject Name</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" name="subject_name" class="form-control" value="<?php echo $sub ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Fee</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="number" name="fee" class="form-control" value="<?php echo $fee ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Discount</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="number" name="discount" class="form-control" value="<?php echo $dis ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Fee After Discount</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="number" name="fee_after_discount" class="form-control"
                          value="<?php echo $af_dis ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Cover Image</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="file" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Slug</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" name="slug" class="form-control" value="<?php echo $slg ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Language</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" name="language" class="form-control" value="<?php echo $ln ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Rating</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="number" name="rating" class="form-control" value="<?php echo $ra ?>">
                      </div>
                    </div>
                  </div>
                  <div class="btn d-flex justify-content-center ">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  </div>

                </form>
                <?php
                include "../../helper/subject_dao.php";
                include "../../helper/database.php";
                $subject_dao = new SubjectDao($conn);

                if (isset($_POST['submit'])) {

                  $subjectName = $_POST['subject_name'];


                  $Fee = $_POST['fee'];
                  $Discount = $_POST['discount'];
                  $discountFee = $_POST['fee_after_discount'];
                  $Slug = $_POST['slug'];
                  $Language = $_POST['language'];
                  $Rating = $_POST['rating'];

                  $subject_dao->update_subject($subjectName, $Fee, $Discount, $discountFee, $Slug, $Language, $Rating, $id);
                  if ($subject_dao) {
                    ?>

                    <script>
                      swal({
                        title: "Success!",
                        text: "Your data has successfully inserted",
                        icon: "success",
                        button: "Ok!",
                      }
                         );
                    </script>
                    <?php

                  }
                

                }
                ;

                ?>
              </div>
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