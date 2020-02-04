<?php
class Product extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }
     // function image_upload()  
     //  {  
     //       $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";  
     //       $this->load->view('image_upload', $data);  
     //  }  
     //  function ajax_upload()  
     //  {  
     //       if(isset($_FILES["image_file"]["name"]))  
     //       {  
     //            $config['upload_path'] = './upload/';  
     //            $config['allowed_types'] = 'jpg|jpeg|png|gif';  
     //            $this->load->library('upload', $config);  
     //            if(!$this->upload->do_upload('image_file'))  
     //            {  
     //                 echo $this->upload->display_errors();  
     //            }  
     //            else  
     //            {  
     //                 $data = $this->upload->data();  
     //                 echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
     //            }  
     //       }  
     //  }  

    function index(){
        $this->load->view('product_view');
    }
 
    function product_data(){
        $data=$this->product_model->product_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->product_model->save_product();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->product_model->update_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->product_model->delete_product();
        echo json_encode($data);
    }
 
}
?>