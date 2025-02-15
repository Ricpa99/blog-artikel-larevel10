@extends('dashboard.layout.main')

@section('container')
    <div class="container-fluid mt4">
      <div class="col-lg-12">
         <h1 class="h2">Edit Post</h1>
         <div class="col-lg-8">
            <form action="/dashboard/post/{{ $post->slug }}" method="post" enctype="multipart/form-data">
               @method('put')
               @csrf
               <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}"  name="title" id="title">
                  @error('title')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
                  @enderror
               </div>
               <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug) }}"  name="slug" id="slug">
                  @error('slug')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
               </div>
               <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select name="category_id" id="" class="form-select" value="{{ old('category', $post->category_id) }}">
                     @foreach ($categories as $category)
                        @if ($category->title == $post->category->title)
                           @foreach ($categories as $category)
                              <option value="{{ $category->id }}" @if ($category->title == $post->category->title) @selected(true) @endif >{{ $category->title }}</option>
                           @endforeach
                        @endif
                     @endforeach
                  </select>
               </div>
               <div class="mb-3">
                  <label for="image" class="form-label">Post Image {{ $post->image }}</label>
                  <input type="hidden" name="oldImg" value="{{ $post->image }}">
                  @if($post->image)
                  <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-flui mb-3 col-sm-6 d-block">
                  @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  @endif
                     <input class="mt-2 form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" style="cursor: pointer;" 
                     data-toogle="tooltip" title="select image" onchange="previewImg()">
                     @error('image')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                     @enderror
               </div>
               <div class="mb-3">
                  @error('body')
                      <p class="text-danger">
                        {{ $message }}
                      </p>
                  @enderror
                  <label for="" class="form-label">Body</label>
                  <textarea class="form-control" name="body" id="txtarea" rows="9">{{ old('body', $post->body) }}</textarea>
               </div>
               <button type="submit" class="btn btn-primary">Update post</button>
            </form>
         </div>
      </div>
    </div>
@endsection