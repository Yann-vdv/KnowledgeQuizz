function nbQstart(){
    if(document.getElementById("nbQ").classList=="d-flex"){
        document.getElementById("nbQ").classList="d-none"
    }
    else{
        document.getElementById("nbQ").classList="d-flex";
    }
};
var nbquestion=2;
function nvQuestion(){
    nbquestion = nbquestion + 1;
    var Tquestion = document.createElement("h3");
    Tquestion.innerHTML = "Question" + nbquestion;
    document.getElementById("questions").append(Tquestion);
    var ITquestion = document.createElement("input");
    ITquestion.type = "text";
    ITquestion.name = "question" + nbquestion;
    ITquestion.classList = "mt-3";
    ITquestion.style.width = "50%";
    document.getElementById("questions").append(ITquestion);
    var div1 = document.createElement("div");
    div1.classList = "row d-flex my-4 mx-0";
    var ICB1 = document.createElement("input");                     //réponse 1
    ICB1.type = "checkbox";
    ICB1.name = `Bresponse${nbquestion}.1`;
    ICB1.classList = "col-1 align-self-center"
    div1.appendChild(ICB1);
    var Sdiv1 = document.createElement("div");                  
    Sdiv1.classList = "col-4";
    var h31 = document.createElement("h3");
    h31.innerHTML = "Réponse 1";
    Sdiv1.appendChild(h31);
    var IR1 = document.createElement("input");
    IR1.type = "text";
    IR1.name = `Bresponse${nbquestion}.1`;
    IR1.placeholder = "première réponse";
    IR1.style.width = "100%";
    Sdiv1.appendChild(IR1);
    div1.appendChild(Sdiv1);
    var ICB2 = document.createElement("input");             //reponse 2
    ICB2.type = "checkbox";
    ICB2.name = `Bresponse${nbquestion}.2`;
    ICB2.classList = "col-1 align-self-center"
    div1.appendChild(ICB2);
    var Sdiv2 = document.createElement("div");
    Sdiv2.classList = "col-4";
    var h32 = document.createElement("h3");
    h32.innerHTML = "Réponse 2";
    Sdiv2.appendChild(h32);
    var IR2 = document.createElement("input");
    IR2.type = "text";
    IR2.name = `Bresponse${nbquestion}.2`;
    IR2.placeholder = "deuxième réponse";
    IR2.style.width = "100%";
    Sdiv2.appendChild(IR2);
    div1.appendChild(Sdiv2);
    document.getElementById("questions").append(div1);
    var div2 = document.createElement("div");
    div2.classList = "row d-flex my-4 mx-0";
    var ICB3 = document.createElement("input");             //reponse 3
    ICB3.type = "checkbox";
    ICB3.name = `Bresponse${nbquestion}.3`;
    ICB3.classList = "col-1 align-self-center"
    div2.appendChild(ICB3);
    var Sdiv3 = document.createElement("div");
    Sdiv3.classList = "col-4";
    var h33 = document.createElement("h3");
    h33.innerHTML = "Réponse 3";
    Sdiv3.appendChild(h33);
    var IR3 = document.createElement("input");
    IR3.type = "text";
    IR3.name = `Bresponse${nbquestion}.3`;
    IR3.placeholder = "troisième réponse";
    IR3.style.width = "100%";
    Sdiv3.appendChild(IR3);
    div2.appendChild(Sdiv3);
    var ICB4 = document.createElement("input");         //reponse 4
    ICB4.type = "checkbox";
    ICB4.name = `Bresponse${nbquestion}.4`;
    ICB4.classList = "col-1 align-self-center"
    div2.appendChild(ICB4);
    var Sdiv4 = document.createElement("div");
    Sdiv4.classList = "col-4";
    var h34 = document.createElement("h3");
    h34.innerHTML = "Réponse 4";
    Sdiv4.appendChild(h34);
    var IR4 = document.createElement("input");
    IR4.type = "text";
    IR4.name = `Bresponse${nbquestion}.4`;
    IR4.placeholder = "quatrième réponse";
    IR4.style.width = "100%";
    Sdiv4.appendChild(IR4);
    div2.appendChild(Sdiv4);
    document.getElementById("questions").append(div2);
    var coche = document.createElement("p");
    coche.innerHTML = "Veuillez cocher la bonne réponse";
    document.getElementById("questions").append(coche);
}