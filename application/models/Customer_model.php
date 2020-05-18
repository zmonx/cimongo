<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Customer_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('customers');
        return $result;
    }
    public function insert($data)
    {
        $insertId = $this->mongo_db->insert('customers', $data);
        return $insertId;
    }
    public function order($data)
    {
        $insertId = $this->mongo_db->insert('order', $data);
        return $insertId;
    }
    public function findOne()
    {
        $result = $this->mongo_db->get('customers');
        return $insertId;
    }
}
