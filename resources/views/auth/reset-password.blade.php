<x-auth-layout>
@section('content')
   
        <x-slot name="logo">
            
        </x-slot>

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
   
        <form method="POST" action="{{ route('password.update') }}" class="login-form">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group"> 
                <x-jet-input id="email" class="form-control rounded-left" type="email" name="email" :value="old('email', $request->email)" placeholder="{{ __('Email') }}" required autofocus />
            </div>
               
            <div class="form-group d-flex">
                <x-jet-input id="password" class="form-control rounded-left" type="password" name="password" placeholder="{{ __('Password') }}"  autocomplete="new-password" />
            </div>

            <div class="form-group d-flex">
                <x-jet-input id="password_confirmation" class="form-control rounded-left" type="password" name="password_confirmation" placeholder="{{ __('New Password') }}"  autocomplete="new-password" />
            </div>

                          <div class="form-group">
                                        <x-jet-button class="btn btn-primary rounded submit p-3 px-5">
                                        {{ __('Reset Password') }}
                                    </x-jet-button>
                                
                                </div>
            
        </form>
   
    @endsection
</x-auth-layout>
