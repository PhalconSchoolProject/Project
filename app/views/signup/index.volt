
<!--==========================
  Header
  ============================-->
  
<?php echo $this->tag->form("error") ?>
<form>
    <div class="form-group">
        <label style="margin-top: 120px;">First Name</label>
        <?php echo $this->tag->textField(["First_Name","class"=>"form-control","required"=>"required"]);?>
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <?php echo $this->tag->textField(["Last_Name","class"=>"form-control","required"=>"required"]);?>
        </div>
  <div class="form-group">
    <label>Email address</label>
    <?php echo $this->tag->emailField(["Email","class"=>"form-control","required"=>"required"]);?>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label >Password</label>
    <?php echo $this->tag->passwordField(["Password","class"=>"form-control","required"=>"required"]);?>
  </div>
  <?php echo $this->tag->submitButton(["Submit","class"=>"btn btn-primary","style"=>"margin-bottom:60px;"]);?>
</form>
