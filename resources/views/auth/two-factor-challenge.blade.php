<x-auth-layout>
@section('content')
   
        <x-slot name="logo">
          
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
           
            <div class="form-group"> 
                <x-jet-input id="email" class="form-control rounded-left" type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" required autofocus />
            </div>
             
             <div class="form-group d-flex">
                <x-jet-input id="password" class="form-control rounded-left" type="password" name="password" placeholder="{{ __('Password') }}"  autocomplete="current-password" />
            </div>
                    <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">{{ __('Remember me') }}
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                                </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
	                  </div>
                      <div class="form-group">
                                    <x-jet-button class="btn btn-primary rounded submit p-3 px-5">
                                    {{ __('Log in') }}
                                </x-jet-button>
                            
                                </div>
            
                                
	
            </div>
        </form>
   
            <form method="POST" action="{{ route('two-factor.login') }}" class="login-form">
                @csrf
               
                <div class="form-group" x-show="! recovery"> 
                <x-jet-input id="code" class="form-control rounded-left" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code"/>
            </div>
            
           <div class="form-group" x-show="recovery"> 
                <x-jet-input id="recovery_code" class="form-control rounded-left" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code"/>
            </div>
            
               
                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    
    @endsection
</x-auth-layout>
