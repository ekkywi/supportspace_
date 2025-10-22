<?php

namespace App\Http\Controllers\Modules\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $query = Role::query()->latest();

        if ($request->has("search")) {
            $search = $request->input("search");
            $query->where("name", "like", "%" . $search . "%")
                ->orWhere("code", "like", "%" . $search . "%");
        }

        $roles = $query->paginate(10);

        return view("contents.settings-roles", compact("roles"));
    }

    public function store(StoreRoleRequest $request)
    {
        $validated = $request->validated();

        $role = Role::create($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Peran baru berhasil ditambahkan.'
        ];

        return back()->with('flash', $notification);
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $validated = $request->validated();

        $role->update($validated);

        $notification = [
            'type' => 'success',
            'message' => 'Peran berhasil diperbarui.'
        ];

        return back()->with('flash', $notification);
    }

    public function destroy(Role $role)
    {
        $role->delete();

        $notification = [
            'type' => 'success',
            'message' => 'Peran berhasil dihapus'
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
