<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');?>
<form name="myform" action="?m=content&c=type_manage&a=listorder" method="post">
	<div class="pad_10">
		<div class="table-list">
			<table width="100%" cellspacing="0" >
				<thead>
				<tr>
					<th width="25%">ID</th>
					<th width="25%">小区名称</th>
					<th width="25%">小区地址</th>

					<th width="*"><?php echo L('operations_manage');?></th>
				</tr>
				</thead>
				<tbody>


				<?php
				foreach($datas as $r) {
					?>
					<tr>
						<td align="center"><?php echo $r['id']?></td>
						<td align="center"><?php echo $r['city_name']?></td>
						<td align="center"><?php echo $r['city_address']?></td>

						<td align="center"><a href="javascript:;" onclick="data_pass(this,'<?php echo $r['id']?>','')">审核</a> | <a href="javascript:;" onclick="data_delete(this,'<?php echo $r['id']?>','')"><?php echo L('delete')?></a> </td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

			<div id="pages"><?php echo $pages;?></div>
		</div>

	</div>
</form>

<script type="text/javascript">
	<!--
	window.top.$('#display_center_id').css('display','none');
	function data_pass(obj,id,name){
		window.top.art.dialog({content:"审核通过？", fixed:true, style:'confirm', id:'data_delete'},
			function(){
				$.get('?m=content&c=city_manage&a=pass&id='+id+'&pc_hash='+pc_hash,function(data){
					if(data) {
//						$(obj).parent().parent().fadeOut("slow");
					}
				})
			},
			function(){});
	};
	function data_delete(obj,id,name){
		window.top.art.dialog({content:"确定删除？", fixed:true, style:'confirm', id:'data_delete'},
			function(){
				$.get('?m=content&c=city_manage&a=delete&id='+id+'&pc_hash='+pc_hash,function(data){
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
