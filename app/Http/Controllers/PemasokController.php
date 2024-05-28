<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
        $pemasoks = Pemasok::latest()->paginate(5);
        return view('pemasoks.index',compact('pemasoks'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        }


    /**
     * Show the form for creating a new resource.
     */
        public function create()
        {
        return view('pemasoks.create');
        }
    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request){
            $request->validate([
            'name' => 'required',
            'detail' => 'required',
            ]);
            Pemasok::create($request->all());
            return redirect()->route('pemasoks.index')
            ->with('success','Pemasok created successfully.');
            }
            
    

    /**
     * Display the specified resource.
     */
    public function show(Pemasok $pemasok)
    {
       return view('pemasoks.show',compact('pemasok'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemasok $pemasok)
    {
        return view('pemasoks.edit',compact('pemasok'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemasok $pemasok)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            ]);
            $pemasok->update($request->all());
            return redirect()->route('pemasoks.index')
            ->with('success','Pemasok updated successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemasok $pemasok)
    {
            $pemasok->delete();
    return redirect()->route('pemasoks.index')
    ->with('success','Pemasok deleted successfully');

    }

}