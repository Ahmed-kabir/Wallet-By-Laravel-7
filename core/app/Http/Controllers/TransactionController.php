<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\User;
use App\adminSupport;
use App\Reffered;
use Illuminate\Support\Facades\Auth;
use Hash;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaction_history()
    {
          $sender_id = Auth::user()->id;
           $transaction_by_id =Transaction::where('user_id',$sender_id)->orderBy('id', 'desc')->get();
          return view('user.transaction_history_by_id', ['transactionById'=>$transaction_by_id]);
          // echo '<pre>';
          // printf($transaction_by_id);
          // echo '</pre>';
    }

    public function reffered_history()
    {
        $user_id = Auth::user()->id;
        $reffered_by_id =Reffered::where('reffered_id',$user_id)->orderBy('id', 'desc')->get();
          return view('user.reffered_history_by_id', ['refferedById'=>$reffered_by_id]);
    }
    public function all_transaction()
    {
        $all_transaction = Transaction::all();
        return view('admin.all_transaction', ['allTransaction'=>$all_transaction]);
    }

    public function transaction_by_id($id)
    {
        $user = User::findOrFail($id);
        // $transactions = $user->transaction;
        // foreach ($transactions as $t) {
        //     return $t->sender_comment;
        // }
        // return $user->transaction;
        return view('admin.transaction_by_id', ['user'=>$user]);
        // return $transaction_by_id =Transaction::where('id',$id)->orderBy('id', 'desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
