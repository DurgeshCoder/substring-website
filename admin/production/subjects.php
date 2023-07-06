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
$subject_dao=new SubjectDao($conn);

$subjects=$subject_dao->get_subjects();





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

<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th>
          <input type="checkbox" id="check-all" class="flat">
        </th>
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
          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
        </th>
      </tr>
    </thead>

    <tbody>
      <?php
      foreach($subjects as $key=> $value){
        ?>
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" "> <?= $value['sub_name'] ?></td>
        <td class=" "> <?= $value['fee'] ?></td>
        <td class=" "> <?= $value['discount'] ?></td>
        <td class=" "> <?= $value['fee_after_discount'] ?></td>
        <td class=" "> <?= $value['slug'] ?></td>
        <td class="a-right a-right "> <?= $value['language'] ?></td>
        <td class=" last"><a href="#"> <?= $value['rating'] ?><i class="success fa fa-long-arrow-up"></i></a>
       </td>
        <td class=" last"><a  href="#" class="btn btn-success">View </a><a href="#"  class="btn btn-warning">Edit </a><a href="#"  class="btn btn-danger">Delete </a>
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
  