<?php
//AIRMail3
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full icense text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2011, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/
//Edited By Arthur Hetem 13/06/2017
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
			  <?php require 'mail_menu.php' ;?>
              <form action="<?php echo url('/Mail');?>" method="post" enctype="multipart/form-data">
    <center>
        <b>Send email when new messages are received:</b> 
    <select name="email">
        <option value="0">No</option>
        <option value="1"<?php if(MailData::send_email(Auth::$userinfo->pilotid) === TRUE){echo 'selected="seclected"';} ?>>Yes</option>
    </select>
    <input type="hidden" name="action" value="save_settings" />
    <input type="submit" value="Save" />
    </center>
</form>
<center>
    <b><font size="1.5px">| AIRmail3 &copy 2011 | <a href="http://www.simpilotgroup.com">simpilotgroup.com</a> |</font></b>
</center>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>