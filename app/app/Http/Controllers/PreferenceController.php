<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;    

class PreferenceController extends Controller
{
    public function index()
    {
        $theme = session('theme', 'light');
        $locale = session('locale', 'fr');

        return view('preferences.index', compact('theme', 'locale'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'theme' => ['required', 'in:light,dark'],
            'locale' => ['required', 'in:fr,en'],
        ]);

        session()->put('theme', $validated['theme']);
        session()->put('locale', $validated['locale']);

        return redirect()
            ->route('preferences.index')
            ->with('success', 'Préférences enregistrées.');
    }
}
