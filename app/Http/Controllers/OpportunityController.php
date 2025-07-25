<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OpportunityController extends Controller
{
    /**
     * Display a listing of opportunities.
     */
    public function index(): View
    {
        $opportunities = Opportunity::latest()->paginate(10);
        return view('admin.opportunities.index', compact('opportunities'));
    }

    /**
     * Show the form for creating a new opportunity.
     */
    public function create(): View
    {
        return view('admin.opportunities.create');
    }

    /**
     * Store a newly created opportunity in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'for' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Opportunity::create($validated);

        return redirect()->to('opportunity')
            ->with('success', 'Opportunity created successfully!');
    }

    /**
     * Display the specified opportunity.
     */
    public function show(Opportunity $opportunity): View
    {
        return view('opportunities.show', compact('opportunity'));
    }

    /**
     * Show the form for editing the specified opportunity.
     */
    public function edit(Opportunity $opportunity): View
    {
        return view('admin.opportunities.edit', compact('opportunity'));
    }

    /**
     * Update the specified opportunity in storage.
     */
    public function update(Request $request, Opportunity $opportunity): RedirectResponse
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'for' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $opportunity->update($validated);

        return redirect()->route('admin.opportunities.index')
            ->with('success', 'Opportunity updated successfully!');
    }

    /**
     * Remove the specified opportunity from storage.
     */
    public function destroy(Opportunity $opportunity): RedirectResponse
    {
        $opportunity->delete();

        return redirect()->route('admin.opportunities.index')
            ->with('success', 'Opportunity deleted successfully!');
    }
}
