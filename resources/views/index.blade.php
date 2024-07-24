@extends('layouts.main')

@section('content')

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex ms-auto" method="GET" action="{{ route('search', ['locale' => app()->getLocale()]) }}">
                <input id="search-input" class="form-control me-2" type="search" name="search" placeholder="@lang('lang.search')">
                <button class="btn btn-outline-primary" type="submit"> @lang('lang.search') </button>
            </form>
        </div>
    </nav>

    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">@lang('lang.full_name')</th>
            <th scope="col">@lang('lang.email')</th>
            <th scope="col">@lang('lang.number')</th>
            <th scope="col">@lang('lang.message')</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->full_name }}</td>
                <td>{{ $article->email }}</td>
                <td>{{ $article->number }}</td>
                <td>{{ $article->text }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
