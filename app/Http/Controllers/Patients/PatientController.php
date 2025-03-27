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
use Illuminate\Support\Carbon;
use App\Models\Patients\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Patients\PatientUpdateRequest;

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


    /**
     * @param  Patient  $pid
     * @return View
     */
    public function edit(Patient $pid): View
    {
        $patient = $pid;

        $last_visited = Patient::whereNotNull('last_visited')
            ->orderBy('last_visited', 'DESC')
            ->take(10)
            ->get();

        return view('pages.patients.profile-edit', compact(['patient', 'last_visited']));
    }


    /**
     * @param  Patient  $pid
     * @param  PatientUpdateRequest  $request
     * @return RedirectResponse
     */
    public function update(Patient $pid, PatientUpdateRequest $request): RedirectResponse
    {
        $patientData = $request->except('demographic');
        $dmgrphcData = \Arr::except($request->input('demographic', []), 'address');
        $addressData = $request->input('demographic.address', []);
        $patient = $pid;

        // Correct formatting
        $dmgrphcData['date_of_birth'] = Carbon::parse($dmgrphcData['date_of_birth'])->format('Y-m-d');

        // Update / Create the models
        $patient->update($patientData);
        $patient->demographic()->update($dmgrphcData);
        $patient->demographic->address()->update($addressData);

        // dd($patient, $patient->demographic, $dmgrphcData, $patient->demographic->address, $addressData);

        return redirect(route('patients.profile', ['pid' => $pid->pid]))
            ->with('success', __('Patient updated successfully.'));
    }
}
