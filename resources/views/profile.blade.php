@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3 col-centered">
    <div class="panel panel-default">
        <div class="panel-heading">User Profile(Bootstrap Style)</div>
            @foreach ($profiles as $profile)
            <table class="table table-hover">
            <tbody>
            <tr>
            <td>UserName:</td>
            <td>{{ $profile->name }}</td>
            <tr>
            <td>E-mail:</td>
            <td>{{ $profile->email }}</td>
           	<tr>
            <td>Location:</td>
            <td>{{ $profile->location }}</td>
            <td></td></tr>
            </tbody>
            </table>
            @endforeach
        </div>
    </div>
</div>
@endsection