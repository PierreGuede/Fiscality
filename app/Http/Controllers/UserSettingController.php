<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChangePasswordRequest;
use App\Http\Requests\StorePersonalInformationRequest;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserSettingController extends Controller
{

    public function personnalInformation()
    {
        $user= auth()->user();
        return view('auth.user-setting.personnal-information', compact('user'));
    }

    public function changePassword()
    {
        $user= auth()->user();
        return view('auth.user-setting.change-password', compact('user'));
    }


    public function notification()
    {
        $user= auth()->user();
        return view('auth.user-setting.notification', compact('user'));
    }

    public function storePersonnalInformation( StorePersonalInformationRequest $request )
    {

        $user= auth()->user();
        $user->fill($request->validated());

        $user->save();

        notify()->success('Mot de passe modifié avec succès');

        return redirect()->back();
    }

    public function storeChangePassword( StoreChangePasswordRequest $request )
    {
        $user= auth()->user();

        if (Hash::check($request->old_password, $user->password)) {
            $hashed = Hash::make($request->input('new_password'));
            $user->password = $hashed;
            $user->save();

            notify()->success('Mot de passe modifié avec succès');
        } else {
            notify()->error('Veuillez vérifiez votre mot de passe!');
        }


        return redirect()->back();

    }


    public function storeNotification(Request $request)
    {

        $user = auth()->user();

        $email_notification =  $request->input('email_notification') == 'email' ? true : false;
        $sms_notification =  $request->input('sms_notification') == 'sms' ? true : false ;
        $whatsapp_notification =  $request->input('whatsapp_notification') == 'whatssapp' ? true : false ;

        $user_setting =  UserSetting::updateOrCreate(['user_id' => $user->id], [
                'email_notification' => $email_notification,
                'sms_notification' => $sms_notification,
                'whatsapp_notification' => $whatsapp_notification,
        ]);

        notify()->success('Notifications ont été modifiées avec succès');

        return redirect()->back();
    }

}
