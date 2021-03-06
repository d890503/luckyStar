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
	
	<form method="post" action="__URL__/insert/navTabId/RestaurantMember" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<div class="pageFormContent" layoutH="58">
			<input type="hidden" name="restaurant_id" value="<?php echo ($restaurant_id); ?>" />
			<div class="unit">
				<label>Tariff(%)：</label>
				<input type="text" class="required number" size="30" maxlength="20" name="tariff"/>
			</div>
			<div class="unit">
				<label>TipRatio(%)：</label>
				<input type="text" name="tip" size="30" maxlength="20" placeholder="Format:1,2,3(Enter up to 3)" class="required"/>
			</div>
            
            <div class="unit">
				<label>InitialDistance(mile)：</label>
				<input type="text" name="initialdistance" size="30" maxlength="20" class="required number"/>
			</div>
            <div class="unit">
				<label>PerMilePlusMoney($)：</label>
				<input type="text" name="distanceaddmoney" size="30" maxlength="20" class="required number"/>
			</div>
            <div class="unit">
				<label>Minimum($)：</label>
				<input type="text" name="minimum" size="30" maxlength="20" class="required number"/>
			</div>
             <div class="unit">
				<label>Parking：</label>
                <input type="radio" name="parking" value="1" checked="checked"/>Yes
                <input type="radio" name="parking" value="0" />No
			</div>
            <div class="unit">
				<label>IsDelivery：</label>
                <input type="radio" name="is_delivery" value="1" checked="checked"/>Yes
                <input type="radio" name="is_delivery" value="0" />No
			</div>
             <div class="unit">
           		 <label><h2>DeliveryHours</h2></label>
              </div>
             <div class="unit">
				<label>Monday：</label>
                <select name="mon_dstart">
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
                <select name="mon_dend">
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
				<label>Tuesday：</label>
                <select name="tues_dstart">
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
                <select name="tues_dend">
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
				<label>Wednesday：</label>
                <select name="wed_dstart">
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
                <select name="wed_dend">
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
				<label>Thursday：</label>
                <select name="thur_dstart">
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
                <select name="thur_dend">
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
				<label>Friday：</label>
                <select name="fri_dstart">
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
                <select name="fri_dend">
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
				<label>Saturday：</label>
                <select name="sat_dstart">
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
                <select name="sat_dend">
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
				<label>Sunday：</label>
                <select name="sun_dstart">
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
                <select name="sun_dend">
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
				<label>IsPickup：</label>
                <input type="radio" name="is_pickup" value="1" checked="checked"/>Yes
                <input type="radio" name="is_pickup" value="0" />No
			</div>
             <div class="unit">
           		 <label><h2>PickupHours</h2></label>
              </div>
             <div class="unit">
				<label>Monday：</label>
                <select name="mon_pstart">
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
                <select name="mon_pend">
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
				<label>Tuesday：</label>
                <select name="tues_pstart">
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
                <select name="tues_pend">
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
				<label>Wednesday：</label>
                <select name="wed_pstart">
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
                <select name="wed_pend">
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
				<label>Thursday：</label>
                <select name="thur_pstart">
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
                <select name="thur_pend">
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
				<label>Friday：</label>
                <select name="fri_pstart">
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
                <select name="fri_pend">
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
				<label>Saturday：</label>
                <select name="sat_pstart">
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
                <select name="sat_pend">
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
				<label>Sunday：</label>
                <select name="sun_pstart">
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
                <select name="sun_pend">
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