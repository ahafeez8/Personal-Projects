 
$('#submit').click(function()
 {
    var star = $('input:radio[name=star]:checked').val();
    var category = $("#category").find('option:selected').val();
    var item = $("#item").val();
    var price = $("#price").val();
    $("#hide-star").val(star);
    $("#hide-categ").val(category);
    $("#hide-item").val(item);
    $("#hide-price").val(price);
}
);