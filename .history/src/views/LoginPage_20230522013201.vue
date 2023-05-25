<template>
    <div>
         <div class="d-flex justify-content-center py-3">
            <p class="btn btn-danger text-white mr-4" @click="home">Home</p>
            <p class="btn bg-dark text-white" @click="login">login</p>
          </div>
        <h1 class=" text-center">login Page</h1>
        <div class=" container col-5 shadow-sm my-5 p-5">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="button" class="btn btn-primary">login</button>
        
        </div>
    </div>
</template>

<script src="../js/LoginPage.js">
  
</script>



