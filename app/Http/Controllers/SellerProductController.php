<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\CarRegDetail;
use App\Models\Catagory;
use App\Models\Seller;
use Illuminate\Http\Request;
use Session;



class SellerProductController extends Controller
{


   //seller//product

   public function productCreate(){
    return view('product.productCreate');
   }

   public function productCreateSubmit(Request $request){

      $validate = $request->validate([
            "P_CarName"=>"required",
            'Reg_Num'=>'required',
            'Model'=>'required',
            'Color'=>'required',
            'Glass'=>'required',
            'Wheel_Size'=>'required',
            'Body'=>'required',
            'P_Photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Original_Purchase_Invoice_Photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Insurance_Photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Road_Tax_Recipt_Certificate'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Pullotion_Certificate'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]
        
    );
   


    $regNumCheck = CarRegDetail::where('Reg_Num',$request->Reg_Num)->first();
    
    if($regNumCheck){

        return ('Registration Number Already Exist for another car');
    }
    else{
       
     

        $nameP_Photo = time()."_".$request->file('P_Photo')->getClientOriginalName();
        $request->P_Photo->move(public_path('ProductImages'), $nameP_Photo);


        $nameOriginal_Purchase_Invoice_Photo = time()."_".$request->file('Original_Purchase_Invoice_Photo')->getClientOriginalName();
        $request->Original_Purchase_Invoice_Photo->move(public_path('ProductImages'), $nameOriginal_Purchase_Invoice_Photo);


        $nameInsurance_Photo = time()."_".$request->file('Insurance_Photo')->getClientOriginalName();
        $request->Insurance_Photo->move(public_path('ProductImages'), $nameInsurance_Photo);

        $nameRoad_Tax_Recipt_Certificate = time()."_".$request->file('Road_Tax_Recipt_Certificate')->getClientOriginalName();
        $request->Road_Tax_Recipt_Certificate->move(public_path('ProductImages'), $nameRoad_Tax_Recipt_Certificate);

        $namePullotion_Certificate = time()."_".$request->file('Pullotion_Certificate')->getClientOriginalName();
        $request->Pullotion_Certificate->move(public_path('ProductImages'), $namePullotion_Certificate);

           
        $catagory= new Catagory();
        $catagory->Model=$request->Model;
        $catagory->Color=$request->Color;
        $catagory->Glass=$request->Glass;
        $catagory->Wheel_Size=$request->Wheel_Size;
        $catagory->Body=$request->Body;

        $result=$catagory->save();

       
        if($result){
      
         $car_reg= new CarRegDetail();
         $car_reg->Reg_Num	=$request->Reg_Num;
         $car_reg->Original_Purchase_Invoice_Photo=$nameOriginal_Purchase_Invoice_Photo;
         $car_reg->Insurance_Photo=$nameInsurance_Photo;
         $car_reg->Road_Tax_Recipt_Certificate=$nameRoad_Tax_Recipt_Certificate;
         $car_reg->Pullotion_Certificate= $namePullotion_Certificate;
 
         $result1=$car_reg->save();

        

         if($result1){

            $product= new Product();
            $product->S_Id	=Session::get('Seller_Id');
            $product->Category_Id=$catagory->id;
            $product->P_CarName=$request->P_CarName;
            $product->P_Photo= $nameP_Photo;
            $product->Car_Reg_Details_Id= $car_reg->id;
           
            $result2=$product->save();
                 
            if($result2){
               
             
               return redirect()->route('sellerProductList');
            }
            else{
               return redirect()->back()->with('failed', 'Registration Failed');
            }

             
         }

         else{

            return redirect()->back()->with('failed', 'Registration Failed');

         }
 
           
           
        }
        else{
            return redirect()->back()->with('failed', 'Registration Failed');
            //
        }
    }
    }

   
public function productDelete(Request $request){
   $product = Product::where('id', $request->id)->first();

   
   $catagory=Catagory::where('id', $product->Category_Id)->first();
   $car_reg=CarRegDetail::where('id', $product->Car_Reg_Details_Id)->first();

   $catagory->delete();
   $car_reg->delete();
   $product->delete();

   return redirect()->route('sellerProductList');
}

    public function sellerProductList(){
            $id=Session::get('Seller_Id');
            $seller=Seller::where('id',$id)->first();
         
           $product=Product::where('S_id',$id)->first();
           if($product){
            
            $items=$seller->product;
            return view('product.sellerProductList')->with('products',$items);

           }
           else{
                  return "You have not added any product for auction";
           }


    }



    //productCatagory

    public function productCatagory(Request $request){
      
      $catagory=Catagory::where('id',$request->id)->first();
   
    
     
      return view('product.productCatagory')->with('catagories',$catagory);
    }

public function productCatagoryEdit(Request $request){
      
   $item = Catagory::where('id', $request->id)->first();
  
   return view('product.productCatagoryEdit')->with('catagory', $item);
  

}

public function productCatagoryEditSubmitted(Request $request){
$validate = $request->validate([
   'Model'=>'required',
   'Color'=>'required',
   'Glass'=>'required',
   'Wheel_Size'=>'required',
   'Body'=>'required'
 
]

);

$item = Catagory::where('id', $request->id)->first();


$item->id = $request->id;
$item->Model = $request->Model;
$item->Color = $request->Color;

$item->Glass = $request->Model;

$item->Wheel_Size = $request->Wheel_Size;
$item->Body = $request->Body;
$item->save();
return redirect()->route('sellerProductList');

}



//product//reg details

public function productRegDetails(Request $request){
      
   $car_reg=CarRegDetail::where('id',$request->id)->first();

   
  
   return view('product.productRegDetails')->with('details',$car_reg);


}









public function APIList(){
   return Catagory::all();
}
public function APIPost(Request $request){
   $catagory= new Catagory();
        $catagory->Model=$request->Model;
        $catagory->Color=$request->Color;
        $catagory->Glass=$request->Glass;
        $catagory->Wheel_Size=$request->Wheel_Size;
        $catagory->Body=$request->Body;

   return $req;
}



   }