<?php  require_once("../../../../../wp-load.php"); ?>



<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
    <link href="_css/newsletter-builder.css" rel="stylesheet" type="text/css" />

    <link href="_css/newsletter.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="_scripts/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="_scripts/jquery-ui-1.10.4.min.js"></script>
    <script type="text/javascript" src="_scripts/newsletter-builder.js"></script>
  </head>

  <body>
  <div id="newsletter-preloaded-export"></div>

  <?php include('modules.php'); ?>
  <?php //include('edit_modules.php'); ?>

  <div id="newsletter-builder" class="resize-height">
    <div id="newsletter-builder-area" class="resize-height resize-width">
      <div id="newsletter-builder-area-center">
        <div id="newsletter-builder-area-center-frame">
          <div id="newsletter-builder-area-center-frame-buttons">
            <div id="newsletter-builder-area-center-frame-buttons-add"><!-- <i class="fa fa-plus"></i> -->
              <span class="insert-title">Insert Module</span>
              <?php include('menu.php'); ?>
            </div>
            <!-- <div id="newsletter-builder-area-center-frame-buttons-reset">
              <a href="index.html"><i class="icon-reload-CCW"></i>&nbsp;&nbsp;Reset</a>
            </div> -->
          </div>
          <!-- <div style="width:600px; margin:0 auto;"> -->
            <div id="newsletter-builder-area-center-frame-content" style="min-height:50px">
              <div id="row-header" class="esf-row nav">
                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
                  <tr>
                  	<td class="container-padding content" style="padding-left:24px;padding-right:24px;padding-top:0px;padding-bottom:1px;background-color:#ffffff">
	                    <table width="100%">
                        <tr><td style="height:20px" colspan="2"></td></tr>
  	                    <tr>
  		                    <td width="300px"><div class="esf-row-edit" data-type="image"><img width="150" src="<?php echo PPRS_PLUGIN_URL ?>assets/images/newsletter_logo.png" /></div></td>
  		                    <td align='right'>
  		                    	<div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:right;color:#333333">
  		                    		<h1 class="esf-row-edit" data-type="title" style="line-height: 18px;font-size: 16px;color: #585858;margin:0;">*|Subject|*</h1>
  		                    	</div>
  		                    </td>
  	                    </tr>
                        <tr><td style="height:20px" colspan="2"></td></tr>
	                    </table>
                    </td>
                  </tr>
                </table>
              </div>

              <?php if(isset($_GET['post'])){

                echo get_post_meta($_GET['post'],'_pprs_campaign_template',true);

              } ?>

              <div id="row-footer" class="esf-row nav">
	            <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
	                <tr>
			        	<td class="container-padding content" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">
			                <table width="100%">
			                  <tr>
			                    <td width="300px">
			                    	<div class="esf-row-edit" data-type="title" style="color: #585858;padding-bottom:5px;font-size:12px">*|canspam|*</div>
			                    	<div class="esf-row-edit" data-type="title" style="color: #585858;font-size:12px">*|cancopy|*</div>
			                    </td>
			                    <td align="right" valign="middle" style="padding: 0;" cellpadding="0" cellspacing="0">
			                      <div class="add-new-button-area" data-for="icon">
                              <table>
  			                        <tr>
  			                          <td style="padding-left: 0px;"><div class="esf-row-edit" data-remove="true" data-type="icon"><a href="#"><img width="30px" src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/facebook.png" alt="facebook"></a></td>
  			                          <td style="padding-left: 5px;"><div class="esf-row-edit" data-remove="true" data-type="icon"><a href="#"><img width="30px" src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/google.png" alt="googleplus"></a></td>
  			                          <td style="padding-left: 5px;"><div class="esf-row-edit" data-remove="true" data-type="icon"><a href="#"><img width="30px" src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/linkedin.png" alt="linkedin"></a></td>
  			                          <td style="padding-left: 5px;"><div class="esf-row-edit" data-remove="true" data-type="icon"><a href="#"><img width="30px" src="<?php echo PPRS_PLUGIN_URL ?>assets/images/icons/twitter.png" alt="twitter"></a></td>
  			                        </tr>
  			                      </table>
                            </div>
			                    </td>
			                  </tr>
			                </table>
			            </td>
			        </tr>
			    </table>
              </div>

            </div>
            <div id="newsletter-border-image">
              <img style="width:100%" src="_assets/shadow.png" alt="" />
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</html>