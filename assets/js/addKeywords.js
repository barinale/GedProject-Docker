const divKeywords = document.querySelector('#placeHolderKeyWords')
const buttonAddKeyword = document.querySelector('#AddKeywords')
const inputKeywords = document.querySelector('#keywordField')
buttonAddKeyword.addEventListener('click',(e)=>{
    e.preventDefault();
    if(inputKeywords!==""){
        let span = document.createElement('span')
        span.setAttribute("id","spanKey")
        span.textContent = inputKeywords.value;
        divKeywords.appendChild(span);
    }
    
})

