<template>
    <div>
         <div class="d-flex justify-content-center py-3">
            <p class="btn btn-danger text-white mr-4" @click="home">Home</p>
            <p class="btn bg-dark text-white" @click="login">login</p>
          </div>
        <h1>login Page</h1>
        <form>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
            </div>
          </form>
    </div>
</template>

<script src="../js/LoginPage.js">
  
</script>



