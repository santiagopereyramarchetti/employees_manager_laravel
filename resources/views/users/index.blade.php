@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Users</h1>
    <div class="card p-0">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="card-header">
            <form method="GET" action="{{ route('users.index') }}" class="row gy-2 gx-3 align-items-center d-inline-flex">
                <div class="col-auto">
                  <label class="visually-hidden" for="autoSizingInput">Search</label>
                  <input type="search" name="search" class="form-control" id="autoSizingInput" placeholder="Username or Email">
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary float-end">Search</button>
                </div>
            </form>
            <a href="{{route('users.create')}}" class="btn btn-primary float-end">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                      <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-success">Edit</a>
                                <form class="d-inline" method="POST" action="{{route('users.destroy', $user->id)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
@endsection
