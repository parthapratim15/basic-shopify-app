<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use URL;

class CollectionController extends Controller
{
    //Get all the collections data in a table
    public function index(Request $request) {
        //check if it is a POST request
        if ($request->isMethod('post')) {

            $collectionid = $request->collectionid;
            if ($collectionid != 0) {
                $collection = Collection::find($collectionid);
            } else {
                $collection = new Collection();
            }

            $collection->name = $request->name;
            $collection->description = $request->description;
            $collection->shop_id = auth()->user()->id;

            $collection->save();
            $redirectUrl = getRedirectRoute('collections');
            return redirect($redirectUrl);
        }
        $collections = Collection::where('shop_id', auth()->user()->id)->get();
        return view('collection.index', compact('collections'));
    }

    public function products(Request $request, $collectionid) {

        //get Products for a collection
        //check if this colleciton id belongs to shop id
        $collection = Collection::findOrFail($collectionid);
        $shop = $request->user();
        if ($collection->shop_id != $request->user()->id) {
            return Redirect::tokenRedirect('collections');
        }

        if ($request->isMethod('post')) {
            $productid = $request->productid;
            if ($productid != 0) {
                $product = Product::find($productid);
            } else {
                $product = new Product();
            }

            $product->name = $request->name;
            $product->description = $request->description;
            $product->collection_id = $collection->id;
            $product->shop_id = $shop->id;

            $product->save();

            $redirectUrl = getRedirectRoute('collection.products', ['collectionid' => $collection->id]);
            return redirect($redirectUrl);
        }
        $products = Product::where('collection_id', $collection->id)->get();
        return view('collection.product', compact('products', 'collection'));
    }
}
