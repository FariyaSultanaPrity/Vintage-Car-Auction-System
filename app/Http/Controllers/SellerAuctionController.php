<?php

namespace App\Http\Controllers;
use App\Models\Auction;
use App\Models\Seller;
use App\Models\Product;
use Carbon\Carbon;
use Session;



use Illuminate\Http\Request;

class SellerAuctionController extends Controller
{
    public function createAuction(Request $request){

        $product=$request;
        return view('sellerAuction.createAuction')->with('item',$product);
       }
    
       public function createAuctionSubmit(Request $request){
    
          $validate = $request->validate([
                'Start_Amount'=>"required",              
                'Start_Time'=>'required',
                'End_Time'=>'required',
                
            ]
            
        );
       
    
        $product=Product::where('id',$request->P_Id)->first();
       
            $auction= new Auction();
            $auction->Start_Amount=$request->Start_Amount;
            $auction->Start_Time=$request->Start_Time;
            $auction->End_Time=$request->End_Time;
            $auction->P_Id=$request->P_Id;
            $auction->S_Id=Session::get('Seller_Id');
            $auction->S_BankName=Session::get('Bank');
            $auction->S_AccountNo=Session::get('Account');
            $auction->Picture=$product->P_Photo;
            $auction->Catagory_Id=$product->Category_Id;
            $auction->RegD_Id=$product->Car_Reg_Details_Id;
    
            $result=$auction->save();
            if ($result){
                 return redirect()->route('sellerAuctionList');
            }
            else{
                return "Not Added!!Please try again";
            }
    
          
}





 public function sellerAuctionList(){
      

      
    $seller=Seller::where('id',Session::get('Seller_Id'))->first();
 $items=$seller->auction;
    if($items){
   
    return view('sellerAuction.sellerAuctionList')->with('details',$items);
    }
    else{
        return "You have not added any auction";
    }
 
 }

 public function auctionDelete(Request $request){
    $auction = Auction::where('id', $request->id)->first();
 
   
    $bids=$auction->bid;
   
 foreach($bids as $fgh){
    $fgh->delete();
 }
     $auction->delete();
    return redirect()->route('sellerAuctionList');
 }

 

 
 
 
}