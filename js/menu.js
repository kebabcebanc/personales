var main;
var cPage;
var options;

main=document.getElementsByClassName("menuHeader");
options=["Home", "Ofertas", "Casa", "Cama"];
addLogo();

function addLogo(){
    var ancho;
    var logo;
    var actualPage;

    ancho=document.createElement("div");
    ancho.classList.add("ancho");

    logo=createLogo();
    actualPage=createActualPage();
    optionsView=createOptionView();

    ancho.appendChild(logo);
    ancho.appendChild(actualPage);
    ancho.appendChild(optionsView);

    main.appendChild(ancho);
}

function createLogo(){
    var logo;

    logo=document.createElement("div");
    logo.classList.add("clMenu");
    logo.classList.add("menuLogo");
    logo.innerHTML="Laravel";

    return logo;
}

function createActualPage(){
    var page;
    var center;

    page=document.createElement("div");
    page.classList.add("clMenu");
    page.classList.add("actualPage");

    center=createCenterLogo();

    page.appendChild(center);

    return page;
}

function createCenterLogo(){
    var center;

    center=document.createElement("center");
    if (cPage!=""){
        center.innerHTML=toUpperCase(cPage);
    }else{
        center.innerHTML="HOME";
    }

    return center;
}

function createOptionView(){
    var optionsView;
    var table;

    optionsView=document.createElement("div");
    optionsView.classList.add("clMenu");
    optionsView.classList.add("cloptions");

    table=createTable();

}

function createTable(){
    var i=0;
    var table;
    var fila;

    table=document.createElement("table");
    table.style.border="0px";

    fila=document.createElement("tr");

    while(i<4){
        if(options[i]!="cPage"){
            option=createOption(options[i]);
            fila.appendChild(option);
        }
        i++;
    }

    table.appendChild(fila);

}

function createOption(text){
    var option;
    var a;

    option=document.createElement("td");
    option.classList.add("menuOption");

    a=document.createElement("a");
    a.href=("?env="+text);
    a.innerHTML=text;

    option.appendChild(a);

    return option;
}
