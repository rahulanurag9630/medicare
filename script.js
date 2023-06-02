//this is for check the special charecter
function containsSpecialChars(str) {
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    return specialChars.test(str);
}

//this is for checking the number in name
function containsNumbers(str) {
    return /[0-9]/.test(str);
}
function isnan1() {
    let a = document.getElementById("form3Example1cg").value;
    console.log(containsSpecialChars(a));
    if (containsSpecialChars(a) == true) {
        document.getElementById("p").innerHTML = "Invalid name ";
    }
    else if (containsNumbers(a) == true) {
        document.getElementById("p").innerHTML = "Invalid name ";


    }
    else {
        console.log("jdkjd");
        let ele = document.getElementById("p").innerHTML = "";

    }
}

function checkEmail(email)
{
    let a=/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    return a.test(email);
}

function cemail()
{
    let a=document.getElementById("email").value;
    if(checkEmail(a)==false)
    {
        console.log(checkEmail(a));
        document.getElementById("e").innerHTML="invalid email formate";
    }
    else{
        document.getElementById("e").innerHTML="";
    }
}


function CheckPassword(inputtxt) {
    var passw = /^[A-Za-z]\w{7,14}$/;
    return passw.test(inputtxt);
}

function cpass() {
    let a = document.getElementById("pass").value;
    console.log(CheckPassword(a));
    if (CheckPassword(a) == false) {
        document.getElementById("pa").innerHTML = "contain at least one numeric digit, one uppercase and one lowercase letter"
    }
    else {
        document.getElementById("pa").innerHTML = " ";
    }
}
function rpassword() {
    let a = document.getElementById("rpass").value;
    console.log(CheckPassword(a));
    if (CheckPassword(a) == false) {
        document.getElementById("pa1").innerHTML = "contain at least one numeric digit, one uppercase and one lowercase letter"
    }
    else {
        document.getElementById("pa1").innerHTML = " ";
    }
}

//check mob no
function checkMobile(mo)
{
    let mo1=/[7-9]{1}[0-9]{9}/;
    return mo1.test(mo);
}

function cmob()
{
    let mo=document.getElementById("mob").value;
    if(checkMobile(mo)==false)
    {
        document.getElementById("m").innerHTML="invalid mobile number";
    }
    else{
        document.getElementById("m").innerHTML=" ";
    }
}

function submit()
{
    
        var result;  
        var r = confirm("Select an Action!");  
        if (r == true) {  
            result = "You have selected OK!";  
        } else {  
            result = "You have selected Cancelled!";  
        }  
        document.getElementById("conf").innerHTML = result;  
     
}