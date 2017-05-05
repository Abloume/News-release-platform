<?php 

class adminModel{
	public $_table = 'admin';//定义表名

	function findOne_by_username($username){
		$sql = 'select * from '.$this->_table.' where username="'.$username.'"';
		return DB::findOne($sql);
	}
}

?>