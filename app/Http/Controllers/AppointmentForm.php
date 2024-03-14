<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AppointmentFormRequest;

class AppointmentForm extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AppointmentFormRequest $request)
    {
        $formValidationSuccess = false;
        if ($request->validated());
            $formValidationSuccess = true;
            return view('welcome', compact('formValidationSuccess'));

    }
}
