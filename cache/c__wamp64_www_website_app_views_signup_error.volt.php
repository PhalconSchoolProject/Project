
<!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="/projet2/signin">Sign in</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
<?php echo $this->tag->form("signup/error") ?>
<form >
    <div class="form-group">
        <label style="margin-top: 120px;">First Name</label>
        <?php echo $this->tag->textField(["First_Name","class"=>"form-control"]);?>
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
