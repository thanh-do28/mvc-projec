<?php

class ProductModel
{
    public function getProductList()
    {
        $data = [
            'sản phẩm 1',
            'sản phẩm 2',
            'sản phẩm 3',
            'sản phẩm 4',
        ];

        return $data;
    }

    public function getDetail($id)
    {
        $data = [
            'sản phẩm 1',
            'sản phẩm 2',
            'sản phẩm 3',
            'sản phẩm 4',
        ];

        return $data[$id];
    }
}
