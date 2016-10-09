<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');?>
<form name="myform" action="?m=content&c=type_manage&a=listorder" method="post">
<div class="pad_10">
<div class="table-list">
    <table width="100%" cellspacing="0" >
        <thead>
	<tr>
	<th width="5%">ID</th>
	<th width="5%">建筑面积(㎡)</th>
	<th width="10%">手机号</th>
	<th width="10%">用户名</th>
	<th width="10%">小区名称</th>
	<th width="*">装修风格</th>
	<th width="10%">创建日期</th>
		<th width="30%"><?php echo L('operations_manage');?></th>
	</tr>
        </thead>
    <tbody>
    

<?php
foreach($datas as $r) {
?>
<tr>
<td align="center"><?php echo $r['id']?></td>
<td align="center"><?php echo $r['area']?></td>
<td align="center"><?php echo $r['phone']?></td>
<td align="center"><?php echo $r['name']?></td>
<td align="center"><?php echo $r['city_name']?></td>
<td align="center"><?php echo $r['style_name']?></td>
<td align="center"><?php echo $r['create_time']?></td>
<td align="center"><a href="javascript:;" onclick="data_delete(this,'<?php echo $r['id']?>','<?php echo trim(new_addslashes($r['name']));?>')"><?php echo L('delete')?></a> </td>
</tr>
<?php } ?>
	</tbody>
    </table>

<!--    <div class="btn"><input type="submit" class="button" name="dosubmit" value="--><?php //echo L('listorder')?><!--" /></div>  </div>-->
	<div id="pages"><?php echo $pages;?></div>
</div>

</div>
</form>

<script type="text/javascript"> 
<!--
window.top.$('#display_center_id').css('display','none');
function edit(id, name) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'<?php echo L('edit_type');?>《'+name+'》',id:'edit',iframe:'?m=content&c=plan_manage&a=edit&typeid='+id,width:'780',height:'500'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
function data_delete(obj,id,name){
	window.top.art.dialog({content:"确定删除？", fixed:true, style:'confirm', id:'data_delete'},
	function(){
	$.get('?m=content&c=plan_manage&a=delete&id='+id+'&pc_hash='+pc_hash,function(data){
				if(data) {
					$(obj).parent().parent().fadeOut("slow");
				}
			}) 	
		 }, 
	function(){});
};
//-->
</script>
</body>
</html>
