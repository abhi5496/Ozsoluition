<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Add User Form</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   </head>
   <body>
      <div class="container p-4">
         <div class="row justify-content-center ">
            <div class="card col-6">
               <div class="card-body">
                  <h2>Add New Product</h2>
                  <form action="{{route('addProduct')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <label class="form-label">Item Name</label>
                     <input type="text" class="form-control" name="title" required />
                     @if($errors->has('title'))
                     <p class="text-danger">{{$errors->first('title')}}</p>
                     @endif
                     <label class="form-label">Description</label>
                     <textarea name ="description" class="form-control" rows="2"></textarea>
                     @if($errors->has('description'))
                     <p class="text-danger">{{$errors->first('description')}}</p>
                     @endif
                     <label class="form-label">Price</label>
                     <input type="text" class="form-control" name="price"  required/>
                     @if($errors->has('price'))
                     <p class="text-danger">{{$errors->first('price')}}</p>
                     @endif
                     <label class="form-label">Image</label>
                     <input type="file" name="image" class="form-control" required/><br/>
                     <label class="form-label">Having Addon</label>
                     <select class="form-control" name="addon_id">
                        <?php $addons = DB::table('addons')->get();?>
                        @foreach ($addons as $value )
                        <option value="{{$value->id}}">{{$value->title}}</option>
                        @endforeach
                     </select>
                     <br/>
                     <label class="form-label">Having Addon Price</label>
                     <select class="form-control" name="price">
                        <?php $addons = DB::table('addons')->get();?>
                        @foreach ($addons as $value )
                        <option value="{{$value->id}}">{{$value->price}}</option>
                        @endforeach
                     </select>
                     <br/>
                     <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <button type="submit" class="btn btn-success">Submit</button> 
                        <a href="{{url('product/viewProduct')}}" class="btn btn-danger" >Back</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>