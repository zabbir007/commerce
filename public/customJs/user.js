 $(function(){

  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 

       

//Search product

   $("#searchProductBox").keyup(function(){
        var searchText=$.trim($(this).val());

        var APP_URL = $('meta[name="_base_url"]').attr('content');

        $("#productTable").hide();
        $("#paginationLink").hide();

        if($.trim(searchText)){

              jQuery.ajax({
              url: APP_URL+'/user/search-all-product',
              method: 'post',
              data:{searchText:searchText},
              success: function(result){
                 $("#searchProductTable").find("tr:gt(0)").remove();
                  //console.log(result);
                  var info = JSON.parse(result);

                  var data="";
                  var image="";
                  
                   $.each(info, function (key, val) {
                  
                   
                    data+='<tr/><td>'+val.productName+'</td><td>'+val.email+'</td><td>'+val.productDescription+'</td><td><img src=" '+APP_URL+'/'+val.productImage+'" alt="'+val.productName+'"  class="rounded-circle avatar-sm"/></td></tr/>';
                   
                 

                
                   
              });

                   
                  $("#searchProductTable").show().append(data);
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