<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\DetailTransaction;

class CheckoutController extends Controller
{
    public function checkout(User $user)
    {
        // Ambil semua cart yang dimiliki oleh user saat ini
        $carts = $user->carts;

        if ($carts->isEmpty()) {
            return response()->json(['message' => 'Cart is empty. Unable to checkout.'], 400);
        }

        // Buat transaksi baru untuk user saat ini
        $transaction = new Transaction();
        $transaction->user_id = $user->id;

        if ($carts->isNotEmpty()) {
            $transaction->store_id = $carts->first()->product->store_id; // Ambil store_id dari produk pertama di cart
        }

        $transaction->save();

        try {
            // Proses setiap item di cart sebagai detail transaksi
            foreach ($carts as $cart) {
                $detail = new DetailTransaction();
                $detail->transaction_id = $transaction->id;
                $detail->product_id = $cart->product_id;
                $detail->quantity = $cart->quantity;
                $detail->save();

                // Hapus item dari cart setelah dijadikan detail transaksi
                $cart->delete();
            }

            // Hitung total transaksi
            $totalTransaction = $transaction->details()->sum(function ($detail) {
                return $detail->product->product_price * $detail->quantity;
            });

            // Simpan total transaksi ke dalam record transaksi
            $transaction->total_transaction = $totalTransaction;
            $transaction->save();

            return response()->json(['message' => 'Checkout successful', 'transaction' => $transaction], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to checkout. ' . $e->getMessage()], 500);
        }
    }
}
