<?php   
    $css = "#spanKey{
        background:red;margin:7px;
    }";

    include_once(__DIR__."/../Components/header.php");
    
    ?>
    <form action="./fileUpload" method="POST" id="FormFileAdd" enctype=multipart/form-data>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                    <div id="errorName">

                    </div>
                </div>
                <div>
                    <label for="file">File:</label>
                    <input type="file" id="file" name="file">
                    <div id="errorNameFIle">

                    </div>
                </div>
              
                <div>
                    <label>Type:</label>
                    <input type="radio" id="email" name="type_file" value="Email" checked>
                    <label for="email">Email</label>

                    <input type="radio" id="factory" name="type_file" value="Factory">
                    <label for="factory">Factory</label>

                    <input type="radio" id="command" name="type_file" value="Command">
                    <label for="command">Command</label>

                    <input type="radio" id="quote" name="type_file" value="Quote">
                    <label for="quote">estimate</label>
                </div>

                <!-- Comand Cheked -->
                <div id="commandFields">
                    <label for="stuffCommand">Stuff Command:</label>
                    <input type="text" id="stuffCommand" name="stuffCommand" ><br>
    
                    <label for="totalAmount">Total Amount:</label>
                    <input type="number" id="totalAmount" name="totalAmount" >
                    <br>
                    <div id="ErrorCOmmandFIelds">

                    </div>
                </div>

                <!-- email Fields if Email Type cheked -->
                <div id="emailFields">
                    <label for="emailSender">Email Sender:</label>
                    <input type="email" id="emailSender" name="emailSender" ><br>
                    
                    <label for="emailReceiver">Email Receiver:</label>
                    <input type="email" id="emailReceiver" name="emailReceiver" ><br>
                    
                    <label for="dateSend">Date of Sending:</label>
                    <input type="date" id="dateSend" name="dateSend" ><br>
                    <div id="ErrorFIeldsTypeError">
                        
                    </div>
                </div>
                <!-- Factory if Checked -->

                <div id="FacrotyFields">
                    <label for="society">Society:</label>
                    <input type="text" id="society" name="society" ><br>
    
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="Factoryamount"  ><br>
                    <div id="ErrorFieldsFActory">
                        
                    </div>
                </div>

            <!-- estimate check -->
                <div id="estimateFields">
                    <label for="stuffToBuy">Stuff to Buy:</label>
                    <input type="text" id="stuffToBuy" name="stuffToBuy" ><br>
    
                    <label for="amount">Amount:</label>
                    <input type="number" id="estimatAmount" name="amount"  ><br>
                    <div id="ErrorFieldsEstimate">

                    </div>                
                </div>
                <!-- FIled FOr Keywords -->
                <label for="keywords">keywords</label>
                <input type="text" name="keywords" value=""             placeholder="Add Your keywords" id="keywordField"/>

                <button id="AddKeywords">Add keywords</button>
                <!-- place HOlder FOr Keywords -->
                <div id="placeHolderKeyWords">

                </div>
                <!-- check permission -->
                <!-- <div>
                    <input type="radio" id="share" name="sharing_option" value="share">

                    <label for="share">Share</label><br>
                    
                    <input type="radio" id="private" name="sharing_option" value="private">
                    
                    <label for="private">Private</label><br>
                </div> -->
                    <!-- here field for Adding EMail -->
                    <!-- <div>
                        <label for="EmailPermission">Email Permission</label>
                        <input type="email" id="EmailPermission" />
                        <button id="buttonEmailAdd">Add</button>
                        <div id="EmailsContainers">


                        </div>
                    </div> -->
                <button id="FormFilesubmit">Submit</button>
</form>

    <?php
    $script[] = "FieldDisplay.js"; //1 because there is variable i need to acces in Form VAdliation
    $script[] = "emailPermission.js";
    $script[] = "addKeywords.js";
    $script[] = "FormValidation.js";


include_once(__DIR__."/../Components/footer.php");
