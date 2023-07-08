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
    <?php include "../../components/important_links.php" ?>
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
$subject = $newSubject[0];

$tottal_rating = 5;


$topicnumber = 1;

$reset = null;
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

<h3>Topic</h3>

<div class="table-responsive text-center">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th>
          <input type="checkbox" id="check-all" class="flat">
        </th>
        <th class="column-title"># </th>
        <th class="column-title">Topic </th>

        <th class="column-title no-link last"><span class="nobr">Action</span>
        </th>
        <th class="bulk-actions" colspan="7">
          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
        </th>
      </tr>
    </thead>

    <tbody>
    <?php
                      foreach ($subject['topics'] as $topics => $value) {
                        ?>
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">1</td> 
        <td class=" "> <?= $value['topic'] ?> </td>
      
        <td class=" last"><a href="#"  class="btn btn-warning">Click </a>
        </td>
        </td>
      </tr>
    <?php 
      }
    ?>
    </tbody>
  </table>
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
  