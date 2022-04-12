<?php

namespace Modules\Blog\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\Api\ApiBaseController;
use Modules\Blog\Repository\CategoryRepository;
use Modules\Blog\Entities\Category;

class CategoryController extends ApiBaseController
{
    private $CategoryRepository;
    public function __construct(CategoryRepository $CategoryRepository)
    {
        $this->CategoryRepository = $CategoryRepository;
    }
    public function getAllCategory(){
        try{
        $categories = $this->CategoryRepository->index();
        foreach($categories as $category){
            $category->image=url('images/'.$category->image_path);
        }
        $data=['categories'=>$categories];
        return $this->successData('Successfully Fetched',$data,200);
        }catch(\Exception $e){
            return $this->errordata('Unable to fetch categories due to ssome server error!',$e->getMessage(),500);
        }
    }
}
