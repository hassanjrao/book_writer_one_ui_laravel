@extends('layouts.backend')

@section('title',$ml_universe->title)
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
     
    <form class="js-validation" action="{{route('myths_and_legends.update',$ml_universe->id)}}" method="POST">
      @csrf
      @method("PUT")
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">{{$ml_universe->title ?? ""}}</h3>
          </div>
          <br/>
          <div class="block-content block-content-full">
            <div class="row items-push">
              <div class="col-xl-12 m-auto">
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$ml_universe->title ?? ""}}" required>
                  <label for="title">Title</label>
                  @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                  @endif
                </div>
                <div class="form-floating mb-4">
                  <textarea class="form-control" id="content" name="content" style="height: 500px" placeholder="Content">{{$ml_universe->content ?? ""}}</textarea>
                  <label for="content">Content</label>
                  @if ($errors->has('content'))
                    <span class="text-danger">{{ $errors->first('content') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row items-push">
              <div class="col-xl-12 d-flex justify-content-between">
                <button type="button" class="btn btn-warning btn_add_scene" onclick="document.getElementById('deleteForm').submit();">Delete</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
            <br/>
          </div>
        </div>
      </form>
      <form id="deleteForm" action="{{route('myths_and_legends.destroy',$ml_universe->id)}}" method="post">
        @csrf
        @method('delete')
      </form>
    </div>
  </div>

@endsection

