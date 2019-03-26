<?php
class Vquery extends CI_Model
{
    public function __construct()
    {
        $this->userTbl = 'user';
    }
    /*
     * get rows from the users table
     */
    public function fetch_filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('product');
        return $this->db->get();
    }
    public function make_query($pageid, $brand, $fit, $color, $material, $shape, $purpose, $byPrize, $shortby, $subsubid)
    {
        $sid = 3;
        if ($subsubid && !empty($subsubid)) {
            $query = "SELECT * FROM product WHERE sub_sub_catid ='" . $subsubid . "' AND status ='1' ";
        }
        if (isset($pageid) !== null && !empty($pageid)) {
            $query = "SELECT * FROM product WHERE sub_cat_id ='" . $pageid . "' AND status ='1' ";
        }

        if ($pageid == "" && $subsubid == "") {
            $query = "SELECT * FROM product WHERE status ='1' ";

        }

        if ($brand) {
            $brand_filter = implode("|", $brand);
            $query .= "AND brand regexp '[[:<:]]" . $brand_filter . "[[:>:]]'";
        }
        if ($shortby == 'Newest') {
            $query .= "ORDER BY `id` DESC";
        }
        if ($shortby == 'popular') {
            $query .= "ORDER BY `id` ASC";
        }
        if ($byPrize == 'h') {
            $query .= "AND `sale_price` >= 500";
        }
        if ($byPrize == 'l') {
            $query .= " AND `sale_price` <= 500";
        }
        if ($byPrize == 'l_to_h') {
            $query .= "ORDER BY `sale_price` ASC";
        }
        if ($byPrize == 'h_to_l') {
            $query .= "ORDER BY `sale_price` DESC";
        }
        if (isset($fit)) {
            $fit_filter = implode("|", $fit);
            $query .= "AND fit regexp '[[:<:]]" . $fit_filter . "[[:>:]]'";
        }
        if (isset($color)) {
            $color_filter = implode("|", $color);
            $query .= "AND color regexp '[[:<:]]" . $color_filter . "[[:>:]]'";
        }
        if (isset($shape)) {
            $shape_filter = implode("|", $shape);
            $query .= "AND shape regexp '[[:<:]]" . $shape_filter . "[[:>:]]'";
        }
        if (isset($material)) {
            $material_filter = implode("|", $material);
            $query .= " AND material regexp '[[:<:]]" . $material_filter . "[[:>:]]'";
        }
        if (isset($purpose)) {
            $purpose_filter = implode("|", $purpose);
            $query .= "AND purpose regexp '[[:<:]]" . $purpose_filter . "[[:>:]]'";
        }

        return $query;
    }
    public function count_all($pageid, $brand, $fit, $color, $material, $shape, $purpose, $byPrize, $shortby, $subsubid)
    {
        $query = $this->make_query($pageid, $brand, $fit, $color, $material, $shape, $purpose, $byPrize, $shortby, $subsubid);
        $data = $this->db->query($query);
        return $data->num_rows();
    }
    public function fetch_data($limit, $start, $pageid, $brand, $fit, $color, $material, $shape, $purpose, $byPrize, $shortby, $subsubid)
    {
        $query = $this->make_query($pageid, $brand, $fit, $color, $material, $shape, $purpose, $byPrize, $shortby, $subsubid);
        $query .= ' LIMIT ' . $start . ',' . $limit;
        $data = $this->db->query($query);
        $output = '';
        if ($data->num_rows() > 0) {
            $this->session->set_userdata('active', 'active'); //wishlist active
            foreach ($data->result() as $key => $pro_dat) {

                $output .= ' <div class="col-sm-4 proBox">
                        <div class="product">
                            <div class="itemTop">
                                <ul class="colorList">' .

                '</ul>
                            </div>
                            <div class="itemImg"> <a href="' .
                site_url() . 'productDetails?id=' . $pro_dat->id . '">


                            <img src="' . site_url() . 'assets/upload/product/' . str_replace(" ", '_', $pro_dat->pro_image) . '

                               " alt="Frame">

                            </div>
                            <div class="itemBottom">
                                <h4 style="color:#1b1b1b" class="productName">

                                    ' . $pro_dat->product_name . '

                                </h4>
                                <div class="itemOffer clearfix">
                                    <em>Rs ' .
                $pro_dat->regular_price
                . '</em>
                                    <div class="offer"><span>' .
                $pro_dat->offer
                . '% Off</span></div>
                                </div>
                                <div class="priceBox">
                                    <span>Rs ' .
                $pro_dat->sale_price .
                '</span>
                                </div>
                                <div class="productAction">
                             </a>
                                     <div class="productAction productActionHome">

                                    <div class="wishlist icon">


                                     <i style="cursor: pointer" class="icon-favorite-heart-button class" proprice="' . $pro_dat->sale_price . '" pro_id="' . $pro_dat->id . '" pro_name="' . $pro_dat->product_name . '"pro_image="' . $pro_dat->pro_image . '"></i>
                                     </div>
                                     </div>

                                </div>
                            </div>
                        </div>
                    </div>

<script src="' . base_url() . '/assets/js/jquery-3.2.1.min.js"></script>

';
            }
            $output .= '<script type="text/javascript">
$(document).ready(function(){
    $(".add_cart").click(function(){
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
      var prescription_type= "Frame Only";
      $.ajax({
                type:"POST",
                url:"' . base_url('frameOnly') . '",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){
                     $("#cartno").html(data);
                }
            });

    });
});
</script>
 <script type="text/javascript">
  $(document).ready(function(){
   $(".class").click(function(){
        $(this).toggleClass("' . $this->session->userdata('active') . '");
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
      var prescription_type="prescription_type";
        $.ajax({
                type:"POST",
                url:"' . base_url('wishframeOnly') . '",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){

                }
            });

    });
    });
