<template>
    <div>
      <div class="d-flex justify-content-center py-3">
        <p class="btn btn-danger text-white mr-4" @click="homeshow">Home</p>
        <p class="btn bg-dark text-white" @click="login()">login</p>
      </div>
        <main>
            <!-- Whats New Start -->
            <section class="whats-news-area pt-50 pb-20">
                <div class="container">
                    <span v-if="!tokenstatus">
                      you have no permission here
                    </span>
                    <span v-if="tokenstatus">
                      hello wait a moment
                    </span>
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

<script src="../js/HomePage">
  
</script>




