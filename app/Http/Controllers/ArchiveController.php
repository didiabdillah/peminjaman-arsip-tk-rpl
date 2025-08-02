<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;

class ArchiveController extends Controller
{
    public function index()
    {
        $archives = Archive::all();
        return view('pages.archives.index', compact('archives'));
    }

    public function create()
    {
        return view('pages.archives.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'archive_code' => 'required|unique:archives',
            'title' => 'required',
            'category' => 'required',
            'physical_location' => 'required',
            'quantity' => 'required|numeric',
            'description' => 'nullable|max:4096',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:8000',
        ]);

        $hashName = $request->hasFile('image') ? $request->file('image')->hashName() : null;

        Archive::create([
            'archive_code' => $request->archive_code,
            'title' => $request->title,
            'category' => $request->category,
            'physical_location' => $request->physical_location,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'image' => $request->hasFile('image') ? $hashName : null,
            'created_by' => auth()->user()->name
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move(public_path('assets/img/archives/'), $hashName);
        }

        return redirect()->route('archives.index')->with('success', 'Archive created successfully.');
    }

    public function show(Archive $archive)
    {
        return view('pages.archives.show', compact('archive'));
    }

    public function edit(Archive $archive)
    {
        return view('pages.archives.edit', compact('archive'));
    }

    public function update(Request $request, Archive $archive)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'physical_location' => 'required',
            'quantity' => 'required|numeric',
            'description' => 'nullable|max:4096',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:8000',
        ]);

        $archive->update([
            'title' => $request->title,
            'category' => $request->category,
            'physical_location' => $request->physical_location,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);

        if ($request->hasFile('image')) {
            $hashName = $request->file('image')->hashName();
            $request->file('image')->move(public_path('assets/img/archives/'), $hashName);
            
            if ($archive->image && file_exists(public_path('assets/img/archives/' . $archive->image))) {
                unlink(public_path('assets/img/archives/' . $archive->image));
            }
            
            $archive->update(['image' => $hashName]);
        }
        return redirect()->route('archives.index')->with('success', 'Archive updated successfully.');
    }

    public function destroy(Archive $archive)
    {
        $archive->delete();
        return redirect()->route('archives.index')->with('success', 'Archive deleted successfully.');
    }
}
