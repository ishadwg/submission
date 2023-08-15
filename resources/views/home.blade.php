@extends('layout/layout')

@section('content')
    <x-card.card-section></x-card.card-section>

    <x-table.table-section :records="$records"></x-table.table-section>
@endsection
