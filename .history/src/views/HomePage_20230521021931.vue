<template>
    <div>
        <main>
            <!-- Whats New Start -->
            <section class="whats-news-area pt-50 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 col-md-3">
                                    <div class="section-tittle mb-30">
                                        <h3>Whats New  </h3>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="properties__button">
                                        <!--Nav Button  -->
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="details.htmlnav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a
                            >
                            <a
                              class="nav-item nav-link"
                              id="nav-profile-tab"
                              data-toggle="tab"
                              href="details.htmlnav-profile"
                              role="tab"
                              aria-controls="nav-profile"
                              aria-selected="false" v-for="(category,index) in categorylist" :key="index"
                              >{{category.title}}</a
                            >
                           
                          </div>
                        </nav>
                        <!--End Nav Button  -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class=" mb-5 d-flex justify-content-end">
                        <input type="text" class="form-control col-3" v-model="searchkey" v-on:keyup.enter="search">
                        <i class="fa-solid fa-magnifying-glass mt-2 ml-3" style="font-size:25px" v-on:click="search"></i>
                      </div>
                      <!-- Nav Card -->
                      <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div
                          class="tab-pane fade show active"
                          id="nav-home"
                          role="tabpanel"
                          aria-labelledby="nav-home-tab"
                        >
                          <div class="whats-news-caption">
                            <div class="row">
                              <div class="col-lg-6 col-md-6" v-for="(post,index) in postlist" :key="index">
                                <div class="single-what-news mb-100">
                                  <div class="what-img">
                                    <img
                                      v-bind:src="post.image"
                                      alt=""
                                    />
                                  </div>
                                  <div class="what-cap">
                                    <span class="color1">code lab news</span>
                                    <h4>
                                      <a href="details.html"
                                        >{{post.title}}</a
                                      >
                                    </h4>
                                  </div>
                                </div>
                              </div>
                            


                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <!-- End Nav Card -->
                    </div>
                  </div>
                </div>
                    </div>
                </div>
            </section>
            <!-- Whats New End -->

            <!--Start pagination -->
            <div class="pagination-area pb-45 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-wrap d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item">
                                            <a class="page-link" href="details.html"><span class="flaticon-arrow roted"></span
                          ></a>
                                                </li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="details.html">01</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="details.html">02</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="details.html">03</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="details.html"><span class="flaticon-arrow right-arrow"></span
                          ></a>
                                                </li>
                                                </ul>
                                        </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End pagination  -->
        </main>
    </div>
</template>

<script>
  import axios from "axios";
  export default {
      name:"HomePage",
      data() {
          return {
              postlist : {},
              categorylist: {},
              searchkey: ''
          };
      },
      methods: {
        getallpost () {
          axios.get("http://localhost:8000/api/allpost").then((response) => {
              for(let i=0;i<response.data.post.length; i++) {
                  if(response.data.post[i].image == null) {
                      response.data.post[i].image = "http://localhost:8000/dimage/images.png";
                  }else
                  //+ mean under code is concutination
                 { response.data.post[i].image = "http://localhost:8000/storage/" + response.data.post[i].image;} 
              }

              this.postlist = response.data.post;
                   }) 
             },


         loadcategory() {
           axios.get("http://localhost:8000/api/allcategory").then((response) => {
              this.categorylist = response.data.category;
           })
         },


         search() {
          let search = {
              key : this.searchkey
          }
          axios.post("http://localhost:8000/api/searchpost",search)
            .then(function (response) {
              // this.postlist = response.data.searchdata
              // for(let i=0;i<response.data.searchdata.length; i++) {
              //     if(response.data.searchdata[i].image == null) {
              //         response.data.searchdata[i].image = "http://localhost:8000/dimage/images.png";
              //     }else
              //     //+ mean under code is concutination
              //    { response.data.searchdata[i].image = "http://localhost:8000/storage/" + response.data.searchdata[i].image;} 
              // }
                this.postlist = response.data; 
               console.log(response.data)
            
            })

             }
        
      },
      mounted () {
        this.getallpost();
        this.loadcategory();
        
      }
  };
  
</script>

