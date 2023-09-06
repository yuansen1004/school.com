@extends('app')

@section('content')

<style>
    table{
        margin-left:25px;
    }
</style>
<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
		            <th>ID</th>
                    <th>Name</th>
		            <th>StudentID</th>
                    
                    <th>Action</th>
                    
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($students as $student)
		            <tr>
		                <td>{{$student->id}}</td>
                        
		                    <td>{{$student->name}}</td>
		                    
		            
						
		                <td>{{$student->studentid}}</td>
                        
                        
		                <td>
		                    <a href="{{route('editStudent', ['id' => $student->id])}}" class="btn btn-warning"><i class="fas fa-edit">Edit</i></a> | 
		                    <a href="{{ route('deleteStudent', ['id' => $student->id]) }}" 
 							class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach

				
		        </tbody>
		        </table>
				
		
	</div>
    </div>
@endsection


