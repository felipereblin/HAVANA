$('#quantity').on('blur', function(){
    var price = "69.50";
    var quantity = $('#quantity').val();
    if(!isNaN(quantity)){
        var newPrice = (price * quantity);
        $('p.precoProdutosDetalhe').text("R$" + newPrice);
    }else{
        $('p.precoProdutosDetalhe').text("R$" + price);
    }
});