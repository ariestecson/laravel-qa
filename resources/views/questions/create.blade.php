@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Questions</h2>
                        <div class="ml-auto">
                            <a href="{{route('questions.create')}}" class="btn btn-outline-secondary">Back to all Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                   <form action="{{route('questions.store')}}" method="post">
                    <div class="form-group">
                        @csrf
                        <label for="question-title">Question Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="question-title">
                        @error('title')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="question-body">Explain your question</label>
                        <textarea name="body" id="question-body" class="form-control @error('body') is-invalid @enderror" rows="10"></textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Ask this question</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection