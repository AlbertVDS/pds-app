<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use App\Models\MailingGroup;
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
            'pageTitle' => __('Mailings'),
            'mailings' => $mailings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mailing.create-edit', [
            'pageTitle' => __('Create Mailing'),
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

        return redirect()->route('mailings.index')->with('success', __('Mailing created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mailing $mailing)
    {
        return view('mailing.create-edit', [
            'pageTitle' => __('Edit Mailing'),
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

        return redirect()->route('mailings.index')->with('success', __('Mailing updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mailing $mailing)
    {
        $mailing->delete();
        return redirect()->route('mailings.index')->with('success', __('Mailing deleted successfully.'));
    }
}
