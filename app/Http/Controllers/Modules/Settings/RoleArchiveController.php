<?php

namespace App\Http\Controllers\Modules\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleArchiveController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Role::onlyTrashed();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where("name", "like", "%{$search}%")
                    ->orWhere("code", "like", "%{$search}");
            });
        }

        $trashedRoles = $query->latest('deleted_at')->paginate(10)->appends($request->query());

        return view('contents.settings-roles-archives', compact('trashedRoles'));
    }

    public function restore(Role $role)
    {
        $role->restore();

        $notification = [
            'type' => 'success',
            'message' => 'Data peran berhasil dipulihkan',
        ];

        return back()->with('flash', $notification);
    }

    public function forceDelete(Role $role)
    {
        $role->forceDelete();

        $notification = [
            'type' => 'success',
            'message' => 'Data peran dihapus permanen.'
        ];

        return back()->with('flash', $notification);
    }

    public function search(Request $request)
    {
        $search = $request->input("search");

        $query = Role::query();

        if ($search) {
            $query->where("name", "like", "%{$search}%")
                ->orWhere("code", "like", "%{$search}%");
        }

        $roles = $query->latest()->get();

        return response()->json($roles);
    }
}
