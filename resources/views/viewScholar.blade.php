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
		            <th>ScholarID</th>
                    <th>Date </th>
					<th>Attendance</th>
                    <th>Action</th>
                    
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($scholars as $scholar)
		            <tr>
		                <td>{{$scholar->id}}</td>
                        
		                    <td>{{$scholar->name}}</td>
		                    
		            
						
		                <td>{{$scholar->scholarid}}</td>
                        <td>{{$scholar->started}}</td>
						<td>{{$scholar->attend}}</td>
                        
		                <td>
		                    | 
		                    <a href="{{ route('deleteScholar', ['id' => $scholar->id]) }}" 
 							class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
							<a href="{{route('editScholar', ['id' => $scholar->id])}}" class="btn btn-warning"><i class="fas fa-edit">Take Attendance</i></a>
		                </td>
		            </tr> 
                @endforeach

				
		        </tbody>
		        </table>
				
		
	</div>
    </div>
@endsection


