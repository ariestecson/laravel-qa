                    @csrf
                    <div class="form-group">
                        <label for="question-title">Question Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="question-title"
                            value="{{ old('title', $question->title) }}">
                        @error('title')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="question-body">Explain your question</label>
                        <textarea name="body" id="question-body" class="form-control @error('body') is-invalid @enderror" rows="10">{{ old('body', $question->body) }}</textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
                    </div>