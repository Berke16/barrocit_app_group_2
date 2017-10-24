<?php

namespace App\Http\Requests;

use App\Customer;
use Illuminate\Foundation\Http\FormRequest;

class CustomerEditDevelopmentForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'fax_number'                => 'nullable|numeric',
            'street'                    => 'nullable|string',
            'zipcode'                   => 'nullable|string',
            'housenumber'               => 'nullable|numeric',
            'residence'                 => 'nullable|string',
        ];
    }

    public function persist($customer)
    {

        $customer->name                 = $this->company_name;
        $customer->street               = $this->street;
        $customer->housenumber          = $this->housenumber;
        $customer->zip_code             = $this->zipcode;
        $customer->residence            = $this->residence;
        $customer->cp_name              = $this->name;
        $customer->cp_lastname          = $this->lastname;
        $customer->cp_insertion         = $this->insertion;
        $customer->tele                 = $this->telephonenumber;
        $customer->fax_number           = $this->fax_number;
        $customer->mail                 = $this->email;
        $customer->save();
    }
}
