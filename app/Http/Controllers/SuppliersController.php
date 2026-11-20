<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\Nullable;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Suppliers::latest()->paginate(10);
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

        'name'=>'required|string|max:255',
        'phone'=> 'required|string|max:20',
        'email'=>'required|email|unique:suppliers,email,Null,id,delet_at,Null',
        'NIF'=> 'Nullable|string|max:20',
        'Adress'=>'required|string|max:255',
        ]);
        Suppliers::create($data);
        return redirect()->route('suppliers.index') ->whith('sucess');
    }

    /**
     * Display the specified resource.
     */
    public function show(Suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suppliers $suppliers)
    {
       return view('suppliers.edit', compact('supplier'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suppliers $suppliers)
    {
          $data = $request->validate([

        'name'=>'required|string|max:255',
        'phone'=> 'required|string|max:20',
        'email'=>'required|email|unique:suppliers,email,Null,id,delet_at,Null',
        'NIF'=> 'Nullable|string|max:20',
        'Adress'=>'required|string|max:255',
        ]);
        $suppliers->update($data);
          return redirect()->route('suppliers.index') ->whith('sucess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suppliers $suppliers)
    {
        $suppliers->delete();
        return redirect()->route('suppliers.index')->with('sucess');
    }
}
