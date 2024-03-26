<?php
    include_once(__DIR__.'/Components/header.php');
    ?>
<div style="position:absolute;left:50%;top:50%;transform: translate(-50%, -50%);">
  <form method="POST" action="./Login-check" class="">
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control"  name="email" />
      <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" name="password" />
      <label class="form-label" for="form2Example2" >Password</label>
    </div>
  
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
  </form>
</div>

  <?php
    if(isset($data)){
        echo "<h6>".$data."</h6>";
    }
  
    include_once(__DIR__.'/Components/footer.php');
?>







  <!-- 2 column grid layout for inline styling -->
  <!-- Checkbox -->
  <!-- Simple link -->
  <!-- <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
        <a href="#!">Forgot password?</a>
    </div>
    </div> -->

  <!-- Submit button -->

<!-- 
</form>
    <form method="POST" action="./Login-check">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
        <button type="submit ">Click</button>
    </form> -->


    