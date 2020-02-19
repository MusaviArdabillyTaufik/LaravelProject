@extends('layouts.main')

@section('content')

  <section id="header">
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto">
                
                <h1 class="mx-auto my-0 text-center">RedAlert</h1>
                <h1 class="mx-auto my-0 text-center">Members</h2>
                <form method="POST" action="/editMember/{{ $user->id }}" enctype="multipart/form-data">
                    @csrf
        {{ method_field('POST') }}
                    <div class="form-grup" style="margin-top: 52px;">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <label class="text-light">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        <label class="text-light">Code</label>
                        <input type="text" class="form-control" name="code" value="{{ $user->code }}">
                        <label class="text-light">Rank</label>
                        <input type="text" class="form-control" name="rank" value="{{ $user->rank }}">
                        <label class="text-light">Avatar</label><br>
                        <img class="img-edit" src="{{url('uploads/'.$user->avatar)}}" alt="{{$user->avatar}}">
                        <input type="file" name="avatarinput" accept=".jpg, .png">
                    </div>
                    <center>
                        <input type="submit" class="btn btn-primary text-center " value="Save" style="margin-top: 32px;">
                    </center>
                </form>
            </div>
        </div>
    </header>
</section>
 
@stop