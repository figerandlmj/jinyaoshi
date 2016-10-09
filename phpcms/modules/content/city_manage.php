<?php
//defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
pc_base::load_sys_class('form','',0);
class city_manage extends admin {
	private $db,$category_db;
	public $siteid;
	function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('city_model');
		$this->siteid = $this->get_siteid();
		$this->model = getcache('model','commons');
		$this->category_db = pc_base::load_model('category_model');
	}

	public function init () {
		$datas = array();
		$result_datas = $this->db->listinfo($where = 'status = 1', $order = ' id DESC', $_GET['page']);
		$pages = $this->db->pages;
		foreach($result_datas as $r) {
			$r['modelname'] = $this->model[$r['modelid']]['name'];
			$datas[] = $r;
		}
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=content&c=type_manage&a=add\', title:\''.L('add_type').'\', width:\'780\', height:\'500\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('add_type'));
//        $this->cache();

		include $this->admin_tpl('city_list');
	}


	public function addlist () {
		$datas = array();
		$result_datas = $this->db->listinfo($where = 'status = 0', $order = ' id DESC', $_GET['page']);
		$pages = $this->db->pages;
		foreach($result_datas as $r) {
			$r['modelname'] = $this->model[$r['modelid']]['name'];
			$datas[] = $r;
		}
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=content&c=type_manage&a=add\', title:\''.L('add_type').'\', width:\'780\', height:\'500\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('add_type'));
//        $this->cache();

		include $this->admin_tpl('add_list');
	}

//审核
	public function pass() {

		$id = intval($_GET['id']);

		$r= $this->db->update(array('status'=>1),array('id'=>$id));

		if($r==true){

			showmessage('审核成功', $url_forward = '?m=content&c=city_manage&a=init', '', '');
		}else{
			showmessage('审核失败', $url_forward = '?m=content&c=city_manage&a=addlist', '', '');
		}

	}

	//添加小区
	public function add() {

		if(isset($_POST['dosubmit'])) {

			$city_name = $_POST['info']['city_name'];
			$city_address = $_POST['info']['city_address'];


			//判断输入是否为空
			if(empty($_POST['info']['city_name'])){


				showmessage('输入不能为空', $url_forward = '?m=content&c=city_manage&a=add', '', '');

			}

			//先判断输入的数据是否已经存在

			$r = $this->db->get_one($where = " city_name = '".$city_name."' ", $data = 'id', $order = '', $group = '');

			if(!empty($r)){
				showmessage('数据已存在', $url_forward = '?m=content&c=city_manage&a=add', '', '');
			}else{
				$result = $this->db->insert(array('city_name'=>$city_name,'city_address'=>$city_address,'status'=>1),true);
				if($result==true){

					showmessage('添加成功', $url_forward = '?m=content&c=city_manage&a=init', '', '');
				}else{

					showmessage('添加失败', $url_forward = '?m=content&c=city_manage&a=add', '', '');
				}
			}


		} else {

			include $this->admin_tpl('city_add');
		}
	}




	public function delete() {

		$r = $this->db->delete(array('id'=>$_GET['id']));
		if($r==true){
			showmessage('删除成功', $url_forward = '?m=content&c=city_manage&a=init', '', '');
		}else{
			showmessage('删除失败', $url_forward = '?m=content&c=city_manage&a=init', '', '');
		}
		exit('1');
	}




}
?>