$("#product_search1, #product_search2, #product_search3").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  var child = $(this).attr('id');
  var child = child.replace("product_search", "");
  child     = "td:nth-child("+child+")";
  
  $("table tr").each(function(index) {
      if (index !== 0) {
        $row = $(this);
        var id = $row.find(child).text().toLowerCase();
        if (id.indexOf(value) !== 0) {
              $row.hide();
          }
          else {
              $row.show();
          }
      } 
  });
});

function resetForm(){
  $('#product_form')[0].reset();
  $("#reset_form_btn").css("display","none");
  $("#update_product_id").val("");
  $("#product_register_submit").val("CADASTRAR PRODUTO");
}
