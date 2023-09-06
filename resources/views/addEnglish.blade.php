
@extends('app')
@section('content')
<style>
    body {
background-color: rgb(200,200,200);
    }
</style>
        <div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
    <form action="{{route('addEnglish')}}" method="post" enctype="multipart/form-data"><br><br>
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
            <h3>Add New English</h3>
             Name: <input name="name" type="text" class="form-control"><br>
             EnglishID: <input name="englishid" type="text" class="form-control"><br>
             Date:<input type="date" class="form-control" name="started" id="started"><br>
             <label>
      <span>Attendance</span>
      <select name="attend">
      <option value="">Select the option below</option>
      <option value="None">none</option>
      
      </select>
        </label>
                    <p>
                        <input type="submit" name="insert" value="Insert">
                    </p>
                    </form>
                </div>
            </div>
            </div>
        </section>
    

@endsection