</script>'
            ;
        } else {
            $output = 'No Data Found';
        }
        return $output;
    }
    public function make_lensequery($pageid, $brand, $color, $lense_uses, $byPrize, $shortby, $subsubid)
    {
        $sid = 3;
        if ($subsubid && !empty($subsubid)) {
            $query = "SELECT * FROM product WHERE sub_sub_catid ='" . $subsubid . "' AND status ='1' ";
        }
        if (isset($pageid) !== null && !empty($pageid)) {
            $query = "SELECT * FROM product WHERE sub_cat_id ='" . $pageid . "' AND status ='1' ";
        }

        if ($pageid == "" && $subsubid == "") {
            $query = "SELECT * FROM product WHERE status ='1' ";

        }

        if ($brand) {
            $brand_filter = implode("|", $brand);
            $query .= "AND brand regexp '[[:<:]]" . $brand_filter . "[[:>:]]'";
        }
        if ($shortby == 'Newest') {
            $query .= "ORDER BY `id` DESC";
        }
        if ($shortby == 'popular') {
            $query .= "ORDER BY `id` ASC";
        }
        if ($byPrize == 'h') {
            $query .= "AND `sale_price` >= 500";
        }
        if ($byPrize == 'l') {
            $query .= "AND `sale_price` <= 500";
        }
        if ($byPrize == 'l_to_h') {
            $query .= "ORDER BY `sale_price` ASC";
        }
        if ($byPrize == 'h_to_l') {
            $query .= "ORDER BY `sale_price` DESC";
        }
        if (isset($lense_uses)) {
            $lense_uses = implode("|", $lense_uses);
            $query .= "AND lense_type regexp '[[:<:]]" . $lense_uses . "[[:>:]]'";
        }
        if (isset($color)) {
            $color_filter = implode("|", $color);
            $query .= "AND color regexp '[[:<:]]" . $color_filter . "[[:>:]]'";
        }

        return $query;
    }
    public function count_lenseall($pageid, $brand, $color, $lense_uses, $byPrize, $shortby, $subsubid)
    {
        $query = $this->make_lensequery($pageid, $brand, $color, $lense_uses, $byPrize, $shortby, $subsubid);
        $data = $this->db->query($query);
        return $data->num_rows();
    }
    public function fetch_lensedata($limit, $start, $pageid, $brand, $color, $lense_uses, $byPrize, $shortby, $subsubid)
    {
        $query = $this->make_lensequery($pageid, $brand, $color, $lense_uses, $byPrize, $shortby, $subsubid);
        $query .= ' LIMIT ' . $start . ',' . $limit;
        $data = $this->db->query($query);
        $output = '';
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $key => $pro_dat) {
                $color[] = explode('|', $pro_dat->color);

                $output .= ' <div class="col-sm-4 proBox">
                        <div class="product">
                            <div class="itemTop">
                                <ul class="colorList">' .

                '</ul>
                            </div>
                            <div class="itemImg"> <a href="' .
                site_url() . 'lenseDetails?id=' . $pro_dat->id . '">


                            <img src="' . site_url() . 'assets/upload/product/' . str_replace(" ", '_', $pro_dat->pro_image) . '

                               " alt="Frame"></a>

                            </div>
                            <div class="itemBottom">
                                <h3>
                                    <a class="productName" href="#">' .
                $pro_dat->product_name
                . '</a>
                                </h3>
                                <div class="itemOffer clearfix">
                                    <em>Rs ' .
                $pro_dat->regular_price
                . '</em>
                                    <div class="offer"><span>' .
                $pro_dat->offer
                . '% Off</span></div>
                                </div>
                                <div class="priceBox">
                                    <span>Rs ' .
                $pro_dat->sale_price .
                '</span>
                                </div>
                               <div class="productAction productActionHome">

                                    <div class="wishlist icon">


                                     <i style="cursor: pointer" class="icon-favorite-heart-button class" proprice="' . $pro_dat->sale_price . '" pro_id="' . $pro_dat->id . '" pro_name="' . $pro_dat->product_name . '"pro_image="' . $pro_dat->pro_image . '"></i>

                                    </div>
                               </div>
                                </div>
                            </div>
                        </div>
                    </div>
    ';
            }
            $output .= '<script type="text/javascript">
