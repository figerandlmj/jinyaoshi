<?php

/**
 *  信息
 */
class dataModel extends Model
{
    //查询所有数据
    public function all($sql){

        return $this -> _all($sql);
    }

    public function getAll($limitFrom, $limitNumber,$catid)
    {
        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT n.*,nd.* FROM jys_news n LEFT JOIN jys_news_data nd ON n.id= nd.id  WHERE n.catid = ".$catid." ORDER BY n.listorder DESC,n.inputtime DESC" . $limit);
    }

    //查询一条数据

    public function one($sql){

        return $this->_row($sql);
    }

    //插入一条数据

    public function  insert($table,$data){

        return $this->_insert($table,$data);
    }

    //删除一条数据
    public function delete($table,$id){

        return $this->_delete($table,$id);
    }

    //更新一条数据

    public function update($table, $data, $where = ''){


        return $this->_update($table, $data, $where = '');
    }

    //判断数据是否存在

    public function is_exit($table,$where = ''){


        return $this->_exit($table,$where);
    }

    //获取数据总数

    public function get_sum($sql){

        return $this->_sum($sql);
    }
}