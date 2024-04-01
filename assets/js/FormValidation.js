//here i use varibal from FIeldDISPLAY.JS   fliedsShow
let ErrorNameCONatainer = document.querySelector('#errorName');
let ErrorFIleContainer = document.querySelector('#errorNameFIle');
let ErrorEMailFIelds = document.querySelector('#ErrorFIeldsTypeError');
let ErrorCommandFIelds = document.querySelector('#ErrorCOmmandFIelds');
let ErrorFActoryFields = document.querySelector('#ErrorFieldsFActory');
let ErrorFieldsEstimate = document.querySelector('#ErrorFieldsEstimate'); 


const FormFile = document.querySelector('#FormFilesubmit');
FormFile.addEventListener('click',(e)=>{
    e.preventDefault()
    //clear All older Code
    ErrorNameCONatainer.textContent=""
    ErrorFIleContainer.textContent=""
    ErrorEMailFIelds.textContent=""
    ErrorFActoryFields.textContent=""
    ErrorCommandFIelds.textContent=""
    ErrorFieldsEstimate.textContent=""
    let Name = document.querySelector('#name')
    let File = document.querySelector('#file')

    
    if(!checkName(Name.value))
        return ;

    if(!checkFile(File))
        return ;
    //switch to check whetever FIelds Need to be valitated
    switch(fliedsShow.value){
        case 'Email':
            if(!chekEmails())
            return;
        break;
        case 'Factory':
            if(!checkFactory())
                return;
            console.log("testing")
                
            break;
        case 'Command':
            if(!checkCommand())
                return
                break;
        case 'Quote':
            if(!checkEestimat())
                return;
                    break;
    }
   
    document.querySelector('#FormFileAdd').submit();
})
//FUNCTION FOR Check NAME
function checkName(Name){
    if(!Name || Name == ""){
        ErrorNameCONatainer.textContent='error'
        return false;
    }
    return true;
}

//function For UploadFile
function checkFile(file){
    if(!file.files[0]){
        ErrorFIleContainer.textContent = "File is Required"
        return false;
    }
    
    if(file.files[0].size / 1024 < 10) {//10MB
        document.querySelector('#errorNameFIle').textContent = "Size Should be smaller Than 10mb and type Should be Pdf or JPg or png"
        return false
    }


    if(!file.files[0].type === 'application/pdf' &&
     !file.files[0].type === 'image/png' &&
      !file.files[0].type === 'image/jpeg'){
        document.querySelector('#errorNameFIle').textContent = "only pdf or png or jpeg Are Permited"
        return false;
    }
    return true;
}

//function For emailFields
function chekEmails(){
    let emailSender = document.querySelector('#emailSender')
    let emailReceiver = document.querySelector('#emailReceiver')
    let dateSend = document.querySelector('#dateSend')

    if(emailSender.value == "" || emailReceiver.value =="" || !dateSend.value ){
        ErrorEMailFIelds.textContent = 'Email Sender is Required - Email Receiver is Required - Date is Required'
        return false;
    }
    return true;                                           
}

//Function For check Factory Input
function checkFactory(){
    let Society = document.querySelector('#society')
    let Amount = document.querySelector('#amount')

    
    if(!Society.value || Society.value.trim() == "" ||
        !Amount.value || !typeof parseFloat(Amount.value)=="number" ){

        ErrorFActoryFields.textContent="Error Societ is Required And Amount Should Required and Should be Number";

        return false;
    }
    console.log(Amount.value)
    return true;
}
//Function For Check Command
function checkCommand(){
    let stuffCOmmand = document.querySelector('#stuffCommand');
    let totalAmount = document.querySelector('#totalAmount');
    if(!stuffCOmmand.value || stuffCOmmand.value.trim()==="" || !totalAmount.value|| !typeof parseFloat(totalAmount.value)=="number" ){
        ErrorCommandFIelds.textContent="stuff Command in required and Ttoal AMount is Required and Total Amount should be is a number"
        return false;
    }

    return true;
} 
//function For Check estimate
function checkEestimat(){
    let estimatStufBuy = document.querySelector("#stuffToBuy");
    let estimatAmout = document.querySelector('#estimatAmount');

    console.log(!estimatAmout.value || typeof parseFloat(estimatAmout.value)!=="number" || !estimatStufBuy.value || estimatStufBuy.value.trim() =="")
        if(!estimatAmout.value || typeof parseFloat(estimatAmout.value)!=="number" || !estimatStufBuy.value || estimatStufBuy.value.trim() ==""){
            ErrorFieldsEstimate.textContent="stuff to Buy is Required and Amout is Required"
            return false;
        }
    return true;
}

