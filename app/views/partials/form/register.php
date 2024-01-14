
  <section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign up now</h2>
              <form method="POST" action="?controller=user&action=register&page=customer">
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" name="username" class="form-control" />
                  <label class="form-label" for="form3Example3">Username</label>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" name="firt_name" class="form-control" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" name="last_name" class="form-control" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" name="email" class="form-control" />
                  <label class="form-label" for="form4Example3">Email address</label>
                </div>
                <input name="role" value="user" hidden>
                <!-- Submit button -->
                <button type="submit" name="sign_up" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://baamboo.com/wp-content/uploads/2020/08/ao-dai-di-hoc-day-keo-sau-lung-01.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
 