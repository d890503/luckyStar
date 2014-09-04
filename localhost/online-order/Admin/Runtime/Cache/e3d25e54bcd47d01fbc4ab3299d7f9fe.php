<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>restocordobaordering</title>

<link href="__PUBLIC__/css/adminMain.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/south-street/jquery-ui-1.8.22.custom.css" rel="stylesheet" type="text/css" />
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
            </div><!--End navigation_links Div-->
             
 <div id="BodyContainer">
  
    
 
    
    <div style="padding-bottom:10px;text-align:center">
      <img style="width:1085px; height:90px;" src="__PUBLIC__/Images/img_856_cat_header.jpg" border="0" />
  </div>
   	
   <div id="navigation_links">
                           <div id="navigation_links">
                           <div id="navigation">
                            
                            <div class="links "><a href="__APP__/RestaurantDetails/index/restaurant_id/<?php echo ($_SESSION['restaurant_id']); ?>" >Restaurants(<?php echo ($_SESSION['restaurant_count']); ?>)</a></div>
                            <div class="links "><a href="__APP__/Order/index/restaurant_id/<?php echo ($_SESSION['restaurant_id']); ?>" class="">Orders(<?php echo ($_SESSION['order_count']); ?>)</a></div>
                            <div class="links "><a href="__APP__/Customer/index" class="">Customers(0)</a></div>
                            <div class="links "><a href="__APP__" class="">Coupons</a></div>
                            <div class="links selected"><a href="__APP__/Menus/index/restaurant_id/<?php echo ($_SESSION['restaurant_id']); ?>"class="">Menus</a></div>
                            <!-- <div class="links "><a href="?mod=mailing_list"class="">Mailing List</a></div>
                            <div class="links "><a href="analytics.html"class="">Analytics</a></div> -->
                            <br style="clear:both" />
                          </div>
                        </div>
                        </div>
<div id="tab_items">
  <ul>
    <li><a href="__APP__/Menus/index"class="">Sub Menus Listing</a></li> | 
    <li><a href="__APP__/Menus/add_Cuisine" class="selected_red">Add Cuisine</a></li> |
    <li><a href="__APP__/Menus/add_SubMenu" class="">Add Sub Menu</a></li>
    <li style="list-style: none">| </li>
    <li><a href="__APP__/Menus/add_Package" class="">Add Package</a></li> 
    
    </ul>
</div>




<div id="main_heading">Add Group</div>

<div class="form_outer">
  <form name="form1" method="post" action=""  >
    <table width="100%" border="0" cellpadding="4" cellspacing="0">
      <tr align="left" valign="top">
        <td width="172"><strong>Package Name:</strong></td>
        <td width="973"><input name="coupon_title" type="text" size="40" id="coupon_title" value="<?php echo ($info["group_name"]); ?>" disabled="true"></td>
      </tr>
      <tr align="left" valign="top">
        <td><strong>Package Name2:</strong></td>
        <td><input name="coupon_code" maxlength="11" type="text" size="40" id="coupon_code" value="<?php echo ($info["group_name2"]); ?>" disabled="true"></td>
      </tr>
      <tr align="left" valign="top">
        <td width="172"><strong>Package Price:</strong></td>
        <td><input name="min_order_total" type="text" size="40" id="min_order_total" value="<?php echo ($info["price"]); ?>" disabled="true"></td>
      </tr>
      <tr align="left" valign="top">
        <td></td>
        <td><input type="radio" name="discount_in" id="discount_in" value="0" <?php if($info['group_type'] == 0): ?>checked="checked"<?php endif; ?> disabled="true"/>
          Choose&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="discount_in" id="discount_in" value="1" <?php if($info['group_type'] == 1): ?>checked="checked"<?php endif; ?> disabled="true"/>
          Pick</td>
      </tr>     

      <tr align="left" valign="top">
        <td>&nbsp;</td>
        <td></td>
      </tr>
    </table>
  </form>
</div>

<div class="addgroupbox">
  <div id="AdminLeftConlum">
    <form name="frmedit" id="frmedit" action="__APP__/Menus/add_GroupOption" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="4" cellspacing="0">
            <tbody>
              <tr align="left" valign="top">
                <td>&nbsp;</td>
                <td>
