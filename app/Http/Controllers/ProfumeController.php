<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfumeRequest;
use App\Models\Profume;
use Illuminate\Http\Request;

class ProfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profumes = Profume::all();

        return view('admin.profumes.index', compact('profumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profumes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfumeRequest $request)
    {
        $data = $request->validated();
        $profume = Profume::create($data);
        $profume->save();
        return redirect()->route('admin.profumes.show', compact('profume'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Profume $profume)
    {
        return view('admin.profumes.show', compact('profume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
