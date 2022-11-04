<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    public function index()
    {
        $data = request()->all();

        $products = Product::with(['category', 'orders']);

        if(array_key_exists('category', $data)){
            $category = json_decode($data['category'], true);
            $products = $products->where('category_id', $category['id']);
        }

        $products = $products->paginate(8);

        \Log::info('--------------------- INIZIO ----------------------------------------------');
        \Log::info('DATA:');
        \Log::info($data);
        \Log::info('---------------------- FINE ---------------------------------------------');

        return response()->json([
            'success' => true,
            'results' => $products
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->with(['category', 'orders'])->first();

        $orders = $product->orders;
        $totalUnits = 0;
        foreach ($orders as $order) {
            $totalUnits += $order->pivot->quantity;
        }

        return response()->json([
            'success' => true,
            'results' => $product
        ]);
    }


}
