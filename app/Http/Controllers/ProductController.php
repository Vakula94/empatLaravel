<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::getProducts();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findProduct($id);
        return view('products.show', compact('product'));
    }

    public function contactForm()
    {
        return view('contact');
    }

    public function handleContact(Request $request)
    {
        $name = $request->input('name');

        return view('contact', ['success' => "Message sent by $name"]);
    }
}
