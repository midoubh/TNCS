@extends('layouts.admin')
@section('content')
  
<div class="blog-listing blog-listing-classic wow fadeIn">
      <div class="row">
            <div class="col-md-12 col-sm-12  ">
            
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('user.update', $user->id) }}"  >
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT">
            
            <div class="form-group">
            
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
            </div>



<div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
            </div>
     

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
            <x-jet-label for="role" value="{{ __('Role') }}" />
            @if($user->role_id==1)                      
            <x-jet-input id="role_id" class="block mt-1 w-full" type="text" name="role_id" value="{{ __('Administrateur') }}" required autofocus autocomplete="role_id" />
            @endif
            @if($user->role_id==2)                      
            <x-jet-input id="role_id" class="block mt-1 w-full" type="text" name="role_id" value="{{ __('Client') }}" required autofocus autocomplete="role_id" />
            @endif
            @if($user->role_id==3)                      
            <x-jet-input id="role_id" class="block mt-1 w-full" type="text" name="role_id" value="{{ __('Chef de Projet') }}" required autofocus autocomplete="role_id" />
            @endif
            @if($user->role_id==4)                      
            <x-jet-input id="role_id" class="block mt-1 w-full" type="text" name="role_id" value="{{ __('Consultant') }}" required autofocus autocomplete="role_id" />
            @endif          
                <x-jet-label for="role" value="{{ __('Please select') }}" />
                <select id="role_id" x-model="role_id" class="block mt-1 w-full"  name="role_id"  required >
                <option value="1">Administrateur</option>
                <option value="2">Client</option>
                <option value="3">Chef de Projet</option>
                <option value="4">Consultant</option>
                </select>
            </div>

             </div>
            
             <div class="mt-4" >

                <x-jet-label  for="matricule_fiscale" value="{{ __('Matricule fiscale') }}" />
                <x-jet-input id="matricule_fiscale"  class="block mt-1 w-full" type="text" name="matricule_fiscale" value="{{ $user->Matricule_Fiscale }}"  autocomplete="matricule_fiscale" />
                    
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