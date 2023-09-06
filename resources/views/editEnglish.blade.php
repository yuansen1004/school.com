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
        font-size: 50px;
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
                    <form class="form-group"  method="post" action="{{ route('updateEnglish') }}" enctype="multipart/form-data" >
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <h3>Take Attendance</h3>
                    </p>
                    @foreach($englishs as $english)

                    <div>
                    <tr>
                    <td><p class="editSubjectID">ID:</p><input class="form-control"type="text" name="ID" id="ID" value="{{$english->id}}" readonly><br></td>
                   
                    <td><p class="editSubjectName">Name:</p><br><input class="form-control"type="text" name="name" id="name" value="{{$english->name}}"readonly><br></td>

                    <td><p class="editStudentID">StudentID:</p><br><input class="form-control"type="text" name="englishid" id="englishid" value="{{$english->englishid}}"readonly><br></td>
                    
                    <td><p class="editStudentDate">Date:</p><br><input class="form-control"type="date" name="started" id="started" value="{{$english->started}}"></td>
                    <label>
                    <span><br><p class="editSubjectAttend">Attendance:</p></span>
                    <select name="attend" class="attend">
                    <option value="">Select the option below</option>
                    <option value="Attend">attend</option>
                    <option value="Absent">absent</option>
                    <option value="Late">Late</option>
                    </select>
                    </label>
                    </tr>
                      

                    @endforeach
                    <p>
                        <input type="submit" class="editButton" name="edit" value="submit">
                    </p>
                    </form>
                    
                    
                </div>
            </div>
            </div>
            </div>

