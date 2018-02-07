<?php

namespace App\Http\Controllers;

use App\RegistrationForm;
use App\RegistrationFormThree;
use App\RegistrationFormTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $rf = json_decode($request->form_one, true);
        $registrationForm = new RegistrationForm();
        $registrationForm->fill($rf);

        $rf2 = json_decode($request->form_two, true);
        $registrationFormTwo = new RegistrationFormTwo();
        $registrationFormTwo->fill($rf2);

        $rf3 = json_decode($request->form_three, true);
        $registrationFormThree = new RegistrationFormThree();
        $registrationFormThree->fill($rf3);

        $path = public_path();

        $img_base64 = $registrationFormTwo->signatureString;
        file_put_contents($path . '/signatures/' . uniqid() . '.png', base64_decode($img_base64));

        $img_base64 = $registrationFormThree->signatureString;
        file_put_contents($path . '/signatures/' . uniqid() . '.png', base64_decode($img_base64));

        File::put(public_path() . '/log.txt', json_encode($request->all()));

        $response = array();
        $response['success'] = true;

        return response()->json($response);
    }
}
