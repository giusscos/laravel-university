@extends('layouts.app')

@section('content')
    <section>
        <div class="container-sm">
            <div class="header_content d-flex">
                <h1 class="col-10">
                    Courses
                </h1>
                <div class="action col-2">
                    <a class="btn btn-primary" href="{{route('admin.courses.create')}}" title="Add course">
                        Add course
                    </a>
                </div>
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
                        @foreach ($courses as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->period }}</td>
                                <td>{{ $item->year }}</td>
                                <td>{{ $item->cfu }}</td>
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
