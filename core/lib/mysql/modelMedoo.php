<?php
/**
 * Created by PhpStorm.
 * User: litian
 * Date: 2017/4/24
 * Time: 17:17
 */
namespace core\lib\mysql;

class modelMedoo extends medoo
{
    public $_table;

    public function select($where = null, $field = null)
    {
        $field = empty($field) ? '*' : $field;
        $where = empty($where) ? array() : $where;

        return parent::select($this->_table, $field, $where); // TODO: Change the autogenerated stub
    }
}