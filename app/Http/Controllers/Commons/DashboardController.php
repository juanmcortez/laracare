<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Http\Controllers\Commons;

use Illuminate\View\View;
use App\Models\Patients\Patient;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(): View
    {
        $startOfLastMonth = now()->subMonth()->startOfMonth()->format('Y-m-d H:i:s');
        $endOfLastMonth = now()->subMonth()->endOfMonth()->format('Y-m-d H:i:s');
        //
        $total_patients = Patient::count();
        $total_last_month = Patient::whereDate('created_at', '>=', $startOfLastMonth)
            ->whereDate('created_at', '<=', $endOfLastMonth)
            ->count();
        $total_previous = Patient::whereDate('created_at', '<', $startOfLastMonth)->count();
        $patient_percent = round((($total_last_month / $total_previous) * 100), 2);
        //
        $transactions_percent = 0;
        //
        $checks_percent = 0;
        //
        $denials_percent = 0;
        //
        $patbal_percent = 0;
        //
        $insbal_percent = 0;
        //
        $patperc_status = (($patient_percent > 0) ? 'text-success-dark' : (($patient_percent < 0) ? 'text-danger-dark' : 'text-info-dark'));
        $traperc_status = (($transactions_percent > 0) ? 'text-success-dark' : (($transactions_percent < 0) ? 'text-danger-dark' : 'text-info-dark'));
        $cheperc_status = (($checks_percent > 0) ? 'text-success-dark' : (($checks_percent < 0) ? 'text-danger-dark' : 'text-info-dark'));
        $denperc_status = (($denials_percent > 0) ? 'text-success-dark' : (($denials_percent < 0) ? 'text-danger-dark' : 'text-info-dark'));
        $patbal_status = (($patbal_percent > 0) ? 'text-success-dark' : (($patbal_percent < 0) ? 'text-danger-dark' : 'text-info-dark'));
        $insbal_status = (($insbal_percent > 0) ? 'text-success-dark' : (($insbal_percent < 0) ? 'text-danger-dark' : 'text-info-dark'));
        //
        $review = collect([
            'total_patients' => $total_patients,
            'total_last_month' => $total_last_month,
            'total_previous' => $total_previous,
            'patient_percent' => ($patient_percent >= 0) ? '+'.$patient_percent : $patient_percent,
            'patperc_status' => $patperc_status,
            'total_transactions' => 0,
            'transactions_percent' => 0,
            'traperc_status' => $traperc_status,
            'total_checks' => 0,
            'checks_percent' => 0,
            'cheperc_status' => $cheperc_status,
            'latest_patient' => Patient::latest()->first()->demographic->full_name,
            'total_denials' => 0,
            'denials_percent' => 0,
            'denperc_status' => $denperc_status,
            'total_patient_balance' => round(0, 2),
            'patbal_percent' => 0,
            'patbal_status' => $patbal_status,
            'total_insurance_balance' => round(0, 2),
            'insbal_percent' => 0,
            'insbal_status' => $insbal_status,
            'top_10_patients' => Patient::inRandomOrder()->take(10)->get(),
        ]);
        //
        return view('pages.commons.dashboard', compact('review'));
    }
}
