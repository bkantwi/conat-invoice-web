<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function logo(Request $request){
//        $request->validate([
//            sename=>'required',
//            seemail=>'required',
//            sephone=>'required',
//            seaddress=>'required',
//            selogo=>'required',
//            rename=>'required',
//            reemail=>'required',
//            rephone=>'required',
//            readdress=>'required',
//            item=>'required',
//            amount=>'required',
//            cost=>'required',
//            payment_method=>'required'
//        ]);
        $invoice = new invoice;
        $invoice->sename = $request->input('sename');
        $invoice->seemail = $request->input('seemail');
        $invoice->sephone = $request->input('sephone');
        $invoice->seaddress = $request->input('seaddress');
        $invoice->selogo = $request->input('selogo');
        $invoice->rename = $request->input('rename');
        $invoice->reemail = $request->input('reemail');
        $invoice->rephone = $request->input('rephone');
        $invoice->payment_method = $request->input('payment_method');
        if($request->hasfile('logo')){
            $file = $request->file('logo');
            // $extension = $file->getClientOriginalExtension();
            // $filename = time().'.'.$extension;
            $filename = Str::random(7).'_'. $file->getClientOriginalName();
            // $path=$file->move('uploads/', $filename);
            $path = Storage::path('public/uploads');

            $db_path = URL::to(env('APP_URL').Storage::url('uploads/'.$filename));

            $file->move($path, $filename);

            // $original_filename = $path.'/'.$filename;

            $invoice->file_name = $db_path;
        }
        $invoice->save();
        return redirect()->back()->with('success','Advert Added');

    }
}
