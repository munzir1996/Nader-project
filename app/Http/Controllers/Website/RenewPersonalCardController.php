<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\invo;
use Illuminate\Http\Request;

class RenewPersonalCardController extends Controller
{
    public function search(Request $request)
    {
        $invo = invo::where('card_no', $request->card_no)->first();
        if (empty($invo)) {
            return view('website.error-data');
        }
        return view('website.renew-personal-card-data', [
            'invo' => $invo
        ]);
    }

    public function update(Request $request, invo $invo)
    {
        $invo->update([
            'adress' => $request->adress,
            'phone' => $request->phone,
            'job' => $request->job,
            'personal_state' => $request->personal_state,
        ]);

        return view('website.renew-personal-card-data', [
            'invo' => $invo
        ]);
    }

}
