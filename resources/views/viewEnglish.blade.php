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
                    <th>Date </th>
					<th>Attendance</th>
                    <th>Action</th>
                    
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($englishs as $english)
		            <tr>
		                <td>{{$english->id}}</td>
                        
		                    <td>{{$english->name}}</td>
		                    
		            
						
		                <td>{{$english->englishid}}</td>
                        <td>{{$english->started}}</td>
						<td>{{$english->attend}}</td>
                        
		                <td>
		                    | 
		                    <a href="{{ route('deleteEnglish', ['id' => $english->id]) }}" 
 							class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
							<a href="{{route('editEnglish', ['id' => $english->id])}}" class="btn btn-warning"><i class="fas fa-edit">Take Attendance</i></a>
		                </td>
		            </tr> 
                @endforeach

				
		        </tbody>
		        </table>
				
		
	</div>
    </div>
@endsection