<!--                     <input type="submit" name="submit" id="submit" value="Add Option">
                    <input type="button" name="btnSave" value="从其他modifier中选择" onclick="showLocation();"> -->
                </td>
            </tr>

              <tr align="left" valign="top">
                <td width="76">&nbsp;</td>
                <td width="1052" id="item_true_show"><strong>You selected item(click anyname edit):</strong><br>
                    
                  </td>
              </tr>

              <tr align="left" valign="top" id="attribute-input">
                <td>&nbsp;</td>
                <td>
                <textarea name="attribute_show"></textarea><br><span style="color:red;">*Item in brackets behind the item is ID,Please use ID to edit the attribute for item.<br>
                For example:<br>
                15=1,<br>
                16=-1,</span>
                </td>
            </tr>

              <tr align="left" valign="top"> 
                <td width="76"></td>
                <td><strong>Option Name:</strong><br>
                    <input name="option_name" type="text" size="40" value="Choose a kind of soup" id="Option Name"> </td>
              </tr>         
           
            <tr align="left" valign="top"> 
                <td></td>
                <td><strong>Option Name2:</strong><br>
                   <input name="option_name2" type="text" size="40" value="选择一种饼" id="Option Name2">
                </td>
            </tr>
             <tr align="left" valign="top"> 
                <td></td>
                <td><strong>Option type:</strong><br>
                   <input  type="radio"  name="option_type" id="" value="Radio" />Radio
                   <input  type="checkbox"  name="option_type" id="" value="Checkbox" />Checkbox
                </td>
            </tr>

             <tr align="left" valign="top"> 
                <td></td>
                <td><strong>If you select the check box:</strong><br><strong>Max Select</strong><br>
                   <input name="max_select" type="text" size="40" value="4" id="Option Name2">

                </td>
            </tr>
         
            <tr align="left" valign="top">
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="submit1" id="submit1" value="complete">
                    <input type="button" name="btnSave" id="btnSave" value="Save and Continue" >
                </td>
            </tr>
        </tbody>
      </table>
    
</div>
<div id="addgroupConlum">
  <h1>Alert window 为用户之前添加过的item，可选择Sub Menu过滤。</h1>
  
  <select name="option" id="option-group" style="width:270px;" class="valid">
  <option value="0" selected="selected">=====Select Sub Menu===== </option>
  <?php if(is_array($submenulist)): foreach($submenulist as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["group_name"]); ?></option><?php endforeach; endif; ?>                   
  </select>

  </form>
  <form class="addform">
    <div id="attr-data">
      
    </div>
  </form>
    
</div>
<br class="clearfloat">
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
<script>
$(document).ready(function(){
    $("#attribute-input").hide();
    
    /*$("#attr-data").find(":input").click(function(){
        alert($(this).val());
        alert($(this).prop('checked'));
    });*/
    
    function eachItem(){
      var items = new Array();
      $("#item_true_show").find("span").each(function(){
          items.push($(this).attr("data-id"));
      });
      return items;
    }

    function in_array(search,array){
        for(var i in array){
            if(array[i]==search){
                return true;
            }
        }
        return false;
    }

    $("#item_true_show input").live('click',function(){
        var iid = $(this).val();
        if($(this).prop('checked') == false){
          $(this).parent().remove();
            $("#attr-data").find("input").each(function(){
                  if($(this).val() == iid){
                      $(this).attr("checked", false);
                  }
            });
        }
     });

    $("#attr-data input").live('click', function(){
            var iid = $(this).val();
            if($(this).attr("checked")){
              var itemname = $(this).next("span").text();
              var item = '<span data-id="'+iid+'" style="margin-right:80px;"><input type="checkbox" value="'+iid+'" id="" name="item_name_show[]" checked="checked" class="option-item-true">'+'<a class="item_name" href="javascript:void(0);">'+itemname+'</a>'+'</span>';

              $("#item_true_show").append(item);
              $(".item_name").click(function(){
                $("#attribute-input").show();
              })
            }
            else{
              $("#item_true_show span[data-id="+iid+"]").remove();
            }
            //alert($(".o ption-item").prop('checked'));
    });

    $("#option-group").change(function(){
        var oid = $(this).val();
        
        $.post("__APP__/Menus/item_table_show",{id: oid}, function(data,status){
          $("#attr-data").html('');
          $("#attr-data").html(data);
          var $items = eachItem();
          console.log($items);
          if($items.length !== 0){
            $("#attr-data").find("input").each(function(){
              if(in_array($(this).val(), $items)){
                  $(this).attr("checked", true);
              }
              console.log($(this).val());
            });
          }
        });

    })
});
</script>
</body>
</html>