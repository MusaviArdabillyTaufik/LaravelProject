@extends('layouts.main')

@include('layouts.header')

@section('content')
  
<div class="mx-auto text-center masthead" style="padding-bottom: 22px; padding-top: 42px;">
    <table class="table table-dark" align="center" style="width: 90%; margin-top: 7px;">
        <a href="/addMemberForm" class="btn btn-primary js-scroll-trigger" style="margin-top: 14px; margin-bottom: 22px;">Join Our Comunity</a>
        <form class="form-group mb-2" method="get" action="{{url('search')}}">
           <input class="form-control mr-sm-2" type="text" name="searchInput" placeholder="Kata Kunci" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
        </form>
        <thead>
            <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    
                </td>
            </tr> -->
            <tr>
                <th width="80px">No</th>
                <th width="150px">Name</th>
                <th width="200px">Code</th>
                <th width="200px">Rank</th>
                <th width="100px"style="text-align: center;">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $no =1;?>
            @foreach($member as $tbl)
            <tr>
                <!-- <td>{{ $tbl->id }}</td> -->
                <!-- <td>{{ $no }}</td> -->
                <td><?php echo $no++;?></td>
                <td>
                    <img class="img-table" src="{{url('uploads/'.$tbl->avatar)}}" alt="{{$tbl->avatar}}">&nbsp;&nbsp;{{ $tbl->name }}
                </td>
                <td>{{ $tbl->code }}</td>
                <td>{{ $tbl->rank }}</td>
                <td style="text-align: center;"><a href="/editMemberForm/{{ $tbl->id }}">edit</a> - <a href="/deleteMember/{{ $tbl->id }}">delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $member->links() }}
</div>

@stop