<?php
include('assets/head.php');
?>

<div class="container">
<form method="POST" action="?Controller=student&action=store">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="age" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
include('assets/footer.php');
?>