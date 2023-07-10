<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/man.png" type="image/ico" />

  <title>Admin|Dashboard</title>

  <?php include "../components/bootstraplink.php"; ?>
</head>
<?php

include "../../helper/subject_dao.php";
include "../../helper/database.php";
$subject_dao = new SubjectDao($conn);

$subjects = $subject_dao->get_subjects();

$id = $_GET['id'];


$subject_dao->delete_subject($id);

$number = 1;

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

          <h3>Subjects</h3>

          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr class="headings">
                  <!-- <th>
          <input type="checkbox" id="check-all" class="flat">
        </th> -->
                  <th class="column-title">#</th>
                  <th class="column-title">Subject </th>
                  <th class="column-title">Fee </th>
                  <th class="column-title">Discount</th>
                  <th class="column-title">Fee After Discount </th>
                  <th class="column-title">Slug </th>
                  <th class="column-title">Language </th>
                  <th class="column-title">Rating </th>
                  <th class="column-title no-link last"><span class="nobr">Action</span>
                  </th>
                  <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">
                      </span> ) <i class="fa fa-chevron-down"></i></a>
                  </th>
                </tr>
              </thead>

              <tbody>
                <?php
                foreach ($subjects as $key => $value) {
                  ?>
                  <tr class="even pointer">
                    <!-- <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td> -->
                    <td class=" ">
                      <?= $number++; ?>.
                    </td>
                    <td class=" ">
                      <?= $value['sub_name'] ?>
                    </td>
                    <td class=" ">
                      <?= $value['fee'] ?>
                    </td>
                    <td class=" ">
                      <?= $value['discount'] ?>
                    </td>
                    <td class=" ">
                      <?= $value['fee_after_discount'] ?>
                    </td>
                    <td class=" ">
                      <?= $value['slug'] ?>
                    </td>
                    <td class="a-right a-right ">
                      <?= $value['language'] ?>
                    </td>
                    <td class=" last"><a href="#">
                        <?= $value['rating'] ?><i class="success fa fa-long-arrow-up"></i>
                      </a>
                    </td>
                    <td class=" last"><a href="subject_in_detail.php?slug=<?= $value["slug"] ?>" type="button"
                        class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i
                          class="fa fa-eye"></i></a>
                      <a href="updateSubject.php?id=<?= $value['sub_id'] ?>&
        subject=<?= $value['sub_name'] ?>&
        fe=<?= $value['fee'] ?>&
        dis=<?= $value['discount'] ?>&
        dis_after=<?= $value['fee_after_discount'] ?>&
        slg=<?= $value['slug'] ?>&
        lan= <?= $value['language'] ?>&
        rate=<?= $value['rating'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                      <a href="?id=<?= $value['sub_id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                <?php
                }
                function select()
                {
                  echo "The select function is called.";
                }
                ?>
              </tbody>
            </table>
          </div>


        </div>
      </div>
      <!-- /main content -->




      <!-- model for student detail -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Subject Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="x_content">
                <div class="row d-flex justify-content-center">
                  <div class="col-lg-9">
                    <!-- subject Section Title -->
                    <div class="container section-title " data-aos="fade-up">
                      <h2>Summary of the Course</h2>
                    </div><!-- End Section Title -->
                    <div class="description" data-aos="fade-up">

                      <p>
                        This is summary of the Subject
                      </p>

                    </div>
                    <!-- end -->




                    <!-- subject Section Title -->
                    <div class="container section-title " data-aos="fade-up">
                      <h2>Description of the Course</h2>
                    </div><!-- End Section Title -->

                    <div class="description" data-aos="fade-up">

                      <p>
                        this is detail of subject
                      </p>

                    </div>

                    <div class="table">
                      <table class="table table-sm">
                        <caption>List of users</caption>
                        <thead>
                         <tr>
                          <th>#</th>
                          <th>Subject Name</th>
                          <th>Fees</th>
                          

                         </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>1</td>
                          <td>Java</td>
                          <td>2000</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end -->


                  </div>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
  </div>
  </div>


  <!-- footer content -->

  <?php include "../components/footer.php" ?>
  <!-- /footer content -->
  </div>
  </div>
  <?php include "../components/commonscript.php"; ?>

</body>

</html>