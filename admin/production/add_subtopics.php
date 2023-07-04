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
        <th class="column-title">Invoice </th>
        <th class="column-title">Invoice Date </th>
        <th class="column-title">Order </th>
        <th class="column-title">Bill to Name </th>
        <th class="column-title">Status </th>
        <th class="column-title">Amount </th>
        <th class="column-title no-link last"><span class="nobr">Action</span>
        </th>
        <th class="bulk-actions" colspan="7">
          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
        </th>
      </tr>
    </thead>

    <tbody>
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000040</td>
        <td class=" ">May 23, 2014 11:47:56 PM </td>
        <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
        <td class=" ">John Blank L</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$7.45</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000039</td>
        <td class=" ">May 23, 2014 11:30:12 PM</td>
        <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
        </td>
        <td class=" ">John Blank L</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$741.20</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000038</td>
        <td class=" ">May 24, 2014 10:55:33 PM</td>
        <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
        </td>
        <td class=" ">Mike Smith</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$432.26</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000037</td>
        <td class=" ">May 24, 2014 10:52:44 PM</td>
        <td class=" ">121000204</td>
        <td class=" ">Mike Smith</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$333.21</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000040</td>
        <td class=" ">May 24, 2014 11:47:56 PM </td>
        <td class=" ">121000210</td>
        <td class=" ">John Blank L</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$7.45</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000039</td>
        <td class=" ">May 26, 2014 11:30:12 PM</td>
        <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
        </td>
        <td class=" ">John Blank L</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$741.20</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000038</td>
        <td class=" ">May 26, 2014 10:55:33 PM</td>
        <td class=" ">121000203</td>
        <td class=" ">Mike Smith</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$432.26</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000037</td>
        <td class=" ">May 26, 2014 10:52:44 PM</td>
        <td class=" ">121000204</td>
        <td class=" ">Mike Smith</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$333.21</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>

      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000040</td>
        <td class=" ">May 27, 2014 11:47:56 PM </td>
        <td class=" ">121000210</td>
        <td class=" ">John Blank L</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$7.45</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
      <tr class="odd pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">121000039</td>
        <td class=" ">May 28, 2014 11:30:12 PM</td>
        <td class=" ">121000208</td>
        <td class=" ">John Blank L</td>
        <td class=" ">Paid</td>
        <td class="a-right a-right ">$741.20</td>
        <td class=" last"><a href="#">View</a>
        </td>
      </tr>
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
		  <div class="x_content"></div>
									
					<div class="col-md-12 col-sm-12 ">
						<div class="x_panel">
							<div class="x_title">
								<h2>Text areas<small>Sessions</small></h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
								<div id="alerts"></div>
								<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
									<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
										<ul class="dropdown-menu">
										</ul>
									</div>

									<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
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
										<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
										<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
										<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
										<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
									</div>

									<div class="btn-group">
										<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
										<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
										<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
										<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
									</div>

									<div class="btn-group">
										<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
										<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
										<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
										<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
									</div>

									<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
										<div class="dropdown-menu input-append">
											<input class="span2" placeholder="URL" type="text" data-edit="createLink" />
											<button class="btn" type="button">Add</button>
										</div>
										<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
									</div>

									<div class="btn-group">
										<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
										<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
									</div>

									<div class="btn-group">
										<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
										<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
									</div>
								</div>

								<div id="editor-one" class="editor-wrapper"></div>

								<textarea name="descr" id="descr" style="display:none;"></textarea>

								<br />

								<div class="ln_solid"></div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 ">Resizable Text area</label>
									<div class="col-md-9 col-sm-9 ">
										<textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
									</div>
								</div>
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
  