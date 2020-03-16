@extends('layouts.main')

@section('content')

    <div class="bgadmin head">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto edit-container">
                
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
                        <label class="text-light">Age</label>
                        <input type="text" class="form-control" name="age" value="{{ $user->age }}">
                        <label class="text-light">Gender</label>
                        <input type="text" class="form-control" name="gender" value="{{ $user->gender }}">
                        <label class="text-light">Rank</label>
                        <input type="text" class="form-control" name="rank" value="{{ $user->rank }}">
                        <label class="text-light">Language</label>
                        <input type="text" class="form-control" name="language" value="{{ $user->language }}">
                        <label class="text-light">Additional Info</label>
                        <input type="text" class="form-control" name="additional_info" value="{{ $user->additional_info }}">
                        <label class="text-light">Avatar</label><br>
                        <img class="img-edit" src="{{url('uploads/'.$user->avatar)}}" alt="{{$user->avatar}}">
                        <input type="file" name="avatarinput" accept=".jpg, .png" class="input-ava">
                    </div>
                    <center>
                        <input type="submit" class="btn btn-primary text-center " value="Save" style="margin-top: 32px;">
                    </center>
                </form>
            </div>
        </div>
    </div>
 
@stop