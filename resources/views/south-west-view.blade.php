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
    </div>
<div class="container">
    <div class="row">
    <div class="col-6 col-sm-3 ">
        <div class="h-100 p-3 bg-dark border rounded-3">
        <a href="/add-user">
            <button type="button" class="btn btn-outline-light">Add User</button>
        </a>
    </div>
    </div>

    <div class="col-6 col-sm-3 ">
        <div class="h-100 p-3 bg-dark border rounded-3">
        <a href="/add-project">
            <button type="button" class="btn btn-outline-light">Add Projects</button>
        </a>
    </div>
    </div>


            </div>
            <div class="row">
    

    <div class="col-6 col-sm-3 ">
        <div class="h-100 p-3 bg-dark border rounded-3">
        <a href="/add-report">
            <button type="button" class="btn btn-outline-light">Add Report</button>
        </a>
    </div>
    </div>

    <div class="col-6 col-sm-3 ">
        <div class="h-100 p-3 bg-dark border rounded-3">
        <a href="/view-report">
            <button type="button" class="btn btn-outline-light">View Report</button>
        </a>
    </div>
    </div>

            </div>
</div>
    
</x-app-layout>


