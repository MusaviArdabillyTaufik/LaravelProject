@extends('layouts.main')

@section('content')
  
  <section id="header">
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto">
                <h1 class="mx-auto my-0 text-center">Join Us</h1>
                <h1 class="mx-auto my-0 text-center">RedAlert</h1>
                <h1 class="mx-auto my-0 text-center">Members</h2>
                <form method="POST" action="{{ route('add.Member') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup" style="margin-top: 52px;">
                        
                        <label class="text-light">Name</label>
                        <input type="text" class="form-control" name="name"><br>
                        <label class="text-light">NIM</label>
                        <input type="text" class="form-control" name="nim"><br>
                        <label class="text-light">Faculty</label>
                        <input type="text" class="form-control" name="faculty"><br>
                        <label class="text-light">Avatar</label><br>
                        <input type="file" name="avatar">
                    </div>
                    <center>
                        <input type="submit" class="btn btn-primary text-center " value="Join Our Comunity" style="margin-top: 32px;">
                    </center> 
                </form>            
            </div>
        </div>
    </header>
</section>
 
@stop