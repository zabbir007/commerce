@extends('layouts.supplier')

@section('title')  Edit Product @endsection

@section('content')

<div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 col-xl-8">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="22"></span>
                                    </a>
                                    
                                </div>

                                

                                <form action="{{route('updateProduct')}}"  class="parsley-examples" enctype="multipart/form-data" method="post" novalidate>

                                        
                                    @csrf

                                    <?php 
                                        $message=Session::get('message');
                                        if($message){

                                            ?>
                                            <div style="margin-top: 40px;" class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <?php
                                                    echo $message;
                                                    Session::put('message','');
                                                ?>
                                            </div>
                                            <?php
                                        
                                    }
                                    ?>
                                    <?php 
                                        $messageWarning=Session::get('messageWarning');
                                        if($messageWarning){

                                            ?>
                                            <div style="margin-top: 40px;" class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <?php
                                                    echo $messageWarning;
                                                    Session::put('messageWarning','');
                                                ?>
                                            </div>
                                            <?php
                                        
                                    }
                                    ?>
                                    
                                    @if($errors->any())
                                
                                    <div style="margin-top: 40px;" class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                       

                                               <ul>
                                                   @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                   @endforeach
                                               </ul>
                                           
                                       
                                    </div>
                                     @endif


                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <div>
                                                <input type="text" value="{{$singleProductInfo->productName}}" name="productName" class="form-control parsley-validated" required
                                                        data-parsley-required-message="Please Enter Product Name"  placeholder="product Name"/>
                                            </div>
                                        </div>

                                        <div class="form-group" >
                                            <label>Product Image</label>
                                            <div>
                                                <img src="{{asset( $singleProductInfo->productImage )}}" alt="{{$singleProductInfo->productImage}}" class="rounded-circle avatar-lg img-thumbnail"/>
                                                <input type="file" name="productImage" class="dropify"  />
                                                <input type="hidden" name="id" value="{{$singleProductInfo->id}}">
                                                <input type="hidden" name="page" value="{{$page}}">
                                            </div>
                                        </div>



                                         <div class="form-group">
                                            <label>Product Description</label>
                                            <div>
                                                <textarea name="productDescription" required data-parsley-required-message="Please Enter Product Description" class="form-control">{{$singleProductInfo->productDescription}}</textarea>
                                            </div>
                                        </div>

                                         <div class="form-group mb-0 text-center">
                                            <button class="btn btn-success btn-block" id="" type="submit">Update</button>
                                        </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

@endsection