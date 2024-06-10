<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function create(){
        return view('customers.create');

    }
    public function store (Request $request){
        $this->validate($request ,[
            'code' => 'required|unique:customers|max:4',
            'name' => 'required|max:30',
            'address' => 'required',
            'phone' => 'numeric'
        ]);
        // Insert Into
        $customer = new Customer;

        $customer->code =$request->code;
        $customer->name =$request->name;
        $customer->phone =$request->phone;
        $customer->address =$request->address;



        // true /false
        // return true
        if($customer->save ()){
            return redirect()->route('customer.show', $customer->id);
        } else {
            dd('Data Gagal Disimpan');
        }

    }
    public function show($id) {
        //SELECT * FROM customer where id = x
        $customer = Customer::find($id);

        return view('customers.show', compact('customer'));
    }

    public function index() {
        //SELECT * FROM Customers
        // $customers = Customer::all();

        // SELECT * FROM customers by id desc
        $customers = Customer::orderBy('id', 'DESC')->get();

        // SELECT * FROM customers by code == 1234
        //$customers = Customer::where('code', '1234')->get();
        return view('customers.index', compact('customers'));
    }

    //Method mengambil data yang diubah
    public function edit($id) {
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'));
    }

    // --- Menyimpan data yang diubah
    public function update(Request $request) {
        $this->validate($request ,[
            'name' => 'required|max:30',
            'address' => 'required',
            'phone' => 'numeric'
        ]);

        //
        $customer = Customer::find($request->id);

        $customer->name =$request->name;
        $customer->phone =$request->phone;
        $customer->address =$request->address;



        // true / false
        // return true
        if($customer->save()){
            return redirect()->route('customer.index')->with('success', "Data Nasabah $customer->code Berhasil di perbaharui");
        } else {
            dd('Data Gagal Disimpan');
        }
    }

    // --- Hapus Data
    public function destroy($id) {
        $customer =  Customer::find($id);
        $name = $customer->name;

        if($customer->delete()){
            return redirect()->route('customer.index')->with('success', "Data Nasabah $name Berhasil di hapus");
        } else {
            dd('Data Gagal Disimpan');
        }
    }
}
