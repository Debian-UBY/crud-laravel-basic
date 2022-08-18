<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request; 

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }

    //membuat insert controler
    public function store(Request $request){
        //memanggil model product dan create ini maksutnya memasukan data ke model produk
        Product::create([
            'nm_produk' => $request->nm_produk,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]); 

        //atau ada cara simplenya yaitu
        //Product::create($request->all());  ini dia menggunakan request all

        return back();
    }

    public function viewProduct(){
        
        $product = Product::all();
        return view('products', compact('product'));
    }

    public function editProduct($id){

        //jika metode where ini lebih condong ke memfilter data
        //first ini mungsi digunakan untuk mendapakkan 1 data
        $product = Product::where('id', $id)->first();  

        //atau ada metode findOrFail ini fungsi di laravel untuk mendapatkan 1 data saja
        //$product = Product::FindOrFail($id);
        
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id){

        Product::where('id', $id)->update([
            'nm_produk'  => $request->nm_produk,
            'harga'      => $request->harga,
            'stok'       => $request->stok
        ]);

        //metode findOrFail
        //Product::findOrFail($id)->update($request->all());

        return redirect('/viewProduct');
    }

    public function delete($id){

        Product::destroy($id);

        return back();
    }
    
}
