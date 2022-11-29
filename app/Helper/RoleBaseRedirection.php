<?php

class RoleBaseRedirection {
    public static function   roleBaseRedirection(User $user) {
        if($user->role[0]->name == 'entreprise'){
            return redirect()->route('tax');
        }
    }
}
