@extends('layout.index')

@section('content')
    <form action="{{ route('home.update',$home) }}" method="post">
        @method("PUT")
        @csrf
        <input name="name" type="text" value="{{ $home->name }}">
        <input name="age" type="number" value="{{ $home->age }}">
        <button>Insert</button>
    </form>
@endsection
