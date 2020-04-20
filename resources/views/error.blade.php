@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Lottery Draws</li>
@endsection
@section('body')

    <div class="card">
        <div class="card-body" style="width:100%; text-align: center;">
            <h1>Error Encountered</h1>
            <div>{{ $error_message }}</div>
        </div>

    </div>
    <table >

    </table>

@endsection
