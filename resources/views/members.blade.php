@extends('layouts.main')

<!-- @include('layouts.header') -->

@section('content')
  
<div class="bgadmin head " style="padding-bottom: 22px; padding-top: 42px;">
    <div class="title" style="margin-top: 200px; margin-bottom: 100px;">
        <h1 class="mx-auto my-0 text-center">RedAlert</h1>
        <h1 class="mx-auto my-0 text-center">Members</h2>
    </div>
    <div class="tablecontainer-member">
        <table class="table table-dark table-members" align="center" style="width: 100%; margin-top: 7px;">
            <div class="text-center">
                <a href="/addMemberForm" class="btn btn-primary js-scroll-trigger" style="margin-top: 14px; margin-bottom: 22px;">Join Our Comunity</a>
            </div>
            <div class="export">
                <a href="{{ url('/members/export') }}">Export</a>
            </div>
            <div class="search-form">
                <form class="" method="get" action="{{url('search')}}">
                    <input type="text" name="searchInput" placeholder=" Search" aria-label="Search">
                    <button type="submit">Go</button>
                </form>            
            </div>
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th width="150px">Name</th>
                    <th width="200px">Code</th>
                    <th width="200px">Age</th>
                    <th width="200px">Gender</th>
                    <th width="200px">Rank</th>
                    <th width="200px">Language</th>
                    <th width="200px">Additional Info</th>
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
                    <td>{{ $tbl->age }}</td>
                    <td>{{ $tbl->gender }}</td>
                    <td>{{ $tbl->rank }}</td>
                    <td>{{ $tbl->language }}</td>
                    <td>{{ $tbl->additional_info }}</td>
                    <td style="text-align: center;"><a href="/editMemberForm/{{ $tbl->id }}">edit</a> - <a href="/deleteMember/{{ $tbl->id }}">delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    {{ $member->links() }}
    </div>
</div>

@stop