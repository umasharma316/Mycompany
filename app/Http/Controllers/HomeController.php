<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ItemMaster;
use App\Model\AskQuotation;
use App\Model\DropYourMessage;
use redirect;
use Input;
use Log;

class HomeController extends Controller {

	/*
	|-------------------------------------------------------------------------
	| Function:		regions_home
	| Input:		Null
	| Output:		Regions and Coordinating Colleges
	| Logic:		Landing page for Regions Statstics
	|
	*/
	public function GetItemDetails(){
	// $Item_lists = OrderDetails->all();
	// Log::info($Item_lists);
	//return View::make('AddOrder', array('Item_lists' => $Item_lists));
    $Items = ItemMaster::get();
    Log::info($Items);
	 //$Items = Input::get('ItemId');
	return view('AddOrder',['items'=>$Items]);
	}

	public function insertform(){
      
      $items = DB::select('select * from ItemMaster');
      return view('AddOrder',['items'=>$items]);
      return view('AddOrder');
      //showitems();
   }
	
   public function insert(Request $request){
      $name = $request->input('ItemName');
      Log::info($name);
      DB::insert('insert into ItemMaster (ItemName) values(?)',[$name]);
      echo "'$name' inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
      
   }

   public function showitems(){
      $items = DB::select('select * from ItemMaster');
      return view('AddOrder',['items'=>$items]);
   }

   /*************************Ask Quotation***************************/
   public function insertQuotform(){
      
      // $items = DB::select('select * from AskQuotation');
      // return view('AddQuotation',['quot'=>$quots]);
      return view('AddQuotation');
   }
	
   public function Quotinsert(Request $request)
   {
     	$data=new AskQuotation();
  	  $data->FirstName= request()->get('FirstName');
  	  $data->QuaotationForItemName= request()->get('QuaotationForItemName');
  	  $data->CompanyName= request()->get('CompanyName');
  	  $data->Mobile= request()->get('Mobile');
  	  $data->EmailId= request()->get('EmailId');
  	  $data->City= request()->get('City');
  	  $data->Comments= request()->get('Comments');

      $data->save();
      $email=request()->get('EmailId');
      echo "'$data->FirstName' inserted successfully.<br/>";
      echo '<a href = "/insertquot">Click Here</a> to go back.';
      
   }

      public function SaveMessage(Request $request)      
      {
        Log::info('SAve');
        // try($request:has())
        // {
         $msg=new DropYourMessage();
         $msg->Name= request()->get('name');
         $msg->EmailId= request()->get('email');
         $msg->Subject= request()->get('subject');
         $msg->Message= request()->get('message');
         Log::info($msg->Name);
         Log::info($msg->EmailId);
         Log::info($msg->Subject);
         Log::info($msg->Message);

        if(request()->get('name')=='' && request()->get('email')==''&& request()->get('message')=='')
        {           
          return redirect()->back()->with('message', 'Nothing to submit, Please enter the details!!!');  
        }
        else if(request()->get('message')!='' && request()->get('name')=='' && request()->get('email')=='')
        {
          return redirect()->back()->with('message', 'Please provide either name or email id!!!');  
        }
        else
        {
          $msg->save();
          Log::info('Save done');
          return redirect()->back()->with('message', 'Your message has been sent. Thank you!');
        } 
      // }
      // catch(Exception e)
      // {

      // }         
   }
   
}


