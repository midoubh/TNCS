<x-auth-layout>
    @section('content')
  
    
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        
                
       




        <div class="col-md-4 col-sm-10 col-xs-11 center-col login-box">
                        <!-- form title  -->
                        <h3 class="text-center mb-4">{{ __('Have an account?') }}</h3>
                        <!-- end form title  -->
                        <!-- form sub title  -->
                        <!-- end form sub title  -->
                        <div class="separator-line bg-black no-margin-lr margin-ten"></div>
                        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
           
                            <div class="form-group no-margin-bottom">
                                <!-- label  -->
                                <label for="username" class="text-uppercase">Username</label>
                                <!-- end label  -->
                                <!-- input  -->
                                <input id="email" class="form-control rounded-left" type="email" name="email" :value="old('email')"  required autofocus>
                                <!-- end input  -->
                            </div>
                            <div class="form-group no-margin-bottom">
                                <!-- label  -->
                                <label for="password" class="text-uppercase">Password</label>
                                <!-- end label  -->
                                <!-- input  -->
                                <input id="password" class="form-control rounded-left" type="password" name="password"   autocomplete="current-password" >
                                <!-- end input  -->
                            </div>
                            <div class="checkbox margin-five">
                                <!-- checkbox  -->
                                <label><input type="checkbox"> Remember me</label>
                                <!-- end checkbox  -->
                            </div>
                            <div class="w-50 text-md-right">
                                        
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                            <!-- button  -->
                            <button class="btn btn-black no-margin-bottom btn-small btn-round no-margin-top" type="submit">{{__('log in')}}</button>
                            <!-- end button  -->
                        </form>
                    </div>
              



	    
    @endsection
</x-auth-layout>
