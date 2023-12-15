@extends('layouts.app')
<div class="container mt-5 ">
   <div class="card col-12">
      <div class="card-body">
         <h2> Product List <br/> <a href="{{url('product/add-product')}}" class="btn btn-primary" >Add Product</a>
            <a href="{{url('addon/viewAddon')}}" class="btn btn-secondary">Show Addon List</a>
         </h2>
         <br/>
         <div class="card">
            <div class="card-body">
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th>Sr. No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Having Addon</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($data as $product)
                     <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                           <img src="/product/{{$product->image}}" class="rounded-circle" width="65" height="65" />
                        </td>
                        <td>
                           <?php $addons = DB::table('addons')->where(['id'=>$product->addon_id])->first();?>
                           {{$addons->title}}
                        </td>
                        <td>
                           <a href="{{route('delete-product', $product->id)}}" class="btn btn-danger btn-rounded waves-effect waves-light"> Delete</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         {{$data->links()}}
      </div>
   </div>
</div>