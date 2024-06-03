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
        $customer = Customer::fnd($id);

        return view('customer.show', compact('customer'));
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
}
