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
        // dd('ok');
        $valid = $this->validate($request, [
            'firstName' => 'required|string|max:15',
            'lastName' => 'required|string|max:25',
            'ssn' => 'nullable|string|max:9',
            'houseNumber' => 'nullable|string|max:10',
            'quadrant' => 'nullable|string|max:2',
            'streetName' => 'nullable|string|max:26',
            'streetType' => 'nullable|string',
            'city' => 'required|string|max:20',
            'state' => 'required|string|max:2',
            'zip' => 'nullable|string|max:9',
            'phone' => 'nullable|string|max:10',
            // 'pdfReportId' => 'required|mimes:pdf|max:10000',
        ]);

        return $valid;
    }


}
