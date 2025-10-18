<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;

class SectionArchiveController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Section::onlyTrashed();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%");
            });
        }

        $trashedSections = $query->latest('deleted_at')->paginate(10)->appends($request->query());

        return view('contents.settings-sections-archives', compact('trashedSections'));
    }

    public function restore(Section $section)
    {
        $section->restore();

        $notification = [
            'type' => 'success',
            'message' => 'Data bagian berhasil dipulihkan',
        ];

        return back()->with('flash', $notification);
    }

    public function forceDelete(Section $section)
    {
        $section->forceDelete();

        $notification = [
            'type' => 'success',
            'message' => 'Data bagian dihapus permanen'
        ];

        return back()->with('flash', $notification);
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
