<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Получение всех товаров из корзины
    public function index()
    {
        $cartItems = CartItem::all();
        return response()->json($cartItems);
    }

    // Добавление товара в корзину
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);

        $cartItem = CartItem::create([
            'name' => $validated['name'],
            'price' => $validated['price']
        ]);

        return response()->json($cartItem, 201);
    }

    // Обновление товара в корзине
    public function update(Request $request, $id)
    {
        $cartItem = CartItem::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);

        $cartItem->update([
            'name' => $validated['name'],
            'price' => $validated['price']
        ]);

        return response()->json($cartItem);
    }

    // Удаление товара из корзины
    public function destroy($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return response()->json(['message' => 'Item deleted from cart successfully']);
    }
}
