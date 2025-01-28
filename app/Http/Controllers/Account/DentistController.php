<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\TreatmentPlan;
use Illuminate\Http\Request;

class DentistController extends DashboardController
{
    /**
     * Get a  given dentist treatment plans
     */
    public function getTreatmentPlans(Request $request)
    {
        $treatmentPlans = collect([]);
        if (principal()->isDentist()) {
            $treatmentPlans = principal()->treatmentPlans;
        }
        return view('account.dentist.plans.index', [
            'plans' => $treatmentPlans,
        ]);
    }

    public function getPatients(Request $request)
    {
        $patients = collect([]);
        if (principal()->isDentist()) {
            $treatmentPlans = principal()->treatmentPlans;
            $patients = $treatmentPlans->map(function($plan){
                return $plan->patient;
            });
        }
        return view('account.dentist.patients.index', [
            'patients' => $patients,
        ]);
    }
}
