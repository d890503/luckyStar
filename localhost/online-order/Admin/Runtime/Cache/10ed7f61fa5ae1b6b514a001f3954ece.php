<?php if (!defined('THINK_PATH')) exit();?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("sitename")); ?></title>
<link href="__PUBLIC__/css/adminMain.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post" action="__URL__/checkLogin/">

<div style="margin-top:10%">
<div id="administration_box">


	<div id="contents">
    	<div id="manandlock"><img src="__PUBLIC__/Images/man_img.png" width="45" height="59" /></div>
        <div id="Administration">
          <img src="__PUBLIC__/Images/text.png" width="217" height="17" alt="Admonistration panel" />
        </div>
        <br style="clear:both" />
        <div id="text">Username:</div>
        <div id="text_field">
          <input type="text" name="account" id="username" value="username" onfocus="this.value='';" style="width:189px;" />
        </div>
        <br style="clear:both" />
      	<div id="text" style="padding:14px 0px 0px 1px;">Password:</div>
      	<div id="text_field" style="margin-top:10px;">
          <input type="password" value="password" name="password" id="pass" onfocus="this.value='';" style="width:189px;" />
        </div>
        <br style="clear:both" />
        <div id="login_bttn">
          <input type="image" src="__PUBLIC__/Images/login.png" name="submit" id="submit" value="Login" />
          <input type="hidden" name="frm_submit" id="frm_submit" value="1" />
        </div>
  </div><!--End contents Div-->	
</div>
</div>
</form>
</body>
</html>