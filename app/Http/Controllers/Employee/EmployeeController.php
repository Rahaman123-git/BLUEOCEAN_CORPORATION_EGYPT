<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use Spatie\Permission\Models\Role;

class EmployeeController extends Controller
{
    /**
     * Display a listing of users with a specific user type.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $users = User::where('id', '!=', 1)->get();
        return view('employees.index', compact('users'));
    }

    /**
     * Display the doctor registration view.
     */
    public function create(): View
    {
        $roles = Role::all();
        return view('employees.create', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        if($request->ajax()){
            try{
                $validator = Validator::make($request->all(), [
                    'employee_name'  => 'required|string|max:255',
                    'employee_email' => 'required|email|unique:users,email',
                    'employee_role'  => 'required|string|in:Superadmin,Admin,Content Manager,Lead Manager',
                    'login_username' => 'required|string|max:50|unique:users,username',
                    'login_password' => 'required|string|min:8',//|confirmed
                ]);

                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                $user = User::create([
                    'name'      => $request->employee_name,
                    'email'     => $request->employee_email,
                    'username'  => $request->login_username,
                    'password'  => Hash::make($request->login_password),
                ]);

                $user->assignRole($request->employee_role);
               
                session()->flash('success', 'Employee registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('employees.index')
                ], 200);
            } catch (\Exception $e) {
                session()->flash('error', 'Something went wrong. Please try again.');
                return response()->json([
                    'status' => 'error',
                ], 500);
            }
        }else{
            abort(404);
        }
    }

    public function edit($id): View
    {
        $user  = User::findOrFail($id);
        $roles = Role::all();

        return view('employees.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $user = User::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'employee_name'  => 'required|string|max:255',
                    'employee_role'  => 'required|string|in:Superadmin,Admin,Content Manager,Lead Manager',
                    'login_password' => 'nullable|string|min:8',//|confirmed
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->password){
                    $user->update([
                        'name'     => $request->employee_name,
                        'password' => Hash::make($request->login_password),
                    ]);
                }else{
                    $user->update([
                        'name' => $request->employee_name,
                    ]);
                }

                $user->syncRoles([$request->employee_role]);
        
                session()->flash('success', 'Employee details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('employees.index')
                ], 200);
            } catch (\Exception $e) {dd($e);
                session()->flash('error', 'Something went wrong. Please try again.');
                return response()->json([
                    'status' => 'error',
                ], 500);
            }
        }else{
            abort(404);
        }
    }

    public function destroy(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $user = User::findOrFail($id);
                $user->delete();

                session()->flash('success', 'Employee details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('employees.index')
                ], 200);
            } catch (\Exception $e) {
                session()->flash('error', 'Something went wrong. Please try again.');
                return response()->json([
                    'status' => 'error',
                ], 500);
            }
        }else{
            abort(404);
        }
    }
}