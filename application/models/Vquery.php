<?php 
class Vquery extends CI_Model {
      function __construct() {
        $this->userTbl = 'user';
    }
    /*
     * get rows from the users table
     */
    function fetch_filter_type($type){
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('product');
        return $this->db->get();
    }
    function make_query($pageid,$brand,$fit,$color,$material,$shape,$purpose,$subsubid){
      $sid=3;
      if($subsubid && !empty($subsubid)){
        $query="SELECT * FROM product WHERE sub_sub_catid ='".$subsubid."' AND status ='1' ";
      }
      if(isset($pageid)!==NULL && !empty($pageid)){
        $query="SELECT * FROM product WHERE sub_cat_id ='".$pageid."' AND status ='1' ";
      }
      
     
     if($pageid=="" && $subsubid==""  )
              {
                 $query="SELECT * FROM product WHERE status ='1' ";
      
              }  

        if($brand)
{
    $brand_filter=implode("|",$brand);
    $query .="AND brand regexp '[[:<:]]".$brand_filter."[[:>:]]'";
}   
  
 if(isset($fit))
{
    $fit_filter=implode("|",$fit);
    $query .="AND fit regexp '[[:<:]]".$fit_filter."[[:>:]]'";
}   
 if(isset($color))
{
    $color_filter=implode("|",$color);
    $query .="AND color regexp '[[:<:]]".$color_filter."[[:>:]]'";
}   
 if(isset($shape))
{
    $shape_filter=implode("|",$shape);
    $query .="AND shape regexp '[[:<:]]".$shape_filter."[[:>:]]'";
}   
 if(isset($material))
{
    $material_filter=implode("|",$material);
    $query .=" AND material regexp '[[:<:]]".$material_filter."[[:>:]]'";
}   
 if(isset($purpose))
{
    $purpose_filter=implode("|",$purpose);
    $query .="AND purpose regexp '[[:<:]]".$purpose_filter."[[:>:]]'";
} 
  
return $query;
 }
 function count_all($pageid,$brand,$fit,$color,$material,$shape,$purpose,$subsubid){
    $query=$this->make_query($pageid,$brand,$fit,$color,$material,$shape,$purpose,$subsubid);
    $data=$this->db->query($query);
    return $data->num_rows();
 }
 function fetch_data($limit,$start,$pageid,$brand,$fit,$color,$material,$shape,$purpose,$subsubid){
    $query =$this->make_query($pageid,$brand,$fit,$color,$material,$shape,$purpose,$subsubid);
    $query .=' LIMIT '.$start.','.$limit;
    $data =$this->db->query($query);
    $output = '';
    if($data->num_rows()>0){
   foreach ($data->result() as $key => $pro_dat) {
    $color[]=explode('|',$pro_dat->color);

     $output .=' <div class="col-sm-4 proBox">
                        <div class="product">
                            <div class="itemTop">
                                <ul class="colorList">'.
                              
                                         
                            '</ul>
                            </div>
                            <div class="itemImg"> <a href="'.
                             site_url().'productDetails?id='. $pro_dat->id.'">
                           
                           
                            <img src="'.site_url().'assets/upload/product/'.str_replace(" ", '_',$pro_dat->pro_image).'
                             
                               " alt="Frame"></a>

                            </div>
                            <div class="itemBottom">
                                <h3>
                                    <a class="productName" href="#">'.
                                     $pro_dat->product_name
                                     .'</a>
                                </h3>
                                <div class="itemOffer clearfix">                            
                                    <em>Rs '.
                                   $pro_dat->regular_price
                                     .'</em>
                                    <div class="offer"><span>'.
                                    $pro_dat->offer
                                      .'% Off</span></div>
                                </div>
                                <div class="priceBox">
                                    <span>Rs '.
                                  $pro_dat->sale_price.
                                    '</span>
                                </div>
                                <div class="productAction">
                
                                    <div class="cart icon">
                                        <form action="shoppingCart" method="post">
                                             <input type="hidden" name="id" value="'.
                                               $pro_dat->id.'">

                                   <input type="hidden" name="pro_name" value="'.
                                   $pro_dat->product_name.
                                     '">
                                         <input type="hidden" name="sale_price" value="'.
                                        $pro_dat->sale_price.
                                          '">
                                          <input type="hidden" name="pro_image" value="'.
                                         $pro_dat->pro_image.
                                         '">
                                         
                                        
                                    <button style="padding: 0px 20px; 
    border: 0px;
    color: #666;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    display: block;
    background: #ffffff05;" name="addtocart" type="submit" value="addtocart" >  <i class="icon-shopping-cart"></i></button>
                                      
                                    </form>
                                    </div>
                                    <div class="wishlist icon">
                                     <form action="shoppingCart" method="post">
                                             <input type="hidden" name="id" value="'.
                                               $pro_dat->id.'">

                                   <input type="hidden" name="pro_name" value="'.
                                   $pro_dat->product_name.
                                     '">
                                         <input type="hidden" name="sale_price" value="'.
                                        $pro_dat->sale_price.
                                          '">
                                          <input type="hidden" name="pro_image" value="'.
                                         $pro_dat->pro_image.
                                         '">
                                     <button style="padding: 0px 20px; 
    border: 0px;
    color: #666;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    display: block;
    background: #ffffff05;" id="frameOnlywish" type="submit" value="frameOnlywish" >
                                        <i class="icon-favorite-heart-button class" id="'.
                                        $pro_dat->id.
                                         '"></i></button></form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><script type="text/javascript">
  
   $(".class").click(function(){
        $(this).toggleClass("active");
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("#frameOnlywish").on("click",function(){
        var subcat_id= $(this).val();
         alert();
        if(subcat_id){
            $.ajax({           
                 type:"POST",
                  data:"subcat_id="+subcat_id, 
                 async:false,              
                success:function(data){
               
                   $("#sub_sub_cat_name").html(data);  
                }
            }); 
        }
        else{
            $("#sub_sub_cat_name").html("<option value="">Select Sub Category name first</option>");   
        }
    });
});
</script>';
   }
    }
    else{
$output='No Data Found';
    }
  return $output;
  }
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
    

