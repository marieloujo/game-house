<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ["required", "string", "min:4", "alpha_dash", 'max:255', 'unique:users'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['nullable', 'numeric', 'unique:users'],
            'sexe' => ['required'],
            'birthdate' => ['nullable', 'date', 'date_format:Y-m-d', "before:".Carbon::now()->subYears(17)->format('Y-m-d') ],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : ''
        ])->validate();

        //dd($input);

        $user = new User();
        $user->fill($input);
        //dd($input);

        $user->password = Hash::make($input['password']);

        if (isset($input['photo'])) {
            //$user->updateProfilePhoto($input->file('photo'));
        }

        //dd($user);
        $user->save();
        return $user;
    }
}
