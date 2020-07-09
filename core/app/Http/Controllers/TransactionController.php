<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\User;
use App\Interest;
use App\adminSupport;
use App\Reffered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination;
use Hash;
use function GuzzleHttp\Promise\all;


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
            $transaction_by_id =Transaction::with('transferedUser')->where('user_id',$sender_id)->orderBy('id', 'desc')->paginate(4);
          return view('user.transaction_history_by_id', ['transactionById'=>$transaction_by_id]);
          // echo '<pre>';
          // printf($transaction_by_id);
          // echo '</pre>';
    }

    public function reffered_history()
    {
        $user_id = Auth::user()->id;
        $reffered_by_id =Reffered::with('user')->where('reffered_id',$user_id)->orderBy('id', 'desc')->paginate(4);
          return view('user.reffered_history_by_id', ['refferedById'=>$reffered_by_id]);
    }

    public function show_reffered_history()
    {
         $all_reffered = Reffered::with('user')->get();
        return view('admin.all_reffered', ['all_reffered'=>$all_reffered]);
    }
    public function all_transaction()
    {
        $all_transaction = Transaction::with('senderName', 'receiverName')->get();
        // return view('admin.all_transaction');
        return view('admin.all_transaction', compact('all_transaction'));
        // return view('admin.data_table');
    }
    public function total_transfer_charge()
    {
         echo 'success';
    }

    public function transaction_by_id($id)
    {
        // return $id;
        $user = User::findOrFail($id);
        $transactions = $user->transaction;
        // foreach ($transactions as $t) {
        //     echo $user->username;
        //     echo $t->sender_comment;
        // }
        // return $user->transaction;
        return view('admin.transaction_by_id', ['transactions'=>$transactions]);
        // return view('admin.transaction_by_id', ['user'=>$user]);
        // return $transaction_by_id =Transaction::where('id',$id)->orderBy('id', 'desc')->get();
    }

    public function give_interest()
    {
        return view('admin.give_interest');
    }

    public function give_interest_to_alluser(Request $request)
    {
        // return $request->all();
        $request->validate([
            "percentage"=>'required',

        ]);

        $int_percentage_value = $request->input('percentage');
        $interest_percentige_value = $int_percentage_value/100;
         $users = User::all();
        foreach ($users as $user) {
             $user_id = $user->id;
             $user_current_balance = $user->ammount;
             $interest_percentige_value;
             $interested_ammount = ($user_current_balance*$interest_percentige_value);
             $final_balance = $interested_ammount + $user_current_balance;
             // create interest
                $user = Interest::create([
                'user_id' => $user_id,
                'pre_balance' => $user_current_balance,
                'interest_percentige' => $interest_percentige_value,
                'current_balance' => $final_balance,
                ]);
                // update user balance
                 $update_user_balance = User::where('id', $user_id)->first();
                 $update_user_balance->ammount = $final_balance;
                 $update_user_balance->save();
                }
         return redirect()->route('giveInterest')->with('success_message', 'Interes Given Successfully');
    }


    public function show_interest_transaction()
    {
        // echo 'success';
        $all_interest = Interest::all();
        return view('admin.all_interest', ['all_interest'=>$all_interest]);
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
