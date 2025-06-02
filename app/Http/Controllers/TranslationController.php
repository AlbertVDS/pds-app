<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Translation;
use Illuminate\Http\Request;
use App\Pagination\TranslationPaginator;
use App\Services\OriginalTextService;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::where('code', '!=', 'en')
            ->withCount('translations')
            ->orderBy('translations_count', 'desc')
            ->orderBy('name', 'asc')
            ->paginate(30);


        return view('translations.index', [
            'pageTitle' => __('Translations'),
            'languages' => $languages,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $originalText = OriginalTextService::getOriginalText();
        $paginator = TranslationPaginator::paginate($originalText, $request);

        return view('translations.show', [
            'pageTitle' => __('Languages'),
            'originalText' => $paginator,
            'language' => Language::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('translations.edit', [
            'pageTitle' => __('Translations'),
            'translation' => Translation::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'translation' => 'required|string|min:1',
        ]);

        $translation = Translation::find($id);
        $translation->update([
            'translation' => $request->translation,
        ]);

        return redirect(route('translations.show', $translation->language_id))
            ->with('success', __('Translation updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
