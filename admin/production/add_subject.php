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
                        <input type="text" name="subject_name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Short Description</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <textarea type="text" name="short_description" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Long Description</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <div class="col-md-12 col-sm-12 ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Text areas for Long Description<small>Sessions</small></h2>

                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div id="alerts"></div>
                              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i
                                      class="fa fa-font"></i><b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                  </ul>
                                </div>

                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                      class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a data-edit="fontSize 5">
                                        <p style="font-size:17px">Huge</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 3">
                                        <p style="font-size:14px">Normal</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a data-edit="fontSize 1">
                                        <p style="font-size:11px">Small</p>
                                      </a>
                                    </li>
                                  </ul>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i
                                      class="fa fa-bold"></i></a>
                                  <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i
                                      class="fa fa-italic"></i></a>
                                  <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                      class="fa fa-strikethrough"></i></a>
                                  <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                      class="fa fa-underline"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i
                                      class="fa fa-list-ul"></i></a>
                                  <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                      class="fa fa-list-ol"></i></a>
                                  <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                      class="fa fa-dedent"></i></a>
                                  <a class="btn" data-edit="indent" title="Indent (Tab)"><i
                                      class="fa fa-indent"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                      class="fa fa-align-left"></i></a>
                                  <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                      class="fa fa-align-center"></i></a>
                                  <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                      class="fa fa-align-right"></i></a>
                                  <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                      class="fa fa-align-justify"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                      class="fa fa-link"></i></a>
                                  <div class="dropdown-menu input-append">
                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                    <button class="btn" type="button">Add</button>
                                  </div>
                                  <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i
                                      class="fa fa-cut"></i></a>
                                </div>

                                <div class="btn-group">
                                  <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i
                                      class="fa fa-picture-o"></i></a>
                                  <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                                    data-edit="insertImage" />
                                </div>

                                <div class="btn-group">
                                  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i
                                      class="fa fa-undo"></i></a>
                                  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i
                                      class="fa fa-repeat"></i></a>
                                </div>
                              </div>

                              <div id="editor-one" class="editor-wrapper"></div>

                              

                              <textarea type="text" id="descr" name="long_description" style="display:block;"></textarea>



                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Fee</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="number" name="fee" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Discount</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="number" name="discount" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Fee After Discount</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input  type="number" name="fee_after_discount" class="form-control">
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
                        <input type="text"  name="slug" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Language</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" name="language" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Rating</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="number" name="rating" class="form-control">
                      </div>
                    </div>
                  </div>
                 <div class="btn">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>  
                 </div>

                </form>
                <?php 
                include "../../helper/subject_dao.php";
                include "../../helper/database.php";
                $subject_dao=new SubjectDao($conn);
                if (isset($_POST['submit'])) {
                  $longD  = $_POST['long_description'];
                  print_r( $longD);
                $subjectData = array(
                  "subjectName"=> $_POST['subject_name'],
                  "shortDes"=> $_POST['short_description'],
                  "longDes"=> $_POST['long_description'],
                  "Fee"=> $_POST['fee'],
                  "Discount"=> $_POST['discount'],
                  "discountFee"=> $_POST['fee_after_discount'],
                  "Slug"=> $_POST['slug'],
                  "Language"=> $_POST['language'],
                  "Rating"=> $_POST['rating'],
                );
                  
                 $subject_dao->insert_subject_data($subjectData);

           
                 if($subjectData){
                  ?>
                 
                  <script>
                  swal({
        title: "Success!",
        text: "Your data has successfully inserted",
        icon: "success",
        button: "Ok!",
      });
                </script>
                 <?php
                 }
                
                  };
                
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