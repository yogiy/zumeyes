<?php
class Aquery extends CI_Model
{
    public function getRows($params = array())
    {
        $this->db->select('*');
        $this->userTbl = 'adminuser';
        $this->db->from($this->userTbl);

        //fetch data by conditions
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("id", $params)) {
            $this->db->where('id', $params['id']);
            $query = $this->db->get();
            $result = $query->row();
        } else {
            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
                $result = $query->num_rows();
            } elseif (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
                $result = ($query->num_rows() > 0) ? $query->row_array() : false;
            } else {
                $result = ($query->num_rows() > 0) ? $query->result_array() : false;
            }
        }

        //return fetched data
        return $result;
    }

    public function update_profile($data, $user)
    {
        $this->db->where('email', $user);
        $query = $this->db->update('adminuser', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_proimage($data, $user)
    {
        $this->db->where('email', $user);
        $query = $this->db->update('adminuser', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function authpass($password, $useremail)
    {
        $query = $this->db->query("SELECT * FROM `adminuser` where `password`='" . $password . "' AND `email`='" . $useremail . "'");
        if ($query->num_rows() > 0) {
            return true;

        } else {
            return false;
        }
    }
    public function update_userpass($data, $user, $acpass)
    {
        $this->db->where('email', $user);
        $this->db->where('password', $acpass);
        $query = $this->db->update('adminuser', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function get_profile($user)
    {
        $query = $this->db->query("SELECT * FROM `adminuser` where `email`='" . $user . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }

    public function get_profilerow($params = array())
    {
        $this->userTbl = 'adminuser';
        $this->db->select('*');
        $this->db->from($this->userTbl);

        //fetch data by conditions
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("id", $params)) {
            $this->db->where('id', $params['id']);
            $query = $this->db->get();
            $result = $query->row();
        } else {
            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
                $result = $query->num_rows();
            } elseif (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
                $result = ($query->num_rows() > 0) ? $query->row_array() : false;
            } else {
                $result = ($query->num_rows() > 0) ? $query->result_array() : false;
            }
        }

        //return fetched data
        return $result;
    }

    public function cat_entry($data)
    {
        $query = $this->db->insert('category', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function sub_cat_entry($data)
    {
        $query = $this->db->insert('subcategory', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function sub_sub_cat_entry($data)
    {
        $query = $this->db->insert('sub_subcategory', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function filter_entry($data)
    {
        $query = $this->db->insert('filter', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function prescription_entry($data)
    {
        $query = $this->db->insert('prescription', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function prescription_package_entry($data)
    {
        $query = $this->db->insert('lensepackages', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function product_entry($data)
    {
        $query = $this->db->insert('product', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function blog_header_entry($data)
    {
        $query = $this->db->insert('blog_header_image', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function insert_about_data($data)
    {
        $query = $this->db->insert('about', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function faq_insert($data)
    {
        $query = $this->db->insert('faq', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function cylinder_entry($data)
    {
        $query = $this->db->insert('cylinder', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function sphere_entry($data)
    {
        $query = $this->db->insert('sphere', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function axis_entry($data)
    {
        $query = $this->db->insert('axis', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function nearaddition_entry($data)
    {
        $query = $this->db->insert('nearaddition', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function cylinder_data()
    {
        $query = $this->db->query("SELECT * FROM `cylinder`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function sphere_data()
    {
        $query = $this->db->query("SELECT * FROM `sphere`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function axis_data()
    {
        $query = $this->db->query("SELECT * FROM `axis`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function nearaddition_data()
    {
        $query = $this->db->query("SELECT * FROM `nearaddition`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function cat_list()
    {
        $query = $this->db->query("SELECT * FROM `category`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function faq_get()
    {
        $query = $this->db->query("SELECT * FROM `faq`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function term_get()
    {
        $query = $this->db->query("SELECT * FROM `term_and_condition`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function prescription_type()
    {
        $query = $this->db->query("SELECT * FROM `prescription`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_subcat_data($cat_id)
    {
        $query = $this->db->query("SELECT DISTINCT `sub_cat_name`,`id` FROM `subcategory`  WHERE `cat_name` = '" . $cat_id . "' ");
        if ($query->num_rows() > 0) {

            $output = '<option value="">Select Sub Category Name...</option>';

            foreach ($query->result() as $sub_cat_name) {

                $output .= '<option value="' . $sub_cat_name->id . '">' . $sub_cat_name->sub_cat_name . '</option>';
            }

        } else {
            $output = '<option value="">Sub Category Name Is Empty...</option>';
        }
        return $output;
    }
    public function get_sub_subcat_data($subcat_id)
    {
        $query = $this->db->query("SELECT DISTINCT `sub_sub_cat`,`id` FROM `sub_subcategory`  WHERE `sub_cat_name` = '" . $subcat_id . "' ");
        if ($query->num_rows() > 0) {

            $output = '<option>Select Sub About Sub Category Name...</option>';

            foreach ($query->result() as $sub_sub_cat_name) {

                $output .= '<option value="' . $sub_sub_cat_name->id . '">' . $sub_sub_cat_name->sub_sub_cat . '</option>';
            }

        } else {
            $output = '<option>Sub About Sub Category Name Is Empty...</option>';
        }
        return $output;
    }
    public function insert_blog_data($blog_data)
    {
        $query = $this->db->insert('blog', $blog_data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function insert_about_title($title)
    {
        $query = $this->db->insert('about', $title);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function term_insert($data)
    {
        $query = $this->db->insert('term_and_condition', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function subcat_list()
    {
        $query = $this->db->query("SELECT * FROM `subcategory`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function sub_subcat_list()
    {
        $query = $this->db->query("SELECT * FROM `sub_subcategory`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function product_data()
    {
        $query = $this->db->query("SELECT * FROM `product`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function blog_data()
    {
        $query = $this->db->query("SELECT * FROM `blog`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function brand_data()
    {
        $query = $this->db->query("SELECT * FROM `brand`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function lense_type_data()
    {
        $query = $this->db->query("SELECT * FROM `lensetype`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function color_data()
    {
        $query = $this->db->query("SELECT * FROM `color`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function fit_data()
    {
        $query = $this->db->query("SELECT * FROM `fit`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function purpose_data()
    {
        $query = $this->db->query("SELECT * FROM `purpose`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function shape_data()
    {
        $query = $this->db->query("SELECT * FROM `shape`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function material_data()
    {
        $query = $this->db->query("SELECT * FROM `material`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }

    public function blogheader_data()
    {
        $query = $this->db->query("SELECT * FROM `blog_header_image`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }

    public function subcat_name($id)
    {
        $query = $this->db->query("SELECT * FROM `subcategory` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }
    }
    public function get_slider_byid($id)
    {
        $query = $this->db->query("SELECT * FROM `sliderimage` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function slider_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('sliderimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function offer_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('offerimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function banner_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('bannerimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function get_offerimage_byid($id)
    {
        $query = $this->db->query("SELECT * FROM `offerimage` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_bannerimage_byid($id)
    {
        $query = $this->db->query("SELECT * FROM `bannerimage` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function subcat_name_id($id)
    {
        $query = $this->db->query("SELECT * FROM `subcategory` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function subcat_name_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM `subcategory` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }
    }
    public function sub_subcat_name_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM `sub_subcategory` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }
    }
    public function sub_subcat($id)
    {
        $query = $this->db->query("SELECT * FROM `sub_subcategory` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function cat_name_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM `category` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }

    public function get_about_data($id)
    {
        $query = $this->db->query("SELECT * FROM `about` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_blog_data($id)
    {
        $query = $this->db->query("SELECT * FROM `blog` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function product_databy_id($id)
    {
        $query = $this->db->query("SELECT * FROM `product` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_lenseusesbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `lenseuses` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_materialbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `material` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_fitbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `fit` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_purposebyid($id)
    {
        $query = $this->db->query("SELECT * FROM `purpose` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_brandbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `brand` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_shapebyid($id)
    {
        $query = $this->db->query("SELECT * FROM `shape` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_colorbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `color` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_cylinderbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `cylinder` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_axisbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `axis` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_nearadditionbyid($id)
    {
        $query = $this->db->query("SELECT * FROM `nearaddition` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_spherebyid($id)
    {
        $query = $this->db->query("SELECT * FROM `sphere` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_prescriptiontypebyid($id)
    {
        $query = $this->db->query("SELECT * FROM `prescription` where `id`='" . $id . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function prescription_package()
    {
        $query = $this->db->query("SELECT * FROM `lensepackages` ");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function prescription_packagebyid($id)
    {
        $query = $this->db->query("SELECT * FROM `lensepackages` where `id`='" . $id . "' ");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function update_cat($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('category', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function product_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('product', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function prescription_package_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('lensepackages', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function update_subcat($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('subcategory', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_sub_subcat($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('sub_subcategory', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function offerimage_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('offerimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function bannerimage_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('bannerimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_prescriptiontypebyid($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('prescription', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_about($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('about', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_blog($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('blog', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_faq($data)
    {

        $query = $this->db->update('faq', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_term($data)
    {

        $query = $this->db->update('term_and_condition', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function brand_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('brand', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function purpose_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('purpose', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function color_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('color', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function fit_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('fit', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function shape_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('shape', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function material_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('material', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function lenseuse_update($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('lenseuses', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_axisbyid($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('axis', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_nearadditionbyid($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('nearaddition', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_spherebyid($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('sphere', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_cylinderbyid($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('cylinder', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function slider_entry($data)
    {
        $query = $this->db->insert('sliderimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function homepage_offer_entry($data)
    {
        $query = $this->db->insert('offerimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function homepage_banner_entry($data)
    {
        $query = $this->db->insert('bannerimage', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    //---------------------------------------------------------------
    public function brand_entry($brand)
    {
        $query = $this->db->insert('brand', $brand);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function fit_entry($fit)
    {
        $query = $this->db->insert('fit', $fit);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function color_entry($color)
    {
        $query = $this->db->insert('color', $color);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function purpose_entry($purpose)
    {
        $query = $this->db->insert('purpose', $purpose);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function shape_entry($shape)
    {
        $query = $this->db->insert('shape', $shape);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function material_entry($material)
    {
        $query = $this->db->insert('material', $material);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function uses_entry($uses_name)
    {
        $query = $this->db->insert('lenseuses', $uses_name);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function lenseuses_data()
    {
        $query = $this->db->query("SELECT * FROM `lenseuses`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function lensebrand_entry($brand)
    {
        $query = $this->db->insert('lensebrand', $brand);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function lensecolor_entry($color)
    {
        $query = $this->db->insert('lensecolor', $color);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function lensetype_entry($lensetype)
    {
        $query = $this->db->insert('lensetype', $lensetype);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function slider_data()
    {
        $query = $this->db->query("SELECT * FROM `sliderimage`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function offer_data()
    {
        $query = $this->db->query("SELECT * FROM `offerimage`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function banner_data()
    {
        $query = $this->db->query("SELECT * FROM `bannerimage`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function about_data()
    {
        $query = $this->db->query("SELECT * FROM `about`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function lensebrand_data()
    {
        $query = $this->db->query("SELECT * FROM `lensebrand`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function lensecolor_data()
    {
        $query = $this->db->query("SELECT * FROM `lensecolor`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function lensetype_data()
    {
        $query = $this->db->query("SELECT * FROM `lensetype`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    //-----------------------Delete functions------------------//
    public function delete_about($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('about');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_blog($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('blog');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_bannerimage($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('bannerimage');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_brand($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('brand');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_category($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('category');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_color($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('color');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_fit($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('fit');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_lensebrand($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('lensebrand');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_material($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('material');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_shape($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('shape');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_subcategory($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('subcategory');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_purpose($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('purpose');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_style($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('style');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_offerimage($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('offerimage');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_lensecolor($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('lensecolor');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_lensetype($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('lensetype');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_blog_header_image($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('blog_header_image');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_product($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('product');
        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

}
