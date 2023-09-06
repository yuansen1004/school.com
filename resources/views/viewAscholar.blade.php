@extends('appStudent')

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
                        
		                
		            </tr> 
                @endforeach

				
		        </tbody>
		        </table>
				
		
	</div>
    </div>
@endsection


