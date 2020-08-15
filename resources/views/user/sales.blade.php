@extends('layouts.adminlayout')
@section('title')
Sales
@endsection
@section('content')

<center>          
<div class="card" style="width: 60rem;">
  <img class="card-img-top" src="milk.jpeg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
      


    <form method="post" action="/addsales" style="width: 100%;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">


      <div class="field-group">
                        <div class="wthree-field">
                            <input type="date" class="form-control" placeholder="Date" required="" name="date">
                    </div>
                    </div>
                    <br>
                     <div class="field-group">
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter Username" required="" name="uname">
                    </div>
                    </div>
                    <br>
                     <div class="field-group">
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter user id" required="" name="uid">
                    </div>
                    </div>
                    <br>
                     <div class="field-group">
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter address" required="" name="ad">
                    </div>
                    </div>
                    <br>
                     <div class="field-group">
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Milk of" required="" name="milk">
                    </div>
                    </div>
                    <br>
                    


                    <div class="dropdown">
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Quantity" required="" name="qty" data-toggle="dropdown">
                      </div>
                    </div>
                    <br>
                    <div class="field-group">
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Rate per ltr" required="" name="rate">
                    </div>
                     </div>
                      <br>
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

