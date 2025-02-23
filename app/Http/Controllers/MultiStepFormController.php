<?php

namespace App\Http\Controllers;
use App\Models\UserForm;
use Illuminate\Http\Request;

class MultiStepFormController extends Controller
{

    public function showStep1()
    {
        return view('step1');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        session(['step1' => $request->all()]);

        return redirect()->route('form.step2');
    }

    public function showStep2()
    {
        return view('step2');
    }

    public function postStep2(Request $request)
    {
        $request->validate([
            'education_level' => 'required|string',
        ]);

        session(['step2' => $request->all()]);

        return redirect()->route('form.step3');
    }

    public function showStep3()
    {
        return view('step3');
    }

    public function postStep3(Request $request)
    {
        $request->validate([
            'additional_info' => 'nullable|string',
        ]);

        session(['step3' => $request->all()]);

        return redirect()->route('form.submit');
    }

    public function submitForm()
    {
        $formData = [
            'step1' => session('step1'),
            'step2' => session('step2'),
            'step3' => session('step3'),
        ];

        UserForm::create([
            'form_data' => json_encode($formData),
        ]);

        session()->forget(['step1', 'step2', 'step3']);

        return redirect()->route('form.step3')->with('success', 'The data was saved successfully');
    }
}
