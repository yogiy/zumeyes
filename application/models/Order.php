<?php
class Order extends CI_Model
{

    public function user_order($email)
    {

        $query = $this->db->query("SELECT * FROM `userorder` where `email`='" . $email . "'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function user_orderbyid($id)
    {

        $query = $this->db->query("SELECT * FROM `userorder` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function userorder($email)
    {

        $query = $this->db->query("SELECT * FROM `userorder` where `email`='" . $email . "'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function userorderbyid($id)
    {

        $query = $this->db->query("SELECT * FROM `userorder` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function userorder_list()
    {

        $query = $this->db->query("SELECT * FROM `userorder`");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function cart_orderdata($cart_id)
    {

        $query = $this->db->query("SELECT * FROM `usercart` where `pro_id` IN ('" . $cart_id . "')");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
