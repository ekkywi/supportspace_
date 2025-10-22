<?php

namespace App\Http\Controllers\Modules\Settings;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentArchiveController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Department::onlyTrashed();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%");
            });
        }

        $trashedDepartments = $query->latest('deleted_at')->paginate(10)->appends($request->query());

        return view('contents.settings-departments-archives', compact('trashedDepartments'));
    }

    public function restore(Department $department)
    {
        $department->restore();

        $notification = [
            'type' => 'success',
            'message' => 'Data departemen berhasil dipulihkan',
        ];

        return back()->with('flash', $notification);
    }

    public function forceDelete(Department $department)
    {
        $department->forceDelete();

        $notification = [
            'type' => 'success',
            'message' => 'Data departemen dihapus permanen'
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
