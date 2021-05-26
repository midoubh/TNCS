<x-auth-layout>
@section('content')
  
        <x-slot name="logo">
           
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />
       
   
        <form method="POST" action="{{ route('password.email') }}" class="login-form">
            @csrf

            <div class="form-group"> 
                <x-jet-input id="email" class="form-control rounded-left" type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" required autofocus />
            </div>
            <div class="form-group">
                                    <x-jet-button class="btn btn-primary rounded submit p-3 px-5">
                                    {{ __('Email Password Reset Link') }}
                                </x-jet-button>
                            
                                </div>
        
            
        </form>

    @endsection
</x-auth-layout>
