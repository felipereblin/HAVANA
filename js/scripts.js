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

$('#form').on('submit', function(){
	if(($('#nome')=='' || $('#email')=='' || $('#comentario')=='')){
		alert("Você deve preecher todos os campos!");
	}
});

$('.carrinhoProdutosDetalhes').on('click', function(){
	$('.carrinhoProdutosDetalhes').text('Produto adicionado ao carrinho!').addClass('disabled');
})
