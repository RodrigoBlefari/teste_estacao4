$("#product_form").submit(function(e) {

    var form = $(this);
    var url = "inc/functions.php";
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               refreshTable();
           }
         });
    e.preventDefault(); // avoid to execute the actual submit of the form.
});

function deleteProduct(id){
    var url = "inc/functions.php";
    $.ajax({
           type: "POST",
           url: url,
           data: {'delete_product': id},
           success: function(data)
           {    
             //data = JSON.parse(data);
             refreshTable();
               
           }
         });
}

function preUpdateProduct(id){
    var url = "inc/functions.php";
    $.ajax({
           type: "POST",
           url: url,
           data: {'preupdate_product': id},
           success: function(data)
           {    
                data = JSON.parse(data);
                $data = data[0];
                //alert(data);
                //console.log(data[0]["id"]);
                $("#product_name").val($data["nome"]);
                $("#product_description").val($data["descricao"]);
                $("#product_price").val($data["preco"]);
                $("#update_product_id").val($data["id"]);
                $("#product_register_submit").val("ATUALIZAR CADASTRO");
                $("#reset_form_btn").css("display","inline");
           }
    });
}

function refreshTable(){
    var url = "inc/functions.php";
    $.ajax({
           type: "POST",
           url: url,
           data: {'refresh_table': '1'},
           success: function(data)
           {    
             data = JSON.parse(data);
               $("#product_table").html(data);
           }
         });
}
