@extends('layout.template-pelanggan')
@section('title', 'Home - Rent Car')

@section('content')
    @livewire('FormPesanMobil', ['mobilId' => $id])
@endsection
