var select = false;
function response(id){
    if(select != false){
        document.getElementById(select).style.Reset();
    }
    document.getElementById(id).style.background="green";
    document.getElementById(id).style.color="white";
    select = id;
}