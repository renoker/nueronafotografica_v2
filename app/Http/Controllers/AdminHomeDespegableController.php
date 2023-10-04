<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminHomeDespegableRequest;
use App\Http\Requests\UpdateAdminHomeDespegableRequest;
use App\Models\AdminHomeDespegable;

class AdminHomeDespegableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = AdminHomeDespegable::all();
        return view('backoffice.home.desplegable.index', [
            'list' => $row
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminHomeDespegableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminHomeDespegable $adminHomeDespegable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminHomeDespegable $adminHomeDespegable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminHomeDespegableRequest $request, AdminHomeDespegable $adminHomeDespegable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminHomeDespegable $adminHomeDespegable)
    {
        //
    }
}
