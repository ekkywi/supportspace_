<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $query = Department::query()->latest();

        if ($request->has("search")) {
            $search = $request->input("search");
            $query->where("name", "like", "%" . $search . "%")
                ->orWhere("code", "like", "%" . $search . "%");
        }

        $departments = $query->paginate(10);

        return view("contents.settings-departments", compact("departments"));
    }

    public function store(StoreDepartmentRequest $request)
    {
        $validated = $request->validated();

        $department = Department::create($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Departemen baru berhasil ditambahkan.'
        ];

        return back()->with('flash', $notification);
    }

    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $validated = $request->validated();

        $department->update($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Departemen berhasil diperbarui.'
        ];

        return back()->with('flash', $notification);
    }

    public function destroy(Department $department)
    {
        $department->delete();

        $notification = [
            'type' => 'success',
            'message' => 'Departemen berhasil dihapus.'
        ];

        return back()->with('flash', $notification);
    }

    public function search(Request $request)
    {
        $search = $request->input("search");

        $query = Department::query();

        if ($search) {
            $query->where("name", "like", "%{$search}%")
                ->orWhere("code", "like", "%{$search}%");
        }

        $departments = $query->latest()->get();

        return response()->json($departments);
    }
}
