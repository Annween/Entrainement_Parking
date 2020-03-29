<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return 'Formulaire pour modifier';
    }
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        return 'Ok on a modifié !';
    }
}