 /*
     * Insert user information
     */
    public function insert_user($data = array()) {
        
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

public function cat_list()
        {
        $query = $this->db->query("SELECT * FROM `category`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function subcat_list()
        {
        $query = $this->db->query("SELECT * FROM `subcategory`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        
        public function sub_subcat_row($catid)
        {
        $query = $this->db->query("SELECT distinct `sub_cat_name` FROM `sub_subcategory` Where `sub_cat_name` = '".$catid."'");
        if($query->num_rows() >0){
          return True;
          
        }
        else{
            return false;
        }
        }
        public function sub_subcat_data($subcatid)
        {
        $query = $this->db->query("SELECT * FROM `sub_subcategory` where `sub_cat_name` = '".$subcatid."' ");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
         public function product_data()
        {
        $query = $this->db->query("SELECT * FROM `product`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function slider_data()
        {
        $query = $this->db->query("SELECT * FROM `sliderimage`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function offer_data()
        {
        $query = $this->db->query("SELECT * FROM `offerimage`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function banner_data()
        {
        $query = $this->db->query("SELECT * FROM `bannerimage`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
         public function term_get()
        {
        $query = $this->db->query("SELECT * FROM `term_and_condition`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function faq_get()
        {
        $query = $this->db->query("SELECT * FROM `faq`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function blog_data()
        {
        $query = $this->db->query("SELECT * FROM `blog`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function blog_databy_id($id)
        {
        $query = $this->db->query("SELECT * FROM `blog` WHERE `id`='".$id."'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function product_databy_subid($id)
        {
        $query = $this->db->query("SELECT * FROM `product` WHERE `sub_cat_id`='".$id."'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function sub_sub_page_byid($id)
        {
        $query = $this->db->query("SELECT `sub_sub_cat` FROM `subcategory` WHERE `id`='".$id."' AND `sub_sub_cat` IS NOT NULL");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
       
        public function prescription_package($prescription_id)
        {
        $query = $this->db->query("SELECT * FROM `lensepackages` WHERE `id`='".$prescription_id."'");
        if($query->num_rows() >0){
          return $query->row();
          
        }
        else{
            return false;
        }
        }
        public function prescription()
        {
        $query = $this->db->query("SELECT * FROM `lensepackages`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function sphere_list()
        {
        $query = $this->db->query("SELECT * FROM `sphere`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function cylinder_list()
        {
        $query = $this->db->query("SELECT * FROM `cylinder`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function axis_list()
        {
        $query = $this->db->query("SELECT * FROM `axis`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function nearaddition_list()
        {
        $query = $this->db->query("SELECT * FROM `nearaddition`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function uses_data()
        {
        $query = $this->db->query("SELECT * FROM `lenseuses`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
         public function product_latest_data()
        {
        $query = $this->db->query("SELECT * FROM `product` ORDER BY `id` DESC LIMIT 1 ");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function prolatest_data()
        {
        $query = $this->db->query("SELECT * FROM `product` ORDER BY `id` ASC LIMIT 4 ");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
         public function category_name($id)
        {
        $query = $this->db->query("SELECT * FROM `category` where `id`='".$id."'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
         public function pro_data_byid($id)
        {
        $query = $this->db->query("SELECT * FROM `product` where `id`='".$id."'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function authpass($password,$useremail)
        {
        $query = $this->db->query("SELECT `fname` FROM `user` where `password`='".$password."' AND `email`='".$useremail."'");
        if($query->num_rows() >0){
          return true;
          
        }
        else{
            return false;
        }
        }
        public function removewishlist($id)
        {
        $query = $this->db->query("DELETE FROM `wishlist` where `id`='".$id."'");
        if($query){
          return true;
          
        }
        else{
            return false;
        }
        }
         public function product_data_color($color,$brand,$purpose,$material,$fit,$shape)
        {
            
    $query = $this->db->query("SELECT * FROM `product` where `color` regexp '[[:<:]]".$color."[[:>:]]' OR `brand` regexp '[[:<:]]".$brand."[[:>:]]' OR `purpose` regexp '[[:<:]]".$purpose."[[:>:]]' OR `fit` regexp '[[:<:]]".$fit."[[:>:]]' OR `material` regexp '[[:<:]]".$material."[[:>:]]' OR `shape` regexp '[[:<:]]".$shape."[[:>:]]' ");

        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
         public function product_data_brand($brand)
        {
        $query = $this->db->query("SELECT * FROM `product` where `brand` LIKE '%".$brand."%'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        } public function product_data_shape($shape)
        {
        $query = $this->db->query("SELECT * FROM `product` where `shape` LIKE '%".$shape."%'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        } public function product_data_material($material)
        {
        $query = $this->db->query("SELECT * FROM `product` where `material` LIKE '%".$material."%'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        } public function product_data_fit($fit)
        {
        $query = $this->db->query("SELECT * FROM `product` where `fit` LIKE '%".$fit."%'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        } public function product_data_purpose($purpose)
        {
        $query = $this->db->query("SELECT * FROM `product` where `purpose` LIKE '%".$purpose."%'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function brand_data()
        {
        $query = $this->db->query("SELECT * FROM `brand`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
public function color_data()
        {
        $query = $this->db->query("SELECT * FROM `color`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
public function fit_data()
        {
        $query = $this->db->query("SELECT * FROM `fit`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
public function purpose_data()
        {
        $query = $this->db->query("SELECT * FROM `purpose`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
public function shape_data()
        {
        $query = $this->db->query("SELECT * FROM `shape`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
public function material_data()
        {
        $query = $this->db->query("SELECT * FROM `material`");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
         public function relateddata()
        {
        $query = $this->db->query("SELECT * FROM `product` ORDER BY `id` ASC LIMIT 4 ");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }
        }
        public function wishlist_insert($data)
        {          
         $query = $this->db->insert('wishlist',$data); 
         
         if (isset($query)) {
          return true;
         }   
         else{
            return false;
         }     
        } 
        public function wishlist($user_email)
        {
        $query = $this->db->query("SELECT * FROM `wishlist` where `email`='".$user_email."'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }

}
 public function useraddress($user_email)
        {
        $query = $this->db->query("SELECT * FROM `useraddress` where `email`='".$user_email."'");
        if($query->num_rows() >0){
          return $query->result();
          
        }
        else{
            return false;
        }

}
public function entry_personalinfo($data,$user)
        {
             $this->db->where('email',$user);
            $query=  $this->db->update('user',$data);
                 
         if (isset($query)) {
          return true;
         }   
         else{
            return false;
         }     
        } 
        public function updatepass($data,$user)
        {
             $this->db->where('email',$user);
            $query=  $this->db->update('password',$data);
                 
         if (isset($query)) {
          return true;
         }   
         else{
            return false;
         }     
        } 
         public function entry_addressinfo($data)
        {          
         $query = $this->db->insert('useraddress',$data); 
         
         if (isset($query)) {
          return true;
         }   
         else{
            return false;
         }     
        } 
        public function newsletter($email)
        {          
         $query = $this->db->insert('newsletter',$email); 
         
         if (isset($query)) {
          return true;
         }   
         else{
            return false;
         }     
        } 
        public function frgpass($user_email)
        {
        $query = $this->db->query("SELECT `id` FROM `user` where `email`='".$user_email."'");
        if($query->num_rows() >0){
            $str="01234567890asdhkjsedhjdnbxcjsdhj";
            $str=str_shuffle($str);
            $str=substr($str,0,10);
            $tkn=array(
            'token'=>$str
            );
            $url="http://leonardstech.com/CI/forget_pass/?token=$str&email=$user_email";
            mail($user_email, "Reset Password", "To Reset Your Password, Please Visit this:".$url,"From:help@domain.com\r\n");
            $this->db->where('email',$user_email);
            $this->db->update('user',$tkn);
            $result='Please check your mail';
          
          
        }
        else{
            $result='Please check your Inputs';
        }
        return $result;

}
}
?>