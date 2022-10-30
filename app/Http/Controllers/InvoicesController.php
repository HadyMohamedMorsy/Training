<?php

namespace App\Http\Controllers;

use App\Models\invoice_attachment;
use App\Models\Invoices;
use App\Models\invoices_Details;
use App\Models\product;
use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\DB;


class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $invoices = Invoices::all();
        return view('Invoice.invoice' , compact('invoices'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = sections::all();
        return view('Invoice.create' , compact('sections'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        if($request->file()){

                Invoices::create([
                    'invoice_number' => $request->invoice_number,
                    'invoice_Date' => $request->invoice_Date,
                    'due_date' => $request->due_date,
                    'section_id' => $request->section_id,
                    'product' => $request->product,
                    'amount_Collection' => $request->amount_Collection,
                    'amount_Commission' => $request->amount_Commission,
                    'rate_value' => $request->rate_value,
                    'value_vat' => $request->value_vat,
                    'total' => $request->total,
                    'status' => "Not Payment Yet",
                    'value_status' => "2",
                    'note' => $request->note,
                    'user' => Auth::user()->name,
                ]);
        
                $id_invoice = Invoices::latest()->first()->id;
                
                invoices_Details::create([
                    'id_invoice' => $id_invoice,
                    'invoice_number' => $request->invoice_number,
                    'product' => $request->product,
                    'section_id' => $request->section_id, 
                    'status' => "Not Payment Yet",
                    'value_status' => "2" ,
                    'note' => $request->note,
                    'user' => Auth::user()->name
                ]);
                
        
                
                $name_file = $request->file('photo')->getClientOriginalName();
                    
                invoice_attachment::create([
                    'file_name' =>$name_file,
                    'invoice_number' =>  $request->invoice_number,
                    'Created_by' => Auth::user()->name,
                    'invoice_id' => $id_invoice,
                ]);
                
                $request->file('photo')->storeAs($request->invoice_number , $name_file , 'Pdf');
                
                return redirect('/invoice')->with("success","This Invoice Is Added In Our Data Base");

            }else{

                return redirect('/invoice')->with("File","Must Upload File");

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoices = Invoices::find($id);
        
        $details = invoices_Details::find($id);

        $attachment = invoice_attachment::find($id);


        return view('Invoice.allInvoices' , compact('invoices' , 'details' , 'attachment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoices $invoices)
    {
        //
    }



}
