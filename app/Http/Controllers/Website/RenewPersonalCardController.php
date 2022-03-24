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
        if ($invo->receipt_number == null) {
            session()->flash('error', 'لم يتم دفع الرسوم');
            return view('website.renew-personal-card-data', [
                'invo' => $invo
            ]);
        }

        $invo->update([
            'adress' => $request->adress,
            'phone' => $request->phone,
            'job' => $request->job,
            'personal_state' => $request->personal_state,
        ]);

        session()->flash('success', 'تم تعديل البيانات بنجاح');

        return view('website.renew-personal-card-data', [
            'invo' => $invo
        ]);
    }

    public function lost(Request $request)
    {
        $invo = invo::where('report_number', $request->report_number)->first();
        if ($invo == null) {
            session()->flash('error', 'لا يوجد بلاغ');
            return view('website.error-data');
        }

        return view('website.lost-license-data', [
            'invo' => $invo
        ]);
    }

}
