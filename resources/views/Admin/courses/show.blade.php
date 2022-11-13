@extends('layouts.app')

@section('content')
    <section>
        <div class="container-sm d-flex flex-wrap">
            <div class="head_content col-8">
                <h1>
                    {{ $course->name }}
                </h1>
                <div class="head_details">
                    <span class="year">
                        {{ $course->year }}
                    </span>
                    <span class="period">
                        {{ $course->period }}
                    </span>
                </div>
            </div>
            <div class="head_content col-4">
                <div class="action d-flex">
                    <a class="btn btn-primary mx-2" href="{{ route('admin.courses.edit', $course) }}" title="Edit Course">
                        Edit
                    </a>
                    <form action="{{ route('admin.courses.destroy', $course) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger mx-2">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <div class="body_content col-12">
                <p class="description">
                    {{ $course->description }}
                </p>
            </div>
        </div>
    </section>
@endsection
