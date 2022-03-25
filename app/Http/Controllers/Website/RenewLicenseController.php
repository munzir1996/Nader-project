<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\driv_licens;
use Illuminate\Support\Facades\Session;

class RenewLicenseController extends Controller
{
    public function search(Request $request)
    {
        $driv_licens = driv_licens::where('driv_no', $request->driv_no)->first();
        if (empty($driv_licens)) {
            return view('website.error-data');
        }

        return view('website.renew-license-data', [
            'driv_licens' => $driv_licens
        ]);
    }

    public function update(Request $request, driv_licens $driv_licens)
    {
        if ($driv_licens->receipt_number == null) {
            session()->flash('error', 'لم يتم دفع الرسوم');
            return view('website.renew-license-data', [
                'driv_licens' => $driv_licens
            ]);
        }

        $driv_licens->update([
            'adress' => $request->adress,
            'phone' => $request->phone,
            'job' => $request->job,
            'personal_state' => $request->personal_state,
        ]);

        session()->flash('Add', 'تم تعديل البيانات بنجاح');

        return view('website.renew-license-data', [
            'driv_licens' => $driv_licens
        ]);
    }

    public function lost(Request $request)
    {
        $driv_licens = driv_licens::where('report_number', $request->report_number)->first();
        if ($driv_licens == null) {
            session()->flash('error', 'لا يوجد بلاغ');
            return view('website.error-data');
        }

        return view('website.lost-license-data', [
            'driv_licens' => $driv_licens
        ]);
    }
}
