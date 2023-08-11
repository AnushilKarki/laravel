function checkacademic(){
    alert('hello');
 var academic = document.getElementById("academic").value;

    if(academic===slc){
        document.getElementById("demo").innerHTML = "You selected: ";
    }else if (academic===plus2) {
        document.getElementById("plus2grade").style.display="block";
        document.getElementById("plus2passoutyear").style.display="block";
    }else if(academic===bachelor){
        document.getElementById("bachelorgrade").style.display="block";
        document.getElementById("bachelorpassoutyear").style.display="block";
    }else {
        document.getElementById("mastergrade").style.display="block";
        document.getElementById("masterpassoutyear").style.display="block";
    }

}