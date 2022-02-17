// Função para troca de cor da caixa tabela simples
function clickCorAzul() {
    document.getElementsByClassName("portlet-title")[0].style = "background-color: #27a9e3!important;"
}

function clickCorVerde() {
    document.getElementsByClassName("portlet-title")[0].style = "background-color: #28b779!important;"
}

function clickCorRoxo() {
    document.getElementsByClassName("portlet-title")[0].style = "background-color: #852b99!important;"
}



$("#box-table").css("display", "none");



$("#btn-cliente").click((e) => {
    $("#box-table").css("display", "block");
    $("#title-table").html("Clientes");
    e.preventDefault();
    $.ajax({
        url: "jsonCliente.php",
        method: "POST",
        data: {},
        dataType: "json"
    }).done(function (result) {
        //Cria e Imprime titulos da tabela 
        $("#tabela").html("<thead><tr><th>#</th><th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>Email</th></tr></thead>");

        $.each(result, function (i, value) {
            //Cria e Imprime dados da tabela 
            $("#tabela").append("<tr><td>" + i + "</td><td>" + value.nome + "</td><td>" + value.cpf + "</td><td>" + value.endereco + "</td><td>" + value.telefone + "</td><td>" + value.email + "</td></tr></tbody>");
        });
    });
});


// Faz consulta no aquivo jsonFornecedores para a montagem da tabela fornecedor
$("#btn-fornecedor").click((e) => {
    $("#box-table").css("display", "block");
    $("#title-table").html("Fornecedores");
    e.preventDefault();
    $.ajax({
        url: "jsonFornecedores.php",
        method: "POST",
        data: {},
        dataType: "json"
    }).done(function (result) {
        //Cria e Imprime titulos da tabela 
        $("#tabela").html("<thead><tr><th>#</th><th>Nome</th><th>CPF</th><th>Cidade</th><th>E-mail</th></thead>");

        $.each(result, function (i, value) {
            //Cria e Imprime dados da tabela 
            $("#tabela").append("<tr><td>" + i + "</td><td>" + value.nome + "</td><td>" + value.cpf + "</td><td>" + value.cidade + "</td><td>" + value.email + "</td></tr></tbody>");
        });
    });
});



// Faz consulta no aquivo jsonUsuarios para a montagem da tabela usuários
$("#btn-usuario").click((e) => {
    $("#box-table").css("display", "block");
    $("#title-table").html("Usuários");
    e.preventDefault();
    $.ajax({
        url: "jsonUsuarios.php",
        method: "POST",
        data: {},
        dataType: "json"
    }).done(function (result) {
        //Cria e Imprime titulos da tabela 
        $("#tabela").html("<thead><tr><th>#</th><th>Nome</th><th>CPF</th><th>Endereço</th><th>Telefone</th><th>Usuário</th></thead>");

        $.each(result, function (i, value) {
            //Cria e Imprime dados da tabela 
            $("#tabela").append("<tr><td>" + i + "</td><td>" + value.nome + "</td><td>" + value.cpf + "</td><td>" + value.endereco + "</td><td>" + value.telefone + "</td><td>" + value.usuario + "</td></tr></tbody>");
        });
    });
});