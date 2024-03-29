//this fieldDiplsay is For diplsay input depend on type of File 

let fliedsShow="";

const Form = document.querySelector('#FormFileAdd');
//code for display fields depend on type selected in radoi button
let commandFields = document.querySelector("#commandFields");
let emailFields = document.querySelector("#emailFields");
let FacrotyFields = document.querySelector("#FacrotyFields");
let estimateFields = document.querySelector("#estimateFields");

let radioButtons = document.querySelectorAll('input[name="type_file"]');
document.addEventListener('DOMContentLoaded', ()=> {
    console.log(commandFields)
    commandFields.style.display="none"
    emailFields.style.display="none"
    FacrotyFields.style.display="none"
    estimateFields.style.display="none"

    // Add change event listener to each radio button
    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function(event) {
            if (event.target.checked) {
                showFields(event.target);
            }
        });
    });

});

//function to show Display
// param @clicked : radoi clicked name 
const showFields = (clicked)=>{
    //first check if something already checked by check varibale that hold old checked
    if(fliedsShow!==""){
        switch(fliedsShow.value){
            case "Email":
                emailFields.style.display="none";
            break;
            case "Factory":
                FacrotyFields.style.display="none";
            break;
            case "Quote":
                estimateFields.style.display="none";
            break;
            case "Command":
                commandFields.style.display="none";
            break;
            default:
                console.log('something went Wrong');
        }
    }
    //assigne variable to check
  

    switch(clicked.value){
        case "Email":
            emailFields.style.display="block";
        break;
        case "Factory":
            FacrotyFields.style.display="block";
        break;
        case "Quote":
            estimateFields.style.display="block";
        break;
        case "Command":
            commandFields.style.display="block";
        break;
        default:
            console.log('something went Wrong');
    }
    fliedsShow = clicked;

}