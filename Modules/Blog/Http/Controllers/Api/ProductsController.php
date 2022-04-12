<?php

namespace Modules\Blog\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Repository\ProductRepository;
use App\Http\Controllers\Api\ApiBaseController;
use Modules\Blog\Entities\Product;


class ProductsController extends ApiBaseController
{
    private $ProductRepository;
    public function __construct(ProductRepository $ProductRepository)
    {
        $this->ProductRepository = $ProductRepository;
    }

    public function getAllProduct(){
        try{
        $products = $this->ProductRepository->index();
        // foreach($products as $product){
        //     $product->image=url('images/'.$product->image);
        // }
        $data=['products'=>$products];
        return $this->successData('Successfully Fetched',$data,200);
        }catch(\Exception $e){
            return $this->errordata('Unable to fetch categories due to ssome server error!',$e->getMessage(),500);
        }
    }

}
