
@extends('layouts.adminlayout')
@section('title')
Milk products
@endsection
@section('content')   
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="howitworks.html">How it works</a></li>
            <li><a href="#">chamb for Business</a></li>
         </ul>
      </div>
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     
                     <div class="product-sh">
                        <div class="col-sm-6">
                           <div class="form-sh">
                              <input type="text" placeholder="Search something you love" >
                           </div>
                        </div>
                        
                        <div class="col-sm-3">
                           <div class="form-sh"> <a class="btn" href="#">Search</a> </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="1.jpg" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="10.jpg" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="3.jfif" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="4.jpg" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="12.jfif" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="6.jpg" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="7.jfif" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="8.jfif" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="categories_link">
                     <a href="#">Browse all categories here</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
               
            
         
      <!--main js--> 
      <script src="{{asset('chamb/js/jquery-1.12.4.min.js')}}"></script> 
      <!--bootstrap js--> 
      <script src="{{asset('chamb/js/bootstrap.min.js')}}"></script> 
      <script src="{{asset('chamb/js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('chamb/js/slick.min.js')}}"></script> 
      <script src="{{asset('chamb/js/wow.min.js')}}"></script>
      <!--custom js--> 
      <script src="{{asset('chamb/js/custom.js')}}"></script>
   @endsection
