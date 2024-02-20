<?php
class Admin_model extends CI_Model
{
    function __Construct()
    {
        parent::__Construct();
    }

    public function check_login($username, $password)
    {
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query) {
            return $query->row(); // Returns the user object with all its properties
        }
        return false;
    }


    function select_where($select, $table, $where)
    {
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query =  $this->db->get();
        return $query->result();
    }


    function select_all($select, $table)
    {
        $this->db->select($select);
        $this->db->from($table);
        $query =  $this->db->get();
        return $query->result();
    }

    function delete_where($where, $tbl_name, $columnName = null, $whereNotIn = null)
    {
        $this->db->where($where);
        if ($columnName && $whereNotIn)
            $this->db->where_not_in($columnName, $whereNotIn);
        $this->db->delete($tbl_name);
        return true;
    }
}
