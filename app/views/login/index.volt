<!--==========================
  Header
  ============================-->
  
<?php echo $this->tag->form("profile") ?>
<form >
    <div class="form-group">
        <label style="margin-top: 120px;">Log In</label>
        <?php echo $this->tag->textField(["login","class"=>"form-control","required"=>"required"]);?>
    </div>
    <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <?php echo $this->tag->passwordField(["password","class"=>"form-control","required"=>"required"]);?>
        </div>
    <?php echo $this->tag->submitButton(["Submit","class"=>"btn btn-primary","style"=>"margin-bottom:60px;"]);?>
</form >
