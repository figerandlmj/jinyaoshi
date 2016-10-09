<?php
//defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form','',0);
class style_manage extends admin {
	private $db,$category_db;
	public $siteid;
	function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('style_model');
		$this->siteid = $this->get_siteid();
		$this->model = getcache('model','commons');
		$this->category_db = pc_base::load_model('category_model');
	}

	public function init () {
		$datas = array();
		$result_datas = $this->db->listinfo($where = '1', $order = ' id DESC', $_GET['page']);
		$pages = $this->db->pages;
		foreach($result_datas as $r) {
			$r['modelname'] = $this->model[$r['modelid']]['name'];
			$datas[] = $r;
		}
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=content&c=type_manage&a=add\', title:\''.L('add_type').'\', width:\'780\', height:\'500\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('add_type'));
//        $this->cache();

		include $this->admin_tpl('style_list');
	}


	public function delete() {

		$r = $this->db->delete(array('id'=>$_GET['id']));
		if($r==true){
			showmessage('删除成功', $url_forward = '?m=content&c=style_manage&a=init', '', '');
		}else{
			showmessage('删除失败', $url_forward = '?m=content&c=style_manage&a=init', '', '');
		}
		exit('1');
	}



	//添加
	public function add() {

		if(isset($_POST['dosubmit'])) {

			$style_name = $_POST['info']['style_name'];


			//判断输入是否为空
			if(empty($_POST['info']['style_name'])){


				showmessage('输入不能为空', $url_forward = '?m=content&c=style_manage&a=add', '', '');

			}

				//先判断输入的数据是否已经存在

				$r = $this->db->get_one($where = " style_name = '".$style_name."' ", $data = 'id', $order = '', $group = '');

				if(!empty($r)){
					showmessage('数据已存在', $url_forward = '?m=content&c=style_manage&a=add', '', '');
				}else{
					$result = $this->db->insert($_POST['info'],true);
					if($result==true){

						showmessage('添加成功', $url_forward = '?m=content&c=style_manage&a=init', '', '');
					}else{

						showmessage('添加失败', $url_forward = '?m=content&c=style_manage&a=add', '', '');
					}
				}


		} else {

			include $this->admin_tpl('style_add');
		}
	}




}
?>