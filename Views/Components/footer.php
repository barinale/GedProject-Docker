<!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" position-fixed start-0 bottom-0 end-0">
  <footer
          class="text-center text-dark"
          style="background-color: #ECEFF1"

 

   
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 Copyright:
      <a class="text-dark" href="https://dxc.com/"
         >Mohammed Mekkaoui </a
        >
  </footer>
</div>
<!-- End of .container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- loding script From other Views -->
<?php if (isset($script)): ?>
  <?php foreach ($script as $script): ?>
    <script src=<?php echo "Assests/js/".$script?>></script>
    <?php endforeach; ?>
<?php endif; ?>


</body>
</html>