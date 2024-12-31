<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\NewsRepository;
use App\Services\PoliRepository;
use GPBMetadata\Google\Api\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\CustomAuthController;
use Illuminate\Support\Facades\Session;
use App\Services\ProductRepository;
use App\Services\CategoryRepository;


class HomeController extends Controller
{
    protected $cateService;

    public function __construct(CategoryRepository $cateService)
    {
        $this->cateService = $cateService;
    }
    public function viewHome(){
        //nếu là admin cho đăng xuất
        if(Auth::user()){
            if(!Auth::user()->is_admin){
                Session::flush();
                Auth::logout();
            }
        }
        //lấy sản phẩm theo từng danh mục
        $productList = $this->cateService->getProductHomePage();
        //sản phẩm mới nhất
        $productNew = $this->getProductNew();
        // dd($productNew);
        //dịch vụ và chính sách
        $combinedList = $this->getServiceAndPolicy();
        // dd($combinedList);
        return view('frontend.trangchu',compact('productList', 'productNew', 'combinedList'));
    }

    public function searchProduct(Request $request){
        $keyword = $request->input('searchProduct') != null ? $request->input('searchProduct') : '';
        try{
            $lang = session()->get('locale', 'vi');
            $products = ProductRepository::searchProduct($keyword, $lang);
            // dd($products);die();
            return view('frontend.sanpham', compact('products'));
        }catch(\Exception $e){
            return abort(404);

        }
    }

     // lấy tất cả các danh mục
    public function getProductbyCate($cateSlug){
        try{
            $lang = session()->get('locale', 'vi');
            $cate = Category::where('slug', $cateSlug)->first();
            $products = ProductRepository::getAllProductbyCate($cate->id, $lang);
            return view('frontend.sanpham', compact('products','cate'));
        }catch(\Exception $e){
            return response()->json('có lỗi ', 400);

        }
    }
    //lấy sản phẩm mới nhất
    public function getProductNew(){
        return ProductRepository::baseQuery()
            ->where('product_translations.language_code', '=', 'vi')
            ->orderBy('products.created_at', 'desc')
            ->take(4)->get();

    }
    //lấy random dịch vụ và chính sách
    public function getServiceAndPolicy(){
        $serviceList = NewsRepository::baseQuery()
        ->where('news_translations.language_code', '=', 'vi')
        ->orderBy('news.created_at', 'desc')
        ->take(2)->get();
        $poliList = PoliRepository::baseQuery()
        ->where('policy_translations.language_code', '=', 'vi')
        ->orderBy('policy.created_at', 'desc')
        ->take(2)->get();
        // Kết hợp cả hai mảng lại
        $combinedList = $serviceList->merge($poliList);

        // Xáo trộn mảng đã kết hợp
        $combinedList = $combinedList->shuffle();

        return $combinedList;
    }
}
