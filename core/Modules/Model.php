<?php

namespace Modules;
use Modules\Medoo;

class Model extends Medoo {

    protected $table = null;
    
    private $methods = [
        'select'
    ];

    public function __construct(){
        parent::__construct($GLOBALS['DB_CONFIG']);
    }

    public function select($join, $columns = null, $where = null, $table=null){
        $table = $this->table;
        return parent::select($table, $join, $columns, $where);
    }

}