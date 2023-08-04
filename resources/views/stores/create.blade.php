@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>Create a store</h2>
                <form action="/stores" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text">The name of store</div>
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">bio</label>
                        <input type="text" name="bio" class="form-control" id="bio" aria-describedby="bioHelp">
                        <div id="bioHelp" class="form-text">The bio of store</div>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">location</label>
                        <input type="text" name="location" class="form-control" id="location" aria-describedby="locationHelp">
                        <div id="locationHelp" class="form-text">The text of store</div>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" name="img" class="form-label">Image</label>
                        <input name="img" class="form-control" type="file" id="formFile">
                    </div>
                    
                    
                    <input type="submit" value="create">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection