@extends('layouts.app')

@section('content')
    <h1>Welcome {{ auth()->user()->name }} !!</h1>
@endsection
