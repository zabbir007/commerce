@extends('layouts.user')

@section('title')  Show All Product @endsection

@section('content')
<style>
::placeholder {
  color: white;
  opacity: 0.6; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: white;
}
.searchBox{
  margin-left: 20%;width:30%;border:1px solid #cce6ff;border-radius:5px;padding: 5px;background-color: #001a33;color:white;
}
</style>

<div class="row">
    <div class="col-12 ">
        <div style="margin-top: 10px;">
             <input type="text" id="searchProductBox" style=" @media (max-width:969px) and (min-width:1000px) {margin-top: 10px;}​" class="searchBox" placeholder="Search Product By Product Name,Description" />
        </div> 

        <div class="card" style="margin-top: 10px;">
          
                
               

            <?php 
                $message=Session::get('message');
                if($message){

                    ?>
                    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
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
            

                @if($errors->any())
            
                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                   

                           <ul>
                               @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                               @endforeach
                           </ul>
                       
                   
                </div>
                 @endif
            <div class="card-body">

              <div> 

              </div> 

                <div class="table-responsive">
                        <table class="table mb-0" id="productTable">
                            <thead class="thead-dark">
                            <tr>
                                
                               
                                <th width="20%">Product Name</th>
                                <th width="20%">Supplier Email</th>
                                <th width="20%">Product Description</th>
                                <th width="20%">Image</th>
                            </tr>
                            </thead>
                             <tbody> 
                            @foreach($productInfo as $product)   
                                <tr>
                                    <td>{{$product->productName}}</td>
                                    <td>{{$product->email}}</td>
                                    <td>{{$product->productDescription}}</td>
                                    <td><img src="{{asset( $product->productImage )}}" alt="{{$product->productName}}"  class="rounded-circle avatar-sm">
                                    </td>
                                   
                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                         <table style="display: none;" class="table mb-0" id="searchProductTable">
                            <thead class="thead-dark">
                            <tr>
                              <th width="20%">Product Name</th>
                              <th width="20%">Supplier Email</th>
                              <th width="20%">Product Description</th>
                              <th width="20%">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                            
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->



            </div> <!-- end card body-->
             <br/>
           <div id="paginationLink">
              {{ $productInfo->links() }}
           </div>
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->



                       

@endsection