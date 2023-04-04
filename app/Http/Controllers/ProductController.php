<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        $data = DB::table("products")->get();
        return view('product.product',['products'=>$data]);
    } 

    public function delete($id) {
        $product = product::find($id);
        $product->delete();

        return redirect('/')->with('success_del', 'Product deleted successfully');
    }

    public function edit($id){
        $data=Product::findOrFail($id);
        return view('product.edit',['product'=>$data]);
    }

    public function updateProduct(Request $req){
        $req->validate([
            "productId"=>['required','min:3'],
            "productName"=>['required','min:3'],
            "price"=>['required','integer','min:1'],
            "Stock"=>['required','integer','min:1']
        ]);

        $data=Product::find($req->id);
        $data->lastName=$req->lastName;
        $data->firstName=$req->firstName;
        $data->email=$req->email;
        $data->contactNumber=$req->contactNumber;
        $data->address=$req->address;

        $data->save();
        return redirect("/")->with('success', 'Product updated successfully.');
    }

    
}
