<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviews(Request $request)
    {
        $product=Product::first();
            $user=User::first();
            $request->merge(['product_id'=>$product->id]);
            $user->review()->create($request->all());
          return back()->with('success');
    }
    public function review_show() {
        $reviews=Review::all();
           return  view('backend.admin.buyer.review_all',compact('reviews'));
    }
}
