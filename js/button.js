var select = false;
function response(id){
    if(select != false){
        document.getElementById(select).style.background="#f8f9fa";
        document.getElementById(select).style.color="black";
    }
    document.getElementById(id).style.background="green";
    document.getElementById(id).style.color="white";
    select = id;
}