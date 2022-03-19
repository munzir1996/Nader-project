<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\passport;

class RenewPassportController extends Controller
{
    public function search(Request $request)
    {
        $passport = passport::where('passport_no', $request->passport_no)->first();
        if (empty($passport)) {
            return view('website.error-data');
        }
        return view('website.renew-passport-data', [
            'passport' => $passport
        ]);
    }

    public function update(Request $request, passport $passport)
    {
        $passport->update([
            'adress' => $request->adress,
            'phone' => $request->phone,
            'job' => $request->job,
            'personal_state' => $request->personal_state,
        ]);

        return view('website.renew-passport-data', [
            'passport' => $passport
        ]);
    }

}
