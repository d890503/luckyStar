<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="account" value="<?php echo ($_REQUEST["account"]); ?>"/>
</form>

<div class="page">
	<div class="pageHeader">
		<form onsubmit="return navTabSearch(this);" action="__URL__" method="post">
		<input type="hidden" name="pageNum" value="1"/>
		<div class="searchBar">
			<ul class="searchContent">
				<li>
					<label>菜组名：</label>
					<input type="text" name="group_name" value=""/>
				</li>
			</ul>
			<div class="subBar">
				<ul>
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit">查询</button></div></div></li>
				</ul>
			</div>
		</div>
		</form>
	</div>
	
	<div class="pageContent">
		<div class="panelBar">
			<ul class="toolBar">
				<li><a class="add" href="__URL__/add" target="dialog" mask="true"><span>新增</span></a>
                 
				<li><a class="edit" href="__URL__/edit/id/{sid_member}" target="dialog" mask="true" warn="请选择菜组"><span>编辑</span></a></li>
				<li class="line">line</li>
                <li><a class="delete" href="__URL__/foreverdelete/navTabId/__MODULE__" posttype="string" rel="id" target="selectedTodo" title="确实要删除这些菜组吗?"><span>批量删除</span></a></li>
				<li><a class="delete" href="__URL__/foreverdelete/id/{sid_member}/navTabId/__MODULE__" target="navTabTodo" title="你确定要删除吗？" warn="请选择菜组"><span>删除</span></a></li>
				
			</ul>
		</div>
<div  layouth="116">
		<table class="list" width="100%" >
			<thead>
			<tr>
            <th width="18" class="left"><div title="" class="gridCol">
            <input type="checkbox" class="checkboxCtrl" group="id"></div></th>
				<th width="60">编号</th>
				<th width="100">菜组名</th>
                <th>排序</th>
                <th>所属会员</th>
				<th>创建时间</th>
				<th>更新时间</th>
				<th>状态</th>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr target="sid_member" rel="<?php echo ($vo['id']); ?>">
                <td class="left"><div><input type="checkbox" value="<?php echo ($vo['id']); ?>" name="id"></div></td>
					<td><?php echo ($vo['id']); ?></td>
					<td><span onclick="listTable.edit(this, '__URL__/setField/field/group_name/', <?php echo ($vo["id"]); ?>)"><?php echo ($vo['group_name']); ?></span></td>
                    <td><span onclick="listTable.edit(this, '__URL__/setField/field/sort/', <?php echo ($vo["id"]); ?>)"><?php echo ($vo['sort']); ?></span></td>
					<td><a href="__URL__/index/restaurant_id/<?php echo ($vo['restaurant_id']); ?>" target="navTab"><?php echo W('ShowRestaurant',array('id'=>$vo['restaurant_id']));?></a></td>
                    <td><?php echo (date("Y-m-d H:i:s",$vo['create_time'])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s",$vo['update_time'])); ?></td>
                    <td><img src="/Public/Images/<?php if($vo["status"] == '1'): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.toggle(this, '__URL__/setField/field/status/', <?php echo ($vo["id"]); ?>)" /></td>
					
                    
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
</div>
		<div class="panelBar">
			<div class="pages">
				<span>共<?php echo ($totalCount); ?>条</span>
			</div>
			<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
		</div>

	</div>
	
</div>