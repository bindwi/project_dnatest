<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller

{
    function index()
    {
        $reports = collect([
        (object)[
            'type' => 'warning',
            'tag' => 'Slightly Lower',
            'title' => 'MTHFR',
            'description' => 'A gene affecting folate metabolism, variations of which are common and can lead to elevated homocysteine levels and health issues.',
            'icon' => '<svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>',
        ],
        (object)[
            'type' => 'typical',
            'tag' => 'Typical Ability',
            'title' => 'Methylation',
            'description' => 'A biological process crucial for DNA function and repair, dependent on nutrients and enzymes. Genetic variations impact its efficiency.',
            'icon' => '<svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>',
        ],
        (object)[
            'type' => 'condition',
            'tag' => 'Condition',
            'title' => 'Allergies',
            'description' => 'A condition where the immune system reacts to substances in the environment, common and can lead to symptoms like sneezing and itching.',
            'icon' => '<svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 00-10 10v5a3 3 0 003 3h14a3 3 0 003-3v-5a10 10 0 00-10-10z"/></svg>',
        ],
    ]);

        return view('dashboard', compact('reports'));
    }
}