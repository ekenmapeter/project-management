
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
<div>
    <hr>
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <h2>Add New Project</h2>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <!-- Session Status -->
        <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{!! Session::get('message') !!}</p>
    @endif
        <form method="POST" action="/addnewproject">
            @csrf
         
                <div class="row">
                    <div class="col-2">
                          <x-label for="name" :value="__('Title of Project')" />
                    </div>

                    <div class="col-10">
                       <x-input id="projecttitle" class="block mt-1 w-full" type="text" name="projecttitle" :value="old('projecttitle')" required autofocus /> 
                    </div>
                    
                    </div>


            <div class="row">
                    <div class="col-2">
                          <x-label for="awardeddate" :value="__('Awarded date')" />
                    </div>

                    <div class="col-10">
               <x-input id="awardeddate" class="block mt-1 w-full" type="text" name="awardeddate" :value="old('awardeddate')" required autofocus />
                    </div>
                    
                    </div>

            <div class="row">
                    <div class="col-2">
                         <x-label for="statelocated" :value="__('State Located')" />
                    </div>

                    <div class="col-10">
                        <x-input id="statelocated" class="block mt-1 w-full" type="text" name="statelocated" :value="old('statelocated')" required autofocus />
                    </div>
                    
                    </div>

            <div class="row">
                    <div class="col-2">
                         <x-label for="contractor" :value="__('Contractor')" />
                    </div>

                    <div class="col-10">
                        <x-input id="contractor" class="block mt-1 w-full" type="text" name="contractor" :value="old('contractor')" required autofocus />
                    </div>
                    
                    </div>
              

        

            <div class="row">
                    <div class="col-2">
                          <x-label for="supervisor" :value="__('Supervisor')" />
                    </div>

                    <div class="col-10">
                       <x-input id="supervisor" class="block mt-1 w-full" type="text" name="supervisor" :value="old('supervisor')" required autofocus />
                    </div>
                    
                    </div>


            <div class="row">
                    <div class="col-2">
                          <x-label for="division" :value="__('Division')" />
                    </div>

                    <div class="col-10">
                       <x-input id="division" class="block mt-1 w-full" type="text" name="division" :value="old('division')" required autofocus />
                    </div>
                    
                    </div>

 
            <div class="row">
                    <div class="col-2">
                          <x-label for="coordinator" :value="__('Coordinator')" />
                    </div>

                    <div class="col-10">
                       <x-input id="coordinator" class="block mt-1 w-full"
                                type="text"
                                name="coordinator" 
                                :value="old('coordinator')"
                                required autofocus />
                    </div>
                    
                    </div>

            <!-- Confirm Password -->
                <div class="row">
                    <div class="col-2">
                        <x-label for="state" :value="__('State')" />
                    </div>
                    <div class="col-10">
                        <x-input id="state" class="block mt-1 w-full"
                                        type="text"
                                        name="state" required autofocus />
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                          <x-label for="objectives" :value="__('Objectives')" />
                    </div>

                    <div class="col-10">
                       <textarea  id="objectives" class="block mt-1 w-full" type="text" name="objectives" :value="old('objectives')" required autofocus> </textarea > 
                    </div>
                    
                    </div>

                    <div class="row">
                    <div class="col-2">
                          <x-label for="percentcompleted" :value="__('Percentage Completed')" />
                    </div>

                    <div class="col-10">
                       <x-input id="percentcompleted" class="block mt-1 w-full" type="text" name="percentcompleted" :value="old('percentcompleted')" required autofocus /> 
                    </div>
                    
                    </div>


                    <div class="row">
                    <div class="col-2">
                          <x-label for="retention" :value="__('Retention')" />
                    </div>

                    <div class="col-10">
                       <x-input id="retention" class="block mt-1 w-full" type="text" name="retention" :value="old('retention')" required autofocus /> 
                    </div>
                    
                    </div>


                    <div class="row">
                    <div class="col-2">
                          <x-label for="completiondate" :value="__('Completion Date')" />
                    </div>

                    <div class="col-10">
                       <x-input id="completiondate" class="block mt-1 w-full" type="text" name="completiondate" :value="old('completiondate')" required autofocus /> 
                    </div>
                    
                    </div>

                    <div class="row">
                    <div class="col-2">
                          <x-label for="completedate" :value="__('Complete Date')" />
                    </div>

                    <div class="col-10">
                       <x-input id="completedate" class="block mt-1 w-full" type="text" name="completedate" :value="old('completedate')" required autofocus /> 
                    </div>
                    
                    </div>


       <div class="flex items-center justify-end mt-4">
        <button href="{{ url()->previous() }}" class="rounded-full ...">Back</button>

                <x-button class="ml-3">
                    {{ __('Add New Project') }}
                </x-button>
            </div>


          
        </form>
        </div>
        
    </div>
</div>
        
    
        </div>
    </div>
</x-app-layout>