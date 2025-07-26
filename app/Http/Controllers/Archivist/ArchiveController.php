<?php

namespace App\Http\Controllers\Archivist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;

class ArchiveController extends Controller
{
    public function index()
    {
        $archives = Archive::all();
        return view('pages.archivist.archives.index', compact('archives'));
    }

    public function create()
    {
        return view('pages.archivist.archives.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'archive_code' => 'required|unique:archives',
            'title' => 'required',
            'category' => 'required',
            'physical_location' => 'required',
            'quantity' => 'required|numeric',
        ]);

        Archive::create($request->all());
        return redirect()->route('archives.index')->with('success', 'Archive created successfully.');
    }

    public function show(Archive $archive)
    {
        return view('pages.archivist.archives.show', compact('archive'));
    }

    public function edit(Archive $archive)
    {
        return view('pages.archivist.archives.edit', compact('archive'));
    }

    public function update(Request $request, Archive $archive)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'physical_location' => 'required',
            'quantity' => 'required|numeric',
        ]);

        $archive->update($request->all());
        return redirect()->route('archives.index')->with('success', 'Archive updated successfully.');
    }

    public function destroy(Archive $archive)
    {
        $archive->delete();
        return redirect()->route('archives.index')->with('success', 'Archive deleted successfully.');
    }
}
