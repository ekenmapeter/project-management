<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        <x-auth-card>
        <x-slot name="logo">
        <h2>Add New Users</h2>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('') }}">
            @csrf
            <div>
                <div class="row">
                    <div class="col-2">
                          <x-label for="name" :value="__('Name')" />
                    </div>

                    <div class="col-10">
                       <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> 
                    </div>
                    
                    </div>
              

                
            </div>

            <div>

            <div class="row">
                    <div class="col-2">
                          <x-label for="division" :value="__('Division')" />
                    </div>

                    <div class="col-10">
                       <x-input id="division" class="block mt-1 w-full" type="text" name="division" :value="old('division')" required autofocus />
                    </div>
                    
                    </div>
              

                
            </div>

            <div>

            <div class="row">
                    <div class="col-2">
                         <x-label for="statelocated" :value="__('State Located')" />
                    </div>

                    <div class="col-10">
                        <x-input id="statelocated" class="block mt-1 w-full" type="text" name="statelocated" :value="old('statelocated')" required autofocus />
                    </div>
                    
                    </div>
              

                
            </div>

            <div>

            <div class="row">
                    <div class="col-2">
                          <x-label for="email" :value="__('Email')" />
                    </div>

                    <div class="col-10">
                       <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    
                    </div>
              

                
            </div>

            <div>

            <div class="row">
                    <div class="col-2">
                          <x-label for="role" :value="__('Role')" />
                    </div>

                    <div class="col-10">
                       <x-input id="role" class="block mt-1 w-full" type="text" name="role" value="Super Admin" required readonly />
                    </div>
                    
                    </div>
              

                
            </div>

            <div>

            <div class="row">
                    <div class="col-2">
                          <x-label for="password" :value="__('Password')" />
                    </div>

                    <div class="col-10">
                       <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                    </div>
                    
                    </div>
              

                
            </div>

          


       <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-3">
                    {{ __('Add New User') }}
                </x-button>
            </div>

           
           

          
        </form>
    </x-auth-card>
        </div>
    </div>
</x-app-layout>