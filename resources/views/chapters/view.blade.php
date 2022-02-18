@extends('layouts.backend')

@section('title','Chapter1')
@section('content')
    
    <div class="content">
        <form class="js-validation" action="{{route('bookinfo.index')}}" method="POST">
          @csrf
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Chapter1</h3>
              </div>
              <br/>
              <div class="block-content block-content-full">
                <div class="row items-push">
                  <div class="col-xl-12 m-auto">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="chapter_title" name="chapter_title" placeholder="Title">
                      <label for="chapter_title">Title</label>
                      @if ($errors->has('chapter_title'))
                        <span class="text-danger">{{ $errors->first('chapter_title') }}</span>
                      @endif
                    </div>

                    <div role="separator" class="dropdown-divider m-0 mb-4"></div>

                    <div class="items-push m-auto col-xl-12 d-flex justify-content-between flex-column flex-lg-row">
                      <div>
                        <label class="form-label" for="">Chapter Type<span class="text-danger">*</span></label>
                        <select class="js-select2 form-select" id="chapter_type" name="chapter_type" style="width: 100%;" data-placeholder="Chapter Type">
                          <option selected disabled>Chapter Type</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                          <option value="Normal Chapter">Normal Chapter</option>
                          <option value="Interlude">Interlude</option>
                          <option value="Prologue">Prologue</option>
                          <option value="Epilogue">Epilogue</option>
                        </select>
                      </div>

                      <div role="separator" class="dropdown-divider m-0 mb-4"></div>

                      <div>
                        <label class="form-label" for="chapter_number">Number of the chapter <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="chapter_number" name="chapter_number" placeholder="Chapter number" min="1">
                        @if ($errors->has('chapter_number'))
                          <span class="text-danger">{{ $errors->first('chapter_number') }}</span>
                        @endif
                      </div>

                      <div>
                        <label class="form-label" for="chapter_position">Position of the chapter in the book<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="chapter_position" name="chapter_position" placeholder="Chapter position" min="1">
                        @if ($errors->has('chapter_position'))
                          <span class="text-danger">{{ $errors->first('chapter_position') }}</span>
                        @endif
                      </div>
                  </div>

                  <div role="separator" class="dropdown-divider m-0 mb-4"></div>

                    <div class="form-floating mb-4">
                      <textarea class="form-control" id="chapter_content" name="chapter_content" style="height: 600px" placeholder="Content"></textarea>
                      <label for="chapter_content">Content</label>
                      @if ($errors->has('chapter_content'))
                        <span class="text-danger">{{ $errors->first('chapter_content') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row items-push">
                  <div class="col-xl-12 d-flex justify-content-between">
                    <button type="button" class="btn btn-warning btn_add_scene">Delete</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
                <br/>
              </div>
            </div>
          </form>
        </div>
    </div>
@endsection