<template>
    
    
 <br>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <br>
        <br>
        
        <h1> Log In</h1>
        <form class="row g-3 needs-validation" novalidate method="post" action="/loginauth">

<div class="col-12">
    <label for="yourEmail" class="form-label">Email</label>
    <div class="input-group has-validation">
        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
        <input type="text" name="email" class="form-control"
            id="yourEmail" required>
        <div class="invalid-feedback">Please enter your Email.</div>
    </div>
</div>

<div class="col-12">
    <label for="yourPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control"
        id="yourPassword" required>
    <div class="invalid-feedback">Please enter your password!</div>
</div>

<div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember"
            value="true" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>
</div>
<div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Login</button>
</div>
<div class="col-12">
    <p class="small mb-0">Don't have account? <a
            class="register-link" href="/LGURegister">Create an account</a></p>
</div>
</form>
      </div>
    </div>
  </div>
</section>


<br>
<br>
<br>


</template>



