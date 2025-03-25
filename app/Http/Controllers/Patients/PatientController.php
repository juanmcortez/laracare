<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Http\Controllers\Patients;

use Illuminate\View\View;
use App\Models\Patients\Patient;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $patients = Patient::join('demographics_personals', 'personal_id', '=', 'demographics_personals.id')
            ->select('patients.*')
            ->orderBy('demographics_personals.last_name')
            ->orderBy('demographics_personals.first_name')
            ->orderBy('demographics_personals.middle_name')
            ->paginate(100);

        $last_visited = Patient::whereNotNull('last_visited')
            ->orderBy('last_visited', 'DESC')
            ->take(10)
            ->get();

        return view('pages.patients.list', compact(['patients', 'last_visited']));
    }


    /**
     * @param  Patient  $pid
     * @return View
     */
    public function show(Patient $pid): View
    {
        Patient::wherePid($pid->pid)->touch('last_visited');
        $patient = $pid;

        $last_visited = Patient::whereNotNull('last_visited')
            ->orderBy('last_visited', 'DESC')
            ->take(10)
            ->get();

        return view('pages.patients.profile', compact(['patient', 'last_visited']));
    }
}
