<?php

namespace App\Http\Controllers\Modules\Settings;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;

class PositionController extends Controller
{
    public function index(Request $request)
    {
        $query = Position::query()->latest();

        if ($request->has("search")) {
            $search = $request->input("search");
            $query->where("name", "like", "%" . $search . "%")
                ->orWhere("code", "like", "%" . $search . "%");
        }

        $positions = $query->paginate(10);

        return view("contents.settings-positions", compact("positions"));
    }

    public function store(StorePositionRequest $request)
    {
        $validated = $request->validated();

        $position = Position::create($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Jabatan baru berhasil ditambahkan.'
        ];

        return back()->with('flash', $notification);
    }

    public function update(UpdatePositionRequest $request, Position $position)
    {
        $validated = $request->validated();

        $position->update($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Jabatan berhasil diperbarui.'
        ];

        return back()->with('flash', $notification);
    }

    public function destroy(Position $position)
    {
        $position->delete();

        $notification = [
            'type' => 'success',
            'message' => 'Jabatan berhasil dihapus'
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
