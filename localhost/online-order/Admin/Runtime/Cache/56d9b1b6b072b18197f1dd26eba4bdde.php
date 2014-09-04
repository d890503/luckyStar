<?php if (!defined('THINK_PATH')) exit();?>
<script language="JavaScript">
<!--
function checkName(){
	ThinkAjax.send('__URL__/checkAccount/','ajax=1&account='+$F('account'));
}
//-->
</script>

<div class="page">
	<div class="pageContent">
	
	<form method="post" action="__URL__/insert/navTabId/__MODULE__" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone)" enctype="multipart/form-data">
		<div class="pageFormContent" layoutH="58">

			<div class="unit">
				<label>DishesName：</label>
				<input type="text" class="required" size="30" maxlength="100" name="dishes_name" />
			</div>
			<div class="unit">
				<label>price：</label>
				<input type="text" name="price" size="10" maxlength="20" class="required number"/>
			</div>
            <div class="unit">
				<label>Sequence：</label>
				<input type="text" name="sort" size="5" maxlength="20" class="required number" value="0"/>
			</div>
            
            <div class="unit">
				<label>DishesGroup：</label>
				<select name="group_id">
                <?php if(is_array($group_list)): $i = 0; $__LIST__ = $group_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['group_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
               </select>
			</div>
             <div class="unit">
				<label>Status：</label>
				<select name="status">
               		<option value="1" selected="selected">display</option> 
                    <option value="0">hide</option> 
               </select>
               <label>Recommend：</label>
				<select name="is_commend">
               		<option value="0" selected="selected">no</option> 
                    <option value="1">yes</option> 
               </select>
			</div>
            <div class="unit">
				<label>Peanut：</label>
				<select name="peanut">
               		<option value="1">yes</option> 
                    <option value="0" selected="selected">no</option> 
               </select>
               <label>Spicy：</label>
				<select name="spicy">
               		<option value="1">yes</option> 
                    <option value="0" selected="selected">no</option> 
               </select>
			</div>
             <div class="unit">
				<label>OpenHours：</label>
				<select name="start">
               		<option value="">Choose</option> 
                    <option value="01:00AM">01:00AM</option> 
                    <option value="02:00AM">02:00AM</option> 
                    <option value="03:00AM">03:00AM</option> 
                    <option value="04:00AM">04:00AM</option> 
                    <option value="05:00AM">05:00AM</option> 
                    <option value="06:00AM">06:00AM</option> 
                    <option value="07:00AM">07:00AM</option> 
                    <option value="08:00AM">08:00AM</option> 
                    <option value="09:00AM">09:00AM</option> 
                    <option value="10:00AM">10:00AM</option> 
                    <option value="11:00AM">11:00AM</option>
                    <option value="12:00AM">12:00AM</option>  
               </select>
             <label style="width:10px;">to</label>
               <select name="end">
               		<option value=""> Choose</option> 
                    <option value="01:00PM">01:00PM</option> 
                    <option value="02:00PM">02:00PM</option> 
                    <option value="03:00PM">03:00PM</option> 
                    <option value="04:00PM">04:00PM</option> 
                    <option value="05:00PM">05:00PM</option> 
                    <option value="06:00PM">06:00PM</option> 
                    <option value="07:00PM">07:00PM</option> 
                    <option value="08:00PM">08:00PM</option> 
                    <option value="09:00PM">09:00PM</option> 
                    <option value="10:00PM">10:00PM</option> 
                    <option value="11:00PM">11:00PM</option>
                    <option value="12:00PM">12:00PM</option>  
               </select>
			</div>
             <div class="unit">
				<label>Image：</label>
				<input name="image" type="file" />
			</div>
			<div class="unit">
				<label>Description：</label>
				<textarea name="description" style="width:300px;height:100px;"><?php echo ($vo["description"]); ?></textarea>
			</div>
		
			
			
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">Submit</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">Cancel</button></div></div></li>
			</ul>
		</div>
	</form>
	
	</div>
</div>