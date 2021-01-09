@extends('layouts.app')

@section('content')
    <div class="row">
            <div>
                <h2>Laravel CRUD </h2>
            </div>
            <div>
{{-- add button links to "create" page --}}
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create"> <i
                        class="fas fa-user-plus"></i>
                </a>
            </div>
    </div>

{{-- messages are defined in ProjectController.php --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}            
            <i class="fas fa-thumbs-up"></i>
            </p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Introduction</th>
            <th>Location</th>
            <th>Created At</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->introduction }}</td>
                <td>{{ $project->location }}</td>
                <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a class="button" href="{{ route('projects.show', $project->id) }}" title="show">
                            <i class="fas fa-book-open text-success  fa-lg"></i>
                        </a>

                        <a class="button" href="{{ route('projects.edit', $project->id) }}">
                            <i class="fas fa-pencil-alt  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $projects->links() !!}

@endsection
