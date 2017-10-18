<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="form-group">
    <label for="textarea">Your Comment</label>
    <textarea name="projectComment" class="form-control" id="projectComment" placeholder="Wow, those projects are terribad" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
