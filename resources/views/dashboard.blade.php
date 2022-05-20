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
                    You're logged in! <span class="badge text-bg-primary"> {{ Auth::user()->name }} </span>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1>Project Manager Built with Laravel 9.0</h1>
                </div>

              
                      <div class="row align-items-md-stretch">

                        <div class="col-4 col-sm-3 ">
                            <div class="h-100 p-3 bg-dark border rounded-3">
                                <a href="/south-west">
                                    <button type="button" class="btn btn-outline-light">South West</button>
                                </a>
                            </div>
                        </div>

                        <div class="col-4 col-sm-3 ">
                            <div class="h-100 p-3 bg-dark border rounded-3">
                            <a href="#">
                                <button type="button" class="btn btn-outline-light">North Central</button>
                            </a>
                            </div>
                        </div>

                        <div class="col-4 col-sm-3 ">
                            <div class="h-100 p-3 bg-dark border rounded-3">
                            <a href="#">
                                <button type="button" class="btn btn-outline-light">North East</button>
                            </a>
                            </div>
                        </div>
                    </div>
<br>
            <div class="row align-items-md-stretch">
                    <div class="col-4 col-sm-3 ">
                        <div class="h-100 p-3 bg-dark border rounded-3">
                        <a href="#">
                            <button type="button" class="btn btn-outline-light">North West</button>
                        </a>
                    </div>
                    </div>

                    <div class="col-4 col-sm-3 ">
                        <div class="h-100 p-3 bg-dark border rounded-3">
                        <a href="#">
                            <button type="button" class="btn btn-outline-light">South East</button>
                        </a>
                    </div>
                    </div>

                    <div class="col-4 col-sm-3 ">
                        <div class="h-100 p-3 bg-dark border rounded-3">
                        <a href="#">
                            <button type="button" class="btn btn-outline-light">South South</button>
                        </a>
                    </div>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
