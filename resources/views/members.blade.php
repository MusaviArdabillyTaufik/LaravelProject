@extends('layouts.main')

@include('layouts.header')

@section('content')
  
  <div class="mx-auto text-center" style="margin-bottom: 22px; margin-top: 22px;">
    <table class="table table-dark" align="center" border="1" style="width: 90%; margin-top: 7px;">
            <thead>
                <tr style="text-align: center;">
                    <th width="80px">Id</th>
                    <th width="150px">Name</th>
                    <th width="200px">NIM</th>
                    <th width="200px">Faculty</th>
                    <th width="100px">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($member as $tbl)
                <tr style="text-align: center;">
                    <td>{{ $tbl->id }}</td>
                    <td>{{ $tbl->name }}</td>
                    <td>{{ $tbl->nim }}</td>
                    <td>{{ $tbl->faculty }}</td>
                    <td><a href="/editMemberForm/{{ $tbl->id }}">edit</a><a href="/deleteMember/{{ $tbl->id }}">delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/addMemberForm" class="btn btn-primary js-scroll-trigger" style="margin-top: 14px">Join Our Comunity</a>
  </div>
 
@stop