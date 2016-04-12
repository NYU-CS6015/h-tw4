@extends('layouts.app')

@section('content')
    <div class="user-profile">
        @foreach ($profiles as $profile)
        <table class="profile-table" align="center">
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
@endsection