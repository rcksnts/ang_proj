<?php

namespace App\Http\Controllers;

use App\RegistrationForm;
use App\RegistrationFormThree;
use App\RegistrationFormTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

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

        return $this->htmltopdfview($registrationForm);
        //return response()->json($registrationForm);
    }

    public function htmltopdfview(RegistrationForm $forms)
    {
        view()->share('form', $forms);
        $path = public_path();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdfview');
        $content = $pdf->output();
        file_put_contents($path . '/pdfs/attachment.pdf', $content);
        $email = $forms->email;

        Mail::send('view', array(), function ($message) use ($email, $pdf) {
            $message
                ->from('diverformmail@gmail.com', 'Diver For Mail')
                ->to('tanjerwin@gmail.com')
                ->attachData($pdf->output(), "attachment.pdf")
                ->subject('PDF');
        });

      //  return view('pdfview')->with('form', $forms);
        return $forms->firstName;
    }
}
