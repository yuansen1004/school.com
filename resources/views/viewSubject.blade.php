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
					<th>Student</th>
		            <th>Delete</th>
                    
		        </tr>
		    </thead>
		        <tbody>	
                <tr>
		                	<td>17</td>
							<td>English</td>
			            	<td><a href="{{route('viewEnglish')}}" class="btn btn-warning"><i class ="fas fa-edit">Student</i></a></td>
							<td><a href="" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a></td>
		            </tr> 
					<tr>
		                	<td>18</td>
							<td>Melayu</td>
			            	<td><a href="{{route('viewScholar')}}" class="btn btn-warning"><i class ="fas fa-edit">Student</i></a></td>
							<td><a href="" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a></td>
		            </tr> 
				@foreach($subjects as $subject)
		            
					
					<tr>
		                <td>{{$subject->id}}</td>                       
		                <td>{{$subject->name}}</td>		                    		            						
		                
		                
		                <td><a href="{{route('viewScholar', ['id' => $subject->id])}}" class="btn btn-warning"><i class="fas fa-edit">Student</i></a></td>  
		                <td><a href="{{ route('deleteSubject', ['id' => $subject->id]) }}" 
 						class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
		        </tr> 
                @endforeach

				
		        </tbody>
		        </table>
				
		
	</div>
    </div>
@endsection


