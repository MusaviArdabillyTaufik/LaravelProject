@extends('layouts.main')

@section('content')
  
  <section id="header">
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto">
                <h1 class="mx-auto my-0 text-center">Members</h2>
                <form method="POST" action="{{ route('add.Member') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup" style="margin-top: 52px;">
                        
                        <label class="text-light">Name</label>
                        <input type="text" class="form-control" name="name"><br>
                        <label class="text-light">Code</label>
                        <input type="text" class="form-control" name="code"><br>
                        <label class="text-light">Age</label>
                        <input type="text" class="form-control" name="age"><br>
                        <label class="text-light">Gender</label>
                        <input type="text" class="form-control" name="gender"><br>
                        <label class="text-light">Rank</label>
                        <input type="text" class="form-control" name="rank"><br>
                        <label class="text-light">Language</label>
                        <input type="text" class="form-control" name="language"><br>
                        <label class="text-light">Additional Info</label>
                        <input type="text" class="form-control" name="additional_info"><br>
                        <label class="text-light">Avatar</label><br>
                        <input type="file" name="avatarinput" accept=".jpg, .png">
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