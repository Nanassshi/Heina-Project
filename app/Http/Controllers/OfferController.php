<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function addOffer(Request $request)
    {
        $userId = auth()->user()->getAuthIdentifier();
        $offer_message = $request->message;
        $offer_subject = $request->subject;
        $offer_contact = $request->contact;
        $offers = new Offer();
        $offers->user_id = $userId;
        $offers->subject = $offer_subject;
        $offers->message = $offer_message;
        $offers->contact = $offer_contact;
        $offers->save();
        return redirect()->intended('/partnership');
    }
}
