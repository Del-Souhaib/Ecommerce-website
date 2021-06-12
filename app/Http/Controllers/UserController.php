<?php

namespace App\Http\Controllers;

use App\Models\Best_product;
use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Home()
    {
        $products = Best_product::with(['product' => function ($query) {
            return $query->with('images');
        }])->get()->all();
        return view('welcome', compact('products'));
    }

    public function messagepage()
    {
        return view('user.message');
    }

    public function sendmessage(Request $req)
    {

        $message = Message::create([
            'subject' => $req->Sujet,
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->tele,
            'message' => $req->message,
            'file' => '',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        if ($req->file('file') != null) {
            $file = $req->file('file');
            $imagename = $message->id . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/messafefiles/', $imagename);
            Message::where('id', $message->id)->update(['file' => $imagename]);
        }
        return redirect('/message')->with('statut', 'added');
    }


    public function product($id)
    {
        $product = Product::with(['images', 'company', 'colors', 'childcategory' => function ($query) {
            return $query->with('Category');
        }])->where('id', $id)->first();
        $relatedproducts = Product::where('child_category_id', $product->child_category_id)->with(['images'])->limit(8)->get();
        return view('products.product', compact(['product', 'relatedproducts']));
    }

    public function getproductinfo(Request $req)
    {
        return Product::with(['images', 'company', 'colors'])->where('id', $req->productid)->first();
    }

    /*****Categories******/
    public function categoryproductd($id)
    {
        return $products=Product::has(['childcategory'=>function($q,$id){
            return $q->where('Category.first.id',$id);
        }])->with('images', 'company', 'colors', 'childcategory')->get()->all();
        $title=Category::where('id',$id)->first()->name;
        return view('products.products',compact('products'));
    }
    public function childCategory($id)
    {
        return view( 'products.products');
    }
}
