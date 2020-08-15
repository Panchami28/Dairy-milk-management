<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Session;
use Illuminate\Http\Request;
use App\admin;
use App\user1;
use App\purchase;
use App\sales;

use Notification;
use App\Notifications\notifyme;

class admincontroller extends Controller
{
    public function adminlogin(Request $req)

   {
        $un=$req->input('un');
        $pw=$req->input('pw');
        $sql = admin::where('username','=',$un)
                    ->where('password','=',$pw)
                    ->get();
        
        if(count($sql)>0)
        {
            $unm=admin::where('username','=',$un)
                    ->where('password','=',$pw)
                    ->value('username');
                       Session()->put('unm',$unm);
            return redirect('index1');
        }
        else
        {
                
            echo"
            <script>
            alert('Invalid username or password');
            window.location='/cadmin';
            </script>
            ";
        }
    }

     public function alogout()
    {
        Session()->forget('unm');
        Session()->flush();
        return redirect('/cadmin');

    }

    public function a1logout()
    {
        Session()->forget('id');
        Session()->flush();
        return redirect('/userlogin');

    }

     public function addqry(Request $req)
    {
        $us = new user1();
        $us->fname=$req->input('fname');
        $us->lname=$req->input('lname');
        $us->userid=$req->input('uid');
        $us->address=$req->input('ad');
        $us->email=$req->input('em');
        $us->password=$req->input('pw');
        if($us->save())
        {
            echo"
            <script>
            alert('Registered successfully');
            window.location='/userlogin';
            </script>
            ";
        }
    }


     public function addpurchase(Request $req)
    {
        $us = new purchase();
        $us->date=$req->input('date');
        $us->uname=$req->input('uname');
        $us->userid=$req->input('uid');
        $us->address=$req->input('ad');
        $us->milk=$req->input('milk');
        $us->qty=$req->input('qty');
        if($us->save()) 
        {
            echo"
            <script>
            alert('Data saved');
            window.location='/userindex';
            </script>
            ";
        }
    }


    public function addsales(Request $req)
    {
        $us = new sales();
        $us->date=$req->input('date');
        $us->uname=$req->input('uname');
        $us->userid=$req->input('uid');
        $us->address=$req->input('ad');
        $us->qty=$req->input('qty');
        $us->milk=$req->input('milk');
        $us->rate=$req->input('rate');
        if($us->save())
        {
            echo"
            <script>
            alert('Data saved');
            window.location='/userindex';
            </script>
            ";
        }
    }


     public function edit($id)
    {
        $res=user1::where('id','=',$id)->get(); //select * from
        return view('admin/edit',compact('res')); // returning to view page
    }

    public function editqry(Request $req)
    {
        $id=$req->input('id');
        $fname=$req->input('fname');
        $lname=$req->input('lname');
        $uid=$req->input('uid');
        $ad=$req->input('ad');
        $em=$req->input('em');
        $pw=$req->input('pw');

        $update= user1::where('id','=',$id)->update(['fname'=> $fname,'lname'=> $lname,'userid'=> $uid,'address'=> $ad,'email'=> $em,'password'=> $pw]);

        if($update==true)
        {
            echo"
            <script>
            alert('Updated');
            window.location='/userview';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Error');
            window.location='/userview';
            </script>
            ";
        }
    }

    
   

    
    public function delete($id)
    {
        $delete= user1::where('id','=',$id)->delete();
        if($delete==true)
        {
            echo"
            <script>
            alert('Deleted');
            window.location='/userview';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Error');
            window.location='/userview';
            </script>
            ";
        }
    }



    public function userlogin(Request $req)

   {
        $em=$req->input('em');
        $pw=$req->input('pw');
        $sql = user1::where('email','=',$em)
                    ->where('password','=',$pw)
                    ->get();
        if(count($sql)>0)
        {
            $id=user1::where('email','=',$em)
                      ->where('password','=',$pw)
                      ->value('id');
                        Session()->put('id',$id);
            return redirect('/userindex');
        
        }
        else
        {
            echo"
            <script>
            alert('Error');
            window.location='/cuser';
            </script>
            ";
        }

   }
    public function purchase($id)
    {
        $d= user1::where('id','=',$id);
        if($d==true) 
        {
            echo"
            <script>
            alert('Milk will be delivered to the given address');
            window.location='/purchaseview';
            </script>
            ";
        }
    }
    public function decline($id)
    {
        $d= user1::where('id','=',$id);
        if($d==true) 
        {
            echo"
            <script>
            alert('Milk out of stock');
            window.location='/purchaseview';
            </script>
            ";
        }
    }

    public function sell($id)
    {
        $d= user1::where('id','=',$id);
        if($d==true) 
        {
            echo"
            <script>
            alert('Milk will be collected from the given address');
            window.location='/salesview';
            </script>
            ";
        }
    }
    public function decline1($id)
    {
        $d= user1::where('id','=',$id);
        if($d==true) 
        {
            echo"
            <script>
            alert('Milk cannot be accepted currently');
            window.location='/salesview';
            </script>
            ";
        }
    }



}

   