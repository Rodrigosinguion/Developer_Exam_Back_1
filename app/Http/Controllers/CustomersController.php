<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['customers']=Customers::paginate(5);
        return view('customers.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
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
       // $dataCustomers=request()->all();
        $dataCustomers=request()->except('_token');
         
        Customers::insert($dataCustomers);

        //return response()->json($dataCustomers);
        return redirect('customers')->with('Message', 'Successfully added client');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
   // public function show()
    //{

    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $customer= Customers::findOrFail($id);

        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataCustomers=request()->except(['_token','_method']);
        Customers::where( 'id', '=', $id)->update($dataCustomers);

        //$customer= Customers::findOrFail($id);
        //return view('customers.edit', compact('customer'));
        return redirect('customers')->with('Message', 'Successfully modified client');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer=Customers::findOrFail($id);
        Customers::destroy($id);

        return redirect('customers')->with('Message', 'Deleted customer');
    }
}
