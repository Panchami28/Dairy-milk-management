@extends('layouts.adminlayout')
@section('title')
purchase
@endsection
@section('content')

<center>          
<div class="card" style="width: 60rem;">
  <img class="card-img-top" src="cow1.jfif" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
      


    <form method="post" action="/addpurchase" style="width: 100%;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">


      <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="date" class="form-control" placeholder="Date" required="" name="date">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter Username" required="" name="uname">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter user id" required="" name="uid">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter address" required="" name="ad">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Milk of" required="" name="milk">
                    </div>
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Quantity" required="" name="qty">
                    </div>
                    
                    </div>

                    <div class="wthree-field">
                        <button type="submit" name="add" class="btn btn-danger">Submit</button>
                    </div>
      
     
      
      
      </form>






     
    </p>
  </div>
</div>
</center>
<br><br><br>
@endsection

