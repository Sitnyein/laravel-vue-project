<template>
    <div>
         <div class="d-flex justify-content-center py-3">
            <p class="btn btn-danger text-white mr-4" @click="home">Home</p>
            <p class="btn bg-dark text-white" @click="login">login</p>
          </div>
        <h1>login Page</h1>
        <div class=" container col-5 shadow-sm my-5 p-5">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</template>

<script src="../js/LoginPage.js">
  
</script>



