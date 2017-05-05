<?php

class mysql{

	function err($error){
		die('对不起，您的操作有误，错误原因为：'.$error);
	}

	function connect($config){
		extract($config);
		
		if(!($this->link = mysqli_connect($dbhost,$dbuser,$dbpsw))){
			$this->err(mysql_error());
		}
		if(!mysqli_select_db($this->link, $dbname)){
			$this->err(mysql_error());
		}
		mysqli_query($this->link, "set names ".$dbcharset);
	}

	function query($sql){
		if(!($query = mysqli_query($this->link, $sql))){
			$this->err($sql."<br>".mysql_error());
		}else{
			return $query;
		}
	}

	function findAll($query){
		while($rs = mysqli_fetch_assoc($query)){
			$list[] = $rs;
		}
		return isset($list)?$list:"";
	}

	function findOne($query){
		$rs = mysqli_fetch_array($query, MYSQL_ASSOC);
		return $rs;
	}

	function findResult($query){
		if(mysqli_num_rows($query)){
			$rs = mysqli_fetch_array($query);
			$count = $rs[0];
		}else{
			$count = 0;
		}
		return $count;
	}

	function insert($table,$arr){
		foreach($arr as $key => $value){
			$value = mysqli_real_escape_string($this->link,$value);
			$keyArr[] = "`".$key."`";
			$valueArr[] = "'".$value."'";
		}

		$keys = implode(",", $keyArr);
		$values = implode(",", $valueArr);
		$sql = "insert into ".$table."(".$keys.") values (".$values.")";
		$this->query($sql);
		return mysqli_insert_id($this->link);
	}

	function update($table,$arr,$where){
		foreach($arr as $key => $value){
			$value = mysqli_real_escape_string($this->link,$value);
			$keyAndvalueArr[] = "`".$key."`='".$value."'";
		}
		$keyAndvalues = implode(",", $keyAndvalueArr);
		$sql = "update ".$table." set ".$keyAndvalues." where ".$where;
		$this->query($sql);
	}

	function del($table,$where){
		$sql = "delete from ".$table." where ".$where;
		$this->query($sql);
	}

}

?>