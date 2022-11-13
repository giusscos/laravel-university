@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="head_content">
            <h1>
                Exams
            </h1>
        </div>
        <div class="body_content">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Period</th>
                        <th scope="col">Year</th>
                        <th scope="col">CFUs</th>
                        <th scope="col" colspan="3" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exams as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item-> }}</td>
                            <td>{{ $item-> }}</td>
                            <td>{{ $item-> }}</td>
                            <td>{{ $item-> }}</td>
                            <td>
                                <a class="btn btn-outline-secondary" href="{{route('admin.courses.show', $item)}}" title="Show course">
                                    Show
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary mx-2" href="{{ route('admin.courses.edit', $item) }}" title="Edit course">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{route('admin.courses.destroy', $item)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-outline-danger" title="Delete course">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection