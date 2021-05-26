@extends('layouts.client')
@section('content')
  
      <div class="container-fluid">
      <div class="row">
            <div class="col-md-8">
            <form method="POST" action="{{ route('user.store') }}" data="{role_id: 1}">
            @csrf

            <div class="form-group">
            <div class="row">
                <label for="name" class="col-md-3">{{ __('Name') }}</label>
               <div class="col-md-6"> <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" ></div>
</div>
<div class="row">
                <label for="email" class="col-md-3">{{ __('Email') }}</label>
                <div class="col-md-6"> <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required ></div>
         </div>

         <div class="row">
                <label for="password" class="col-md-3" >{{ __('Password') }} </label>
                <div class="col-md-6"><input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password"  > </div>
            </div>

            <div class="row">
                <label for="password_confirmation" class="col-md-3" >{{ __('Confirm Password') }}</label>
                <div class="col-md-6"><input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password"> </div>
            </div>
            <div class="row">
                <label for="role" class="col-md-3" >{{ __('Role') }}  </label>
                <div class="col-md-6"><select id="role_id" x-model="role_id" class="block mt-1 w-full"  name="role_id" required >
                <option value="1">Administrateur</option>
                <option value="2">Client</option>
                <option value="3">Chef de Projet</option>
                <option value="4">Consultant</option>
                </select>
            </div>
            </div>

             </div>
            <div class="row" show="role_id==2">
                <label  for="matricule_fiscale" class="col-md-3" >{{ __('Matricule fiscale') }} </label>
                <div class="col-md-6"><input id="matricule_fiscale"  class="block mt-1 w-full" type="text" name="matricule_fiscale"  autocomplete="matricule_fiscale" ></div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <label for="terms">
                        <div class="flex items-center">
                            <checkbox name="terms" id="terms">

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </label>
                    
                    </div>
                </div>
            @endif
            <div class="form-group">
           
            <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.index') }}">
                    {{ __('Already registered?') }}
                </a>
                                

                <input type="submit" class="btn btn-info" value=" {{ __('Register') }}">
                   
            </div>
        </form>
            </div>
</div>
</div>

 @endsection 