<x-auth-layout>
@section('content')
 
 
        <x-slot name="logo">
           
        </x-slot>



        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />
      
        
        <form method="POST" action="{{ route('password.confirm') }}" class="login-form">
            @csrf
            <div class="form-group d-flex">
                <x-jet-input id="password" class="form-control rounded-left" type="password" name="password" placeholder="{{ __('Password') }}"  autocomplete="current-password" />
            </div>
          
                        <div class="form-group">
                                    <x-jet-button class="btn btn-primary rounded submit p-3 px-5">
                                    {{ __('Confirm') }}
                                </x-jet-button>
                                
                            
                                </div>
        </form>
   
    @endsection
</x-auth-layout>
