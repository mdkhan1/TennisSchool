<?php
require_once('../../control/settings/cshowannounce.php');
session_start();
if($_SESSION['auths']!=1)
{
	forward('../../teacher/index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v2.2.0.17981
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tennis Sport </title>
    
       
	<link href="../../lib/calendar/calendar.css" rel="stylesheet" type="text/css" />
    <script src="clienthint.js"></script>
<script language="javascript" src="../../lib/calendar/calendar.js"></script>

    <script type="text/javascript" src="../../js/script.js"></script>
	<script type="text/javascript" src="../../js/xhtmlReq.js"></script>
<script type="text/javascript" src="../../js/globals.js"></script>
	
    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../../css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="../../css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

<link rel="stylesheet" href="../../lib/formValidator/css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		
		<script src="../../lib/formValidator/js/jquery.js" type="text/javascript"></script> 
	
		<script src="../../lib/formValidator/js/jquery.validationEngine.js" type="text/javascript"></script>


</head>
<body>
<div id="art-main">
        <div class="art-Sheet">
            <div class="art-Sheet-tl"></div>
          <div class="art-Sheet-tr"></div>
          <div class="art-Sheet-bl"></div>
          <div class="art-Sheet-br"></div>
          <div class="art-Sheet-cl"></div>
            <div class="art-Sheet-cr"></div>
            <div class="art-Sheet-cc"></div>
            <div class="art-Sheet-body">
              <div class="art-Header">
                    <div class="art-Header-png"></div>
                <div class="art-Header-jpeg"></div>
        <a href="#" class=" active"><span class="l"></span><span class="r"></span></a> </div>
              <div class="art-nav">
               	<div class="l"></div>
               </div>
              
                  <div class="art-contentLayout" align="center">
                 
			<div id="navbalk">
				<div id="navpos1">
                <a href="../admin/index.php">
                <img src="../../images/home.png" alt=""><br>Main Menu</a>
                &nbsp;&nbsp;
                </div>
                <div id="navpos2">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="../admin/settingMenu.php">
                <img src="../../images/authorize/folder64_autorisatie.png" alt="Autorisatie" height="32"><br> 
                &gt;settings</a>
              &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="#"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt=""><br> 
                &gt;Show announcement</a>&nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Announcements</div>
                    </div>
        		
                  
                  <br/>
                  <form name="form1" action="<?php echo "showannounce1.php"; ?>" method="post">
                  
                   <div align="left">
                  <div id="title_1" align="center" style="width: 160px" >select announcement</div>
                  </div>
                  <div class="content_body" align="left">
                 
                  <table  cellpadding="5" cellspacing="2">
                  <tr>
                  <td class="input_level"><input type="radio" value="1" name="radio_t" checked="checked" /></td>
            	<td><div class="input_level">Announcement</div></td>
           	 	<td><select id="user" class="input_txt" name="subject">
                
				<?php
				for($i=0;$i<$cnt;$i++)
				{
					$str = "<option value=\"".$record['id'][$i]."\">".$record['subject'][$i]."</option>";
					echo $str;
				}
				?>
                </select>
                </td>
                
                </tr>
                  <tr>
                  <td class="input_level"><input type="radio" value="2" name="radio_t" /></td>
            	<td><div class="input_level">Date</div></td>
           	 	<td><select id="user" class="input_txt" name="date">
                
				<?php
				for($i=0;$i<$cnt;$i++)
				{
					$str = "<option value=\"".$record['id'][$i]."\">".$record['date'][$i]."</option>";
					echo $str;
				}
				?>
                </select>
                </td>
                
                </tr>
                  </table>
                  </div>
                  
    
   
       
       
        <br/>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="show" value="Show"/>
        
        <a href="../admin/authorizeMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