$(document).ready(function(){
    $(".add_cart").click(function(){
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
      var prescription_type="Contact Lenses";

      $.ajax({
                type:"POST",
                url:"' . base_url('frameOnly') . '",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){
                     $("#cartno").html(data);
                }
            });

    });
});
</script>
 <script type="text/javascript">

   $(".class").click(function(){
        $(this).toggleClass("' . $this->session->userdata('active') . '");
      var sale_price =  $(this).attr("proprice");
      var pro_id=  $(this).attr("pro_id");
      var pro_name=  $(this).attr("pro_name");
      var pro_image=  $(this).attr("pro_image");
       var prescription_type="Contact Lenses";

        $.ajax({
                type:"POST",
                url:"' . base_url('wishframeOnly') . '",
            data:{pro_id:pro_id,pro_name:pro_name,sale_price:sale_price,pro_image:pro_image,prescription_type:prescription_type},
                success:function(data){

                }
            });

    });
</script>'
            ;

        } else {
            $output = 'No Data Found';
        }
        return $output;
    }
    public function getRows($params = array())
    {
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

    /*
     * Insert user information
     */
    public function insert_user($data = array())
    {

        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);

        //return the status
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    public function comment($data)
    {
        $query = $this->db->insert('blog_comment', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function cat_list()
    {
        $query = $this->db->query("SELECT * FROM `category` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function subcat_list()
    {
        $query = $this->db->query("SELECT * FROM `subcategory` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function about_list()
    {
        $query = $this->db->query("SELECT * FROM `about` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }

    public function sub_subcat_list()
    {
        $query = $this->db->query("SELECT * FROM `sub_subcategory` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }

    public function sub_subcat_row($catid)
    {
        $query = $this->db->query("SELECT distinct `sub_cat_name` FROM `sub_subcategory` Where `sub_cat_name` = '" . $catid . "' AND status ='1' ");
        if ($query->num_rows() > 0) {
            return true;

        } else {
            return false;
        }
    }
    public function sub_subcat_data($subcatid)
    {
        $query = $this->db->query("SELECT * FROM `sub_subcategory` where `sub_cat_name` = '" . $subcatid . "' AND status ='1' ");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_cat_id($subid)
    {
        $query = $this->db->query("SELECT `cat_name` FROM `subcategory` where `id` = '" . $subid . "' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }
    }
    public function product_data()
    {
        $query = $this->db->query("SELECT * FROM `product` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function slider_data()
    {
        $query = $this->db->query("SELECT * FROM `sliderimage` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function offer_data()
    {
        $query = $this->db->query("SELECT * FROM `offerimage` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function banner_data()
    {
        $query = $this->db->query("SELECT * FROM `bannerimage` where status ='1'");
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
    public function faq_get()
    {
        $query = $this->db->query("SELECT * FROM `faq`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function blog_data()
    {
        $query = $this->db->query("SELECT * FROM `blog` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function blog_databy_id($title)
    {
        $query = $this->db->query("SELECT * FROM `blog` WHERE `title` regexp '[[:<:]]" . $title . "[[:>:]]' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function blog_comment_id($title)
    {
        $query = $this->db->query("SELECT * FROM `blog_comment` WHERE `blog_title` regexp '[[:<:]]" . $title . "[[:>:]]' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function checkuser_newsletter($email)
    {
        $query = $this->db->query("SELECT * FROM `newsletter` WHERE `email`='" . $email . "' AND status ='1'");
        if ($query->num_rows() == 1) {
            return true;

        } else {
            return false;
        }
    }
    public function product_databy_subid($id)
    {
        $query = $this->db->query("SELECT * FROM `product` WHERE `sub_cat_id`='" . $id . "' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function sub_sub_page_byid($id)
    {
        $query = $this->db->query("SELECT `sub_sub_cat` FROM `subcategory` WHERE `id`='" . $id . "' AND status ='1' AND `sub_sub_cat` IS NOT NULL ");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }

    public function prescription_package($prescription_id)
    {
        $query = $this->db->query("SELECT * FROM `lensepackages` WHERE `id`='" . $prescription_id . "' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }
    }
    public function prescription()
    {
        $query = $this->db->query("SELECT * FROM `lensepackages` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function sphere_list()
    {
        $query = $this->db->query("SELECT * FROM `sphere` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function cylinder_list()
    {
        $query = $this->db->query("SELECT * FROM `cylinder` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function axis_list()
    {
        $query = $this->db->query("SELECT * FROM `axis` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function nearaddition_list()
    {
        $query = $this->db->query("SELECT * FROM `nearaddition` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function uses_data()
    {
        $query = $this->db->query("SELECT * FROM `lenseuses` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function product_latest_data()
    {
        $query = $this->db->query("SELECT * FROM `product` ORDER BY `id` DESC LIMIT 1 ");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function prolatest_data()
    {
        $query = $this->db->query("SELECT * FROM `product` ORDER BY `id` ASC LIMIT 4 ");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function category_name($id)
    {
        $query = $this->db->query("SELECT * FROM `category` where `id`='" . $id . "' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function pro_data_byid($id)
    {
        $query = $this->db->query("SELECT * FROM `product` where `id`='" . $id . "' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function authpass($password, $useremail)
    {
        $query = $this->db->query("SELECT `fname` FROM `user` where `password`='" . $password . "' AND `email`='" . $useremail . "'");
        if ($query->num_rows() > 0) {
            return true;

        } else {
            return false;
        }
    }
    public function removewishlist($id)
    {
        $query = $this->db->query("DELETE FROM `wishlist` where `id`='" . $id . "'");
        if ($query) {
            return true;

        } else {
            return false;
        }
    }
    public function delete_product_from_usercart($id)
    {
        $query = $this->db->query("DELETE FROM `usercart` where `id`='" . $id . "'");
        if ($query) {
            return true;

        } else {
            return false;
        }
    }
    public function delete_user_address($id)
    {
        $query = $this->db->query("DELETE FROM `useraddress` where `id`='" . $id . "'");
        if ($query) {
            return true;

        } else {
            return false;
        }
    }
    public function product_data_color($color, $brand, $purpose, $material, $fit, $shape)
    {

        $query = $this->db->query("SELECT * FROM `product` where `color` regexp '[[:<:]]" . $color . "[[:>:]]' OR `brand` regexp '[[:<:]]" . $brand . "[[:>:]]' OR `purpose` regexp '[[:<:]]" . $purpose . "[[:>:]]' OR `fit` regexp '[[:<:]]" . $fit . "[[:>:]]' OR `material` regexp '[[:<:]]" . $material . "[[:>:]]' OR `shape` regexp '[[:<:]]" . $shape . "[[:>:]]' AND status ='1' ");

        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function product_data_brand($brand)
    {
        $query = $this->db->query("SELECT * FROM `product` where `brand` LIKE '%" . $brand . "%' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function searchproduct($search)
    {
        $query = $this->db->query("SELECT * FROM `product` where `product_name` LIKE '%" . $search . "%' OR `brand` LIKE '%" . $search . "%' OR `uses` LIKE '%" . $search . "%' OR `purpose` LIKE '%" . $search . "%' OR `shape` LIKE '%" . $search . "%' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function product_data_shape($shape)
    {
        $query = $this->db->query("SELECT * FROM `product` where `shape` LIKE '%" . $shape . "%' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }public function product_data_material($material)
    {
        $query = $this->db->query("SELECT * FROM `product` where `material` LIKE '%" . $material . "%' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }public function product_data_fit($fit)
    {
        $query = $this->db->query("SELECT * FROM `product` where `fit` LIKE '%" . $fit . "%' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }public function product_data_purpose($purpose)
    {
        $query = $this->db->query("SELECT * FROM `product` where `purpose` LIKE '%" . $purpose . "%' AND status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function brand_data()
    {
        $query = $this->db->query("SELECT * FROM `brand` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function color_data()
    {
        $query = $this->db->query("SELECT * FROM `color` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function fit_data()
    {
        $query = $this->db->query("SELECT * FROM `fit` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function purpose_data()
    {
        $query = $this->db->query("SELECT * FROM `purpose` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function shape_data()
    {
        $query = $this->db->query("SELECT * FROM `shape` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function material_data()
    {
        $query = $this->db->query("SELECT * FROM `material` where status ='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function relateddata()
    {
        $query = $this->db->query("SELECT * FROM `product` ORDER BY `id` ASC LIMIT 4 ");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function wishlist_insert($data)
    {
        $query = $this->db->insert('wishlist', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function cart_insert($data)
    {
        $query = $this->db->insert('usercart', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function wishlist($user_email)
    {
        $query = $this->db->query("SELECT * FROM `wishlist` where `email`='" . $user_email . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }

    }
    public function useraddress($user_email)
    {
        $query = $this->db->query("SELECT * FROM `useraddress` where `email`='" . $user_email . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }

    }
    public function useraddressguest($user_email)
    {
        $query = $this->db->query("SELECT * FROM `useraddress` where `email`='" . $user_email . "' AND `usertype`='guest'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }

    }
    public function usercardinfo($user_email)
    {
        $query = $this->db->query("SELECT * FROM `cardinfo` where `user_email`='" . $user_email . "' AND `status`='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }

    }
    public function userdata($user_email)
    {
        $query = $this->db->query("SELECT * FROM `user` where `email`='" . $user_email . "'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }

    }
    public function get_cart_count($user_email)
    {
        $query = $this->db->query("SELECT * FROM `usercart` where `email`='" . $user_email . "' AND `order_status`='1'");
        if ($query->num_rows() >= 0) {
            return $query->num_rows();

        } else {
            return false;
        }
    }
    public function cart_countdata($user_email)
    {
        $query = $this->db->query("SELECT * FROM `usercart` where `email`='" . $user_email . "'");
        if ($query) {
            return $query->num_rows();

        } else {
            return false;
        }
    }
    public function get_cart($user_email)
    {
        $query = $this->db->query("SELECT * FROM `usercart` where `email`='" . $user_email . "' AND `order_status`='1'");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function get_wish_byid($wish_id)
    {
        $query = $this->db->query("SELECT * FROM `wishlist` where `id`='" . $wish_id . "'");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }

    }
    public function entry_personalinfo($data, $user)
    {
        $this->db->where('email', $user);
        $query = $this->db->update('user', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_addressinfo($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('useraddress', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function update_product_of_usercart($data, $email, $rowid)
    {
        $this->db->where('email', $email);
        $this->db->where('pro_id', $rowid);
        $query = $this->db->update('usercart', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function updatepass($data, $user)
    {
        $this->db->where('email', $user);
        $query = $this->db->update('user', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function entry_addressinfo($data)
    {
        $query = $this->db->insert('useraddress', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function cart_insert_fromwish($data)
    {
        $query = $this->db->insert('usercart', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function newsletter($email)
    {
        $query = $this->db->insert('newsletter', $email);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function frgpass($email, $phone)
    {
        $query = $this->db->query("SELECT `id` FROM `user` where `email`='" . $email . "' AND `phone`='" . $phone . "'");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
    public function insert_review($data)
    {
        $query = $this->db->insert('userreview', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function facebook_get()
    {
        $query = $this->db->query("SELECT * FROM `facebook`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function twitter_get()
    {
        $query = $this->db->query("SELECT * FROM `twitter`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function googleplus_get()
    {
        $query = $this->db->query("SELECT * FROM `googleplus`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function blog_list()
    {
        $query = $this->db->query("SELECT * FROM `blog`");
        if ($query->num_rows() > 0) {
            return $query->result();

        } else {
            return false;
        }
    }
    public function insert_carddata($data)
    {
        $query = $this->db->insert('cardinfo', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function remove_carddata($data, $card_id)
    {
        $this->db->where('id', $card_id);
        $query = $this->db->update('cardinfo', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    //after order cart status for product//
    public function orderaftercart($data, $email, $id)
    {
        $this->db->where('email', $email);
        $this->db->where('pro_id', $id);
        $query = $this->db->update('usercart', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    //user address by Id
    public function user_addressbyid($id, $email)
    {
        $query = $this->db->query("SELECT * FROM `useraddress` where `id`='" . $id . "' AND `email`='" . $email . "'");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }
    }
    public function userorder($data)
    {
        $query = $this->db->insert('userorder', $data);

        if (isset($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function promocode($promocode)
    {
        $query = $this->db->query("SELECT * FROM `offer` where `offer_name`='" . $promocode . "' AND `status`='1' ");
        if ($query->num_rows() > 0) {
            return $query->row();

        } else {
            return false;
        }
    }
    public function promocode_limit($promocode)
    {
        $query = $this->db->query("SELECT * FROM `userorder` where `cupon_code`='" . $promocode . "' ");
        if ($query) {
            return $query->num_rows();

        } else {
            return false;
        }

    }
    public function promocode_valid($promocode)
    {
        $query = $this->db->query("SELECT * FROM `offer` where `offer_name`='" . $promocode . "' ");
        if ($query->num_rows() > 0) {
            return true;

        } else {
            return false;
        }

    }
    public function promocode_maxlimit($promocode)
    {
        $query = $this->db->query("SELECT * FROM `offer` where `offer_name`='" . $promocode . "' ");
        if ($query->num_rows() > 0) {
            return $count = $query->row();

        } else {
            return false;
        }

    }
    public function location_list()
    {
        $query = $this->db->query("SELECT * FROM `locations` WHERE `status`='1' ");

        if (isset($query)) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function get_location_data($shop)
    {
        $query = $this->db->query("SELECT * FROM `locations` WHERE `shop_name`='" . $shop . "' AND `status`='1' ");

        if (isset($query)) {
            return $query->result();
        } else {
            return false;
        }
    }
}
