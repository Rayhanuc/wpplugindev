<?php


if (!class_exists("WP_List_Table")) {
	require_once(ABSPATH."wp-admin/includes/class-wp-list-table.php");
}

class DBTableUsers extends WP_List_Table {
	function __construct($data){
		parent::__construct();
		$this->items = $data;
	}

	function get_columns(){
		return [
			'cb' => '<input type="checkbox">',
			'name' => __('Name', 'database-demo'),
			'email' => __('Email', 'database-demo'),
			'action' => __('Action', 'database-demo'),
		];
	}

	function column_cb($item){
		return "<input type='checkbox' value='{$item['id']}'>";
	}

	function column_action($item){
		$link = wp_nonce_url(admin_url('?page=dbdemo&pid='.$item['id']),"dbdemo_edit",'n');
		return "<a href='".esc_url($link)."'>Edit</a>";
	}

	function column_default($item, $column_name){
		return $item[$column_name];
	}

	function parepare_items(){
		$this->_column_headers = array($this->get_columns(),[],[]);
	}
}