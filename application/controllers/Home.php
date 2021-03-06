<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Vquery');
        $this->load->database();

        $this->load->library('cart');
        $this->session->set_userdata('active', 'active');
        $cat_data['fb'] = $this->Vquery->facebook_get();
        $cat_data['gp'] = $this->Vquery->googleplus_get();
        $cat_data['twitter'] = $this->Vquery->twitter_get();
        if ($this->session->userdata('isUserLoggedIn') == true &&
            $this->session->userdata('userId')) {
            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {
                $gfname = $user->fname;
                $glname = $user->lname;
                $gemail = $user->email;

                $countwish['countwish'] = $this->Vquery->wishlist($gemail);
                $count_wish = count($countwish);

                $count_cart = $this->Vquery->get_cart_count($gemail);

                $this->session->set_userdata('count_wish1', '2');
                $this->session->set_userdata('count_cart', $count_cart);
                $this->session->set_userdata('user_lname', $glname);
                $this->session->set_userdata('user_name', $gfname);
                $this->session->set_userdata('user_email', $gemail);

            }
        }
    }

    public function index()
    {
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['slider_data'] = $this->Vquery->slider_data();
        $cat_data['offer_data'] = $this->Vquery->offer_data();
        $cat_data['banner_data'] = $this->Vquery->banner_data();
        $cat_data['pro_data'] = $this->Vquery->prolatest_data();
        $cat_data['product_data'] = $this->Vquery->product_latest_data();
        $cat_data['blog_data'] = $this->Vquery->blog_data();
        $this->load->view('home', $cat_data);
    }
    public function aboutus()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['about_data'] = $this->Vquery->about_list();
        $this->load->view('aboutus', $cat_data);
    }
    public function blogDetails()
    {

        $title = str_replace('_', ' ', $this->input->get('title'));
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['blog_data'] = $this->Vquery->blog_databy_id($title);
        $cat_data['blog_comment'] = $this->Vquery->blog_comment_id($title);
        $this->load->view('blogDetails', $cat_data);
    }
    public function contactLenses()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $this->load->view('contactLenses', $cat_data);
    }
    public function lensAccessories()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $this->load->view('lensAccessories', $cat_data);
    }
    public function lensDetails()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $this->load->view('lensDetails', $cat_data);
    }
    public function sunglassesMen()
    {
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $this->load->view('sunglassesMen', $cat_data);
    }
    public function sunglassesWomen()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $this->load->view('sunglassesWomen', $cat_data, $cat_data);
    }
    public function productList()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['brand_name'] = $this->Vquery->brand_data();
        $cat_data['color_name'] = $this->Vquery->color_data();
        $cat_data['fit_name'] = $this->Vquery->fit_data();
        $cat_data['shape_name'] = $this->Vquery->shape_data();
        $cat_data['material_name'] = $this->Vquery->material_data();
        $cat_data['purpose_name'] = $this->Vquery->purpose_data();
        if ($this->input->get('id')) {
            $cat_data['page_id'] = $this->input->get('id');
            $catid = $this->input->get('id');
            $cat_id['cat_id'] = $this->Vquery->get_cat_id($catid);
            foreach ($cat_id as $key => $value) {
                $cat_idd = $value->cat_name;
            }

            $true = $this->Vquery->sub_subcat_row($catid);
            if ($true == true) {
                if ($cat_idd == 15) {
                    $sid = $this->input->get('sid');
                    $this->session->set_userdata('last_subid', $sid);
                    $this->session->set_userdata('lense_page', $catid);

                }
                $this->session->set_userdata('last_subid', $catid);
                redirect('subProduct');
            } elseif ($true == false && $cat_idd == 15) {
                $sid = $this->input->get('sid');
                $this->session->set_userdata('last_subid', $sid);
                $this->session->set_userdata('lense_page', $catid);

                redirect('contactLense');
            }

        }
        if ($this->input->get('sid')) {
            $cat_data['sid'] = $this->input->get('sid');
            $sid = $this->input->get('sid');

            $true = $this->Vquery->sub_subcat_row($sid);
            if ($true == true) {
                $this->session->set_userdata('last_subid', $sid);
                redirect('subProduct');
            }

        }
        $this->load->view('productList', $cat_data);
    }
    public function subProduct()
    {
        $subcatid = $this->session->userdata('last_subid');
        $cat_data['subcatdata'] = $this->Vquery->sub_subcat_data($subcatid);

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $this->load->view('subProduct', $cat_data);

    }

    public function contactlense()
    {

        if ($this->input->get('color') || $this->input->get('brand') || $this->input->get('uses')) {
            @$color = $this->input->get('color');
            @$brand = $this->input->get('brand');
            @$shape = $this->input->get('uses');

            $cat_data['pro_data'] = $this->Vquery->product_data_color($color, $brand, $shape, $material, $fit, $purpose);
        } else {
            //$cat_data['pro_data']=$this->Vquery->contactlense_product_data();
        }
        $cat_data['cat_data'] = $this->Vquery->cat_list();

        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['brand_name'] = $this->Vquery->brand_data();
        $cat_data['color_name'] = $this->Vquery->color_data();
        $cat_data['lense_uses'] = $this->Vquery->uses_data();

        $this->load->view('contactLenses', $cat_data);
    }
    public function productDetails()
    {

        $id = $this->input->get('id');
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['pro_data'] = $this->Vquery->pro_data_byid($id);

        $cat_data['related'] = $this->Vquery->relateddata();
        $cat_data['prescription_type'] = $this->Vquery->prescription();
        $cat_data['sphere_data'] = $this->Vquery->sphere_list();
        $cat_data['cylinder_data'] = $this->Vquery->cylinder_list();
        $cat_data['axis_data'] = $this->Vquery->axis_list();
        $cat_data['nearaddition_data'] = $this->Vquery->nearaddition_list();

        $this->load->view('productDetails', $cat_data);
    }
    public function lenseDetails()
    {

        $id = $this->input->get('id');
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['pro_data'] = $this->Vquery->pro_data_byid($id);
        $cat_data['related'] = $this->Vquery->relateddata();
        $cat_data['sphere_data'] = $this->Vquery->sphere_list();
        $cat_data['cylinder_data'] = $this->Vquery->cylinder_list();
        $cat_data['axis_data'] = $this->Vquery->axis_list();
        $cat_data['nearaddition_data'] = $this->Vquery->nearaddition_list();

        $this->load->view('lensDetails', $cat_data);
    }
    public function removewishlist()
    {

        $id = $this->input->post('wishid');
        echo $this->Vquery->removewishlist($id);

    }

    public function wisht_to_shoppingCart()
    {
        $wish_id = $this->input->post('wish_id');

        $wishdata['wishdata'] = $this->Vquery->get_wish_byid($wish_id);
        foreach ($wishdata as $wishdata) {
            $wish_data = array(
                'id' => $wishdata->id,
                'email' => $wishdata->email,
                'name' => $wishdata->name,
                'price' => $wishdata->price,
                'pro_image' => $wishdata->pro_image,
                'prescription_type' => $wishdata->prescription_type,
                'lense_name' => $wishdata->lense_name,
                'lense_price' => $wishdata->lense_price,
                'lsphere' => $wishdata->lsphere,
                'rsphere' => $wishdata->rsphere,
                'lcylinder' => $wishdata->lcylinder,
                'rcylinder' => $wishdata->rcylinder,
                'laxis' => $wishdata->laxis,
                'raxis' => $wishdata->raxis,
                'lbox' => $wishdata->lbox,
                'rbox' => $wishdata->rbox,
                'nearpdsphere' => $wishdata->nearpdsphere,
                'pdsphere' => $wishdata->pdsphere,
                'prescription_name' => $wishdata->prescription_name,
                'qty' => $wishdata->qty,
            );
        }

        $this->Vquery->cart_insert_fromwish($wish_data);
        redirect('shoppingCart');
    }

    public function singleVision()
    {
        $this->load->library('cart');
        $prescription_id = $this->input->post('prescription_id');

        $press['press'] = $this->Vquery->prescription_package($prescription_id);
        foreach ($press as $key => $value) {
            $lense_price = $value->price;
            $prescription_type = $value->prescription_type;
            $lense_name = $value->lense_name;
        }

        $data = array('id' => $_POST['id'],
            'name' => $_POST['pro_name'],
            'lense_price' => $lense_price,
            'prescription_type' => $prescription_type,
            'prescription_name' => $_POST['prescriptionname'],
            'lense_name' => $lense_name,
            'tax' => $_POST['tax'],
            'price' => $_POST['sale_price'],
            'pro_image' => $_POST['pro_image'],
            'qty' => 1,
            'order_status' => 1,
            'lsphere' => $_POST['lsphere'],
            'rsphere' => $_POST['rsphere'],
            'lcylinder' => $_POST['lcylinder'],
            'rcylinder' => $_POST['rcylinder'],
            'laxis' => $_POST['laxis'],
            'color' => $_POST['color_name'],
            'raxis' => $_POST['raxis'],
        );
        $this->session->set_userdata('cdata', $data);
        $this->cart->insert($data);
        if (($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId'))) {
            $email = $this->session->userdata('user_email');
            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->cart_insert($dataa);

        }
        if ($this->session->userdata('guest_email')) {
            $email = $this->session->userdata('guest_email');
            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->cart_insert($dataa);

        }
        redirect('shoppingCart');
    }

    public function bifocal()
    {

        $prescription_id = $this->input->post('prescription_id');
        $press['press'] = $this->Vquery->prescription_package($prescription_id);
        foreach ($press as $key => $value) {
            $lense_price = $value->price;
            $prescription_type = $value->prescription_type;
            $lense_name = $value->lense_name;
        }

        $data = array('id' => $_POST['id'],
            'name' => $_POST['pro_name'],
            'lense_price' => $lense_price,
            'prescription_type' => $prescription_type,
            'prescription_name' => $_POST['prescriptionname'],
            'lense_name' => $lense_name,
            'price' => $_POST['sale_price'],
            'tax' => $_POST['tax'],
            'pro_image' => $_POST['pro_image'],
            'qty' => 1,
            'order_status' => 1,
            'lsphere' => $_POST['lsphere'],
            'rsphere' => $_POST['rsphere'],
            'leftlnearAddi' => $_POST['leftlnearAddi'],
            'rightlnearAddi' => $_POST['rightlnearAddi'],
            'pdsphere' => $_POST['pdsphere'],
            'nearpdsphere' => $_POST['nearpdsphere'],
            'lcylinder' => $_POST['lcylinder'],
            'rcylinder' => $_POST['rcylinder'],
            'laxis' => $_POST['laxis'],
            'color' => $_POST['color_name'],
            'raxis' => $_POST['raxis'],
            'description' => $_POST['description'],
        );

        $this->session->set_userdata('cdata', $data);
        $this->cart->insert($data);
        if (($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId'))) {
            $email = $this->session->userdata('user_email');
            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->cart_insert($dataa);

        }
        if ($this->session->userdata('guest_email')) {
            $email = $this->session->userdata('guest_email');
            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->cart_insert($dataa);

        }
        redirect('shoppingCart');
    }

    public function zeroPower()
    {

        $prescription_id = $this->input->post('prescription_id');
        $press['press'] = $this->Vquery->prescription_package($prescription_id);
        foreach ($press as $key => $value) {
            $lense_price = $value->price;
            $prescription_type = $value->prescription_type;
            $lense_name = $value->lense_name;
        }

        $data = array('id' => $_POST['id'],
            'name' => $_POST['pro_name'],
            'lense_price' => $lense_price,
            'prescription_type' => $prescription_type,
            'prescription_name' => $_POST['prescriptionname'],
            'lense_name' => $lense_name,
            'price' => $_POST['sale_price'],
            'tax' => $_POST['tax'],
            'pro_image' => $_POST['pro_image'],
            'qty' => 1,

            'lsphere' => $_POST['lsphere'],
            'rsphere' => $_POST['rsphere'],
            'lcylinder' => $_POST['lcylinder'],
            'rcylinder' => $_POST['rcylinder'],
            'laxis' => $_POST['laxis'],
            'color' => $_POST['color_name'],
            'raxis' => $_POST['raxis'],
            'order_status' => 1,
        );
        $this->session->set_userdata('cdata', $data);
        $this->cart->insert($data);
        if (($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId'))) {
            $email = $this->session->userdata('user_email');
            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->cart_insert($dataa);

        }
        if ($this->session->userdata('guest_email')) {
            $email = $this->session->userdata('guest_email');
            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->cart_insert($dataa);

        }

        redirect('shoppingCart');
    }

    public function shoppingCart()
    {
        $this->load->library('cart');
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        if (($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId'))) {
            $email = $this->session->userdata('user_email');
            $cat_data['cart_data'] = $this->Vquery->get_cart($email);

        }
        $this->load->view('shoppingCart', $cat_data);

    }
    public function contactlensecart()
    {

        $data = array('id' => $_POST['id'],
            'name' => $_POST['pro_name'],

            'prescription_name' => $_POST['prescriptionname'],

            'price' => $_POST['sale_price'],
            'pro_image' => $_POST['pro_image'],
            'qty' => $_POST['lbox'] + $_POST['rbox'],
            'lbox' => $_POST['lbox'],
            'rbox' => $_POST['rbox'],
            'tax' => $_POST['tax'],
            'lsphere' => $_POST['lsphere'],
            'rsphere' => $_POST['rsphere'],
            'lcylinder' => $_POST['lcylinder'],
            'rcylinder' => $_POST['rcylinder'],
            'laxis' => $_POST['laxis'],
            'color' => $_POST['color_name'],
            'raxis' => $_POST['raxis'],
            'order_status' => 1,
        );

        $this->session->set_userdata('cdata', $data);
        $this->cart->insert($data);
        if (($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId'))) {
            $email = $this->session->userdata('user_email');
            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->cart_insert($dataa);

        }

        redirect('shoppingCart');

    }
    public function frameOnly()
    {
        if ($_POST['frameOnly']) {
            $data = array('id' => $_POST['pro_id'],
                'name' => $_POST['pro_name'],
                'price' => $_POST['sale_price'],
                'tax' => $_POST['tax'],
                'pro_image' => $_POST['pro_image'],
                'color' => $_POST['color_name'],
                'prescription_type' => "Frame Only",
                'qty' => 1,
                'order_status' => 1,
            );
            $this->session->set_userdata('cdata', $data);
            $counter = array();
            $counter = $this->cart->insert($data);
            if (($this->session->userdata('isUserLoggedIn') &&
                $this->session->userdata('userId'))) {
                $email = $this->session->userdata('user_email');
                $datae1 = array(
                    'email' => $email,
                );
                $dataa = array_merge($data, $datae1);
                $this->Vquery->cart_insert($dataa);

            }
            if ($this->session->userdata('guest_email')) {
                $email = $this->session->userdata('guest_email');
                $datae1 = array(
                    'email' => $email,
                );
                $dataa = array_merge($data, $datae1);
                $this->Vquery->cart_insert($dataa);

            }
            $i = 1;
            $total_product = 0;
            foreach ($this->cart->contents() as $items) {
                echo form_hidden($i . '[rowid]', $items['rowid']);

                $total_product++;

            }
            redirect('shoppingCart');
        }

        redirect('index');
    }
    public function wishframeOnly()
    {
        $data = array('id' => $_POST['pro_id'],
            'name' => $_POST['pro_name'],
            'price' => $_POST['sale_price'],
            'pro_image' => $_POST['pro_image'],
            'prescription_type' => $_POST['prescription_type'],

            'qty' => 1,
        );
        $this->session->set_userdata('wdata', $data);

        if (($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) || $this->session->userdata('guest')) {
            $email = $this->session->userdata('user_email');

            $datae1 = array(
                'email' => $email,
            );
            $dataa = array_merge($data, $datae1);
            $this->Vquery->wishlist_insert($dataa);
            $countwish = $this->Vquery->wishlist($email);
            $count_wish = count($countwish);
            echo '2';
        }
    }
    public function singleVisionwishlist()
    {
        if ($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) {

            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {

                $gemail = $user->email;

            }
            $data = array('id' => $_POST['id'],
                'name' => $_POST['pro_name'],
                'price' => $_POST['sale_price'],
                'pro_image' => $_POST['pro_image'],
                'qty' => 1,
                'email' => $gemail,
            );
            $this->Vquery->wishlist_insert($data);

        }
    }
    public function contactlensewishlist()
    {
        if ($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) {

            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {

                $gemail = $user->email;

            }
            $data = array('id' => $_POST['pro_id'],
                'name' => $_POST['pro_name'],

                'price' => $_POST['sale_price'],
                'pro_image' => $_POST['pro_image'],
                'qty' => 1,

                'email' => $gemail,
            );
            $this->Vquery->wishlist_insert($data);

        }

    }
    public function frameOnlywishdetail()
    {
        if ($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) {

            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {

                $gemail = $user->email;

            }
            $data = array(
                'pro_id' => $_POST['id'],
                'product_name' => $_POST['pro_name'],
                'price' => $_POST['sale_price'],
                'pro_image' => $_POST['pro_image'],
                'qty' => 1,
                'email' => $gemail,
            );
            $this->Vquery->wishlist_insert($data);

        }
    }
    public function zeroPowerwishlist()
    {
        if ($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) {

            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {

                $gemail = $user->email;

            }

            $data = array('id' => $_POST['id'],
                'name' => $_POST['pro_name'],
                'price' => $_POST['sale_price'],
                'pro_image' => $_POST['pro_image'],
                'qty' => 1,
                'email' => $gemail,
            );
            $this->Vquery->wishlist_insert($data);

        }
    }
    public function bifocalwishlist()
    {
        if ($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) {

            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {

                $gemail = $user->email;

            }

            $data = array('id' => $_POST['id'],
                'name' => $_POST['pro_name'],
                'price' => $_POST['sale_price'],
                'pro_image' => $_POST['pro_image'],
                'qty' => 1,
                'email' => $gemail,
            );
            $this->Vquery->wishlist_insert($data);

        }
    }

    public function delete_product_from_cart()
    {
        $this->load->library('cart');
        $data = array(
            'rowid' => $this->input->post('rowid'),
            'qty' => 0,
        );

        $this->cart->update($data);
        redirect('shoppingCart');
    }
    public function delete_product_from_cartcheckout()
    {
        $this->load->library('cart');
        $data = array(
            'rowid' => $this->input->post('rowid'),
            'qty' => 0,
        );

        $this->cart->update($data);
        redirect('checkout');
    }

    public function update_product_from_cart()
    {
        $this->load->library('cart');
        $data = $this->cart->update(array(
            'rowid' => $this->input->post('crowid'),
            'qty' => $this->input->post('qantity'),
        ));

        redirect('shoppingCart');
    }
    public function update_product_from_cartcheckout()
    {
        $this->load->library('cart');
        $data = $this->cart->update(array(
            'rowid' => $this->input->post('crowid'),
            'qty' => $this->input->post('qantity'),
        ));

        redirect('checkout');
    }
    public function update_product_from_usercart()
    {
        $email = $this->input->post('email');
        $rowid = $this->input->post('crowid');
        $data = array(

            'qty' => $this->input->post('qantity'),
        );
        $this->Vquery->update_product_of_usercart($data, $email, $rowid);
        redirect('shoppingCart');
    }
    public function update_product_from_usercartcheckout()
    {
        $email = $this->input->post('email');
        $rowid = $this->input->post('crowid');
        $data = array(

            'qty' => $this->input->post('qantity'),
        );
        $this->Vquery->update_product_of_usercart($data, $email, $rowid);
        redirect('checkout');
    }
    public function delete_product_from_usercart()
    {
        if ($this->input->post('rowid')) {
            if ($this->input->post('crowid')) {

                $this->load->library('cart');
                $data = array(
                    'rowid' => $this->input->post('crowid'),
                    'qty' => 0,
                );

                $this->cart->update($data);
            }
            $id = $this->input->post('rowid');
            $this->Vquery->delete_product_from_usercart($id);
        }
        redirect('shoppingCart');
    }
    public function delete_user_address()
    {
        if ($this->input->post('addressid')) {

            $id = $this->input->post('addressid');
            $this->Vquery->delete_user_address($id);
        }
        redirect('checkout');
    }
    public function delete_user_addressmyaccount()
    {
        if ($this->input->post('addressid')) {

            $id = $this->input->post('addressid');
            $this->Vquery->delete_user_address($id);
        }
        redirect('myAccount');
    }
    public function delete_product_from_usercartcheckout()
    {
        if ($this->input->post('rowid')) {
            if ($this->input->post('crowid')) {

                $this->load->library('cart');
                $data = array(
                    'rowid' => $this->input->post('crowid'),
                    'qty' => 0,
                );

                $this->cart->update($data);
            }
            $id = $this->input->post('rowid');
            $this->Vquery->delete_product_from_usercart($id);
        }
        redirect('checkout');
    }
    public function fetch_data()
    {
        sleep(1);
        $subsubid = $this->input->post('sid');
        $pageid = $this->input->post('id');
        $brand = $this->input->post('brand');
        $fit = $this->input->post('fit');
        $color = $this->input->post('color');
        $material = $this->input->post('material');
        $shape = $this->input->post('shape');
        $purpose = $this->input->post('purpose');
        $byPrize = $this->input->post('byPrize');
        $shortby = $this->input->post('shortby');

        $config = array();
        $config['base_url'] = '#';
        $config['total_rows'] = $this->Vquery->count_all($pageid, $brand, $fit, $color, $material, $shape, $purpose, $byPrize, $shortby, $subsubid);
        $this->load->library('pagination');
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = true;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='active'><a href='#'>";
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['num_links'] = 3;
        $this->pagination->initialize($config);
        $page = 1;
        $start = ($page - 1) * $config['per_page'];
        $output = $this->Vquery->fetch_data($config["per_page"], $start, $pageid, $brand, $fit, $color, $material, $shape, $purpose, $byPrize, $shortby, $subsubid);

        echo $output;
    }
    public function fetch_lensedata()
    {
        sleep(1);
        $subsubid = $this->input->post('sid');
        $pageid = $this->input->post('id');
        $brand = $this->input->post('brand');
        $lense_uses = $this->input->post('lense_uses');
        $color = $this->input->post('color');
        $byPrize = $this->input->post('byPrize');
        $shortby = $this->input->post('shortby');

        $config = array();
        $config['base_url'] = '#';
        $config['total_rows'] = $this->Vquery->count_lenseall($pageid, $brand, $color, $lense_uses, $byPrize, $shortby, $subsubid);
        $this->load->library('pagination');
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = true;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='active'><a href='#'>";
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['num_links'] = 3;
        $this->pagination->initialize($config);
        $page = 1;
        $start = ($page - 1) * $config['per_page'];
        $output = $this->Vquery->fetch_lensedata($config["per_page"], $start, $pageid, $brand, $color, $lense_uses, $byPrize, $shortby, $subsubid);

        echo $output;
    }
    public function guest()
    {

        if ($this->session->userdata('guest_email') || $this->input->post('guest')) {
            if ($this->input->post('guest')) {
                $guest = $this->input->post('guest');
                $this->session->set_userdata('guest', $guest);
            }
            echo $guest_email = $this->input->post('guest_email');
            if (!empty($this->input->post('guest_email'))) {
                $data = array(
                    'email' => $this->input->post('guest_email'),
                    'name' => $this->input->post('name'),
                    'addresstype' => $this->input->post('radio-group'),
                    'phone' => $this->input->post('phone'),
                    'landmark' => $this->input->post('landmark'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'alternatephone' => $this->input->post('alternatephone'),
                    'pincode' => $this->input->post('cpin'),
                    'locality' => $this->input->post('locality'),
                    'usertype' => 'guest',
                    'status' => '1',

                );
                $data = $this->Vquery->entry_addressinfo($data);
                if ($data) {
                    $this->session->set_flashdata('success_address', 'Your Address Information Has Been Added');
                    redirect('checkout');
                } else {
                    $this->session->set_flashdata('success_address', 'Something Went Wrong...');
                    redirect('checkout');

                }

            }

            if ($this->cart->contents()) {
                redirect('checkout');
            } else {
                redirect('index');
            }

        }
    }

    public function checkout()
    {

        if ($this->session->userdata('isUserLoggedIn') && $this->session->userdata('userId')) {
            $email = $this->session->userdata('user_email');
            $cat_data['cart_data'] = $this->Vquery->get_cart($email);
            $cat_data['cat_data'] = $this->Vquery->cat_list();

            $cat_data['useraddress'] = $this->Vquery->useraddress($email);

            $cat_data['subcat_data'] = $this->Vquery->subcat_list();
            $this->load->view('checkout', $cat_data);

        } elseif ($this->session->userdata('guest') || $this->session->userdata('guest_email')) {

            $this->load->database();
            $this->load->model('Vquery');
            $cat_data['cat_data'] = $this->Vquery->cat_list();
            if ($this->session->userdata('guest_email')) {
                $cat_data['useraddress'] = $this->Vquery->useraddressguest($this->session->userdata('guest_email'));

            }
            $cat_data['subcat_data'] = $this->Vquery->subcat_list();
            if ($this->session->userdata('guest_email')) {
                $datae1 = array(
                    'email' => $this->session->userdata('guest_email'),
                );

                if ($this->session->userdata('cdata')) {
                    $datae = $this->session->userdata('cdata');
                    $dataa = array_merge($datae, $datae1);
                    $this->Vquery->cart_insert($dataa);
                }

            }
            $this->load->view('checkout', $cat_data);

        } else {
            redirect('login_and_registration');
        }
    }
    public function setguest_email()
    {

        $this->session->set_userdata('guest_email', $this->input->post('guest_email'));

        echo '<input type="hidden" name="guest_email" value="' . $this->input->post('guest_email') . '" >';

    }

    public function myAccount()
    {
        if ($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) {
            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {
                $gfname = $user->fname;
                $gemail = $user->email;
                $phone = $user->phone;
                $this->session->set_userdata('phone', $phone);
                $dob = $user->dob;
                $this->session->set_userdata('dob', $dob);
            }
            if ($this->input->post('update_personal_info')) {
                $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
                $this->form_validation->set_rules('radio-group', 'gender', 'trim|required');
                $this->form_validation->set_rules('phone', 'Phone No', 'trim|required');
                $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
                if ($this->form_validation->run() == true) {

                    $data = array(
                        'fname' => $this->input->post('name'),
                        'gender' => $this->input->post('radio-group'),
                        'phone' => $this->input->post('phone'),
                        'dob' => $this->input->post('dob'),
                    );
                    $data = $this->Vquery->entry_personalinfo($data, $gemail);
                    if ($data) {
                        $this->session->set_flashdata('success_info', 'Your Personal Information Has Been Updated');
                        redirect('myAccount');
                    } else {
                        $this->session->set_flashdata('success_info', 'Something Went Wrong...');
                        redirect('myAccount');

                    }

                }
            } elseif ($this->input->post('changepass')) {
                $this->form_validation->set_rules('cpass', 'Current Password', 'trim|required|callback_auth_password');
                $this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_valid_password');
                $this->form_validation->set_rules('rnewpass', 'confirm password', 'trim|required|matches[pass]');
                if ($this->form_validation->run()) {

                    $pass = array(
                        'password' => $this->input->post('pass'));
                    $gemail = $this->session->userdata('user_email');
                    $gemail = $this->Vquery->updatepass($pass, $gemail);
                    $this->session->set_flashdata('success_pass', 'successfully Password Updated');
                    redirect('myAccount');

                } else {
                    redirect('myAccount');
                }

            } elseif ($this->input->post('addnewaddress')) {

                $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
                $this->form_validation->set_rules('radio-group', 'Address Type', 'trim|required');
                $this->form_validation->set_rules('phone', 'Phone No', 'trim|required');
                $this->form_validation->set_rules('landmark', 'Landmark', 'trim|required');
                $this->form_validation->set_rules('address', 'Address', 'trim|required');
                $this->form_validation->set_rules('city', 'City', 'trim|required');
                $this->form_validation->set_rules('state', 'State', 'trim|required');
                $this->form_validation->set_rules('alternatephone', 'City', 'trim|required');
                $this->form_validation->set_rules('cpin', 'Pin Code', 'trim|required');
                $this->form_validation->set_rules('locality', 'Locality', 'trim|required');

                if ($this->form_validation->run()) {

                    $data = array(
                        'email' => $gemail,
                        'name' => $this->input->post('name'),
                        'addresstype' => $this->input->post('radio-group'),
                        'phone' => $this->input->post('phone'),
                        'landmark' => $this->input->post('landmark'),
                        'address' => $this->input->post('address'),
                        'city' => $this->input->post('city'),
                        'state' => $this->input->post('state'),
                        'alternatephone' => $this->input->post('alternatephone'),
                        'pincode' => $this->input->post('cpin'),
                        'locality' => $this->input->post('locality'),
                        'status' => '1',

                    );
                    $data = $this->Vquery->entry_addressinfo($data);
                    if ($data) {
                        if ($this->input->post('addnewaddresscheckout')) {
                            redirect('checkout');
                        } else {
                            $this->session->set_flashdata('success_address', 'Your Address Information Has Been Added');
                            redirect('myAccount');
                        }
                    } else {
                        $this->session->set_flashdata('success_address', 'Something Went Wrong...');
                        redirect('myAccount');

                    }

                }
            } elseif ($this->input->post('addressupdate')) {

                $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
                $this->form_validation->set_rules('radio-group', 'Address Type', 'trim|required');
                $this->form_validation->set_rules('phone', 'Phone No', 'trim|required');
                $this->form_validation->set_rules('landmark', 'Landmark', 'trim|required');
                $this->form_validation->set_rules('address', 'Address', 'trim|required');
                $this->form_validation->set_rules('city', 'City', 'trim|required');
                $this->form_validation->set_rules('state', 'State', 'trim|required');
                $this->form_validation->set_rules('alternatephone', 'City', 'trim|required');
                $this->form_validation->set_rules('pincode', 'Pin Code', 'trim|required');
                $this->form_validation->set_rules('locality', 'Locality', 'trim|required');

                if ($this->form_validation->run()) {

                    $data = array(
                        'name' => $this->input->post('name'),
                        'addresstype' => $this->input->post('radio-group'),
                        'phone' => $this->input->post('phone'),
                        'landmark' => $this->input->post('landmark'),
                        'address' => $this->input->post('address'),
                        'city' => $this->input->post('city'),
                        'state' => $this->input->post('state'),
                        'alternatephone' => $this->input->post('alternatephone'),
                        'pincode' => $this->input->post('pincode'),
                        'locality' => $this->input->post('locality'),
                        'status' => '1',

                    );
                    $id = $this->input->post('id');
                    $data = $this->Vquery->update_addressinfo($data, $id);
                    if ($data) {

                        $this->session->set_flashdata('success_address', 'Your Address Information Has Been Updated');
                        redirect('myAccount');

                    } else {
                        $this->session->set_flashdata('success_address', 'Something Went Wrong...');
                        redirect('myAccount');

                    }

                }
            }

            $user_email = $gemail;
            $cat_data['wishlist'] = $this->Vquery->wishlist($user_email);
            $cat_data['useraddress'] = $this->Vquery->useraddress($user_email);
            $cat_data['user'] = $this->Vquery->userdata($user_email);
            $this->load->model('Order');
            $cat_data['user_order'] = $this->Order->user_order($user_email);

            $userorder = $this->Order->userorder($user_email);
            $cuserorder = $this->Order->cancel_userorder($user_email);
            $count = $this->Order->user_ordercount($user_email);
            $ccount = $this->Order->user_cancelordercount($user_email);

            $cart_id1 = array();
            $cart_id2 = array();

            if ($count > 0) {
                foreach ($userorder as $key => $userorderr) {

                    $userorderr->cart_id;
                    $cart_id11 = $userorderr->cart_id;
                    array_push($cart_id1, $cart_id11);

                }

                $cart_id = implode(',', $cart_id1);
                $cart_id = str_replace(",", "','", $cart_id);
                $cat_data['order_cart_data'] = $this->Order->cart_orderdata($cart_id, $user_email);
                $cat_data['cuser_order'] = $this->Order->cuser_order($user_email);

            }
            if ($ccount > 0) {
                foreach ($cuserorder as $key => $cuserorderr) {

                    $cuserorderr->cart_id;
                    $cart_id11 = $cuserorderr->cart_id;
                    array_push($cart_id2, $cart_id11);

                }

                $cart_id = implode(',', $cart_id2);
                $cart_id = str_replace(",", "','", $cart_id);

                $cat_data['corder_cart_data'] = $this->Order->cart_corderdata($cart_id, $user_email);

                $cat_data['cuser_order'] = $this->Order->cuser_order($user_email);

            }
            $cat_data['card_info'] = $this->Vquery->usercardinfo($user_email);
            $cat_data['cat_data'] = $this->Vquery->cat_list();
            $cat_data['subcat_data'] = $this->Vquery->subcat_list();
            $this->load->view('myAccount', $cat_data);
        } else {
            redirect('login_and_registration');
        }
    }
    public function changepass()
    {
        if ($this->input->post('changepass')) {
            echo '<script>alert("out")</script>';
            $this->form_validation->set_rules('cpass', 'Current Password', 'trim|required|callback_auth_password');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_valid_password');
            $this->form_validation->set_rules('rnewpass', 'confirm password', 'trim|required|matches[pass]');
            if ($this->form_validation->run()) {
                echo '<script>alert("in")</script>';
                $pass = $this->input->post('pass');
                $this->session->userdata('user_email');
                $gemail = $this->Vquery->updatepass($pass, $gemail);
                $this->session->set_flashdata('success_pass', 'successfully Password Updated');
                redirect('myAccount');

            } else {
                redirect('myAccount');
            }

        }
    }

    public function term_and_condition()
    {
        $this->load->database();
        $this->load->model('Vquery');
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['term_get'] = $this->Vquery->term_get();
        $this->load->view('terms_&_Conditions', $cat_data);
    }
    public function faq()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['faq_data'] = $this->Vquery->faq_get();
        $this->load->view('faq', $cat_data);
    }
    public function privacy_policy()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();

        $this->load->view('privacy_policy', $cat_data);
    }
    public function shipping_policy()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();

        $this->load->view('shipping', $cat_data);
    }
    public function contactus()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();

        $this->load->view('contactus', $cat_data);
    }
    public function cancel_and_modification()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();

        $this->load->view('cancel_&_modification', $cat_data);
    }
    public function return_and_refund()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();

        $this->load->view('return_&_refund', $cat_data);
    }
    public function blog()
    {

        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['blog_data'] = $this->Vquery->blog_list();

        $this->load->view('blog', $cat_data);
    }
    public function login_and_registration()
    {
        if ((!$this->session->userdata('isUserLoggedIn') &&
            !$this->session->userdata('userId')) && !$this->session->userdata('guest')) {

            $cat_data['cat_data'] = $this->Vquery->cat_list();
            $cat_data['subcat_data'] = $this->Vquery->subcat_list();
            //----------------------------------------------------
            $data = array();
            if ($this->session->userdata('success_msg')) {
                $data['success_msg'] = $this->session->userdata('success_msg');
                $this->session->unset_userdata('success_msg');
            }
            if ($this->session->userdata('error_msg')) {
                $data['error_msg'] = $this->session->userdata('error_msg');
                $this->session->unset_userdata('error_msg');
            }
            $data = array();

            if ($this->input->post('regisSubmit')) {

                $userData = array();
                $this->form_validation->set_rules('fname', 'First Name', 'trim|alpha|required');
                $this->form_validation->set_rules('lname', 'Last Name', 'trim|alpha|required');
                $this->form_validation->set_rules('cemail', 'Email', 'trim|required|valid_email|callback_email_check');
                $userData = array(
                    'fname' => strip_tags($this->input->post('fname')),
                    'lname' => strip_tags($this->input->post('lname')),
                    'email' => strip_tags($this->input->post('cemail')),
                    'password' => $this->input->post('pass'),
                    'status' => 1,
                );

                if ($this->form_validation->run() == true) {
                    $this->load->model('Vquery');
                    $insert = $this->Vquery->insert_user($userData);
                    if ($insert) {
                        $senderemail = 'gajendray9@gmail.com';
                        $msg = 'Welcome To Zumeyes You Have Successfully Registered Zumeyes Account';
                        $headers = 'From: ' . $senderemail . "\r\n" .
                        'Reply-To: ' . $senderemail . "\r\n" .
                        'cc: ' . $senderemail . "\r\n" .
                        'bcc: ' . $senderemail . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                        mail($this->input->post('cemail'), "Successfully Registered Your Zumeyes Account", $msg, $headers);

                        $msg = $this->session->set_flashdata('rsuccess_msg', 'Registered successfully. Please login to your account.');

                    } else {
                        $data['error_msg'] = 'Some problems occured, please try again.';
                    }
                }

                $userdata['user'] = $userData;

            }
            if ($this->input->post('loginSubmit')) {

                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'password', 'required');
                if ($this->form_validation->run() == true) {
                    $con['returnType'] = 'single';
                    $con['conditions'] = array(
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password'),
                        'status' => '1',
                    );

                    $checkLogin = $this->Vquery->getRows($con);
                    if ($checkLogin) {
                        $this->session->set_userdata('isUserLoggedIn', true);
                        $this->session->set_userdata('userId', $checkLogin['id']);
                        $cart_countt = $this->Vquery->cart_countdata($this->input->post('email'));
                        if (count($this->cart->contents()) > 0) {
                            $datae1 = array(
                                'email' => $this->input->post('email'),
                            );
                            if ($this->session->userdata('cdata')) {
                                $datae = $this->session->userdata('cdata');

                                $dataa = array_merge($datae, $datae1);
                                $this->Vquery->cart_insert($dataa);
                            }
                        }

                        if ($cart_countt > 0) {
                            redirect('shoppingCart');
                        } else {
                            redirect('index');

                        }
                    } else {

                        $this->session->set_flashdata('error_msg', 'Wrong email or password, please try again.');

                    }
                }
            }
            //load the view
            $this->load->view('signIn_&_register', $cat_data, @$dataa, $data, @$userdata);
        } else {
            redirect('index');
        }
    }
    public function email_check($str)
    {
        $con['returnType'] = 'count';
        $con['conditions'] = array('email' => $str);
        $checkEmail = $this->Vquery->getRows($con);
        if ($checkEmail > 0) {
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return false;
        } else {
            return true;
        }
    }
    public function auth_password($cpass = '')
    {
        $password = trim($cpass);
        $useremail = $this->session->userdata('user_email');
        $auth = $this->Vquery->authpass($password, $useremail);
        if ($auth == false) {

            $this->form_validation->set_message('cpass', 'Your Current Password Is Wrong.');
            return false;
        } else {
            return true;
        }
    }
    public function authajax_password()
    {
        $password = $this->input->post('cpass');
        $useremail = $this->session->userdata('user_email');
        $auth = $this->Vquery->authpass($password, $useremail);
        if ($auth == false) {

            echo 'Your Current Password Is Wrong.';

        } else {
            echo '';
        }
    }
    public function valid_password($password = '')
    {
        $password = trim($password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
        if (empty($password)) {
            $this->form_validation->set_message('valid_password', 'The {field} field is required.');
            return false;
        }
        if (preg_match_all($regex_lowercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
            return false;
        }
        if (preg_match_all($regex_uppercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
            return false;
        }
        if (preg_match_all($regex_number, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
            return false;
        }
        if (preg_match_all($regex_special, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
            return false;
        }
        if (strlen($password) < 5) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
            return false;
        }
        if (strlen($password) > 32) {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
            return false;
        }
        return true;
    }
    public function logout()
    {
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_email');
        $this->session->sess_destroy();
        redirect('index');
    }
    public function guestdelete()
    {

        $this->session->unset_userdata('guest');
        $this->session->unset_userdata('guest_email');
        $this->session->sess_destroy();
        redirect('index');
    }
    public function addtocart()
    {
        $this->load->library('cart');
        $cartdata = array('id' => $_POST['id'],
            'name' => $_POST['name'],

            'price' => $_POST['price'],

            'qty' => 1,

        );
        $this->session->set_userdata('cartdata', $cartdata);

        redirect('productList');
    }
    public function personalinfo()
    {
        if ($this->session->userdata('isUserLoggedIn') &&
            $this->session->userdata('userId')) {
            $user['user'] = $this->Vquery->getRows(array('id' => $this->session->userdata('userId')));
            foreach ($user as $key => $user) {
                $gfname = $user->fname;
                $gemail = $user->email;
            }
            $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
            $this->form_validation->set_rules('gender', 'gender', 'trim|required');
            $this->form_validation->set_rules('phone', 'Password', 'trim|required|');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
            if ($this->form_validation->run() == true) {
                $array = array(
                    'name' => $this->input->post('name'),
                    'gender' => $this->input->post('gender'),
                    'phone' => $this->input->post('phone'),
                    'dob' => $this->input->post('dob'),
                );
                $result = $this->Vquery->entry_personalinfo($array, $gemail);
                if ($result) {
                    $this->session->set_flashdata('success_info', 'Your Personal Information Has Been Updated');
                    redirect();
                }

            }
        }

    }
    public function newsletter()
    {
        if ($this->input->post('email')) {
            $data = array(
                'email' => $this->input->post('email'),
                'status' => '1',
            );
            $check = $this->Vquery->checkuser_newsletter($this->input->post('email'));
            if ($check == true) {
                echo 'You are allready Subscribed';
            } else {
                $result = $this->Vquery->newsletter($data);
                if ($result) {
                    echo 'successfully Subscribed';
                }

            }
        } else {
            redirect('index');
        }
    }
    public function comment()
    {
        if ($this->input->post('uemail')) {
            date_default_timezone_set('Asia/Kolkata');
            $data = array(
                'email' => $this->input->post('uemail'),
                'name' => $this->input->post('uname'),
                'comment' => $this->input->post('comment'),
                'blog_title' => $this->input->post('title'),
                'date' => date("M d Y"),
                'status' => '1',
            );

            $result = $this->Vquery->comment($data);
            if ($result == true) {
                echo 'Yow comment Successfully Posted';
            }
        } else {
            echo 'You Did not filled details ...';
        }
    }
    public function resetpassword()
    {
        if ($_GET("email") != null && $_GET("token") != null) {
            $email = $_GET("email");
            $token = $_GET("token");
            $id = $this->Vquery->frgpass($email); //change this function name

        } else {
            redirect('login_and_registration');
        }
    }
    public function identify()
    {
        $this->load->helper('cookie');
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        if ($this->input->post('frgpass')) {

            $email = $this->input->post('email');
            $numbers = $this->input->post('phone');
            $user = $this->Vquery->frgpass($email, $numbers);
            if ($user == true) {

                $number = array($numbers);
                $sender = urlencode('TXTLCL');
                $number = implode(',', $number);
                $otp = mt_rand(10000, 99999);
                $message = "This is your OTP of your zumeyes account:" . $otp;

                $apiKey = urlencode('SE9SSwAgRZM-WLNZAAKcWsxR38FMlMrEkpZXtDi66S');
                $data = array('apikey' => $apiKey, 'numbers' => $number, "sender" => $sender, "message" => $message);
                // Send the POST request with cURL
                $ch = curl_init('https://api.textlocal.in/send/');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                // Process your response here
                $this->session->set_userdata('otp', $otp);
                $this->session->set_userdata('otpemail', $email);
                $this->session->set_flashdata('success_otp', 'Otp successfully sent to your registered phone number.');
                redirect('verifyotp');

            } else {
                $this->session->set_flashdata('unauth', 'You are not registered');
            }
        }

        $this->load->view('otp', $cat_data);

    }
    public function verifyotp()
    {
        if ($this->input->post('verifybtn')) {
            $cotp = $this->input->post('verifyotp');
            $otp = $this->session->userdata('otp');
            if ($cotp == $otp) {

                redirect('resetpass');
            } else {
                $this->session->set_flashdata('wrong_otp', 'You otp is incorrect');
                redirect('identify');
            }

        }
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $this->load->view('verifyotp', $cat_data);

    }

    public function resetpass()
    {
        if ($this->session->userdata('otpemail')) {
            $cat_data['cat_data'] = $this->Vquery->cat_list();
            $cat_data['subcat_data'] = $this->Vquery->subcat_list();
            $this->session->userdata('otpemail');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_valid_password');

            $userData = array(
                'password' => $this->input->post('pass'),

            );

            if ($this->form_validation->run() == true) {

                $email = $this->session->userdata('otpemail');
                $insert = $this->Vquery->updatepass($userData, $email);
                if ($insert) {
                    $msg = $this->session->set_flashdata('osuccess_msg', 'Your Password successfully changed. Please login to your account.');
                    $this->session->sess_destroy();
                    redirect('login_and_registration');

                } else {
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }

            $this->load->view('resetpass', $cat_data);
        } else {
            redirect('login_and_registration');
        }

    }
    public function searchDisplay()
    {
        @$searh = $this->input->get('search');
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();

        $cat_data['search'] = $this->Vquery->searchproduct(@$search);
        if (isset($search)) {
            $this->load->view('searchDisplay', $cat_data);
        } else {
            $this->load->view('searchDisplay', $cat_data);
        }
    }
    public function footer_filter()
    {
        if ($this->input->post('men')) {
            $men = $this->input->post('men');
            $id = $this->Vquery->frgpass($email);
        } else {
            redirect('index');
        }
    }
    public function review()
    {
        if ($this->input->post('reviewemail')) {
            date_default_timezone_set('Asia/Kolkata');
            $data = array(
                'name' => $this->input->post('reviewname'),
                'email' => $this->input->post('reviewemail'),
                'title' => $this->input->post('reviewtitle'),
                'message' => $this->input->post('reviewmessage'),
                'pro_id' => $this->input->post('pro_id'),
                'date' => date("M d Y"),
                'status' => 1,
            );

            $id = $this->Vquery->insert_review($data);

        } else {
            echo 'no';
        }
    }
    public function card_save()
    {
        if ($this->input->post('email')) {
            $cardno = $this->input->post('cardno');
            // $cardno='1234 5678 9011 2233';
            date_default_timezone_set('Asia/Kolkata');
            $data = array(
                'card1' => substr($cardno, 0, -14),
                'card2' => substr($cardno, 4, -9),
                'card3' => substr($cardno, 9, -4),
                'card4' => substr($cardno, 14),
                'name_oncard' => $this->input->post('name_oncard'),
                'user_email' => $this->input->post('email'),
                'cardtype' => $this->input->post('cardtype'),
                'exp_month' => $this->input->post('exp_month'),
                'exp_year' => $this->input->post('exp_year'),
                'date' => date("M d Y"),
                'status' => 1,

            );

            $id = $this->Vquery->insert_carddata($data);

        }
        redirect('myAccount');
    }
    public function card_remove()
    {
        if ($this->input->get('id')) {
            $cardid = $this->input->get('id');
            $data = array(
                'status' => 0,
            );
            $this->Vquery->remove_carddata($data, $cardid);
        }
        redirect('myAccount');
    }
    public function paysuccess()
    {
        if ($_POST["hash"]) {
            $status = $_POST["status"];
            $firstname = $_POST["firstname"];
            $amount = $_POST["amount"];
            $txnid = $_POST["txnid"];
            $posted_hash = $_POST["hash"];
            $key = $_POST["key"];
            $productinfo = $_POST["productinfo"];
            $email = $_POST["email"];
            $orderid = $_POST["udf1"];
            $deliverydata = $_POST["udf2"];
            $orderdata = $_POST["udf3"];
            $udf1 = $orderid;
            $udf2 = $deliverydata;
            $udf3 = $orderdata;
            $udf4 = '';
            $udf5 = '';
            $salt = "DYRIJdQp46";

            if (isset($_POST["additionalCharges"])) {
                $additionalCharges = $_POST["additionalCharges"];
                $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '||||||||' . $udf3 . '|' . $udf2 . '|' . $udf1 . '|' . $email . '|' . $firstname . '|' . $udf1 . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
            } else {
                $retHashSeq = $salt . '|' . $status . '||||||||' . $udf3 . '|' . $udf2 . '|' . $udf1 . '|' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;

            }
            $hash = hash("sha512", $retHashSeq);
            if ($hash != $posted_hash) {
                echo "<script>alert('Invalid Transaction. Please try again')</script>";
                redirect('myAccount');

            } else {

                $useraddress_id = $_POST['address2'];
                $useraddress['useraddress'] = $this->Vquery->user_addressbyid($useraddress_id, $_POST["email"]);
                foreach ($useraddress as $key => $useraddres) {

                    $user_address = array(
                        'username' => $useraddres->name,
                        'phone' => $useraddres->phone,
                        'altphone' => $useraddres->alternatephone,
                        'address' => $useraddres->address,
                        'pincode' => $useraddres->pincode,
                        'locality' => $useraddres->locality,
                        'landmark' => $useraddres->landmark,
                        'city' => $useraddres->city,
                        'state' => $useraddres->state,
                        'address_type' => $useraddres->addresstype,
                    );
                }
                $email = $_POST["email"];
                $data1 = array(
                    'email' => $_POST["email"],
                    'amount' => $_POST["amount"],
                    'txnid' => $_POST["txnid"],
                    'cart_id' => $_POST["productinfo"],
                    'order_id' => $_POST['udf1'],
                    'deliverydate' => $deliverydata,
                    'order_date' => $orderdata,
                );
                $data = array_merge($user_address, $data1);
                $this->Vquery->userorder($data);

                //update cart status that order has done and do not show in user cart//
                $order_status = array(
                    'order_status' => 0,
                    'order_id' => $orderid);
                $email = $_POST["email"];

                $cart_id = explode(',', $_POST["productinfo"]);
                $count = count($cart_id);

                for ($i = 0; $i < $count; $i++) {
                    $cartid = $cart_id[$i];
                    $cat_data['cat_data'] = $this->Vquery->cat_list();
                    $cat_data['subcat_data'] = $this->Vquery->subcat_list();
                    $cat_data['status'] = $status;
                    $cat_data['orderid'] = $_POST['udf1'];
                    $cat_data['amount'] = $amount;
                    $this->Vquery->orderaftercart($order_status, $email, $cartid);}
                //update cart status that order has done and do not show in user cart//
                /*   $senderemail='gajendray9@gmail.com';
                $msg= "<h3>Thank You. Your order status is ". $status .".</h3>";
                $msg.="<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
                $msg.= "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
                $msg.= "<h4>Your OrderId is " . $_POST['orderid'] . ". Your order will soon be shipped.</h4>";
                $headers = 'From: '.$senderemail."\r\n" .
                'Reply-To: '.$senderemail."\r\n" .
                'cc: '.$senderemail."\r\n" .
                'bcc: '.$senderemail."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail($this->input->post('email'),"Your Zumeyes Order",$msg,$headers);      */

                $this->load->view('success', $cat_data);
                $this->session->unset_userdata('guest');
                $this->session->unset_userdata('guest_email');
                $this->load->library('cart');
                $data = array(
                    'qty' => 0,
                );

                $this->cart->update($data);
            }} else {redirect('myAccount');}

    }

    public function orderDetails()
    {
        $id = $this->input->get('id');
        if ($this->input->get('id')) {

            $this->load->model('Order');
            $gemail = $this->session->userdata('user_email');
            $cat_data['user_order'] = $this->Order->user_orderbyid($id);
            $userorder = $this->Order->userorderbyid($id);

            $cart_id1 = array();

            foreach ($userorder as $key => $userorderr) {

                $userorderr->cart_id;
                $cart_id11 = $userorderr->cart_id;
                array_push($cart_id1, $cart_id11);

            }

            $cart_id = implode(',', $cart_id1);
            $cart_id = str_replace(",", "','", $cart_id);

            $cat_data['order_cart_data'] = $this->Order->cart_orderdata($cart_id, $gemail);
            $cat_data['cat_data'] = $this->Vquery->cat_list();
            $cat_data['subcat_data'] = $this->Vquery->subcat_list();

            $this->load->view('orderDetails', $cat_data);
        } else {
            redirect('login_and_registration');
        }

    }
    public function getaddress()
    {
        $id = $this->input->post('address_id');
        $email = $this->input->post('email');
        $useraddress['useraddress'] = $this->Vquery->user_addressbyid($id, $email);
        foreach ($useraddress as $value) {
            $name = $value->name;
            $phone = $value->phone;
            $address = $value->address;
            $pincode = $value->pincode;
            $city = $value->city;
            $state = $value->state;
            $landmark = $value->landmark;
            $locality = $value->locality;
            $address_type = $value->addresstype;
            $altphone = $value->alternatephone;
        }

        echo '<form method="post" action="myAccount">

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="name" id="cfname" value="' . $name . '"></div>
									<div class="field right"><input type="text" value="' . $phone . '" name="phone" id="cnum" placeholder="+91 2875469872"></div>

								</div>
								<div class="detailsBar clearfix">

									<div class="field full"><textarea name="address" id="caddrs" placeholder="D Block 201, Ground Floor, Gali No.1,West Dawarka">' . $address . '</textarea></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="pincode" value="' . $pincode . '" id="cpin" placeholder="110048"></div>
									<div class="field right"><input type="text" value="' . $locality . '" id="clocality" name="locality" placeholder="South Delhi"></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" name="city" value="' . $city . '" id="ccity" placeholder="New Delhi"></div>
									<div class="field right"><input type="text" value="' . $state . '" name="state" id="cstate" placeholder="New Delhi"></div>

								</div>

								<div class="detailsBar clearfix">

									<div class="field"><input type="text" value="' . $landmark . '" name="landmark" id="clandm" placeholder="Near DAV School"></div>
									<div class="field right"><input type="text" value="' . $altphone . '" name="alternatephone" id="caltnum" placeholder="+91 8745000036"></div>
								   <input type="hidden" value="' . $id . '" name="id">
								</div>

								<div class="detailsBar clearfix">

									<label>Addresss Type</label>

									<div class="addrsType clearfix">

										<div class="type clearfix">
										<input id="homeED" value="Home (All day delivery)" class="radio-custom" name="radio-group" type="radio" checked>
            							<span for="homeED" class="radio-custom-label"><em>Home (All day delivery)</em></span>
										</div>
										<div class="type clearfix">
										<input id="officeED" value="Office (Delivery Between 10am - 7pm)" class="radio-custom" name="radio-group" type="radio">
            							<span for="officeED" class="radio-custom-label"><em>Office (Delivery Between 10am - 7pm)</em></span>
										</div>

									</div>

								</div>


								<div class="buttonBlock clearfix">

									<div class="button selectAndDeliveryAddress">
                                     	<input name="addressupdate" value="Save" type="submit"></div>
									<button class="cancelBtn">Cancel</button>

								</div>

							</form>
						';

    }
    public function getselectedaddress()
    {
        $id = $this->input->post('address_id');
        $email = $this->input->post('email');
        $useraddress['useraddress'] = $this->Vquery->user_addressbyid($id, $email);
        foreach ($useraddress as $value) {
            $name = $value->name;
            $phone = $value->phone;
            $address = $value->address;
            $pincode = $value->pincode;
            $city = $value->city;
            $state = $value->state;
            $landmark = $value->landmark;
            $locality = $value->locality;
            $address_type = $value->addresstype;
            $altphone = $value->alternatephone;
        }

        echo '<strong>' . $name . '
							</strong>' . $address . ',
								' . $city . ',
								' . $pincode . ',
								' . $state . ',
								' . $phone . '
                                ';

    }
    public function order_cancel()
    {
        $order_id = $this->input->post('id');
        if ($order_id) {
            date_default_timezone_set('Asia/Kolkata');
            $data = array('cancel_order' => 1,
            );
            $data1 = array('cancel_order' => 1,
                'canceldate' => date("M d Y"));
            $this->load->model('Order');
            $this->Order->order_cancel($data1, $order_id);
            $this->Order->order_cancel_from_cart($data, $order_id);
        }

        redirect("myAccount");

    }
    public function promocode()
    {
        $promocode = $this->input->post('promocode');
        $promocode = trim($promocode);
        if ($promocode) {

            $offer_limit['offer_limit'] = $this->Vquery->promocode_maxlimit($promocode);
            $offer_valid = $this->Vquery->promocode_valid($promocode);
            if ($offer_valid != false) {
                $offer_used['offer_used'] = $this->Vquery->promocode_limit($promocode);
                foreach ($offer_limit as $key => $offer_maxlimit) {
                    $offer_maxlimit = $offer_maxlimit->offer_limit;
                }
                foreach ($offer_used as $key => $offer_upto_used) {
                    $offer_upto_used = $offer_upto_used->cupon_code;
                }
                if ($offer_maxlimit >= $offer_upto_used && $offer_maxlimit > 0) {
                    $offer['offer'] = $this->Vquery->promocode($promocode);

                    foreach ($offer as $key => $value) {
                        $offer_price = $value->offer;
                    }
                    $this->session->set_userdata('promocode', $promocode);
                    $this->session->set_flashdata('promocode', $promocode);
                    $this->session->set_userdata('cupon_code', $offer_price);
                    $this->session->set_flashdata('expire', 'You Got a Great Deal.');
                } else {
                    $this->session->set_flashdata('expire', 'This cupon code has been expire');
                    $this->session->set_userdata('promocode', $promocode);
                    $this->session->unset_userdata('cupon_code');
                }

            } else {
                $this->session->set_flashdata('expire', 'Invalid Cupon Code.');
                $this->session->set_userdata('promocode', $promocode);
                $this->session->unset_userdata('cupon_code');
            }
        }
    }
    public function locations()
    {
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $cat_data['location_data'] = $this->Vquery->location_list();
        $this->load->view('locations', $cat_data);
    }
    public function locationDetails()
    {
        $cat_data['cat_data'] = $this->Vquery->cat_list();
        $cat_data['subcat_data'] = $this->Vquery->subcat_list();
        $shop_name = $this->input->get('shop');
        $cat_data['shop_data'] = $this->Vquery->get_location_data($shop_name);
        $this->load->view('locationDetails', $cat_data);
    }

}
