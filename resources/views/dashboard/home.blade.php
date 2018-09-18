@extends('adminlte::layout.main')

@section('content')
    @component('adminlte::page', ['title' => 'Home'])
        @component('adminlte::box')
            {{ BsForm::post(route('dashboard.action')) }}
            <h3>Click here to get notification</h3> {{ BsForm::submit('Action') }}
            {{ BsForm::close() }}
        @endcomponent
    @endcomponent
@endsection
