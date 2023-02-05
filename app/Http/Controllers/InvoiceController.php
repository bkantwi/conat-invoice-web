<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class InvoiceController extends Controller
{

    /**
     * Display a listing of the invoices.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $invoices = Invoices::all();
        return view('dashboard');
    }

    /**
     * Show the form for creating a new invoice.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('invoice.create');
    }


    /**
     * Store a newly created invoice in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request){
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
        $invoice = new Invoices;
        $invoice->sename = $request->input('sename');
        $invoice->semail = $request->input('semail');
        $invoice->sephone = $request->input('sephone');
        $invoice->seaddress = $request->input('seaddress');
        $invoice->selogo = $request->input('selogo');
        $invoice->rename = $request->input('rename');
        $invoice->remail = $request->input('remail');
        $invoice->rephone = $request->input('rephone');
        $invoice->payment_method = $request->input('payment_method');
        if($request->hasfile('selogo')){
            $file = $request->file('selogo');
            // $extension = $file->getClientOriginalExtension();
            // $filename = time().'.'.$extension;
            $filename = Str::random(7).'_'. $file->getClientOriginalName();
            // $path=$file->move('uploads/', $filename);
            $path = Storage::path('public/uploads');
            $db_path = URL::to(env('APP_URL').Storage::url('uploads/'.$filename));
            $file->move($path, $filename);
            // $original_filename = $path.'/'.$filename;
            $invoice->selogo = $db_path;
        }
        $invoice->save();
        return redirect()->back()->with('success','Invoice created');

    }

    /**
     * Display the specified invoice.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Invoices::find($id);

//        return view('invoices.show', compact('invoice'));
    }

    /**
     * Update the specified invoice in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $validatedData = $request->validate([
//            'name' => 'required|max:255|unique:products,name,'.$id,
//            'description' => 'required',
//            'price' => 'required|numeric',
//        ]);

//        $invoice = Invoices::find($id);
//        $invoice->update($validatedData);

//        return redirect()->route('products.index')
//            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified invoice from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        $product = Product::find($id);
//        $product->delete();
//        return redirect()->route('products.index')
//            ->with('success', 'Invoice deleted successfully');
//    }
}
