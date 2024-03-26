
let fliedsShow ;
const Form = document.querySelector('#FormFileAdd')
//code for display fields depend on type selected in radoi button
let commandFields = document.querySelector("#commandFields");
let emailFields = document.querySelector("#emailFields");
let FacrotyFields = document.querySelector("#FacrotyFields");
let estimateFields = document.querySelector("#estimateFields");

let radioButtons = document.querySelectorAll('input[name="type_file"]');
document.addEventListener('DOMContentLoaded', ()=> {
    commandFields.style.display="none"
    emailFields.style.display="none"
    FacrotyFields.style.display="none"
    estimateFields.style.display="none"

    // Add change event listener to each radio button
    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function(event) {
            if (event.target.checked) {
                fliedsShow= event.target.value;
            }
        });
    });
    
});

//function to show Display
// param @clicked : radoi clicked name 
const showFields = (clicked)=>{
    let FieldNeedToCHange;
    switch(clicked){
        case "Email":

        break;
    }
}