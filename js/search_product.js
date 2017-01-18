/**
 * Search for a particular product
 * and autocomplete fields
 * @param {}
 * @return {}
 */
function searchProduct(){
	product = $("#product_search").val();
	url = "../inventory/getdata/product/" + product;
	
	$.ajax({
        type: "GET",
        url: url,
        success : function(data){
        	data = JSON.parse(data);
        	
        	$("#prod_names").val(data[0]['name']);
        	$("#prod_codes").val(data[0]['code']);
        	$("#prod_forms").val(data[0]['formulation']);
        	$("#medicine_cats").val(data[0]['category']);
        	$("#notes").html(data[0]['note']);
        	path = '../' + data[0]['path'];
        	element = '<img src="' + path + '" alt="" height="100px" width="140px"> ';
        	$("#pimage").html(element);

          	/*$("#err_msg").html("Operation Completed Successfully");
            $("#alert").attr('class', 'alert alert-success alert-dismissable');
            $("#alert").show(1000).delay(5000).hide(1000);*/               
        }
    });
}