<?php

/**
 *  ��Ϣ
 */
class dataModel extends Model
{
    //��ѯ��������
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

    //��ѯһ������

    public function one($sql){

        return $this->_row($sql);
    }

    //����һ������

    public function  insert($table,$data){

        return $this->_insert($table,$data);
    }

    //ɾ��һ������
    public function delete($table,$id){

        return $this->_delete($table,$id);
    }

    //����һ������

    public function update($table, $data, $where = ''){


        return $this->_update($table, $data, $where = '');
    }

    //�ж������Ƿ����

    public function is_exit($table,$where = ''){


        return $this->_exit($table,$where);
    }

    //��ȡ��������

    public function get_sum($sql){

        return $this->_sum($sql);
    }
}