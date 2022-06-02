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
<h1>Sort Report</h1>

<p>
    <a class="btn btn-primary" href="/products/create"><span class="glyphicon glyphicon-plus"></span> Add Product</a>
</p>

<table class="table table-bordered table-hover">
    <thead>
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

<p>
    Displaying {{$reports->count()}} of {{ $reports->total() }} report(s).
</p>


</div>
</div>
        
    
        </div>
    </div>
</x-app-layout>