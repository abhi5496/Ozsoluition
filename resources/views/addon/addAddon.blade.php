<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Add User Form</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   </head>
   <body>
      <div class="container p-5">
         <div class="row justify-content-center">
            <div class="card col-4">
               <div class="card-body">
                  <h1>Add New User</h1>
                  <Form action="{{route('addAddon')}}" method="POST" >
                     @csrf
                     <div class="mb-3">
                        <lebel class="form-lebel">Title</lebel>
                        <input type ="text" class="form-control" name="title" required>
                     </div>
                     <div class="mb-3">
                        <lebel class="form-lebel">Price</lebel>
                        <input type ="text" class="form-control" name="price" required>
                     </div>
                     <button type ="submit" class="btn btn-success">Submit</button>
                     <a href="{{url('addon/viewAddon')}}" class="btn btn-danger btn-rounded waves-effect waves-light"> Back</a>
                  </Form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>