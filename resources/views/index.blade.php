@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>Welcome to your students and courses manager</h1>

<a href="{{ route('students.index') }}" class="btn btn-info">Students</a>
<a href="{{ route('courses.index) }}" class="btn btn-info">Courses</a>


@endsection