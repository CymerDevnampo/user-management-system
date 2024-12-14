<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailsController extends Controller
{
    public function showAllUsersDetails()
    {
        $users = UserDetails::where('user_id', Auth::id())->paginate(5);
        return view('pages.index', compact('users'));
    }

    public function viewAddUserPage()
    {
        return view('pages.add');
    }
    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'contact_no' => 'required|string|digits:11',
        ]);

        // Ensure user_id is set before creating UserDetails
        $validatedData['user_id'] = Auth::id();

        // Check if the user details already exist for the authenticated user
        $existingUserDetails = UserDetails::where('user_id', Auth::id())
            ->where('first_name', $validatedData['first_name'])
            ->where('last_name', $validatedData['last_name'])
            ->first();

        if ($existingUserDetails) {
            return back()->withInput()->withErrors([
                'first_name' => 'A user with this first name already exists for your account.',
                'last_name' => 'A user with this last name already exists for your account.'
            ]);
        }


        // Create UserDetails
        UserDetails::create($validatedData);

        // Redirect to appropriate route (replace 'home' with your actual route name)
        return redirect()->route('home')->with('success', 'Contact created successfully.');
    }

    public function viewEditUserPage($id)
    {
        $users = UserDetails::where('user_id', Auth::id())->findOrFail($id);
        return view('pages.edit', compact('users'));
    }

    public function updateUser(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'contact_no' => 'required|string|digits:11',
        ]);

        // Check if the user details already exist for the authenticated user
        $existingUserDetails = UserDetails::where('user_id', Auth::id())
            ->where('first_name', $validatedData['first_name'])
            ->where('last_name', $validatedData['last_name'])
            ->where('id', '!=', $id)
            ->first();

        if ($existingUserDetails) {
            return back()->withInput()->withErrors([
                'first_name' => 'A user with this first name already exists for your account.',
                'last_name' => 'A user with this last name already exists for your account.'
            ]);
        }

        $user = UserDetails::where('user_id', Auth::id())->findOrFail($id);
        $user->update($validatedData);
        return redirect()->route('home')->with('success', 'Contact updated successfully.');

    }

}
