<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserDataController extends Controller
{

    public function index(Request $request)
    {
        $user = null;
        if ($request->ajax()) {
            $user = User::latest()->get();
            return DataTables::of($user)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser" ><i class="fa fa-pen"></i></a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('user.usertable', compact('user'), ['title' => 'Data Pengguna']);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user_edit_now = User::find($request->id);
        if ($request->id == null) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|unique:users|email:dns',
                'password' => 'required|min:6',
                'role' => 'required',
            ]);

            if ($validator->passes()) {
                $validated = $validator->validated();
                $validated['password'] = Hash::make($validated['password']);
                User::updateOrCreate(['id' => $request->id], $validated);
                return response()->json(['success' => 'User saved successfully.']);
            }
            return response()->json(['error' => $validator->errors()->all()]);

        } elseif ($request->id != null and $request->password != null and $user_edit_now->email == $request->email) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'password' => 'required|min:6',
                'role' => 'required',
            ]);

            if ($validator->passes()) {
                $validated = $validator->validated();
                $validated['password'] = Hash::make($validated['password']);
                User::updateOrCreate(['id' => $request->id], $validated);
                return response()->json(['success' => 'User saved successfully.']);
            }
            return response()->json(['error' => $validator->errors()->all()]);

        } elseif ($request->id != null and $request->password == null and $user_edit_now->email == $request->email) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'role' => 'required',
            ]);

            if ($validator->passes()) {
                $validated = $validator->validated();
                User::updateOrCreate(['id' => $request->id], $validated);
                return response()->json(['success' => 'User saved successfully.']);
            }
            return response()->json(['error' => $validator->errors()->all()]);

        } elseif ($request->id != null and $request->password != null and $user_edit_now->email != $request->email) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'password' => 'required|min:6',
                'role' => 'required',
                'email' => 'required|unique:users|email:dns',
            ]);

            if ($validator->passes()) {
                $validated = $validator->validated();
                $validated['password'] = Hash::make($validated['password']);
                $validated['email_verified_at'] = null;
                User::updateOrCreate(['id' => $request->id], $validated);
                return response()->json(['success' => 'User saved successfully.']);
            }
            return response()->json(['error' => $validator->errors()->all()]);

        } elseif ($request->id != null and $request->password == null and $user_edit_now->email != $request->email) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|unique:users|email:dns',
                'role' => 'required',
            ]);

            if ($validator->passes()) {
                $validated = $validator->validated();
                $validated['email_verified_at'] = null;
                User::updateOrCreate(['id' => $request->id], $validated);
                return response()->json(['success' => 'User saved successfully.']);
            }
            return response()->json(['error' => $validator->errors()->all()]);

        }
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);

    }

    public function update()
    {

    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['success' => 'User deleted successfully.']);
    }

}
