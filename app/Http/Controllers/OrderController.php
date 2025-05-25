<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderItemTopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'items' => 'required|array',
            'items.*.drink_id' => 'required|exists:drinks,id',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.toppings' => 'nullable|array',
            'items.*.toppings.*' => 'exists:toppings,id',
        ]);

        DB::beginTransaction();

        try {
            $totalPrice = 0;

            $order = Order::create([
                'user_id' => $validated['user_id'],
                'total_price' => 0, // nanti diupdate
                'status' => 'pending',
            ]);

            foreach ($validated['items'] as $item) {
                $drink = \App\Models\Drink::findOrFail($item['drink_id']);
                $drinkPrice = $drink->price;
                $toppingTotal = 0;

                $orderItem = OrderItem::create([
                    'order_id' => $order->id,
                    'drink_id' => $drink->id,
                    'quantity' => $item['quantity'],
                    'subtotal' => 0,
                ]);

                if (!empty($item['toppings'])) {
                    foreach ($item['toppings'] as $toppingId) {
                        $topping = \App\Models\Topping::findOrFail($toppingId);
                        $toppingTotal += $topping->price;

                        OrderItemTopping::create([
                            'order_item_id' => $orderItem->id,
                            'topping_id' => $topping->id,
                        ]);
                    }
                }

                $subtotal = ($drinkPrice + $toppingTotal) * $item['quantity'];
                $orderItem->update(['subtotal' => $subtotal]);

                $totalPrice += $subtotal;
            }

            $order->update(['total_price' => $totalPrice]);

            DB::commit();

            session()->forget('cart');
            
            // return response()->json(['message' => 'Order placed successfully', 'order_id' => $order->id], 201);
            return redirect()->route('order.success')->with('success', 'Order placed successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            // return response()->json(['error' => $e->getMessage()], 500);
            return back()->withErrors(['error' => 'Failed to place order: ' . $e->getMessage()]);
        }
    }
}
