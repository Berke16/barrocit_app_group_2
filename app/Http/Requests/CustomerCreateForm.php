<?php

namespace App\Http\Requests;

use App\Customer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CustomerCreateForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::User()->type == 'sales' || Auth::User()->type == 'admin')
        {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name'              => 'required|string',
            'name'                      => 'nullable|string',
            'insertion'                 => 'nullable|string',
            'lastname'                  => 'nullable|string',
            'email'                     => 'nullable|email',
            'telephonenumber'           => 'required|numeric',
            'telephonenumber2'          => 'nullable|numeric',
            'fax_number'                => 'nullable|numeric',
            'street'                    => 'nullable|string',
            'zipcode'                   => 'nullable|string',
            'housenumber'               => 'nullable|numeric',
            'residence'                 => 'nullable|string',
            'street2'                   => 'nullable|string',
            'zipcode2'                  => 'nullable|string',
            'housenumber2'              => 'nullable|string',
            'residence2'                => 'nullable|string',
            'banknumber'                => 'nullable|string',
            'vat_code'                  => 'nullable|string',
        ];
    }
}
