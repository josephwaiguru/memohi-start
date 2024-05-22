@extends('layouts.app')
@section('title')
    {{ __('messages.formulaires') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            @include('flash::message')
            <livewire:formulaire-table/>
        </dv>
    </div>
@endsection
