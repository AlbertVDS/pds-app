<?php

namespace App\Http\Controllers\Mailing;

use App\Http\Controllers\Controller;
use App\Models\Mailing\Mailing;
use App\Models\Mailing\MailingGroup;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailings = Mailing::paginate(30);
        return view('mailing.index', [
            'pageTitle' => translate('Mailings'),
            'mailings' => $mailings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mailing.create-edit', [
            'pageTitle' => translate('Create Mailing'),
            'mailingGroups' => MailingGroup::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'mailing_group_id' => 'required|exists:mailing_groups,id',
            'body' => 'required|string',
            'schedule' => 'required'
        ]);

        Mailing::create($request->all());
        noty()->success(translate('Mailing created successfully.'));
        return redirect()->route('mailings.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mailing $mailing)
    {
        return view('mailing.create-edit', [
            'pageTitle' => translate('Edit Mailing'),
            'mailing' => $mailing,
            'mailings' => Mailing::all(),
            'mailingGroups' => MailingGroup::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mailing $mailing)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'mailing_group_id' => 'required|exists:mailing_groups,id',
            'body' => 'required|string',
            'schedule' => 'required'
        ]);

        $mailing->update($request->all());
        noty()->success(translate('Mailing updated successfully.'));
        return redirect()->route('mailings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mailing $mailing)
    {
        $mailing->delete();
        noty()->success(translate('Mailing deleted successfully.'));
        return redirect()->route('mailings.index');
    }
}
