@extends('layouts.main')

@section('content')
 
  <!-- Header -->
  <header class="bgmain">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 ">GAME FOR FUN</h1><br>
        <h1 class="mx-auto my-0 ">GAME FOR MONEY</h1><br>
        <h1 class="mx-auto my-0 ">GAME FOR FUTURE</h1><br>
        <a href="/members" class="btn js-scroll-trigger btn-home">JOIN</a>
      </div>
    </div>
  </header>

  <div class="mx-auto text-center" style="padding-bottom: 22px; padding-top: 42px;">
    <table class="table table-dark" align="center" style="width: 90%; margin-top: 7px;">
        
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
            </tr>
        </thead>
        <tbody>
            <?php $no =1;?>
            @foreach($showmember as $tbl)
            <tr>
                <!-- <td>{{ $tbl->id }}</td> -->
                <!-- <td>{{ $no }}</td> -->
                <td><?php echo $no++;?></td>
                <td>
                    <img class="img-table" src="{{url('uploads/'.$tbl->avatar)}}" alt="{{$tbl->avatar}}">&nbsp;&nbsp;{{ $tbl->name }}
                </td>
                <td>{{ $tbl->code }}</td>
                <td>{{ $tbl->rank }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop