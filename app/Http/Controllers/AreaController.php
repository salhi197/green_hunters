<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::orderBy('prio')->get();

        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validated($request);

        Area::create($validated);

        return redirect()->route('admin.areas.index')->with('success', 'Area created.');
    }

    public function edit(Area $area)
    {
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $validated = $this->validated($request);

        $area->update($validated);

        return redirect()->route('admin.areas.index')->with('success', 'Area updated.');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('admin.areas.index')->with('success', 'Area deleted.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'name'           => ['required', 'string', 'max:255'],
            'prio'           => ['required', 'integer', 'min:1', 'max:255'],
            'lat'            => ['required', 'numeric', 'between:-90,90'],
            'lng'            => ['required', 'numeric', 'between:-180,180'],
            'vans'           => ['required', 'integer', 'min:0'],
            'stops_per_week' => ['required', 'integer', 'min:0'],
            'status'         => ['required', 'in:high,mid,open'],
        ]);
    }
}
