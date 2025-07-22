<?php

namespace App\Http\Controllers;

use App\Models\Language\Language;
use App\Models\Language\Translation;
use Illuminate\Http\Request;
use App\Pagination\TranslationPaginator;
use App\Services\OriginalTextService;

class TranslationController extends Controller
{
    private $originalTextService;
    private $translationPaginator;

    /**
     * Create a new controller instance.
     */
    public function __construct(OriginalTextService $originalTextService, TranslationPaginator $translationPaginator)
    {
        $this->originalTextService = $originalTextService;
        $this->translationPaginator = $translationPaginator;
    }

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
            'pageTitle' => translate('Translations'),
            'languages' => $languages,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        $translations = Translation::where('language_id', $language->id)
            ->with('originalText')
            ->orderBy('created_at', 'desc')
            ->paginate(30);

        return view('translations.show', [
            'pageTitle' => translate($language->name),
            'translations' => $translations,
            'language' => $language
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Translation $translation)
    {
        return view('translations.edit', [
            'pageTitle' => translate('Translations') . ': ' . translate($translation->language->name),
            'translation' => $translation,
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
            ->with('success', translate('Translation updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
