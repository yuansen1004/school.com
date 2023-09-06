
@extends('appStudent')
@section('content')
<style>
    body {
background-color: rgb(200,200,200);
    }
</style>
        <div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
    <form action="{{route('addContactUs')}}" method="post" enctype="multipart/form-data"><br><br>
        @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h3>Comment</h3>
             Name: <input name="name" type="text" class="form-control"><br>
             StudentID: <input name="studentid" type="text" class="form-control"><br>
             Comment<input name="comment" type="text" class="form-control" ><br>
        
        
                    <p>
                        <input type="submit" name="insert" value="Insert">
                    </p>
                    </form>
                </div>
            </div>
            </div>
        </section>
    

@endsection

