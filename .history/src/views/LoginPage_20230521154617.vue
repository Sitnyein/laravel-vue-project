<template>
    <div>
         <div class="d-flex justify-content-center py-3">
            <p class="btn btn-danger text-white mr-4" @click="home">Home</p>
            <p class="btn bg-dark text-white" @click="login">login</p>
          </div>
        <h1>login Page</h1>
        <form class="mb-5">
            <div class="form-row">
              <div class="form-group col-md-5 offset-2 d-block">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-5 offset-2">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>
           
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button> 
          </form>
    </div>
</template>

<script src="../js/LoginPage.js">
  
</script>



