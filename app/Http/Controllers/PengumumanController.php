<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{

    function __construct()
    {

         $this->middleware('permission:pengumuman-list');
         $this->middleware('permission:pengumuman-create', ['only' => ['create','store']]);
         $this->middleware('permission:pengumuman-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:pengumuman-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans = Pengumuman::latest()->paginate(5);
        return view('pengumumans.index',compact('pengumumans'))
               ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumumans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Pengumuman::create($request->all());
        return redirect()->route('pengumumans.index')
                         ->with('success','pengumuman created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
         return view('pengumumans.show',compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('pengumumans.edit',compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $pengumuman->update($request->all());
        return redirect()->route('pengumumans.index')
                         ->with('success','pengumuman updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->route('pengumumans.index')
                         ->with('success','Pengumuman deleted successfully');
    }
}