<?php   
    include_once(__DIR__."/../Components/header.php");
    ?>
        <form action="/submit_form" method="post" id="FormFileAdd">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="file">File:</label>
                    <input type="file" id="file" name="file">
                </div>
                <div>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date">
                </div>
                <div>
                    <label>Type:</label>
                    <input type="radio" id="email" name="type_file" value="Email">
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
                    <input type="text" id="stuffCommand" name="stuffCommand" required><br>
    
                    <label for="totalAmount">Total Amount:</label>
                    <input type="number" id="totalAmount" name="totalAmount" step="0.01" required><br>
                </div>

                <!-- email Fields if Email Type cheked -->
                <div id="emailFields">
                    <label for="emailSender">Email Sender:</label>
                    <input type="email" id="emailSender" name="emailSender" required><br>
                    
                    <label for="emailReceiver">Email Receiver:</label>
                    <input type="email" id="emailReceiver" name="emailReceiver" required><br>
                    
                    <label for="dateSend">Date of Sending:</label>
                    <input type="date" id="dateSend" name="dateSend" required><br>
                </div>
                <!-- Factory if Checked -->

                <div id="FacrotyFields">
                    <label for="society">Society:</label>
                    <input type="text" id="society" name="society" required><br>
    
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" step="0.01" required><br>
                </div>

            <!-- estimate check -->
                <div id="estimateFields">
                    <label for="stuffToBuy">Stuff to Buy:</label>
                    <input type="text" id="stuffToBuy" name="stuffToBuy" required><br>
    
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" step="0.01" required><br>
                </div>


                <button type="submit">Submit</button>
        </form>

    <?php
    $script[] = "FormValidation.js";
    
include_once(__DIR__."/../Components/footer.php");
