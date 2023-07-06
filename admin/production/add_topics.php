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

<?php 
	include "../components/bootstraplink.php";
    include "../../helper/config.php";
?>
	
  </head>

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
                        <select type="text" id="subject_select_box" name="subject_name" class="form-control">
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <form class="form-horizontal form-label-left"  method="post">
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Topic Tittle</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" name="subject_name" class="form-control">
                      </div>
                    </div>
                  </div>
                 <div class="btn  d-flex justify-content-center" >
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>  
                 </div>

                </form>

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

        <script src=" <?= $base_url ?>/admin/scripts/admin.js"></script>
        <script>
     
            get_subjects().then(data => {

                console.log(data)
                const selectBox = document.getElementById("subject_select_box")
                let elements = `<option disabled selected>---select subject---</option>`;
                data.forEach(item => {
                    elements += `<option>${item.sub_name} </option > `;
            });
            selectBox.innerHTML=elements;


        });
        </script>
    </body>
  </html>
