$(document).ready(function() {

    let i = 0

    $('#add').click(function() {

        i++

        if (i < 0) {

            i = 0

        } 
        
        if ( i == 0) {

            i = 1

        }

        $('#nav-tabs').append('<li id="order_'+i+'"><a href="#tab_'+i+'" class="tab_'+i+'" data-toggle="tab">Pedido '+(i + 1)+'</a></li>')
        $('#tab-content').append('<div class="tab-pane" id="tab_'+i+'"> <input type="hidden" name="pedido[]"> <div class="row"> <div class="col-md-6"> <div class="form-group"> <label>Tamanho</label> <select class="form-control size" id="size_'+i+'" required required oninvalid="this.setCustomValidity("Escolha o tamanho")" oninput="this.setCustomValidity("")"> <option value="">Selecione</option><option>0</option> </select> </div></div></div></div>')

    })

    //Adicionando metodo para checar se existe um campo select vazio
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg !== value;
       }, "Value must not equal arg.");

    
    //Verificar se o select 'TAMANHO' foi selecionado
    $('#orderForm').submit(function(e){
          
           
    })

    //Fechar abas de pedido
    $('#close').click(function() {
        $('#order_' + i).remove();

        if( $('.tab_'+i).click()){

            $('.tab_'+(i - 1)).click()

        }

        i--;
    })    

})