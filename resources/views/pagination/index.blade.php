@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>
    .page-item.active .page-link{
        z-index: 3;
        color: #fff !important  ;
        background-color: #00ACD6 !important;
        border-color: #00ACD6 !important;
        border-radius: 50%;
        padding: 6px 12px;
    }
    .page-link{
        z-index: 3;
        color: #00ACD6 !important;
        background-color: #fff;
        border-color: #007bff;
        border-radius: 50%;
        padding: 6px 12px !important;
    }
    .page-item:first-child .page-link{
        border-radius: 30% !important;
    }
    .page-item:last-child .page-link{
        border-radius: 30% !important;   
    }
    .pagination li{
        padding: 3px;
    }
    .disabled .page-link{
        color: #212529 !important;
        opacity: 0.5 !important;
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Laravel 8 Custom Pagination<span class="text-danger"></span></h4>
                    </div>
                    <div class="card-footer">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $key => $user)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <p>There Are no Data</p>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="col-md-12">
                            {{ $users->links('vendor.pagination.custom')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection