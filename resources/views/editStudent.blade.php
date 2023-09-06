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
        margin-left: -50px;
        margin-bottom: -40px;
        font-size: 30px;
    }

    .form-control{
        width:250px;
        height:50px;
        font-size:25px;
        text-align:center;
    }
     .editSubjectName{
        margin-left: -90px;
        margin-bottom: -58px;
        font-size: 30px;
    }

    .editStudentID{
        margin-left: -141px;
        margin-bottom: -58px;
        font-size: 30px;
    }

    .editStudentDate{
        margin-left: -75px;
        margin-bottom: -58px;
        font-size: 30px;
    }

    .editSubjectAttend{
        margin-left: -155px;
        margin-bottom: -38px;
        font-size: 30px;
    }
    .attend{
        width:250px;
        height:50px;
        font-size:20px;
        border-radius:25px;
    }

    .form-control{
        border-radius:25px;
    }

    .editButton{
        margin-left: px;       
        background-color: yellow;
        color:black;
        border-radius: 25px;
        padding: 5px;
        width:250px;
        height:50px;
        font-size:20;
    }
</style>
<div class="container" >
                <div class="row" >
                <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
                    <form class="form-group"  method="post" action="{{ route('updateStudent') }}" enctype="multipart/form-data" >
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <h3>Edit Student</h3>
                    </p>
                    @foreach($students as $student)

                    <div>
                    <tr> 
                    <td><p class="editSubjectID">ID:</p><br><input class="form-control"type="text" name="ID" id="ID" value="{{$student->id}}" readonly><br></td>
                   
                    <td><p class="editSubjectName">Name:</p><br><input class="form-control"type="text" name="name" id="name" value="{{$student->name}}"><br></td>

                    <td><p class="editStudentID">StudentID:</p><br><input class="form-control"type="text" name="studentid" id="studentid" value="{{$student->studentid}}"><br></td>
                    
                    
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

