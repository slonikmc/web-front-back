<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    // Метод для получения всех продуктов
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Метод для добавления нового продукта
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);

        $product = Product::create([
            'name' => $validated['name'],
            'price' => $validated['price']
        ]);

        return response()->json($product, 201);
    }

    // Метод для обновления существующего продукта
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);

        $product->update([
            'name' => $validated['name'],
            'price' => $validated['price']
        ]);

        return response()->json($product);
    }

    // Метод для удаления продукта
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
