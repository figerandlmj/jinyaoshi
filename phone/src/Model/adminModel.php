<?php

/**
 * 管理员模型
 */
class adminModel extends Model
{

    private $table_user = '`admin`';

    public function getAll($limitFrom, $limitNumber)
    {
        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT * FROM " . $this->table_user . " WHERE 1 ORDER BY id DESC" . $limit);
    }

    public function getOne($id)
    {
        return $this -> _row("SELECT * FROM " . $this->table_user . " WHERE id = " . $id);
    }

    public function getOneByPhone($phone)
    {
        return $this->_row("SELECT * FROM " . $this->table_user . " WHERE phone = " . $phone . " LIMIT 1");
    }

    public function add($data)
    {
        return $this->_insert($this->table_user, $data);
    }

    public function count()
    {
        return $this->_sum("SELECT id FROM " . $this->table_user . " WHERE 1");
    }

    public function update($data, $id)
    {
        $where = " WHERE id = " . $id;
        return $this->_update($this->table_user, $data, $where);
    }

    public function updateByPhone($data, $phone)
    {
        $where = " WHERE phone = " . $phone;
        return $this->_update($this->table_user, $data, $where);
    }

    //判断用户是否存在
    public function is_exit($phone){
        $where = ' WHERE phone= '.$phone;
        return $this->_exit($this->table_user,$where);

    }

}