<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfumeRequest;
use App\Models\Category;
use App\Models\Profume;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = auth()->user();
        $profumes = Profume::all()->where('user_id', $auth->id);

        return view('admin.profumes.index', compact('profumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Profume $profume)
    {
        $auth = auth()->user();
        return view('admin.profumes.create', compact('profume', 'auth'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfumeRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $img_path = $request->file('image')->store('uploads/image', 'public');
            $data['image'] = $img_path;
        } else {
            $data['image'] = 'Image not found.';
        }

        $profume = Profume::create($data);
        $profume->save();
        return redirect()->route('admin.profumes.show', compact('profume'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Profume $profume)
    {
        $auth = auth()->user();
        if ($auth->id === $profume->user_id) {
            $profume = Profume::with('category')->findOrFail($profume->id);
            $categories = $profume->category;

            return view('admin.profumes.show', compact('profume', 'categories'));
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profume $profume)
    {
        $auth = auth()->user();
        if ($auth->id === $profume->user_id) {
            return view('admin.profumes.edit', compact('profume', 'auth'));
        };
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProfumeRequest $request, Profume $profume)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $img_path = $request->file('image')->store('uploads/image', 'public');
            $data['image'] = $img_path;
        } else {
            $data['image'] = $profume->image;
        }

        $profume->update($data);
        return redirect()->route('admin.profumes.show', compact('profume'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profume $profume)
    {
        $auth = auth()->user();
        if ($auth->id === $profume->user_id) {
        $profume->delete();
        return redirect()->route('admin.profumes.index');
        };
    }
}
