<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of fi             must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gentallela Alela! | </title>
    <!-- favicon -->
    <link rel="icon" href="<?php echo $this->webroot;?>app/webroot/production/images/favicon.ico" />
		<!-- Bootstrap -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- iCheck -->
		<link href="<?php echo $this->webroot;?>app/webroot/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="<?php echo $this->webroot;?>app/webroot/build/css/custom.min.css" rel="stylesheet">
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="<?php echo $this->webroot;?>app/webroot/production/index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
						</div>
						<div class="clearfix"></div>
						<!-- menu profile quick info -->
						<div class="profile">
							<div class="profile_pic">
								<img src="<?php echo $this->webroot;?>app/webroot/production/images/img.jpg" alt="..." class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Welcome,</span>
								<h2>John Doe</h2>
							</div>
						</div>
						<!-- /menu profile quick info -->
						<br />
						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<h3>General</h3>
								<ul class="nav side-menu">
									<li>
										<a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/index.html">Dashboard</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/index2.html">Dashboard2</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/index3.html">Dashboard3</a></li>
										</ul>
									</li>
									<li>
										<a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/form.html">General Form</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/form_advanced.html">Advanced Components</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/form_validation.html">Form Validation</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/form_wizards.html">Form Wizard</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/form_upload.html">Form Upload</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/form_buttons.html">Form Buttons</a></li>
										</ul>
									</li>
									<li>
										<a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/general_elements.html">General Elements</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/media_gallery.html">Media Gallery</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/typography.html">Typography</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/icons.html">Icons</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/glyphicons.html">Glyphicons</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/widgets.html">Widgets</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/invoice.html">Invoice</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/inbox.html">Inbox</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/calendar.html">Calendar</a></li>
										</ul>
									</li>
									<li>
										<a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a tables.html">Tables</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/tables_dynamic.html">Table Dynamic</a></li>
										</ul>
									</li>
									<li>
										<a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/chartjs.html">Chart JS</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/chartjs2.html">Chart JS2</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/morisjs.html">Moris JS</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/echarts.html">ECharts</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/other_charts.html">Other Charts</a></li>
										</ul>
									</li>
									<li>
										<a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/fixed_sidebar.html">Fixed Sidebar</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/fixed_footer.html">Fixed Footer</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="menu_section">
								<h3>Live On</h3>
								<ul class="nav side-menu">
									<li>
										<a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/e_commerce.html">E-commerce</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/projects.html">Projects</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/project_detail.html">Project Detail</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/contacts.html">Contacts</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/profile.html">Profile</a></li>
										</ul>
									</li>
									<li>
										<a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/page_403.html">403 Error</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/page_404.html">404 Error</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/page_500.html">500 Error</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/plain_page.html">Plain Page</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/login.html">Login Page</a></li>
											<li><a href="<?php echo $this->webroot;?>app/webroot/production/pricing_tables.html">Pricing Tables</a></li>
										</ul>
									</li>
									<li>
										<a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="#level1_1">Level One</a>
											<li>
												<a>Level One<span class="fa fa-chevron-down"></span></a>
												<ul class="nav child_menu">
													<li class="sub_menu"><a href="<?php echo $this->webroot;?>app/webroot/production/level2.html">Level Two</a>
													</li>
													<li><a href="#level2_1">Level Two</a>
													</li>
													<li><a href="#level2_2">Level Two</a>
													</li>
												</ul>
											</li>
											<li><a href="#level1_2">Level One</a>
											</li>
										</ul>
									</li>
									<li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /sidebar menu -->
						<!-- /menu footer buttons -->
						<div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Logout">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</a>
						</div>
						<!-- /menu footer buttons -->
					</div>
				</div>
				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav class="" role="navigation">
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>
							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="<?php echo $this->webroot;?>app/webroot/production/images/img.jpg" alt="">John Doe
									<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										<li><a href="javascript:;"> Profile</a></li>
										<li>
											<a href="javascript:;">
											<span class="badge bg-red pull-right">50%</span>
											<span>Settings</span>
											</a>
										</li>
										<li><a href="javascript:;">Help</a></li>
										<li><a href="<?php echo $this->webroot;?>app/webroot/production/login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
									</ul>
								</li>
								<li role="presentation" class="dropdown">
									<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
									</a>
									<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
										<li>
											<a>
											<span class="image"><img src="<?php echo $this->webroot;?>app/webroot/production/images/img.jpg" alt="Profile Image" /></span>
											<span>
											<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
											Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
											</a>
										</li>
										<li>
											<a>
											<span class="image"><img src="<?php echo $this->webroot;?>app/webroot/production/images/img.jpg" alt="Profile Image" /></span>
											<span>
											<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
											Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
											</a>
										</li>
										<li>
											<a>
											<span class="image"><img src="<?php echo $this->webroot;?>app/webroot/production/images/img.jpg" alt="Profile Image" /></span>
											<span>
											<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
											Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
											</a>
										</li>
										<li>
											<a>
											<span class="image"><img src="<?php echo $this->webroot;?>app/webroot/production/images/img.jpg" alt="Profile Image" /></span>
											<span>
											<span>John Smith</span>
											<span class="time">3 mins ago</span>
											</span>
											<span class="message">
											Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
											</a>
										</li>
										<li>
											<div class="text-center">
												<a>
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
												</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /top navigation -->





				<!-- page content -->
				<div class="right_col" role="main">
          <?php echo $this->Session->flash(); ?>
          <?php echo $this->fetch('content'); ?>			
				</div>
				<!-- /page content -->





				<!-- footer content -->
				<footer>
					<div class="pull-right">
						Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
					</div>
					<div class="clearfix"></div>

          <?php echo $this->element('sql_dump'); ?>

				</footer>
				<!-- /footer content -->
			</div>
      
		</div>


		<!-- jQuery -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="<?php echo $this->webroot;?>app/webroot/vendors/nprogress/nprogress.js"></script>

    <!-- Datatables -->
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo $this->webroot;?>app/webroot/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo $this->webroot;?>app/webroot/build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
          $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
            {
            extend: "copy",
            className: "btn-sm"
            },
            {
            extend: "csv",
            className: "btn-sm"
            },
            {
            extend: "excel",
            className: "btn-sm"
            },
            {
            extend: "pdfHtml5",
            className: "btn-sm"
            },
            {
            extend: "print",
            className: "btn-sm"
            },
          ],
          responsive: true
          });
        }
        };
      
        TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
          handleDataTableButtons();
          }
        };
        }();
      
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
        keys: true
        });
      
        $('#datatable-responsive').DataTable();
      
        $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
        });
      
        var table = $('#datatable-fixed-header').DataTable({
        fixedHeader: true
        });
      
        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->

	</body>
</html>