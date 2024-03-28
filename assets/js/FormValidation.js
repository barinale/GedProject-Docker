
const FormFile = document.querySelector('#FormFilesubmit');
FormFile.addEventListener('click',(e)=>{
    e.preventDefault()
    let Name = document.querySelector('#name')
    let File = document.querySelector('#file')

    // if(!checkName(Name.value))
    //     return ;
    if(!checkFile(File))
        return ;
    return;
    // document.querySelector('#FormFileAdd').submit();
})
//FUNCTION FOR Check NAME
function checkName(Name){
    if(!Name || Name == ""){
        document.querySelector('#errorName').textContent='error'
        return false;
    }
    return true;
}
//function For UploadFile
function checkFile(file){
    if(!file.files[0]){
        return false;
    }
    if(file.files[0].size<5*1024*1024) {//5MB

    }
        return false
    return true;
}


