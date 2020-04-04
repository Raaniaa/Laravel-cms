@extends('layouts.app')
@section('content')
<div class="card card-default">
<div class="card-header">
{{ isset($category) ? "Update Category" : "Add a new category"}}
    </div>
    <div class="card-body">
    <form action="{{isset($category) ? route('categories.update',$category->id) : route('categories.store')}}" method="POST">
        @csrf
        @if (isset($category))
             @method('PUT')
        @endif
        <div class="form-group">
        <label for="category" >
            Category Name :
            </label>
            <input type="text" name="name"  class=" @error('name')
                   is-valid @enderror form-control" placeholder="Add a new Ctaegory" value="{{isset($category) ? $category->name : "" }}">
            @error('name')
            <div class="alert alert-danger">
            {{ $message }}
            </div>       
            @enderror
        </div>
        <div class="form-group">
        <button class="btn btn-success">
            {{ isset($category) ? "Update " : "Add"}}

            </button>
        </div>
        </form>
    </div>
</div>
@endsection
