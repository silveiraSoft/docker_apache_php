$(document).ready(function() {
var user_id, opcion;
opcion = 4;
//jQuery.support.cors = true;    
tabelaDesenvolvedores = $('#tabelaDesenvolvedores').DataTable({
    "ajax":{            
        "url": "http://localhost:8080/developers", 
        "method": 'GET', //usamos el metodo POST
        "crossDomain": true,
        //"data":"",
        //"data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "nome"},
        {"data": "sexo"},
        {"data": "idade"},
        {"data": "hobby"},
        {"data": "dataNascimento"},
        {"defaultContent": 
        "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>Editar</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>Remover</i></button></div></div>"
        }
        
        
    ]
    //linguagem Português
    ,"columnDefs":[{
                    "targets": -1,
                    "data":null,
                    "defaultContent":"<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>Editar</i></button><button class='btn btn-danger btn-sm btnBorrar'>Remover</button></div></div>"
                    }
                ]
    ,
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "Não se encontraram resultados",
        "info": "Mostrando registros do _START_ ao _END_ de um total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros do 0 ao 0 de um total de 0 registros",
        "infoFiltered": "(filtrado de um total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primeiro",
            "sLast":"Último",
            "sNext":"Seguinte",
            "sPrevious": "Anterior"
        },
        "sProcessing":"Processando...",
    }
}); 

$(document).on("keydown", "#developer_hobby", function () {
    var caracteresRestantes = 255;
    var caracteresDigitados = parseInt($(this).val().length);
    var caracteresRestantes = caracteresRestantes - caracteresDigitados;
    $(".caracteres").text(caracteresRestantes);
});


var fila; //captura a fila, para editar ou eliminar
/**
*
* submit para salvar e Actuazar
*/

$('#formDesenvolvedor').submit(function(e){                         
    e.preventDefault(); //evita o comportamento normal do submit, a recarga total da página
    nome = $.trim($('#developer_nome').val());    
    idade = $.trim($('#developer_idade').val());
    hobby = $.trim($('#developer_hobby').val());    
    dataNascimento = $.trim($('#developer_dataNascimento').val());    
    sexo = $.trim($('#developer_sexo').val());
    if(user_id === null && opcion == 1){
        url = "http://localhost:8080/developers";
        method = "POST";
    }else if(opcion==2 && user_id > 0) {
        url = "http://localhost:8080/developers/"+user_id;
        method = "PUT";
    }
    $.ajax({
      url: url,
      type: method,
      contentType: "application/json; charset=utf-8",
      datatype:"json",    
      data:  JSON.stringify({nome:nome, sexo:sexo, idade:idade, hobby:hobby, dataNascimento:dataNascimento}),
      //data:  JSON.stringify({"nome":nome, "sexo":sexo, "idade":idade, "hobby":hobby, "dataNascimento":dataNascimento}),
      //data:{"nome":nome,"sexo":sexo,"idade":idade,"hobby":hobby,"dataNascimento":dataNascimento},
      success: function(data) {
        tabelaDesenvolvedores.ajax.reload(null, false);
       }
    });                 
    $('#modalDesenvolvedor').modal('hide');                                                          
});
        
 

//limpar os campos antes de cadastrar novo
$("#btnNovo").click(function(){
    opcion = 1; //cadastrar           
    user_id=null;
    $("#formDesenvolvedor").trigger("reset");
    $(".modal-header").css( "background-color", "#17a2b8");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Novo Desenvolvedor");
    $('#modalDesenvolvedor').modal('show');      
});

//Editar        
$(document).on("click", ".btnEditar", function(){               
    opcion = 2;//editar
    fila = $(this).closest("tr");           
    user_id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
    nome = fila.find('td:eq(1)').text();
    sexo = fila.find('td:eq(2)').text();
    idade = parseInt(fila.find('td:eq(3)').text());
    hobby = fila.find('td:eq(4)').text();
    dataNascimento = fila.find('td:eq(5)').text();
    $("#developer_nome").val(nome);
    $("#developer_sexo").val(sexo);
    $("#developer_idade").val(idade);
    $("#developer_hobby").val(hobby);
    $("#developer_dataNascimento").val(dataNascimento);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Editar Desenvolvedor");       
    $('#modalDesenvolvedor').modal('show');         
});

//Borrar
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    user_id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;     
    opcion = 3; //eliminar        
    var respuesta = confirm("¿Quer deletar o registro "+user_id+"?");                
    if (respuesta) {            
        $.ajax({
          url: "http://localhost:8080/developers/"+user_id,
          type: "DELETE",
          datatype:"json",    
          data: "",    
          success: function() {
              tabelaDesenvolvedores.row(fila.parents('tr')).remove().draw();                  
           }
        }); 
    }
 });
         
});