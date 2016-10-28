@extends('backend.appTemplate')

@section('main')
    @include('backend.partials.entete', ['title' => trans('back/admin.dashboard'),])
    <div class="row">
        @each('backend/partials/pannel', $pannels, 'pannel')
    </div>

@endsection
