<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Auction;
use App\Models\CarRegDetails;
use App\Models\Catagory;
use App\Models\Bid;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use Carbon\Carbon;



use Session;

class CustomerController extends Controller
{
    public function viewAuctionList(){
      

      
        $auction=Auction::all();
    
        if($auction){
           
       
        return view('Customer.viewAuctionList')->with('details',$auction);
        }
        else{
            return "no product available";
        }
     
     }

     public function createBid(Request $request){
    
        $product=$request;
        $auction = Auction::where('id', $request->id)->first();
        $Id=$auction->P_Id;
        return view('customer.createBid')->with('item',$product)->with('P_Id',$Id);
     
     }

     public function createBidSubmit(Request $request){
    
        $validate = $request->validate([
              'Bid_Amount'=>"required",              
              
          ]
          
      );
     
  
      
     
          $bid= new Bid();
          $bid->P_Id=$request->P_Id;
          $bid->Auction_Id=$request->Auction_Id;
          $bid->Bid_Amount=$request->Bid_Amount;
          $bid->Bid_Time=Carbon::now()->addHours(6);
          $bid->U_Id=1;
          $result=$bid->save();
          $auction = Auction::where('id', $request->Auction_Id)->first();


          if($auction->Final_Amount ==null || $auction->Final_Amount<$bid->Bid_Amount){

                $auction->Bid_Id=$bid->id;
                $auction->Customer_Id=$bid->U_Id;
                $auction->Final_Amount=$bid->Bid_Amount;
                $auction->save();



          }
         
          if ($result){
               return redirect()->route('viewAuctionList');
          }
          else{
              return "Not Added!!Please try again";
          }
  
        
}


public function viewWinningProduct(){
      

      $customer=User::where('id', Session::get('User_Id'))->first();
    
    $auctions=$customer->auction;
  
    
    if($auctions){
   
    return view('Customer.viewWinningProduct')->with('details',$auctions);
    }
    else{
        return "no product available";
    }
 
 }


 public function createPayment(Request $request){
    $detail=$request;
   
    return view('customer.createPayment')->with('item',$detail);
   }

   public function createPaymentSubmit(Request $request){



      $validate = $request->validate([
           
            'Account_number'=>'required',
            
            'Payment_Recipt'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          
        ]
        
    );

       
     

        $nameP_Photo = time()."_".$request->file('Payment_Recipt')->getClientOriginalName();
        $request->Payment_Recipt->move(public_path('ProductImages'), $nameP_Photo);


        $payment= new Payment();
        $payment->Auction_id=$request->Auction_Id;
        $payment->Customer_id=Session::get('User_Id');
        $payment->Payment_Recipt=$nameP_Photo;
        $payment->Account_No=$request->Account_number;

        $result=$payment->save();

      
      
            if($result){
               
             
                return redirect()->route('viewPayment');
            }
            else{
               return ('failed!please try again!');
            }

             
         }

         public function viewPayment(){
      

      
            $customer=User::where('id', Session::get('User_Id'))->first();
                $payments=$customer->payment;
            if($payments){
               
           
            return view('Customer.viewPayment')->with('details',$payments);
            }
            else{
                return "no product available";
            }
        
         }
        
        
    
 
           
       }


      

    

