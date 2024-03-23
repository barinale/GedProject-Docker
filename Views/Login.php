<?php
    include_once(__DIR__.'/Components/header.php');
    ?>
    <form method="POST" action="./Login-check">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
        <button type="submit ">Click</button>
    </form>
    <?php
    if(isset($data)){
        echo "<h6>".$data."</h6>";
    }
    include_once(__DIR__.'/Components/ButtonLogOut.php');
    if(isset($_res)){
        echo $_res;
    }
    include_once(__DIR__.'/Components/footer.php');
