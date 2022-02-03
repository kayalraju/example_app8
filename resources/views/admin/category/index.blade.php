<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
           All Category<b>  </b>
          

        </h2>
    </x-slot>

    <div class="py-12"> 
   <div class="container">
    <div class="row">


    <div class="col-md-8">
     <div class="card">


     


          <div class="card-header"> All Category </div>
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Category Name</th>
      <th scope="col">User</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
          <!-- @php($i = 1) -->
        
    <tr>
      <th scope="row">  </th>
      <td> </td>
      <td> </td> 
      <td> 
          
          
         
       </td>
       <td> 
       <a href="" class="btn btn-info">Edit</a>
       <a href="" class="btn btn-danger">Delete</a>
        </td> 


    </tr> 
   


  </tbody>
</table>

  
       </div>
    </div>


    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> Add Category </div>
          <div class="card-body">
  	 <form action="{{ route('store.category') }}" method="POST">
          @csrf
	<div class="form-group">
	    <label for="exampleInputEmail1">Category Name</label>
	    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	  
      	@error('category_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror
    </div>
  		<button type="submit" class="btn btn-primary">Add Category</button>
	</form>

       </div>

    </div>
  </div> 
 


    </div>
  </div> 



   <!-- Trash Part -->

<!-- <div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
			<div class="card-header">Trash List </div>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">SL No</th>
						<th scope="col">Category Name</th>
						<th scope="col">User</th>
						<th scope="col">Created At</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
			<tbody>
				

				<tr>
					<th scope="row">hjh </th>
					<td> jhgj </td>
					<td> jih </td> 
					<td> 

					</td>
					<td> 
						<a href="" class="btn btn-info">Restore</a>
						<a href="" class="btn btn-danger">P Delete</a>
					</td> 
				</tr> 
			</tbody>
			</table>
			</div>
			</div>


		<div class="col-md-4">

		</div> 



	</div>
</div>  -->

   <!-- End Trush -->



    </div>
</x-app-layout>
