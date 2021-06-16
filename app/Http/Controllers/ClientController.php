<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Commandeitem;
use App\Models\Company;
use App\Models\Pane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:client');
    }

    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function addtopane(Request $req)
    {
        $ifalready = Pane::where([
            ['client_id', Auth::guard('client')->id()],
            ['product_id', $req->product_id]
        ])->get()->all();
        if ($ifalready) {
            Pane::where([
                ['client_id', Auth::guard('client')->id()],
                ['product_id', $req->product_id]
            ])->delete();
            return redirect()->back()->with(['statut' => 'deletedpane']);
        } else {
            Pane::create([
                'product_id' => $req->product_id,
                'client_id' => Auth::guard('client')->id(),
                'color_id' => $req->selectedcolor,
                'quantity' => $req->quantity,
                'created_at' => date('Y-m-d h:i:s')
            ]);
            return redirect()->back()->with(['statut' => 'addedtopane', 'quantity' => $req->quantity]);
        }
    }

    public function pane()
    {
        $panes = Pane::where('client_id', Auth::guard('client')->id())->get()->all();
        $total = 0;
        foreach ($panes as $pane) {
            $total += ($pane->quantity * $pane->product->price);
        }
        return view('client.pane', compact(['panes', 'total']));
    }

    public function deletepanier(Request $req)
    {
        Pane::where([
            ['id', $req->pane_id],
            ['client_id', Auth::guard('client')->id()]
        ])->delete();
        return redirect()->back()->with('statut', 'deleted');
    }

    public function changepanequantity(Request $req)
    {
        if ($req->quantity >= 0) {
            Pane::where([['id', $req->pane_id], ['client_id', Auth::guard('client')->id()]])->update([
                'quantity' => $req->quantity
            ]);
        }
        $pane2 = Pane::where([['id', $req->pane_id], ['client_id', Auth::guard('client')->id()]])->first();
        $price = $pane2->quantity * $pane2->product->price;
        $panes = Pane::where('client_id', Auth::guard('client')->id())->get()->all();
        $total = 0;
        foreach ($panes as $pane) {
            $total += ($pane->quantity * $pane->product->price);
        }
        return array('total' => $total, 'price' => $price);
    }

    /***Commande**/
    public function Commande(Request $req)
    {
        $commande = Commande::create([
            'client_id' => Auth::guard('client')->id(),
            'created_at' => date('Y-m-d h:i:s')
        ]);
        $panes = Pane::where('client_id', Auth::guard('client')->id())->get()->all();
        foreach ($panes as $pane) {
            Commandeitem::create([
                'commade_id' => $commande->id,
                'pane_id' => $pane->id,
                'created_at' => date('Y-m-d h:i:s')
            ]);
        }
return redirect()->back()->with('statut', 'commandepassed');
    }
}
