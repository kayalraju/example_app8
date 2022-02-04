<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
           All Category<b>  </b>
          

        </h2>
    </x-slot>

    <div class="py-12"> 
   
          <div class="card-header"> All Brand </div>
    

    
    <div class="col-md-4">
     <div class="card">
          <div class="card-header"> update Brand </div>
          <div class="card-body">
          
         
         
          <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">update Brand name</label>
    <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('brand_name')
               <span class="text-danger"> {{ $message }}</span>
          @enderror
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">update Brand Image</label>
    <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          @error('brand_image')
               <span class="text-danger"> {{ $message }}</span>
          @enderror
  </div>
     
  <button type="submit" class="btn btn-primary">update Brand</button>
</form>
       </div>

    </div>
  </div> 
    



   <!-- Trash Part -->

  

   <!-- End Trush -->



    </div>
</x-app-layout>
