<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("sitename")); ?></title>
<link href="__PUBLIC__/dwz/themes/css/login.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/dwz/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '__URL__/verify/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '__URL__/verify/'+timenow);
	}
}
//-->
</script>
</head>
<body>
<div id="login">
	<div id="login_header">
		<h1 class="login_logo">
			<!--<a href="#"><img src="__PUBLIC__/dwz/themes/default/images/login_logo.gif" /></a>-->
		</h1>
		<div class="login_headerContent">
			<div class="navList">
				<ul>
					<li><a href="#">设为首页</a></li>
					<li><a href="#">升级说明</a></li>
					<li><a href="#">反馈</a></li>
					<li><a href="#">帮助</a></li>
				</ul>
			</div>
			<h2 class="login_title"><img src="__PUBLIC__/dwz/themes/default/images/login_title.png" /></h2>
		</div>
	</div>
	<div id="login_content">
		<div class="loginForm">
			<form method="post" action="__URL__/checkLogin/">
				<p>
					<label>帐号：</label>
					<input type="text" name="account" size="20" class="login_input" />
				</p>
				<p>
					<label>密码：</label>
					<input type="password" name="password" size="20" class="login_input" />
				</p>
				<p>
					<label>验证码：</label>
					<input autocomplete="off" class="code" name="verify" type="text" size="5" />
					<span><img id="verifyImg" SRC="__URL__/verify/" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle"></span>
				</p>
				<div class="login_bar">
					<input class="sub" type="submit" value=" " />
				</div>
			</form>
		</div>
		<div class="login_banner"><img src="__PUBLIC__/dwz/themes/default/images/login_banner.jpg" />
           <!-- <ul>
        	<li><strong>程序开发：</strong><?php echo (C("CONTACT")); ?></li>
            <li><strong>联系电话：</strong><?php echo (C("PHONE")); ?></li>
            <li><strong>QQ：</strong><?php echo (C("QQ")); ?></li>
            <li><strong>公司：</strong><?php echo (C("COMPANY")); ?></li>
            <li><strong>公司地址：</strong><?php echo (C("ADDRESS")); ?></li></ul>-->
        </div>
		<div class="login_main">
		  <div class="login_inner"> </div>
		</div>
	</div>
	<!--<div id="login_footer">
		Copyright &copy; 2011 <?php echo (C("COMPANY")); ?> Inc. All Rights Reserved. 
	</div>-->
</div>

</body>
</html>