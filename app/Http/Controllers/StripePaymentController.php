<?php
   
namespace App\Http\Controllers;
use App\Models\Bill;
use App\Models\LocationVelo;
use App\Models\Bike;

use Illuminate\Http\Request;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('frontend.rentbike.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request ,Bill $bill)
    {

        $id = $request -> bill -> id;
        $bills = Bill::find($id);
        $locations = LocationVelo::find( $bills -> location_id);
        $bike = Bike::find($locations -> bike_id);
        $newQuantity = $bike->quantite - 1;
       # dd($newQuantity);
        $bike->update(['quantite' => $newQuantity]);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" =>$bill->amount *100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment" 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}