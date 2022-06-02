
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
        
        <div class="col-lg-12 col-md-12 col-sm-12">
                 

         <h1>View Reports</h1>

<p>
    <a class="btn btn-primary" href="/add-report"><span class="glyphicon glyphicon-plus"></span> Add New Reports</a>
</p>



<form class="form-inline" method="GET">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6">
            <div class="form-group mb-2">
    <label for="filter" class="col-sm-2 col-form-label">Search your report</label>
    <input type="text" class="form-control" id="filter" name="filter" placeholder="Product name..." value="{{$filter}}">
  </div>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6">
             <button type="submit" class="btn btn-default mb-2">Filter Report</button> 
        </div>
        
    </div>
  
</form>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <th>@sortablelink('selectproject', 'Projects Name')</th>
        <th>@sortablelink('projectlocation', 'Project Location')</th>
        <th>@sortablelink('percentcompletion', 'Percent Completion')</th>
        <th>@sortablelink('visitdate', 'Visit Date')</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @if ($reports->count() == 0)
        <tr>
            <td colspan="5">No reports to display.</td>
        </tr>
        @endif

        @foreach ($reports as $report)
        <tr>
            <td>{{ $report->selectproject }}</td>
            <td>{{ $report->projectlocation }}</td>
            <td>{{ $report->percentcompletion }}</td>
            <td>${{ $report->visitdate }}</td>
            <td>
                <a class="btn btn-sm btn-success" href="">Edit</a>

                <form style="display:inline-block" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger"> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $reports->appends(Request::except('page'))->render() !!}

<div class="alert alert-success" role="alert">
    Displaying {{$reports->count()}} of {{ $reports->total() }} report(s).
</div>

        
    </div>


</div>
        </div>
    </div>
</x-app-layout>