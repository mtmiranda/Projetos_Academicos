

function escondeTela() {

document.getElementById("edita-segunda-section").style.visibility = "hidden";

}



function mudaTela () {
document.getElementById("edita-section").style.visibility = "hidden";
document.getElementById("edita-segunda-section").style.visibility = "visible";


}


//criando o botão
var botaoAdicionar = document.querySelector("#adicionar");
botaoAdicionar.addEventListener("click", function(event) {
    
    //Prever o evento do botão
    event.preventDefault();
    
    var form = document.querySelector("#form-adiciona");


    var comboPacientes = document.getElementById("cboPacientes");
    var index = comboPacientes.selectedIndex;

    var nome = form.nome.value;

    

    if(index==0) {
        criaSaudavel(nome);
    }

     if (index==1) {
        criaRegular(nome);
    }

    if (index==2) {
        criaEnfermo(nome);
    }
  
    form.reset();


});


function criaSaudavel(nome) {
   // var drags = document.querySelector("#drag_0");
    var ul = document.querySelector("#saudavel");
    

    var li = document.createElement("li");

    //Mudando o seu conteúdo
    li.textContent = nome;

    //Adicionando o titulo na div
    ul.appendChild(li);


    
}


function criaRegular(nome) {
    var ul = document.querySelector("#regular");


    var li = document.createElement("li");

    //Mudando o seu conteúdo
    li.textContent = nome;

    //Adicionando o titulo na div
    ul.appendChild(li);


    
}



function criaEnfermo(nome) {
    var ul = document.querySelector("#enfermo");


    var li = document.createElement("li");

    //Mudando o seu conteúdo
    li.textContent = nome;

    //Adicionando o titulo na div
    ul.appendChild(li);

    
}