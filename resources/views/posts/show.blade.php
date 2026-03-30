@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <x-post :post="$post" />
    </div>
@endsection