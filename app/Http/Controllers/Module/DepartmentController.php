<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDepartmentRequest;
use App\Models\Department;
use Illuminate\Contracts\Cache\Store;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('contents.settings-departments', compact('departments'));
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

    public function update(StoreDepartmentRequest $request, Department $department)
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
}
