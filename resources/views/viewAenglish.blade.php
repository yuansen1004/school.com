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
		            <th>StudentID</th>
                    <th>Date </th>
					<th>Attendance</th>
                   
                    
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
                        
		                
		            </tr> 
                @endforeach

				
		        </tbody>
		        </table>
				
		
	</div>
    </div>
@endsection


