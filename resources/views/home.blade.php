@extends('layout/layout')

@section('content')
    <x-card.card-section :cardvalue="$cardvalue" :recenthistories="$recenthistories"></x-card.card-section>

    <x-table.table-section :records="$records"></x-table.table-section>
@endsection
