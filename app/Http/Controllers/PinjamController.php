<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() == true) {
            $pinjaman = Pinjam::with('mobil')->get();

            return view('pinjaman', [
                'pinjaman'=>$pinjaman
            ]);
        }else{
            return back();
        }

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pinjam = Pinjam::create([
            'start'=>$request->start,
            'durasi'=>$request->durasi,
            'mobil_id'=>$request->mobil_id,
            'status'=>'pending',
            'user_id'=>Auth::user()->id,
        ]);

        return redirect('/pinjaman');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pinjam $pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $mobilsId = collect([]);
        $mobils = Mobil::where('platno', $request->platdelete)->get();
        foreach($mobils as $id){
            $mobilsId->push($id->id);
        }
        Pinjam::whereIn('mobil_id', $mobilsId)->where('user_id', Auth::user()->id)->delete();
        return back();
    }
}
