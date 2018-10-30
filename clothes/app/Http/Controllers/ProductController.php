<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Product;
use App\Category;
use App\Image;
use App\Firm;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayProductList($category_para)
    {
       $category = Category::where('name',$category_para)->first();
       $products = $category->product()->paginate(9);
       foreach($products as $product){
            $product->firm;
            $product->image;
            $product->category;
       }

       $dressGroup = Category::where('group','Dress')->get();
       $commonGoup = Category::where('group','Common')->get();
       $beachGroup = Category::where('group','Beach')->get();

       $groupCategory = $category->group;
       $categories = Category::where('group', $groupCategory)->get();
       $collection = collect([]);
       foreach($categories as $categ){
           $products_related = $categ->product;
           foreach($products_related as $pro_relate){
            $pro_relate->firm;
            $pro_relate->image;
            $pro_relate->category;
           }
        $collection = $collection->concat($products_related);
       }
       $random_products_related = $collection->random(12);
        return view('products', ['products'=>$products, 'dressGroup'=>$dressGroup, 
        'commonGroup'=>$commonGoup, 'beachGroup'=>$beachGroup, 'category'=>$category_para,
         'products_related'=>$random_products_related]);
        // return  $collection;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}