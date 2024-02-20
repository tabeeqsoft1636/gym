<?php
class loginmodel extends CI_Model{


    public function isValidate($email, $password){
      $q = $this->db->query("SELECT * FROM users WHERE username = '$email'");
      if($q->num_rows() > 0){
          if($password  == $q->row()->password || password_verify($password, $q->row()->password)){
          return $q->row();
          }else{
              return false;
          }
      } else{
          return false;
      }
    }



}
