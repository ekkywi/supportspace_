<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;

class SectionController extends Controller
{
    public function index(Request $request)
    {
        $query = Section::query()->latest();

        if ($request->has("search")) {
            $search = $request->input("search");
            $query->where("name", "like", "%" . $search . "%")
                ->orWhere("code", "like", "%" . $search . "%");
        }

        $sections = $query->paginate(10);

        return view("contents.settings-sections", compact("sections"));
    }

    public function store(StoreSectionRequest $request)
    {
        $validated = $request->validated();

        $section = Section::create($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Bagian baru berhasil ditambahkan.'
        ];

        return back()->with('flash', $notification);
    }

    public function update(UpdateSectionRequest $request, Section $section)
    {
        $validated = $request->validated();

        $section->update($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Bagian berhasil diperbarui.'
        ];

        return back()->with('flash', $notification);
    }

    public function destroy(Section $section)
    {
        $section->delete();

        $notifiation = [
            'type' => 'success',
            'message' => 'Bagian berhasi dihapus.'
        ];

        return back()->with('flash', $notifiation);
    }

    public function search(Request $request)
    {
        $search = $request->input("search");

        $query = Section::query();

        if ($search) {
            $query->where("name", "like", "%{$search}%")
                ->orWhere("code", "like", "%{$search}%");
        }

        $sections = $query->latest()->get();

        return response()->json($sections);
    }
}
