<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\Renungan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get all renungan
        $renungan = DB::table('renungan')
            ->when($request->input('title'), function ($query, $title) {
                return $query->where('title', 'like', '%' . $title . '%');
            })
            ->select('id', 'title', 'bacaan', 'ayat_kunci', 'kalimat_prinsip', 'kalimat_renung', 'date_renungan', 'content_renungan', 'doa', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.app.list-renungan', compact('renungan'));
    }

    public function create()
    {
        return view('pages.app.tambah-renungan');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'roles' => $request['roles'],
            'phone' => $request['phone'],
            'address' => $request['address'],
        ]);

        return redirect(route('user.index'))->with('success', 'New User Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the renungan by ID
        $renungan = Renungan::all();
        return view('list-renungan')->with('renungan', $renungan);

        if (!$renungan) {
            return response()->json([
                'status' => 'error',
                'message' => 'Renungan not found'
            ], 404);
        }

        // Return JSON response
        return response()->json([
            'status' => 'success',
            'data' => $renungan
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validated();
        $renungan->update($validate);
        return redirect()->route('app.list-renungan')->with('success', 'Edit User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find renungan by ID
        $renungan->delete();
        return redirect()->route('app.list-renungan')->with('success', 'Delete User Successfully');

    }
}
