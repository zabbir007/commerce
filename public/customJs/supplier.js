 $(function(){

  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        
$(".btnProductDelete").click(function(){
                 var element=$(this);
                 var id = element.attr("id");
                 var APP_URL = $('meta[name="_base_url"]').attr('content');
                 swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this  file!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

                        
                         jQuery.ajax({
                            url: APP_URL+'/supplier/delete-product',
                            method: 'post',
                            data:{id:id},
                            success: function(result){


                                location.reload(true);
                            },
                              error: function() {
                                alert('Error occurs!');
                             }
                        });



                    swal("Poof! Your  file has been deleted!", {
                      icon: "success",
                    });
                  } else {
                    swal("Your  file is safe!");
                  }
                });
            })


//Search product

   $("#searchProductBox").keyup(function(){
        var searchText=$.trim($(this).val());

        var APP_URL = $('meta[name="_base_url"]').attr('content');

        $("#productTable").hide();
        $("#paginationLink").hide();

        if($.trim(searchText)){

              jQuery.ajax({
              url: APP_URL+'/supplier/search-product',
              method: 'post',
              data:{searchText:searchText},
              success: function(result){
                 $("#searchProductTable").find("tr:gt(0)").remove();
                  //console.log(result);
                  var info = JSON.parse(result);

                  var data="";
                  var image="";
                  
                   $.each(info, function (key, val) {
                  
                   
                    data+='<tr/><td>'+val.productName+'</td><td>'+val.productDescription+'</td><td><img src=" '+APP_URL+'/'+val.productImage+'" alt="'+val.productName+'"  class="rounded-circle avatar-sm"/></td><td><a href="'+APP_URL+'/supplier/edit-product/'+val.id+'/1'+'" class="btn btn-warning  waves-effect waves-light">Edit</a><a id="'+val.id+'" class="btn btn-danger  waves-effect waves-light btnProductDelete">Delete</a></td></tr/>';
                   
                 

                
                   
              });

                   
                  $("#searchProductTable").show().append(data).on('click','.btnProductDelete', function () {

                  var element=$(this);
                  var id = element.attr("id");
                  var APP_URL = $('meta[name="_base_url"]').attr('content');
                
                 swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this record!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

                        
                         jQuery.ajax({
                            url: APP_URL+'/supplier/delete-product',
                            method: 'post',
                            data:{id:id},
                            success: function(result){

                                location.reload(true);
                            },
                              error: function() {
                                alert('Error occurs!');
                             }
                        });



                    swal("Poof! Your  record has been deleted!", {
                      icon: "success",
                    });
                  } else {
                    swal("Your  record is safe!");
                  }
                });

                
                   
                  });
              },
                error: function() {
                  alert('Error occurs!');
               }
          });

        }else{

        $("#productTable").show();
        $("#paginationLink").show();
        $("#searchProductTable").hide();

        }

        

   });



 })