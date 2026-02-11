
const f1 = document.getElementById("form-1");
const f2 = document.getElementById("form-2");
const f3 = document.getElementById("form-3")
const f4 = document.getElementById("form-4");

function decrementSteppage(page){
    if(page === 2){
        f1.classList.add("enabled");
        f1.classList.remove("disabled");
        f2.classList.remove("enabled");
        f2.classList.add("disabled");

    }else if(page === 3){
        f2.classList.add("enabled");
        f2.classList.remove("disabled");
        f3.classList.remove("enabled");
        f3.classList.add("disabled");
    }else if(page === 4){
        f3.classList.add("enabled");
        f3.classList.remove("disabled");
        f4.classList.remove("enabled");
        f4.classList.add("disabled");
    }
}


function incrementSteppage(page){
    if(page === 1){
        f2.classList.add("enabled");
        f2.classList.remove("disabled");
        f1.classList.remove("enabled");
        f1.classList.add("disabled");
    }else if(page === 2){
        f3.classList.add("enabled");
        f3.classList.remove("disabled");
        f2.classList.remove("enabled");
        f2.classList.add("disabled");
    }else if(page === 3){
        f4.classList.add("enabled");
        f4.classList.remove("disabled");
        f3.classList.remove("enabled");
        f3.classList.add("disabled");
    }
}
