<?php
namespace Admin\Controller;

class IndexController extends AdminController
{
	public function index()
	{
		// 进行全部的权限判断，决定是否显示
		$listnode = $_SESSION['admin_user']['nodelist'];

		if (isset($listnode['User'])) {
			$_SESSION['node']['user'] = 1;
		}else{
			$_SESSION['node']['user'] = 0;
		}

		if (in_array('index',$listnode['User'])) {
			$_SESSION['node']['user_index'] = 1;
		}else{
			$_SESSION['node']['user_index'] = 0;
		}

		if (in_array('add',$listnode['User'])) {
			$_SESSION['node']['user_add'] = 1;
		}else{
			$_SESSION['node']['user_add'] = 0;
		}

		if (in_array('edit',$listnode['User'])) {
			$_SESSION['node']['user_edit'] = 1;
		}else{
			$_SESSION['node']['user_edit'] = 0;
		}

		if (in_array('delete',$listnode['User'])) {
			$_SESSION['node']['user_delete'] = 1;
		}else{
			$_SESSION['node']['user_delete'] = 0;
		}

		if(in_array('rolelist',$listnode['User'])){
			$_SESSION['node']['user_rolelist'] = 1;
		}else{
			$_SESSION['node']['user_rolelist'] = 0;
		}

		// 角色管理部分
		if (isset($listnode['Role'])) {
			$_SESSION['node']['role'] = 1;
		}else{
			$_SESSION['node']['role'] = 0;
		}

		if (in_array('index',$listnode['Role'])) {
			$_SESSION['node']['role_index'] = 1;
		}else{
			$_SESSION['node']['role_index'] = 0;
		}

		if (in_array('add',$listnode['Role'])) {
			$_SESSION['node']['role_add'] = 1;
		}else{
			$_SESSION['node']['role_add'] = 0;
		}

		if (in_array('delete',$listnode['Role'])) {
			$_SESSION['node']['role_delete'] = 1;
		}else{
			$_SESSION['node']['role_delete'] = 0;
		}

		if (in_array('edit',$listnode['Role'])) {
			$_SESSION['node']['role_edit'] = 1;
		}else{
			$_SESSION['node']['role_edit'] = 0;
		}

		if (in_array('nodelist',$listnode['Role'])) {
			$_SESSION['node']['role_nodelist'] = 1;
		}else{
			$_SESSION['node']['role_nodelist'] = 0;
		}

		// 节点部分
		if (isset($listnode['Node'])) {
			$_SESSION['node']['node'] = 1;
		}else{
			$_SESSION['node']['node'] = 0;
		}

		if (in_array('index',$listnode['Node'])) {
			$_SESSION['node']['node_index'] = 1;
		}else{
			$_SESSION['node']['node_index'] = 0;
		}

		if (in_array('add',$listnode['Node'])) {
			$_SESSION['node']['node_add'] = 1;
		}else{
			$_SESSION['node']['node_add'] = 0;
		}

		if (in_array('delete',$listnode['Node'])) {
			$_SESSION['node']['node_delete'] = 1;
		}else{
			$_SESSION['node']['node_delete'] = 0;
		}

		if (in_array('edit',$listnode['Node'])) {
			$_SESSION['node']['node_edit'] = 1;
		}else{
			$_SESSION['node']['node_edit'] = 0;
		}


		$this->display();
	}
}