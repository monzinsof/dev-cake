<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title> Quanteam administrateur</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	    <?php echo $this->Html->css('bootstrap.min'); 
		      echo $this->Html->css('bootstrap-responsive.min'); 
			  echo $this->Html->css('bootstrap');
			  echo $this->Html->css('style');
			  echo $this->Html->css('style_responsive');
			  echo $this->Html->css('style_default');
			  echo $this->Html->css('font-awesome');
			   echo $this->Html->css('jquery.fancybox');
			   echo $this->Html->meta('content');
			  
		
		?>:
		<?php echo $this->fetch('css'); 
		?>
</head>
<body>
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="container-fluid">
    <!--LOGO & NAVIGATION BAR-->
    </div>
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN SIDEBAR -->
<div id="sidebar" class="nav-collapse collapse">
	</div>
<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->
<div id="main-content">
      <div class="container-fluid"> 
           <div class="row-fluid">
              <div class="span12">

            

                   <!-- END THEME CUSTOMIZER-->

                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     

             <h3 class="page-title">
                       Profile      
                  </h3>
               </div>
            </div>
        <div id="page" class="dashboard">
                 <div class="row-fluid circle-state-overview">
                 
                 
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-user turquoise-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#4CC5CD" data-bgColor="#ddd">
                                </div>
                                <div class="details">
                                    <div class="number">+120</div>
                                    <div class="title">Nouveaux candidats</div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-tags red-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="65" data-fgColor="#e17f90" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number">22</div>
                                    <div class="title">Nouveaux notes frais</div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-comments-alt gray-color"></i>
                                    </div>
                                    <input class="knob"  data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="15"  data-fgColor="#b9baba" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number">+387</div>
                                    <div class="title">Messageries</div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-eye-open purple-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="45" data-fgColor="#c8abdb" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number">12</div>
                                    <div class="title">Demandes vacances</div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-bar-chart blue-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="25" data-fgColor="#93c4e4" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number">278</div>
                                    <div class="title">CRA</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

</div>
</div>
</div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page">
      <!-- PAGE CONTENT GOES HERE-->
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
<!-- BEGIN FOOTER -->
<div id="footer">
  2013 &copy; Admin Lab Dashboard.
  <div class="span pull-right">
    <span class="go-top"><i class="icon-arrow-up"></i></span>
  </div>
</div>
  <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->

   <!-- Load javascripts at bottom, this will reduce page load time -->



       
        <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
      

		
        <?php echo $this->Html->script('bootstrap.min'); 
		      echo $this->Html->script('table-editable'); 
			  echo $this->Html->script('scripts.js');
			  echo $this->Html->script('respond');
			  echo $this->Html->script('excanvas');
			  echo $this->Html->script('jquery-1.8.3.min');
			  echo $this->Html->script('jquery.blockui');
			  echo $this->Html->script('jquery.cookie');
			  echo $this->Html->script('jquery.knob');			  
			  echo $this->Html->script('jquery-ui-1.9.2.custom.min');
			  echo $this->Html->script('jquery.slimscroll');
			  echo $this->Html->script('jquery.slimscroll.min');			  
			  echo $this->Html->script('jquery.flot.resize');
			  echo $this->Html->script('jquery.flot');			  
			  echo $this->Html->script('DT_bootstrap');
			  echo $this->Html->script('jquery.dataTables');
			  
			  echo $this->Html->script('jquery.uniform');			  
			  echo $this->Html->script('jquery.flot.resize');
			  echo $this->Html->script('jquery.flot');
			  
			  
		
		?>:
		<?php echo $this->fetch('script'); ?>
				
   <!-- ie8 fixes -->

   <!--[if lt IE 9]>



   <![endif]-->
        <script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>

 






   <script>

       jQuery(document).ready(function() {

           App.init();

           TableEditable.init();

       });

   </script>

</body>

<!-- END BODY -->

</html>

