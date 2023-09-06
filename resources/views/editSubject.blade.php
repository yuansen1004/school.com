<style>
        body{
        background-color: grey;
    }

    .container{
        display:flex;
        align-items: center;
        justify-content: center;
        margin-top:160px;
        
        margin-right: 560px;
        margin-left: 560px;
        padding-top: 20px;
        padding-bottom:20px;
        border-radius: 25px;
        border: 2px solid black;
    }

    h3{
        font-size: 35px;
    }

    .editSubjectId{
        margin-left: 70px;
        margin-bottom: -15px;
    }

     .editSubjectName{
        margin-left: 60px;
        margin-bottom: -15px;
    }

    .form-control{
        border-radius:25px;
    }

    .editButton{
        margin-left: 55px;
        width: 60px;
        background-color: black;
        color:yellow;
        border-radius: 25px;
        padding: 5px;
    }

    

    
</style>

<div class="container" >
                <div class="row" >
                <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
                    <form class="form-group"  method="post" action="{{ route('updateSubject') }}" enctype="multipart/form-data" >
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <h3>Edit Subject</h3>
                    </p>
                    @foreach($subjects as $subject)

                    <div>
                    <tr>
                    <td><p class="editSubjectID">ID:</p><br><input class="form-control"type="text" name="ID" id="ID" value="{{$subject->id}}" readonly><br></td>                   
                    <td><p class="editSubjectName">Name:</p><br><input class="form-control"type="text" name="name" id="name" value="{{$subject->name}}"><br></td>
                    </tr>
                    @endforeach
                    <p>
                        <input class="editButton" type="submit" name="edit" value="edit">
                    </p>
                    
                    </form>
                    
                    
                </div>
            </div>
            </div>
            </div>

