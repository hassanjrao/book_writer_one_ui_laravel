@extends('layouts.backend')

@section('title','Notes')
@section('content')

    <div class="content">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <p class="mb-0">
            {{ session()->get('success') }}
          </p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if(session()->has('failed'))
        <div class="alert alert-warning alert-dismissible" role="alert">
          <p class="mb-0">
            {{ session()->get('failed') }}
          </p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
        <form class="js-validation" action="{{route('notes.store')}}" method="POST">
          @csrf
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Notes</h3>
              </div>
              <br/>
              <div class="block-content block-content-full">
                <div class="row items-push">
                  <div class="col-xl-12 m-auto">
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                      <label for="title">Title</label>
                      @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                      @endif
                    </div>
                    <div class="form-floating mb-4">
                      <textarea class="form-control" id="note" name="note" style="height: 500px" placeholder="Note"></textarea>
                      <label for="note">Note</label>
                      @if ($errors->has('note'))
                        <span class="text-danger">{{ $errors->first('note') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row items-push">
                  <div class="col-xl-12 d-flex justify-content-end">
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
