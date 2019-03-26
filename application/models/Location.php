<?php
class Location extends CI_Model
{
    public function insert_location($data)
    {
        $query = $this->db->insert('locations', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function get_location_data($id)
    {
        $query = $this->db->query("SELECT * FROM `locations` WHERE `id`='" . $id . "'");

        if (isset($query)) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function location_data()
    {
        $query = $this->db->query("SELECT * FROM `locations`");

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function update_location($location, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('locations', $location);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function status_location($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('locations', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }

}
