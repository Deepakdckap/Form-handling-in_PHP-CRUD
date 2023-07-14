// targeting all the inputs
let fname = document.getElementById("firstname")
let lname = document.getElementById("lastname")
let email = document.getElementById("email")
let web = document.getElementById("website")
let address = document.getElementById("address")
let female = document.getElementById("female")
let male = document.getElementById("male")
let others = document.getElementById("others")
let subbtn = document.getElementById("submit")


subbtn.addEventListener("click",(e)=> {

    if(fname.value !="" && lname.value !="" && email.value != "" && web.value !="" && address.value !=""){
        e.preventDefault();
        // alert("thank you")
    }
    // else if(female.cheaked && male.cheaked && others.cheaked ===""){
    //     alert("please select any option")
    // }
    else{
        e.preventDefault();
        alert("please fill all the inputs")
    } 

})
