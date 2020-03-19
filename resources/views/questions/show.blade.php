@extends('layouts.layout')

@section('content')
<h1 class="text-center my-5">
    Questions
</h1>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            Question: {{ $question->question }}
        </div>
        
        <div class="col-lg-6 offset-lg-3">
        <a href="{{ route('welcome.index') }}">Back to Questions</a>
        </div>
    </div>
</div>
@endsection
