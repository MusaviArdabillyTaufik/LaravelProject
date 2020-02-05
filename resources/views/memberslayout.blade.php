@extends('mainlayout')

@section('content')
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 ">RedAlert</h1>
        <h1 class="mx-auto my-0">Members</h2>
          
      </div>
    </div>
  </header>
  iki kudune metu
  
  <div class="mx-auto text-center" style="margin-bottom: 22px; margin-top: 22px;">
    <table class="table table-dark" align="center" border="1" style="width: 90%; margin-top: 7px;">
            <thead>
                <tr style="text-align: center;">
                    <th width="80px">Id</th>
                    <th width="150px">Name</th>
                    <th width="200px">NIM</th>
                    <th width="200px">Faculty</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fillable as $table)
                <tr style="text-align: center;">
                    <td>{{ $table->id }}</td>
                    <td>{{ $table->name }}</td>
                    <td>{{ $table->nim }}</td>
                    <td>{{ $table->faculty }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="#" class="btn btn-primary js-scroll-trigger" style="margin-top: 14px">Join Our Comunity</a>
  </div>

  @endsection