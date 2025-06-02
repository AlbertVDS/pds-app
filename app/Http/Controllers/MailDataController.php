<?php

namespace App\Http\Controllers;

use App\Models\MailData;

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
