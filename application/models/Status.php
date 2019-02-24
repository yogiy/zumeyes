<?php
class Status extends CI_Model
{

    public function status_category($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('category', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_subcategory($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('subcategory', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_slider($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('sliderimage', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_banner($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('bannerimage', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_offer($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('offerimage', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_about($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('about', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_blog($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('blog', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_brand($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('brand', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_color($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('color', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_fit($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('fit', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_shape($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('shape', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_material($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('material', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_purpose($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('purpose', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_lense_type($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('lenseuses', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_prescription_type($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('prescription', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_prescription_package($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('lensepackages', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_product($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('product', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_axis($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('axis', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_box($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('eye_box', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_sphere($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('sphere', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_cylinder($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('cylinder', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_nearaddition($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('nearaddition', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_discount($status, $id)
    {

        $this->db->where('id', $id);
        $query = $this->db->update('discount', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_prooffer($status, $id)
    {

        $this->db->where('id', $id);
        $query = $this->db->update('offer', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function status_tax($status, $id)
    {

        $this->db->where('id', $id);
        $query = $this->db->update('taxslab', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
    public function frgpass($email, $phone)
    {
        $query = $this->db->query("SELECT `id` FROM `adminuser` where `email`='" . $email . "' AND `phone`='" . $phone . "'");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
    public function updatepass($data, $user)
    {
        $this->db->where('email', $user);
        $query = $this->db->update('adminuser', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function updatefacebook($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('facebook', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function updatetwitter($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('twitter', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function updategoogleplus($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('googleplus', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function status_order_type($status, $proid)
    {

        $this->db->where('id', $proid);
        $query = $this->db->update('order_status_type', $status);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }

    }
}
