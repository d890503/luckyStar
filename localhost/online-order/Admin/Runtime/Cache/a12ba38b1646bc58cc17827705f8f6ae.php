<?php if (!defined('THINK_PATH')) exit();?>﻿

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>easywayordering</title>

<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery-ui-1.8.22.custom.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Togle.js"></script>
<link href="__PUBLIC__/css/adminMain.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/south-street/jquery-ui-1.8.22.custom.css" rel="stylesheet" type="text/css" />


<!-- GOOGLE API KEY FOR DREAM HOST:  AIzaSyCkRkSd4hQornJOYjYMoHqi3-Wv4hVOOgg-->
<!-- GOOGLE API KEY FOR LOCAL PROJECT:  ABQIAAAAPpaOjFQ_miNP74G3g3O7oBTTwBGlz0OqYPu6tmNrU0ToxRrT5hQhlPr8PLUNIxb0D5FrOa5lJ1tp6w-->
<!-- <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBT2sOPbIDLELZVjk6vPcGs87xqabq2jcs&sensor=false" type="text/javascript"></script> -->
<!--<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyBT2sOPbIDLELZVjk6vPcGs87xqabq2jcs" type="text/javascript"></script> -->
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
        			<div class="links selected"><a href="__APP__/index" >Restaurants</a></div>
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
   	
   <div id="navigation_links">
   <div id="navigation">
    
    <div class="links "><a href="?mod=resturant&item=restedit&cid=856" >Restaurant</a></div>
    <div class="links "><a href="?mod=order&cid=856" class="">Orders(1)</a></div>
   	<div class="links "><a href="?mod=customer&cid=856" class="">Customers(0)</a></div>
    <div class="links selected"><a href="?mod=coupon&cid=856" class="">Coupons</a></div>
    <div class="links "><a href="?mod=menus&cid=856"class="">Menus</a></div>
    <div class="links "><a href="?mod=mailing_list&cid=856"class="">Mailing List</a></div>
    			<div class="links "><a href="?mod=analytics&cid=856"class="">Analytics</a></div>
                	    <br style="clear:both" />
  </div>
</div>
<div id="tab_items">
	<ul>
    	<li>
			<a href="?mod=coupon&item=main&cid=856">Edit Exisiting Coupons</a>
        </li>|
        <li>
        	<a href="?mod=coupon&item=add&cid=856">Add New Coupon</a>
        </li>
     </ul>
</div>

<script src="../js/jquery.js" type="text/javascript"></script>
<link href="../css/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="../js/facebox.js" type="text/javascript"></script>
<script language="javascript">
	jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox();
	});
