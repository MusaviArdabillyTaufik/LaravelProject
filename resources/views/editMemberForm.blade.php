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
                        <label class="text-light">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{ $user->nim }}">
                        <label class="text-light">Faculty</label>
                        <input type="text" class="form-control" name="faculty" value="{{ $user->faculty }}">
                        <label class="text-light">Avatar</label><br>
                        <img style="width: 100px; height: 100px; object-fit: cover; object-position: center;" src="{{url('uploads/'.$user->filename)}}" alt="{{$user->filename}}">
                        <input type="file" name="avatar">
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