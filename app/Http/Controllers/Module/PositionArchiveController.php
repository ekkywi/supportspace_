<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;

class PositionArchiveController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Position::onlyTrashed();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where("name", "like", "%{$search}%")
                    ->orWhere("code", "like", "%{$search}");
            });
        }

        $trashedPositions = $query->latest('deleted_at')->paginate(10)->appends($request->query());

        return view('contents.settings-positions-archives', compact('trashedPositions'));
    }

    public function restore(Position $position)
    {
        $position->restore();

        $notification = [
            'type' => 'success',
            'message' => 'Data jabatan berhasil dipulihkan',
        ];

        return back()->with('flash', $notification);
    }

    public function forceDelete(Position $position)
    {
        $position->forceDelete();

        $notification = [
            'type' => 'success',
            'message' => 'Data jabatan dihapus permanen.'
        ];

        return back()->with('flash', $notification);
    }

    public function search(Request $request)
    {
        $search = $request->input("search");

        $query = Position::query();

        if ($search) {
            $query->where("name", "like", "%{$search}%")
                ->orWhere("code", "like", "%{$search}%");
        }

        $positions = $query->latest()->get();

        return response()->json($positions);
    }
}
