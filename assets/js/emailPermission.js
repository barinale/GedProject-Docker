const emailsDiv = document.querySelector('#EmailsContainers')
const inputEmail = document.querySelector('#EmailPermission')
const buttonAddEmail = document.querySelector('#buttonEmailAdd')

buttonAddEmail.addEventListener('click',(e)=>{
    e.preventDefault();

    let spanEmail = document.createElement('span')
    spanEmail.textContent = inputEmail.value;
    emailsDiv.appendChild(spanEmail)
    
})