</script>
<!--//////////////////////////////////////////////////////////START SCRIPT FOR CALLENTER////////////////////////////////////////////////////////-->
<SCRIPT type="text/javascript">
var bas_cal,dp_cal,ms_cal;      
window.onload = function () {
	stime = new Date();
	//bas_cal = new Epoch('bas_cal','flat',document.getElementById('bas_cal'));
	dp_cal  = new Epoch('dp_cal','popup',document.getElementById('event_date'));
	dp_cal_end  = new Epoch('dp_cal_end','popup',document.getElementById('coupon_date'));
	//ms_cal  = new Epoch('ms_cal','flat',document.getElementById('ms_cal'),true);
	//document.getElementById('load_time').firstChild.nodeValue = '3 calendars loaded in ' +  ((new Date() - stime)/1000.0).toFixed(3) +' seconds.';
};

 
</SCRIPT>
<TABLE id="dp_cal_calendar" class="calendar" classname="calendar" style="position: absolute; top: 800px; left: 310px; display: none; ">
  <TBODY>
    <TR>
      <TD><DIV class="mainheading" classname="mainheading">
          <INPUT type="button" value="&lt;" title="Go to the previous month">
          <SELECT>
            <OPTION value="0">Jan</OPTION>
            <OPTION value="1">Feb</OPTION>
            <OPTION value="2">Mar</OPTION>
            <OPTION value="3">Apr</OPTION>
            <OPTION value="4">May</OPTION>
            <OPTION value="5">Jun</OPTION>
            <OPTION value="6">Jul</OPTION>
            <OPTION value="7">Aug</OPTION>
            <OPTION value="8" selected="selected">Sep</OPTION>
            <OPTION value="9">Oct</OPTION>
            <OPTION value="10">Nov</OPTION>
            <OPTION value="11">Dec</OPTION>
          </SELECT>
          <SELECT>
            <OPTION value="2006">2006</OPTION>
            <OPTION value="2007">2007</OPTION>
            <OPTION value="2008">2008</OPTION>
            <OPTION value="2009">2009</OPTION>
            <OPTION value="2010" selected="selected">2010</OPTION>
            <OPTION value="2011">2011</OPTION>
            <OPTION value="2012">2012</OPTION>
          </SELECT>
          <INPUT type="button" value="&gt;" title="Go to the next month">
        </DIV></TD>
    </TR>
    <TR>
      <TD><TABLE class="cells" classname="cells">
          <THEAD class="caldayheading" classname="caldayheading">
            <TR>
              <TH class="wkhead" classname="wkhead">
              <TH>S</TH>
              <TH>M</TH>
              <TH>T</TH>
              <TH>W</TH>
              <TH>T</TH>
              <TH>F</TH>
              <TH>S</TH>
            </TR>
          </THEAD>
          <TBODY>
            <TR>
              <TD class="wkhead" classname="wkhead">35</TD>
              <TD class="notmnth" classname="notmnth">29</TD>
              <TD class="notmnth" classname="notmnth">30</TD>
              <TD class="notmnth" classname="notmnth">31</TD>
              <TD class="wkday" classname="wkday">1</TD>
              <TD class="wkday" classname="wkday">2</TD>
              <TD class="wkday" classname="wkday">3</TD>
              <TD class="wkend" classname="wkend">4</TD>
            </TR>
            <TR>
              <TD class="wkhead" classname="wkhead">36</TD>
              <TD class="wkend" classname="wkend">5</TD>
              <TD class="wkday" classname="wkday">6</TD>
              <TD class="wkday" classname="wkday">7</TD>
              <TD class="wkday" classname="wkday">8</TD>
              <TD class="wkday" classname="wkday">9</TD>
              <TD class="wkday" classname="wkday">10</TD>
              <TD class="wkend" classname="wkend">11</TD>
            </TR>
            <TR>
              <TD class="wkhead" classname="wkhead">37</TD>
              <TD class="wkend" classname="wkend">12</TD>
              <TD class="wkday" classname="wkday">13</TD>
              <TD class="wkday" classname="wkday">14</TD>
              <TD class="wkday" classname="wkday">15</TD>
              <TD class="wkday" classname="wkday">16</TD>
              <TD class="wkday" classname="wkday">17</TD>
              <TD class="wkend" classname="wkend">18</TD>
            </TR>
            <TR>
              <TD class="wkhead" classname="wkhead">38</TD>
              <TD class="wkend" classname="wkend">19</TD>
              <TD class="wkday" classname="wkday">20</TD>
              <TD class="wkday" classname="wkday">21</TD>
              <TD class="wkday" classname="wkday">22</TD>
              <TD class="wkday" classname="wkday">23</TD>
              <TD class="wkday" classname="wkday">24</TD>
              <TD class="wkend" classname="wkend">25</TD>
            </TR>
            <TR>
              <TD class="wkhead" classname="wkhead">39</TD>
              <TD class="wkend" classname="wkend">26</TD>
              <TD class="wkday" classname="wkday">27</TD>
              <TD class="wkday" classname="wkday">28</TD>
              <TD class="wkday" classname="wkday">29</TD>
              <TD class="wkday curdate" classname="wkday curdate">30</TD>
              <TD class="notmnth" classname="notmnth">1</TD>
              <TD class="notmnth" classname="notmnth">2</TD>
            </TR>
            <TR>
              <TD class="wkhead" classname="wkhead">40</TD>
              <TD class="notmnth" classname="notmnth">3</TD>
              <TD class="notmnth" classname="notmnth">4</TD>
              <TD class="notmnth" classname="notmnth">5</TD>
              <TD class="notmnth" classname="notmnth">6</TD>
              <TD class="notmnth" classname="notmnth">7</TD>
              <TD class="notmnth" classname="notmnth">8</TD>
              <TD class="notmnth" classname="notmnth">9</TD>
            </TR>
          </TBODY>
        </TABLE></TD>
    </TR>
    <TR>
      <TD><DIV>
          <INPUT type="button" value="Clear" title="Clears any dates selected on the calendar">
          <INPUT type="button" value="Close" title="Close the calendar" class="closeBtn" classname="closeBtn">
        </DIV></TD>
    </TR>
  </TBODY>
</TABLE>
<!--///////////////////////////////////////////////////////END SCRIPT FOR CALLENTER///////////////////////////////////////////////////////////////--> 
<script language="javascript" type="text/javascript">
	function radioselect( radioVal ) {
		document.getElementById(radioVal).checked = true;
	}
</script>
<style type="text/css">
#dhtmltooltip{
position: absolute;
width: 300px;
border: 2px solid #E4E4E4;
padding: 5px;
background-color: #F4F4F4;
visibility: hidden;
z-index: 100;
font-size:11px;
color:#585858;
}

#dhtmltooltip span {
	font-size:14px;
	font-weight:bold;
	color:#000;
	}

</style>
<div id="dhtmltooltip"></div>
<script type="text/javascript">

