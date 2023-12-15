@extends('layouts.app')
<div class="container mt-5 ">
   <div class="row justify-content-center">
      <div class="card col-10">
         <div class="card-body">
            <h2> Addon List <a href="add-addon" class="btn btn-primary" >Add Addon</a> <a href="{{url('product/viewProduct')}}" class="btn btn-danger" >Back</a></h2>
            <br/>
            <div class="card">
               <div class="card-body">
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th>Sr. No.</th>
                           <th>Title</th>
                           <th>Price</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($data as $addon)
                        <tr>
                           <td>{{ $loop->index+1 }}</td>
                           <td>{{$addon->title}}</td>
                           <td>{{$addon->price}}</td>
                           <td>
                              <a href="{{route('delete-addon', $addon->id)}}" class="btn btn-danger btn-rounded waves-effect waves-light"> Delete</a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="mt-5">
               {{$data->links()}}
            </div>
         </div>
      </div>
   </div>
</div>