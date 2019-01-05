

<style>
  html {
  font-size: 14px;
}

h1.display-4, h4, .brandstr {
    color: #f5590c;
}

@media (min-width: 768px) {
  html {
    font-size: 16px;
  }
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

.card-deck .card {
  min-width: 220px;
}

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

.box-shadow{
  -webkit-transition: .5s ease;
  -moz-transition: .5s ease;
  -ms-transition: .5s ease;
  -o-transition: .5s ease;
    transition: .5s ease;
}

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

.box-shadow:hover{

 box-shadow: 0 .45rem .75rem rgba(0, 0, 0, .5); 


}

.fa-free{
  color: #bdb5b1 !important;
  font-size: 1.1rem;
}
.fa-pro{
  color: gold !important;
  font-size: 1.3rem;
}
.fa-enterprise{
  color: gold !important;
  font-size: 1.5rem;
}
   
</style>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">About YeneYeneta <span class="brandstr">Exams </span><i class="fa fa-pencil-square-o"></i></h1>
          <p class="lead text-muted">Here you can setup your private exam enviroment as a teacher. You can place all your exam questions here , write from scratch , organize , edit... You can try for free for 2 months   .</p>
          <p>
            <a href="<?php echo base_url() ?>createexam/free" class="btn btn-primary my-2">Start for 2 months free!</a>
            <a href="#" class="btn btn-secondary my-2">Your Exams</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

 <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free <i class="fa fa-star fa-free"></i></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>4 subjects</li>
              <li>unlimited Exams</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro <i class="fa fa-star fa-pro"></i> <i class="fa fa-star fa-pro"></i></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$6 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>4 subjects</li>
              <li>unlimited Exams</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise <i class="fa fa-star fa-enterprise"></i> <i class="fa fa-star fa-enterprise"></i> <i class="fa fa-star fa-enterprise"></i></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$20 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unlimited subjects</li>
              <li>unlimited Exams</li>
              <li>Multiple adminstration system</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
          </div>
        </div>
      </div>

     </div>  <!--   main container end  -->
    </div>
  </div>
</main>


    