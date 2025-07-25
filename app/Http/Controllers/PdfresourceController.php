<?php

namespace App\Http\Controllers;

use App\Models\PdfResources;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PdfResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pdfresource = PdfResources::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pdfresource.index', compact('pdfresource'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.pdfresource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url|max:255'
        ]);

        PdfResources::create($validated);

        return redirect()->to('/pdfresource')
            ->with('success', 'PDF Resource created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PdfResources $pdfResource): View
    {
        return view('admin.pdfresource.show', compact('pdfResource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PdfResources $pdfResource): View
    {
        return view('admin.pdfresource.edit', compact('pdfResource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PdfResources $pdfResource): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url|max:255'
        ]);

        $pdfResource->update($validated);

        return redirect()->route('admin.pdfresource.index')
            ->with('success', 'PDF Resource updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PdfResources $pdfResource): RedirectResponse
    {
        $pdfResource->delete();

        return redirect()->route('pdfresource.index')
            ->with('success', 'PDF Resource deleted successfully!');
    }
}
