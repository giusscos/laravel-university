@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="head_content d-flex">
                <h1 class="col-10">
                    Add Course
                </h1>
                <div class="action col-2">
                    <a class="btn btn-danger" href="{{ route('admin.courses.index') }}" title="Undo">
                        Undo
                    </a>
                </div>
            </div>
            <div class="body_content">
                <form action="{{ route('admin.courses.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @endif" id="name" name="name"
                            placeholder="Enter name course" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="period">Period</label>
                        <select
                            class="form-control @error('period') is-invalid @endif" id="period" name="period">
                            <option selected disabled>-- select one--</option>
                            <option value="I Semestre">I Semestre</option>
                            <option value="II Semestre">II Semestre</option>
                        </select>
                        @error('period')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text"
                                class="form-control @error('year') is-invalid @endif" id="year" name="year"
                            placeholder="Enter year course" value="{{old('year')}}">
                            @error('year')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                            <label for="cfu">CFU</label>
                            <input type="text"
                                class="form-control @error('cfu') is-invalid @endif" id="cfu" name="cfu"
                            placeholder="Enter cfu course" value="{{old('cfu')}}">
                            @error('cfu')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                            <label for="description">Description</label>
                            <textarea
                                class="form-control @error('description') is-invalid @endif" id="description" name="description"
                                placeholder="Enter description course">{{old('description')}}</textarea>
                            @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <button type="submit"
                                class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </section>
@endsection
