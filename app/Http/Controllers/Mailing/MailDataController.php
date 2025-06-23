<?php

namespace App\Http\Controllers\Mailing;

use App\Http\Controllers\Controller;
use App\Models\Mailing\MailData;

class MailDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailData = MailData::all();
        return view('mailData.index', ['mailData' => $mailData]);
    }
}
