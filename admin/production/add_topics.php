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
									<!-- start form for validation -->
									<form class="form-horizontal form-label-left">

										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Default Input</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Default Input">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Disabled Input </label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Read-Only Input</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<textarea class="form-control" rows="3" placeholder="Date Of Birth"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Password</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="password" class="form-control" value="passwordonetwo">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">AutoComplete</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="form-control">
													<option>Choose option</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Custom</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NM">New Mexico</option>
													<option value="ND">North Dakota</option>
													<option value="UT">Utah</option>
													<option value="WY">Wyoming</option>
													<option value="AR">Arkansas</option>
													<option value="IL">Illinois</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="OK">Oklahoma</option>
													<option value="SD">South Dakota</option>
													<option value="TX">Texas</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Grouped</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_group form-control">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Multiple</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_multiple form-control" multiple="multiple">
													<option>Choose option</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
													<option>Option five</option>
													<option>Option six</option>
												</select>
											</div>
										</div>

										<div class="control-group row">
											<label class="control-label col-md-3 col-sm-3 ">Input Tags</label>
											<div class="col-md-9 col-sm-9 ">
												<input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
												<div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
												<br>
												<small class="text-navy">Normal Bootstrap elements</small>
											</label>

											<div class="col-md-9 col-sm-9 ">
												<div class="checkbox">
													<label>
														<input type="checkbox" value=""> Option one. select more than one options
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" value=""> Option two. select more than one options
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
													</label>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
												<br>
												<small class="text-navy">Normal Bootstrap elements</small>
											</label>

											<div class="col-md-9 col-sm-9 ">
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" checked="checked"> Checked
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat"> Unchecked
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" disabled="disabled"> Disabled
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" checked name="iCheck"> Checked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck"> Unchecked
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Switch</label>
											<div class="col-md-9 col-sm-9 ">
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" checked /> Checked
													</label>
												</div>
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" /> Unchecked
													</label>
												</div>
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
													</label>
												</div>
												<div class="">
													<label>
														<input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
													</label>
												</div>
											</div>
										</div>


										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="button" class="btn btn-primary">Cancel</button>
												<button type="reset" class="btn btn-primary">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>

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
  