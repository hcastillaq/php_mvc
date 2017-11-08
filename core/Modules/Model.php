<?php

namespace Modules;
use Modules\Medoo;

class Model extends Medoo {

	protected $table = null;

	public function __construct(){
		if(is_null($this->table) || empty(trim(" ", $this->table))){
				throw new \Exception('Es necesario el atributo protected $table');
		}
		parent::__construct($GLOBALS['DB_CONFIG']);
	}

	public function select($join, $columns = null, $where = null, $table=null){
		$table = $this->table;
		return parent::select($table, $join, $columns, $where);
	}

	public function insert($datas, $table=null){
		$table = $this->table;
		return parent::insert($table, $datas);
	}

	public function update($data, $where = null, $table=null){
		$table = $this->table;
		return parent::update($table, $data, $where);
	}

	public function delete($where, $table=null){
		$table = $this->table;
		return parent::delete($table, $where);
	}

	public function replace($columns, $where = null, $table=null ){
		$table = $this->table;
		return parent::replace($table, $columns, $where);
	}

	public function get($join = null, $columns = null, $where = null, $table=null){
		$table = $this->table;
		return parent::get($table, $join, $columns, $where);
	}

	public function has($join, $where = null, $table=null ){
		$table = $this->table;
		return parent::has($table, $join, $where);
	}

	public function count($table, $join = null, $column = null, $where = null){
		$table = $this->table;
		return parent::count($join, $column, $where, $table=null);
	}

	public function max($join, $column = null, $where = null, $table=null){
		$table = $this->table;
		return parent::max($table, $join, $column, $where);
	}

	public function min($join, $column = null, $where = null, $table=null){
		$table = $this->table;
		return parent::min($table, $join, $column, $where);
	}

	public function avg($join, $column = null, $where = null, $table=null){
		$table = $this->table;
		return parent::avg($table, $join, $column, $where);
	}

	public function sum($join, $column = null, $where = null, $table=null){
		$table = $this->table;
		return parent::sum($table, $join, $column, $where);
	}
}