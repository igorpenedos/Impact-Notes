function showC(name){
    if (document.getElementById(name).style.display == "none"){
        document.getElementById(name).style.display = "block";
    }else{
        document.getElementById(name).style.display = "none";
    }
}

function closeA(){
    var all = document.getElementsByClassName('contentDrop');
    for (var i = 0; i < all.length; i++) {
        all[i].style.display = "none";
    }
}