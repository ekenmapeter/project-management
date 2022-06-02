
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
            <h2>Add New Report</h2>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <!-- Session Status -->
        <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{!! Session::get('message') !!}</p>
    @endif
        <form method="POST" action="/addnewreport">
            @csrf
         
                <div class="row">
                    <div class="col-2">
                          <x-label for="visitdate" :value="__('Visit Date')" />
                    </div>

                    <div class="col-10">
                       <x-input type="date" data-date-inline-picker="true" id="visitdate" class="block mt-1 w-full" name="visitdate" :value="old('visitdate')" required autofocus /> 
                    </div>
                    
                    </div>


            <div class="row">
                    <div class="col-2">
                          <x-label for="selectproject" :value="__('Select Project')" />
                    </div>

                    <div class="col-10">
                        <select class="livesearch form-control p-3 form-control" id="id" value="" name="selectproject"></select>
                    </div>
                    
                    </div>

            <div class="row">
                    <div class="col-2">
                         <x-label for="projectlocation" :value="__('Project Location')" />
                    </div>

                    <div class="col-10">
                        <x-input id="projectlocation" class="block mt-1 w-full" type="text" name="projectlocation" :value="old('projectlocation')" required autofocus />
                    </div>
                    
                    </div>

            <div class="row">
                    <div class="col-2">
                         <x-label for="percentcompletion" :value="__('Percentage Completion')" />
                    </div>

                    <div class="col-10">
                        <select  name="percentcompletion" id="percentcompletion" class="block mt-1 w-full form-select form-control" aria-label="Default select example">
                          <option selected>Percentage Completion</option>
                          <option value="5%">5%</option>
                          <option value="10%">10%</option>
                          <option value="15%">15%</option>
                          <option value="20%">20%</option>
                          <option value="25%">25%</option>
                          <option value="30%">30%</option>
                          <option value="35%">35%</option>
                          <option value="40%">40%</option>
                          <option value="45%">45%</option>
                          <option value="50%">50%</option>
                          <option value="55%">55%</option>
                          <option value="60%">60%</option>
                          <option value="65%">65%</option>
                          <option value="70%">70%</option>
                          <option value="75%">75%</option>
                          <option value="80%">80%</option>
                          <option value="85%">85%</option>
                          <option value="90%">90%</option>
                          <option value="95%">95%</option>
                          <option value="100%">100%</option>
                        </select>
                    </div>
                    
                    </div>
              

        

            <div class="row">
                    <div class="col-2">
                          <x-label for="challenges" :value="__('Challenges')" />
                    </div>

                    <div class="col-10">
                       <textarea id="challenges" class="block mt-1 w-full" type="text" name="challenges" :value="old('challenges')" required autofocus></textarea>
                    </div>
                    
                    </div>


            <div class="row">
                    <div class="col-2">
                          <x-label for="recommendations" :value="__('Recommendations')" />
                    </div>

                    <div class="col-10">
                       <textarea id="recommendations" class="block mt-1 w-full" type="textarea" name="recommendations" :value="old('recommendations')" required autofocus></textarea>
                    </div>
                    
                    </div>

 
            <div class="row">
                    <div class="col-2">
                          <x-label for="docfile" :value="__('Upload Document')" />
                    </div>

                    <div class="col-10">

                            <input type="file" 
                            id="id_doc" 
                            class="filepond"
                            name="id_doc" 
                            multiple 
                            data-allow-reorder="true"
                            data-max-file-size="10MB"
                            data-max-files="1" />
                    </div>
                    
                    </div>

            <!-- Confirm Password -->
                <div class="row">
                    <div class="col-2">
                        <x-label for="supervisordivistion" :value="__('Supervisor Division')" />
                    </div>
                    <div class="col-10">
                        <x-input id="supervisordivistion" class="block mt-1 w-full"
                                        type="text"
                                        name="supervisordivistion" required autofocus />
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                          <x-label for="socialimpact" :value="__('Social economy impact of the Project')" />
                    </div>

                    <div class="col-10">
                       <textarea  id="socialimpact" class="block mt-1 w-full" type="text" name="socialimpact" :value="old('socialimpact')" required autofocus> </textarea > 
                    </div>
                    
                    </div>

                    

                   <div class="row">
                    <div class="col-2">
                          <x-label for="zonalcomment" :value="__('Zonal coordinator comment')" />
                    </div>

                    <div class="col-10">
                       <textarea  id="zonalcomment" class="block mt-1 w-full" type="text" name="zonalcomment" :value="old('zonalcomment')" required autofocus> </textarea > 
                    </div>
                    
                    </div>


       <div class="flex items-center justify-end mt-4">
        <button href="{{ url()->previous() }}" class="rounded-full ...">Back</button>

                <x-button class="ml-3">
                    {{ __('Add New Report') }}
                </x-button>
            </div>


          
        </form>
        </div>
        
    </div>
</div>
        
    
        </div>
    </div>
    @include('components.project_upload')
    @include('components.project_searchlist')
</x-app-layout>