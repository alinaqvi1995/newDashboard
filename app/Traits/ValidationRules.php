<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Session;
use Stripe;
use App\Models\User;
use App\Models\UserDetails;

trait ValidationRules
{
    /**
     * Set slug attribute.
     *
     * @param string $value
     * @return void
     */

    public function validReport($request)
    {
        dd('ok');
        // $this->attributes['slug'] = Str::slug($image, config('roles.separator'));
        $valid = $this->validate($request, [
            'firstName' => 'required|string|max:15',
            'lastName' => 'required|string|max:25',
            'ssn' => 'string|max:9',
            'houseNumber' => 'string|max:10',
            'quadrant' => 'string|max:2',
            'streetName' => 'string|max:26',
            'streetType' => 'string',
            'city' => 'required|string|max:20',
            'state' => 'required|string|max:2',
            'zip' => 'string|max:9',
            'phone' => 'string|max:10',
            // 'pdfReportId' => 'required|mimes:pdf|max:10000',
        ]);

        return $valid;
    }


}