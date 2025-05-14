@extends('layouts.menu')

@section('content')
    @for ($i = 0; $i < 10; $i++)
        @include('components.card6')
    @endfor
@endsection
