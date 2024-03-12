<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'services' => ['required', 'in:Transportation Assistance,In-Home Care,Accommodation Support,Support Coordination,Daily Tasks Assistance,Social Engagement Programs'],
            'phone' => ['required', 'string', 'max:15'],
            'appointmentDate' => ['required', 'date', 'date_format:Y-m-d'],
            'appointmentTime' => ['required', 'date_format:H:i'],
            'message' => ['required', 'string', 'max:65535'],

        ];
    }
}
