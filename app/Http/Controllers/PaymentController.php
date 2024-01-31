<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Midtrans\Config as MidtransConfig;
use Illuminate\Http\Request;
use Midtrans\Notification;

class PaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        // Set konfigurasi Midtrans
        MidtransConfig::$serverKey = env('MIDTRANS_SERVER_KEY');
        MidtransConfig::$isProduction = false; // Ganti menjadi true jika sudah di production

        // Mendapatkan data dari request
        $harga = $request->input('harga');
        $nama = $request->input('nama');
        $nomorHp = $request->input('nomor_hp');
        $email = $request->input('email');

        // Mendapatkan order_id secara unik
        $orderId = 'ORDER-' . uniqid();

        // Data pembayaran
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $harga,
            ],
            'item_details' => [
                [
                    'id' => 'item1',
                    'price' => $harga,
                    'quantity' => 1,
                    'name' => 'Layanan', // Anda bisa menggunakan kategori atau jenis layanan yang dipilih
                ],
            ],
            'customer_details' => [
                'first_name' => $nama,
                'email' => $email,
                'phone' => $nomorHp,
            ],
        ];

        // Membuat link pembayaran menggunakan Midtrans SNAP
        $snapUrl = Snap::createTransaction($params)->redirect_url;

        // Redirect ke halaman pembayaran
        return redirect($snapUrl);
    }

    public function handleCallback(Request $request)
    {
        // Set konfigurasi Midtrans
        MidtransConfig::$serverKey = env('MIDTRANS_SERVER_KEY');
        MidtransConfig::$isProduction = false; // Ganti menjadi true jika sudah di production

        // Handle callback dari Midtrans
        $notification = new Notification();

        // Mendapatkan data notifikasi
        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;

        // Lakukan sesuatu berdasarkan status transaksi, misalnya: update status di database
        // Contoh: $order = Order::where('order_id', $orderId)->first();
        //        $order->status = $transactionStatus;
        //        $order->save();

        // Redirect ke halaman pembayaran
        return redirect('/pembayaran')->with('status', 'Pembayaran berhasil');
    }
}