/***********************************************
* Cool DHTML tooltip script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var offsetxpoint=-60 //Customize x offset of tooltip
var offsetypoint=20 //Customize y offset of tooltip
var ie=document.all
var ns6=document.getElementById && !document.all
var enabletip=false
if (ie||ns6)
var tipobj=document.all? document.all["dhtmltooltip"] : document.getElementById? document.getElementById("dhtmltooltip") : ""

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function ddrivetip(thetext, thecolor, thewidth){
if (ns6||ie){
if (typeof thewidth!="undefined") tipobj.style.width=thewidth+"px"
if (typeof thecolor!="undefined" && thecolor!="") tipobj.style.backgroundColor=thecolor
tipobj.innerHTML=thetext
enabletip=true
return false
}
}

function positiontip(e){
if (enabletip){
var curX=(ns6)?e.pageX : event.clientX+ietruebody().scrollLeft;
var curY=(ns6)?e.pageY : event.clientY+ietruebody().scrollTop;
//Find out how close the mouse is to the corner of the window
var rightedge=ie&&!window.opera? ietruebody().clientWidth-event.clientX-offsetxpoint : window.innerWidth-e.clientX-offsetxpoint-20
var bottomedge=ie&&!window.opera? ietruebody().clientHeight-event.clientY-offsetypoint : window.innerHeight-e.clientY-offsetypoint-20

var leftedge=(offsetxpoint<0)? offsetxpoint*(-1) : -1000

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<tipobj.offsetWidth)
//move the horizontal position of the menu to the left by it's width
tipobj.style.left=ie? ietruebody().scrollLeft+event.clientX-tipobj.offsetWidth+"px" : window.pageXOffset+e.clientX-tipobj.offsetWidth+"px"
else if (curX<leftedge)
tipobj.style.left="5px"
else
//position the horizontal position of the menu where the mouse is positioned
tipobj.style.left=curX+offsetxpoint+"px"

//same concept with the vertical position
if (bottomedge<tipobj.offsetHeight)
tipobj.style.top=ie? ietruebody().scrollTop+event.clientY-tipobj.offsetHeight-offsetypoint+"px" : window.pageYOffset+e.clientY-tipobj.offsetHeight-offsetypoint+"px"
else
tipobj.style.top=curY+offsetypoint+"px"
tipobj.style.visibility="visible"
}
}

function hideddrivetip(){
if (ns6||ie){
enabletip=false
tipobj.style.visibility="hidden"
tipobj.style.left="-1000px"
tipobj.style.backgroundColor=''
tipobj.style.width=''
}
}
document.onmousemove=positiontip
</script>
<LINK rel="stylesheet" type="text/css" href="css/epoch_styles.css">
<script type="text/javascript" src="js/epoch_classes.js"></script>
<div id="main_heading">ADD COUPONS</div>
<div class="form_outer">
  <form name="form1" method="post" action="__APP__/Coupons/addCoupons"  >
    <table width="100%" border="0" cellpadding="4" cellspacing="0">
      <tr align="left" valign="top">
        <td width="172"><strong>Coupon Title:</strong></td>
        <td width="973"><input name="coupon_title" type="text" size="40" id="coupon_title" value=""></td>
      </tr>
      <tr align="left" valign="top">
        <td><strong>Coupon Code:</strong></td>
        <td><input name="coupon_code" maxlength="11" type="text" size="40" id="coupon_code" value=""></td>
      </tr>
      <tr align="left" valign="top">
        <td width="172"><strong>Minimum Order Total:</strong></td>
        <td><input name="min_order_total" type="text" size="40" id="min_order_total" value="">
          &nbsp;$</td>
      </tr>
      <tr align="left" valign="top">
        <td><strong>Coupon Expiry Date:</strong></td>
        <td><input name="coupon_date" type="text" size="23" id="coupon_date" value="">
          &nbsp;
          <select id="type1_time" name="type1_time"  onfocus="radioselect('type2');"  >
            <option value="-1">Select Time</option>
            <option value="0000">00</option>
            <option value="0100">01</option>
            <option value="0200">02</option>
            <option value="0300">03</option>
            <option value="0400">04</option>
            <option value="0500">05</option>
            <option value="0600">06</option>
            <option value="0700">07</option>
            <option value="0800">08</option>
            <option value="0900">09</option>
            <option value="1000">10</option>
            <option value="1100">11</option>
            <option value="1200">12</option>
            <option value="1300">13</option>
            <option value="1400">14</option>
            <option value="1500">15</option>
            <option value="1600">16</option>
            <option value="1700">17</option>
            <option value="1800">18</option>
            <option value="1900">19</option>
            <option value="2000">20</option>
            <option value="2100">21</option>
            <option value="2200">22</option>
            <option value="2300">23</option>
          </select></td>
      </tr>
            <tr align="left" valign="top">
        <td><strong>Discount In:</strong></td>
        <td><input type="radio" name="discount_in" id="discount_in" value="%" checked="checked" />
          %&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="discount_in" id="discount_in" value="$" />
          $</td>
      </tr>
      <tr align="left" valign="top">
        <td><strong>Discount Applied On:</strong></td>
        <td><input type="radio"  name="discount_applied" id="discount_applied" value="selected items"  onclick="document.getElementById('selected_items1').style.display = 'block'; document.getElementById('discount_msg').style.display = 'block';  document.getElementById('caption2').style.display = 'none'; document.getElementById('caption1').style.display = 'block'; document.getElementById('selected_items2').style.display = 'block'; document.getElementById('whole_order').style.display = 'none';  " />
          Selected Items &nbsp;&nbsp;
          <input type="radio"  name="discount_applied" id="discount_applied" value="whole order" onclick="document.getElementById('selected_items1').style.display = 'none'; document.getElementById('discount_msg').style.display = 'none'; document.getElementById('selected_items2').style.display = 'none'; document.getElementById('caption2').style.display = 'block'; document.getElementById('caption1').style.display = 'none'; document.getElementById('whole_order').style.display = 'block'; " checked/>
          Whole Order</td>
      </tr>
      <tr align="left" valign="top">
        <td><span id="caption1" style="display:none;"><strong>Discount Options:</strong></span> <br />
          <span id="caption2"><strong>Discount:</strong></span></td>
        <td><table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2" ><span id="discount_msg" style="padding:5px; display:none;  background-color:#FF6; font-size:13px;">Please select one of the options below to apply discount.</span></td>
            </tr>
            <tr>
              <td colspan="2" style="padding:5px;"></td>
            </tr>
            <tr id="selected_items1" style="display:none; border:#DFDFDF solid thin; padding:5px;" >
              <td width="120px"><input type="radio"  name="type" id="type2" value="2" checked="checked"  />
                &nbsp;Option 1:&nbsp;(<a style="text-decoration:none;"  onMouseover="ddrivetip('Ex: 50% off french fries when you order a chicken sandwich.')" onMouseout="hideddrivetip()"  href="#"   >?</a>)&nbsp;&nbsp;</td>
              <td style="padding-bottom:10px"><input name="coupon_discount_type2" type="text" size="5" id="coupon_discount_type2" value="" onfocus="radioselect('type2');">
                &nbsp; OFF &nbsp;
                                <span id="selitems1" style="color:#933;"></span> <a  href="admin_contents/coupon/popup.php?coupon_item=1&catid=856"  rel="facebox" > <img style="border:none" src="../images/Select-icon.png" title="Add Items"  /></a> &nbsp;when Order a &nbsp;
                                <span id="selitems2" style="color:#933;"></span> <a  href="admin_contents/coupon/popup.php?coupon_item=2&catid=856"  rel="facebox" ><img style="border:none" src="../images/Select-icon.png" title="Add Items"  /></a>&nbsp; </td>
            </tr>
            <tr height="5px;">
              <td colspan="2"></td>
            </tr>
            <tr id="selected_items2" style="display:none; border:#DFDFDF solid thin; padding:5px;">
              <td width="120px" ><input type="radio"  name="type" id="type3" value="3" />
                &nbsp;Option 2:&nbsp;(<a style="text-decoration:none;"  onMouseover="ddrivetip('Ex: $1.00 off any appetizer.')" onMouseout="hideddrivetip()"  href="#"   >?</a>)&nbsp;&nbsp;</td>
              <td><input name="coupon_discount_type3" type="text" size="5" id="coupon_discount_type3" value="" onfocus="radioselect('type3');">
                &nbsp; OFF any
                                <span id="selitems3" style="color:#933;"></span> &nbsp;<a  href="admin_contents/coupon/popup.php?coupon_item=3&catid=856"  rel="facebox" ><img style="border:none" src="../images/Select-icon.png" title="Add Categories"  /></a></td>
            </tr>
            <tr id="whole_order" style="display:">
              <td><input name="coupon_discount" type="text" size="26" id="coupon_discount" value=""></td>
            </tr>
          </table></td>
      </tr>
      <tr align="left" valign="top">
        <td><strong>Coupon Description:</strong></td>
        <td><textarea name="coupon_des" cols="40" rows="6" id="coupon_des"></textarea></td>
      </tr>
      <tr align="left" valign="top">
        <td>&nbsp;</td>
        <input type="hidden" name="coupon_items1" id="coupon_items1" value="" />
        <input type="hidden" name="coupon_items2" id="coupon_items2" value="" />
        <input type="hidden" name="coupon_items3" id="coupon_items3" value="" />
        <td><input type="submit" name="submit" value="Add Coupon"></td>
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