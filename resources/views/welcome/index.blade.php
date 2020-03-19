@extends('layouts.layout')

@section('content')
<h1 class="text-center my-5">
    Questions And Answers
</h1>

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <form class="pb-4 border-bottom" action="/" method="POST">
            @csrf
                <div class="form-group">
                    <p>Ask a question:</p>
                    <textarea name="question" class="form-control" placeholder="ex: ">{{ session('text') }}</textarea>
                </div>

                <div class="text-right">
                    <button class="btn btn-primary" type="submit">
                        Ask Question
                    </button>
                </div>
            </form>
            
            <p>Answer a question:</p>
            @foreach($questions as $question)
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                    <h3 class="m-0">
                        <a href="{{ route('questions.show', $question->id) }}" class="text-dark">
                            {{ $question->question }}
                        </a>
                    </h3>
                    <div>
                        <span class="badge badge-primary">
                            0 answers
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection