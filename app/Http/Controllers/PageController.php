<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\User;


class PageController extends Controller
{
    public function getIndex(){
        $slide=Slide::all();
        //return view('page.Trangchu',['slide'=>$slide]);
        $new_product= Product::where('id_type',1)->get();
        $yenchungcosan=Product::where('id_type',2)->get();
        $yenchungsanhuroi=Product::where('id_type',3)->get();
        $Loaisanpham=ProductType::all();
        return view('page.Trangchu',compact('slide','new_product','yenchungcosan','yenchungsanhuroi','Loaisanpham'));

    }
    public function getAbout(){
        $Loaisanpham=ProductType::all();
        return view('page.About',compact('Loaisanpham'));
    }
    public function getCheckout(){
        return view ('page.Checkout');
    }
    public function getContact(){
        return view('page.Contact');
    }
    public function getFags(){
        return view('page.Fags');
    }
    public function getHelps(){
        return view('page.Helps');
    }
    public function getPayment(){
        return view('page.Payment');
    }
    public function getPrivacy(){
        return view('page.Privacy');
    }
    public function getProduct2(){
        return view('page.Product2');
    }
    public function getProduct(){
        return view('page.Product');
    }
    public function getSingle($id){
        $ctsanpham=Product::where('id',$id)->first();
        $Loaisanpham=ProductType::all();
        return view('page.Single',compact('Loaisanpham','ctsanpham'));
    }

    public function getTerms(){
        return view('page.Terms');
    }
    public function getTypography(){
        return view('page.Typography');
    }
    public function postSignin(Request $req){
        $this->validate(
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max|20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự'
            ]
            );
            
        return view(null);
    } 
}
