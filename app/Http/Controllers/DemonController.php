<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemonRequest;
use App\Models\Demon;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DemonController extends Controller
{
    public function home(): View
    {
        $viewData = [
            'title' => 'demons - Home',
            'subtitle' => 'select an option',
        ];

        return view('demon.home')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [
            'title' => 'Register demon',
            'subtitle' => 'Register form',
        ];

        return view('demon.create')->with('viewData', $viewData);
    }

    public function store(StoreDemonRequest $request): RedirectResponse
    {
        Demon::create($request->only('name', 'blood_amount', 'hierarchy'));

        return redirect()->route('demon.home');
    }

    public function index(): View
    {
        $viewData = [
            'title' => 'Demons - Index',
            'subtitle' => 'Demons ordered by blood amount',

            'demons' => Demon::orderBy('id', 'desc')->get(),
        ];

        return view('demon.index')->with('viewData', $viewData);
    }

    public function stats(): View
    {
        $viewData = [
            'title' => 'Estatistics - Demons',
            'subtitle' => 'Demons statistics',

            'counts' => [
                'rey' => Demon::where('hierarchy', 'rey')->count(),
                'luna' => Demon::where('hierarchy', 'luna')->count(),
                'común' => Demon::where('hierarchy', 'común')->count(),
            ],

            'maxBlood' => Demon::max('blood_amount'),
        ];

        return view('demon.stats')->with('viewData', $viewData);
    }
}
