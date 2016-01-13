<?php

tsload(APPS_PATH.'/admin/Lib/Action/AdministratorAction.class.php');

class IndexAction extends AdministratorAction {

	public function _initialize(){
		parent::_initialize();
	}

	public function index() {
		$nav = array();
		if($this->mid==1){
		foreach($this->navList as $k=>$v){
			array_push($nav, array(
				'name'    => L('PUBLIC_APPNAME_' . strtoupper($k)),
				'appname' => $k,
				'url'     => $v
			));
		}
		}else{
			//$nav[0] = array('name'=>'论坛','appname'=>'weiba','url'=>'weiba/Admin/index');
		}
		
		$this->assign('nav',$nav);
		$this->setTitle( L('PUBLIC_SYSTEM_MANAGEMENT') );
		$this->assign('channel', C('admin_channel'));
    	$this->assign('menu',    C('admin_menu'));
		$this->display();
	}
	
}