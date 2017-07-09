<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Roles extends Controller
{
      /**
     * create a new role
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request) {
        $role = new Roles;

        $role->name = $request->input('name');
        $role->description = $request->input('description');
        $employee->created_date = new DateTime();
        $role->modified_date = new DateTime();
        $role->status = "ACTIVE";
        $role->save();
        return 'Role successfully created with id ' . $role->id;
    }

}
