<?php if (!defined('THINK_PATH')) exit();?>﻿

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>easywayordering</title>

<script type="text/javascript" src="__PUBLIC__/__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/__PUBLIC__/js/jquery-ui-1.8.22.custom.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Togle.js"></script>
<link href="__PUBLIC__/css/adminMain.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/south-street/jquery-ui-1.8.22.custom.css" rel="stylesheet" type="text/css" />


<!-- GOOGLE API KEY FOR DREAM HOST:  AIzaSyCkRkSd4hQornJOYjYMoHqi3-Wv4hVOOgg-->
<!-- GOOGLE API KEY FOR LOCAL PROJECT:  ABQIAAAAPpaOjFQ_miNP74G3g3O7oBTTwBGlz0OqYPu6tmNrU0ToxRrT5hQhlPr8PLUNIxb0D5FrOa5lJ1tp6w-->
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBT2sOPbIDLELZVjk6vPcGs87xqabq2jcs&sensor=false" type="text/javascript"></script>
<!--<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyBT2sOPbIDLELZVjk6vPcGs87xqabq2jcs" type="text/javascript"></script> -->
</script>
<script type="text/javascript" language="javascript">
	function initialize() {
		geocoder = new google.maps.Geocoder();
	}
</script>

</head>

﻿<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<body>
<div id="maincontainer">
	<div id="header">
		<div id="top">
			<div id="top_left"></div>
			<div id="top_right"></div>
		</div><!--End top Div-->
    </div><!--End header Div-->        
    <div id="text_holder">
        <div id="logo_area">
        	<div id="logo"><img src="__PUBLIC__/Images/man_img.png" width="57" height="74" /></div>
        	<div id="logo_text">ADMINISTRATION PANEL</div>
        	<div id="login_text"><strong>Welcome</strong>&nbsp;&nbsp;restaurateur, <?php echo ($_SESSION['']); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="__APP__/Public/logout/">Log out</a></div>
        	<br style="clear:both" />
        </div>                
        <!--End logo_area Div-->
        <div id="page_content">
        	<div id="navigation_links">
        		<div id="navigation">
        			<div class="links selected"><a href="__APP__/Index" >Restaurants</a></div>
        			<div class="links not"><a href="__APP__/Public/changePwd" >Change Password</a></div>
                    <div class="links not"><a href="__APP__/Public/addRestaurant" >Create New Restaurant</a></div>
        			<!-- <div class="links not"><a href="apikey.html" >API Key</a></div>
                    <div class="links not"><a href="apikey.html" >Restaurant Review </a></div> -->
        			<br style="clear:both" />
        		</div>
        		<!--End navigation Div-->
            </div>
            <!--End navigation_links Div-->
            <div id="tab_items">
            	<ul>
            		<li><a href="__APP__/Index/index" class="selected_red">Restaurants Listing</a></li>
            	</ul>
            </div>
<div id="tab_items">
  <ul>
    <li><a href="?mod=menus&catid=856"class="">Sub Menus Listing</a></li> | 
    <li><a href="?mod=menus&item=addmenu&restid=856" class="">Add Menu</a></li> |
    <li><a href="?mod=menus&item=add&catid=856" class="">Add Sub Menu</a></li> 
    
    		| <li><a href="#" class="selected_red">Add Attribute</a></li>
    </ul>
</div>
<br>
<div id="main_heading">Add Attribute</div>
<div class="form_outer">
  <form name="form1" method="post" action="">
    <table width="500" border="0"  cellpadding="4" cellspacing="0">
    	       <tr align="left" valign="top"> 
      <td width="265"><strong>Option Name</strong></td>
      <td width="284"><input name="option_name" type="text" id="option_name" size="20"> 
      </td>
    </tr>
    <tr align="left" valign="top"> 
      <td><strong>Option Layout</strong> (Choose One) </td>
      <td><input name="option_layout" type="radio" value="1" checked>
        Check Boxes (choose all that apply) <br> <input name="option_layout" type="radio" value="0">
        Radio Buttons (choose one option) </td>
    </tr>
    <tr align="left" valign="top"> 
      <td>Apply This Attribute To All Menu Items In Same Sub-Category As 
        This Item </td>
      <td><input name="apply_subcat" type="checkbox" id="apply_subcat" value="1"></td>
    </tr>
    <tr align="left" valign="top">
      <td>Make This Attribute Required For Ordering.<br></td>
      <td><input name="required" type="checkbox" id="required" value="1" ></td>
    </tr>
    <tr align="left" valign="top"> 
      <td colspan="2">
          <div class="msg_warning">
            Enter Option Values Below <strong>Following These 
            Instructions</strong>:<br>
            - Enter each option on a new line<br>
            - To add an amount, list as &quot;option=1.00&quot; (this adds 
            $1 to the base price of the item)<br>
            - To subtract an amount, list as &quot;option=-0.50&quot; (this 
            subtracts $0.50 from the base price)
          </div></td>
    </tr>
    <tr align="left" valign="top"> 
      <td colspan="2"><textarea name="option_title" cols="50" rows="6" id="option_title"></textarea> 
      </td>
    </tr>
    <tr align="left" valign="top"> 
      <td colspan="2">
      </td>
    </tr>
    <tr align="left" valign="top"> 
      <td colspan="2"><div align="center"></div>
        <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
          <input type="submit" name="submit" value="Add Attribute To Menu Item(s)">
          </font> 
          <input type="hidden" name="pid" value="76577">
           <input type="hidden" name="catid" value="856">
        </div></td>
    </tr>
  </table>
  </form>
</div>
  </div>


	
         </div>   
            
        </div><!--End text_holder Div-->	
        <div id="footer">
            <div id="bottom">
                <div id="bottom_left"></div>
                <div id="bottom_right"></div>
            </div><!--End bottom Div--><br style="clear:both" />
        </div><!--End footer Div-->
    </div><!--End header Div-->
</div><!--End maincontainer Div-->
</body>
</html>