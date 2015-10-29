@extends('layouts.master')

@section('title', 'List users')

@section('content')
    <h1>List users</h1>
    <a href="{{ URL::route('create') }}">Create</a> | 
    <a href="{{ URL::route('logout') }}">Sign Out</a><br><br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>email</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->email }}</td>
                <td>
                    <a href="{{ URL::route('edit',$value->id) }}">Edit</a> | 
                    <a href="{{ URL::to('user/delete/'.$value->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop