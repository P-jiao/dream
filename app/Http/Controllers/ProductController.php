<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Model\Product;
use Illuminate\Http\Request as Request;
use App\Facades\TheMailFacade as TMF;


class ProductController extends Controller
{

 /* public function __construct()
    {
        $this->middleware('guest');
    }*/

     public function main()
    {
        return view('main',[]);
    }
    public function newpage()
    {
        return view('new',[]);
    }
    public function store(){
        return view('test1');
    }
    /*public function  index()
    {
        return view('new',[]);
    }
    public function edit($id){

    }
    public function save(){

    }
    public function productList(){
        $product=["apple","egg","pear"];
        $price=[15,56,54];
        return view('new',['product'=>$product,'price'=>$price]);
    }*/


    public function index()
    {
        $products=Product::all();
        return view('product.index',['products'=>$products]);
    }

    public function show($id)
    {
        $p=Product::find($id);
        return view('product.show',['product'=>$p]);
    }

    public function edit($id=null)
    {
       if(isset($id)){
           $p=Product::find($id);
       } else{
           $p=new Product();
       }
        return view('product.edit',['product'=>$p]);
    }

    public function save(Request $request,$id=null)
    {
        if(isset($id)){
            Product::updateOrCreate(["id"=>$id],$request->input());
        }
        else {
            Product::create($request->input());
        }
        return redirect("/products");
    }

    public function delete($id)
    {
       Product::find($id)->delete();
        return redirect("/products");
    }


    public function testsend(){
        TMF::send("yes  It is send my by mail!!");
    }
    public function testreceive(){
        TMF::receive("ok received My mail!!.");
    }
}


