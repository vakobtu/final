@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-1">
                                    <div id="worldMap" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Country</th>
                                <th scope="col">Date</th>
                                <th scope="col">Case amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($statistics as $covid_stat)
                                    <th>{{ $covid_stat->country }}</th>
                                    <td>{{ $covid_stat->date }}</td>
                                    <td>{{ $covid_stat->case_amount }}</td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
