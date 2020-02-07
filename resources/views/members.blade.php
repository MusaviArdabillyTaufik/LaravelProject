@extends('layouts.main')

@include('layouts.header')

@section('content')
  
<div class="mx-auto text-center masthead" style="padding-bottom: 22px; padding-top: 42px;">
    <table class="table table-dark" align="center" style="width: 90%; margin-top: 7px;">
        <a href="/addMemberForm" class="btn btn-primary js-scroll-trigger" style="margin-top: 14px; margin-bottom: 22px;">Join Our Comunity</a>
        <thead>
            <tr>
                <th width="80px">No</th>
                <th width="150px">Name</th>
                <th width="200px">NIM</th>
                <th width="200px">Faculty</th>
                <th width="100px"style="text-align: center;">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $no =0;?>
            @foreach($member as $tbl)
            <?php $no++;?>
            <tr>
                <!-- <td>{{ $tbl->id }}</td> -->
                <td>{{ $no }}</td>
                <td>
                    <img class="card-img-top img-table" src="{{url('uploads/'.$tbl->filename)}}" alt="{{$tbl->filename}}">&nbsp;&nbsp;{{ $tbl->name }}
                </td>
                <td>{{ $tbl->nim }}</td>
                <td>{{ $tbl->faculty }}</td>
                <td style="text-align: center;"><a href="/editMemberForm/{{ $tbl->id }}">edit</a> - <a href="/deleteMember/{{ $tbl->id }}">delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
 
@stop