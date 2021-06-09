<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Child_category;
use App\Models\Client;
use App\Models\Company;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /********category*******/
    public function categories()
    {
        $categories = Category::get()->all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function addcategorypage()
    {
        return view('admin.categories.add');
    }

    public function addcategory(Request $req)
    {
        Category::create([
            'name' => $req->name,
            'created_at' => date('Y-m-d h:i:s')
        ]);
        $statut = 'good';
        return redirect('/admin/categories')->with('statut', 'added');
    }

    public function deletecategory(Request $req)
    {
        Category::where('id', $req->categoryid)->delete();
        return redirect('/admin/categories')->with('statut', 'deleted');
    }

    /********child category*******/

    public function souscategories()
    {
        $childcategories = Child_category::with('Category')->get()->all();
        return view('admin.sousCategories.categories', compact('childcategories'));
    }

    public function addsouscategoriespage()
    {
        $categories = Category::get()->all();
        return view('admin.sousCategories.add', compact('categories'));
    }

    public function addsouscategories(Request $req)
    {
        Child_category::create([
            'name' => $req->name,
            'category_id' => $req->category,
            'created_at' => date('Y-m-d h:i:s')
        ]);
        $statut = 'good';
        return redirect('/admin/souscategories')->with('statut', 'added');
    }

    public function deletesouscategories(Request $req)
    {
        Child_category::where('id', $req->childcategoriid)->delete();
        return redirect('/admin/souscategories')->with('statut', 'deleted');
    }

    /********message*******/

    public function messages()
    {
        $messages = Message::get()->all();
        return view('admin.message.messages', compact('messages'));
    }

    public function deletemessage(Request $req)
    {
        Message::where('id', $req->messageid)->delete();
        return redirect('admin/messages')->with('statut', 'deleted');
    }

    /********clients*******/

    public function clients()
    {
        $users = Client::get()->all();
        return view('admin.companies.clients', compact('users'));
    }

    /***company***/

    public function companies()
    {
        $companies = Company::get()->all();
        return view('admin.companies.companies', compact('companies'));
    }

    public function addcompanypage()
    {
        return view('admin.companies.add');
    }

    public function addcompanies(Request $req)
    {
        $company = Company::create([
            'name' => $req->name,
            'logo' => 'logo',
            'created_at' => date('Y-m-d h:i:s')
        ]);
        $imagename = $company->id . '.' . $req->file('logo')->getClientOriginalExtension();
        $logo = $req->file('logo')->storeAs('public/companies', $imagename);
        $company->logo = $imagename;
        $company->save();

        $statut = 'good';
        return redirect('/admin/companies')->with('statut', 'added');
    }

    public function deletecompanies(Request $req)
    {
        $company = Company::where('id', $req->modalcompanyid)->first();
        Storage::delete('public/companies/' . $company->logo);
        $company->delete();
        return redirect('/admin/companies')->with('statut', 'deleted');
    }

    public function modifycompanypage($id)
    {
        $company = Company::where('id', $id)->first();
        return view('admin.companies.update', compact('company'));
    }

    public function modifycompanies(Request $req)
    {
        $company = Company::where('id', $req->comapnyid)->first();
        Storage::delete('public/companies/' . $company->logo);
        $company->update([
            'name' => $req->name,
            'logo' => $req->comapnyid . '.' . $req->file('logo')->getClientOriginalExtension(),
        ]);
        $imagename = $req->comapnyid . '.' . $req->file('logo')->getClientOriginalExtension();
        $logo = $req->file('logo')->storeAs('public/companies', $imagename);
        return redirect('/admin/companies')->with('statut', 'updated');
    }

    public function profile()
    {
        $admin = User::where('id', Auth::id())->first();
        return view('admin.admin.profile', compact('admin'));
    }

    public function updateprofile(Request $req)
    {
        $validator = $req->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'nepassword' => ['same:nepassword2'],

        ]);
        $user = User::where('id', Auth::id())->update([
            'name' => $req->name,
            'email' => $req->email,
        ]);

        if ($req->modifypasswpord) {
            if (Auth::attempt(['email' => $req->email, 'password' => $req->currentpasswpord])) {
                $user = User::where('id', Auth::id())->update([
                    'password' => Hash::make($req->nepassword),
                ]);
            }
        }
        return redirect('/admin/profile')->with('statut', 'updated');
    }

    /******products*******/
    public function products(){
        $products=Product::with(['childcategory','company','images','colors'])->get()->all();
        return view('admin.products.products',compact('products'));
    }
    public function  addproductpage(){
        return view('admin.products.add');
    }
}
