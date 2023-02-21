<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process($id)
    {
        $travel_package = TravelPackages::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'name' => Auth::user()->name,
            'nationality' => 'Indonesia',
        ]);


        return redirect()->route('checkout', $transaction->id);
    }

    public function index($id)
    {
        $item = Transaction::findOrFail($id);

        return view('checkout', compact('item'));
    }

    public function remove($detail_id)
    {
        $tran_detail = TransactionDetail::findorFail($detail_id);

        $transaction = Transaction::with(['details', 'travel_package'])
            ->findOrFail($tran_detail->transactions_id);

        $transaction->transaction_total -= $transaction->travel_package->price;

        $transaction->save();
        $tran_detail->delete();

        return redirect()->route('checkout', $tran_detail->transactions_id);
    }

    public function create(Request $request, $id)
    {
        //
    }

    public function success(Request $request, $id)
    {
        // $transaction = Transaction::findorFail($id);
        // $transaction->transaction_status = 'SUCCESS';

        $transaction->transaction_total *= $request->quantity;

        $transaction->save();

        return redirect()->route('home');
    }
}
