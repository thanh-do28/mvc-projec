<?php
class Product extends Controller
{
    public $product_model, $data = [];



    public function __construct()
    {
        $this->product_model = $this->model("ProductModel");
    }


    public function index()
    {
        $dataProduct = $this->product_model->getProductList();

        //render view
        $title = "danh sach san pham";

        $this->data['product_list'] = $dataProduct;
        $this->data['title'] = $title;


        $this->render('products/list', $this->data);
    }

    public function detail($id = 0)
    {
        $this->data['sub_content']['info'] = $this->product_model->getDetail($id);

        $this->data['content'] = 'products/detail';
        $this->render('layouts/client_layout', $this->data);
    }
}
