<?php

namespace App\Http\Requests;

use App\Customer;
use Illuminate\Foundation\Http\FormRequest;

class CustomerEditSalesForm extends FormRequest
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
        ];
    }

    public function persist($customer)
    {
        $customer->name                 = $this->company_name;
        $customer->street               = $this->street;
        $customer->housenumber          = $this->housenumber;
        $customer->zip_code             = $this->zipcode;
        $customer->residence            = $this->residence;
        $customer->street2              = $this->street2;
        $customer->housenumber2         = $this->housenumber2;
        $customer->zip_code2            = $this->zipcode2;
        $customer->residence2           = $this->residence2;
        $customer->cp_name              = $this->name;
        $customer->cp_lastname          = $this->lastname;
        $customer->cp_insertion         = $this->insertion;
        $customer->tele                 = $this->telephonenumber;
        $customer->tele2                = $this->telephonenumber2;
        $customer->fax_number           = $this->fax_number;
        $customer->mail                 = $this->email;
        $customer->save();
    }
}
