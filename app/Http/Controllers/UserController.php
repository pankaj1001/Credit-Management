<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transfer;

class UserController extends Controller
{
    public function showAllUsers(){
        $users=User::all();
        return view('user.showAllUser')->with('users',$users);
    }

    public function showUser(Request $request,$id){
        $user=User::findOrFail($id);
        return view('user.showOne')->with('user',$user);
    }
    
    public function transfer(Request $request,$id){
        $users=User::where('id', '!=', $id)->get();
        return view('user.showToTransfer')->with([
            'users'=>$users,
            'id'=>$id
        ]);
    }
    public function sendCreditView(Request $request,$id,$id_to){
        return view('user.sendCredit')->with([
            'from'=>$id,
            'to'=>$id_to
        ]);
    }

    public function sendCredit(Request $request,$id,$id_to){
        $from=User::findOrFail($id);
        $to=User::findOrFail($id_to);

        $amount=$request->validate([
            'amount'=>'required'
        ]);
        if(($amount['amount'] > $from->current_credit) || $amount['amount']<0){
            return redirect('/users')->withErrors('Transfer Failed');
        }
        $transfer=new Transfer();
        $transfer->from=$from->id;
        $transfer->to=$to->id;
        $transfer->amount=$amount['amount'];
        $transfer->save();

        $from->current_credit-=$amount['amount'];
        $from->save();
        $to->current_credit+=$amount['amount'];
        $to->save();
        return redirect('/users');
    }
}
