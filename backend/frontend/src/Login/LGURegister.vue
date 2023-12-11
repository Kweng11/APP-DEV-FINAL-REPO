<template>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img
            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid"
            alt="Phone image"
          />
        </div>

        <form class="row g-3 needs-validation" @submit.prevent="create" method="POST">
          <div class="col-12">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" name="email" class="form-control" id="email" v-model="email" required />
            <div class="invalid-feedback">Please enter a valid Email address!</div>
          </div>

          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" v-model="password" required />
            <div class="invalid-feedback">Please enter your password!</div>
          </div>

          <div class="col-12">
            <label for="secretkey" class="form-label">Secret Key</label>
            <input type="password" name="secretkey" class="form-control" id="secretkey" v-model="secretkey" required />
            <div class="invalid-feedback">Please enter your secret key!</div>
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required />
              <label class="form-check-label" for="acceptTerms">
                I agree and accept the <a href="#">terms and conditions</a>
              </label>
              <div class="invalid-feedback">You must agree before submitting.</div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Create Account</button>
          </div>
          <div class="col-12">
            <p class="small mb-0">Already have an account? <a href="/LGULogin">Log in</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      secretkey: '',
    };
  },

  methods: {
    async create() {
      try {
        const response = await axios.post("create", {
          email: this.email,
          password: this.password,
          secretkey: this.secretkey,
        });

        // Handle the response as needed
        console.log(response); // Log the response for debugging

        // You may want to check if response.data.msg exists and handle it accordingly

        // Navigate to a different route or show a success message
        // router.push('/success');
      } catch (error) {
        console.error("Error during registration:", error);
        // Handle registration error, show an appropriate message to the user
      }
    },
  },
};
</script>
