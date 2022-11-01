@extends('backend.layouts.layout')

@section('title')
    Data Banner
@endsection

@section('content')
    <div class="container">
        <a href="{{ route('banner.create') }}">
            <h6>
                <span class="badge bg-primary">
                    <i class="fas fa-plus-square"></i>
                    Add Data
                </span>
            </h6>
        </a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
