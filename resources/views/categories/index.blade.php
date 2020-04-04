@extends('layouts.app')
@section('content')
@if(session()->has('error'))
<div class="alert alert-danger">
{{session()->get('error')}}
</div>
@endif
<div class="clearfix">
<a href="{{ route('categories.create')}}"
   class="btn float-right btn-success" style="margin-bottom : 10px">Add Category</a></div>
<div class="card card-default">
    <div class="card-header">All Categories</div>
<table class="card-body">
    
    <table class="table">
    <tbody>
        @foreach($categories as $category)
        <tr>
        <td>
        {{ $category->name }}
            </td>
            <td>
                <form class="float-right" action ="{{route('categories.destroy',$category->id)}}" method="post">
                @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm ml-2">Delete</button>
                </form>
                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary float-right btn-sm">Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </table> 
</div>
@endsection