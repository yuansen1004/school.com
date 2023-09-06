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
                    <th>StudentId</th>
		            <th>Conmment</th>
                    <th>Action</th>
                    
                    
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($contactUs as $contactUs)
		            <tr>
		                <td>{{$contactUs->id}}</td>
                        
		                    <td>{{$contactUs->name}}</td>
		                    
		            
						
		                <td>{{$contactUs->studentid}}</td>
                        <td>{{$contactUs->comment}}</td>
						
                        
		                <td>
		                    | 
		                    <a href="{{ route('deleteContactUs', ['id' => $contactUs->id]) }}" 
 							class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
							
		                </td>
		            </tr> 
                @endforeach

				
		        </tbody>
		        </table>
				
		
	</div>
    </div>
@endsection


