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
	
   public function Quotinsert(){
   	  $data=new AskQuotation();
	  $data->FirstName= Input::get('FirstName');
	  $data->LastName= Input::get('LastName');
	  $data->CompanyName= Input::get('CompanyName');
	  $data->Mobile= Input::get('Mobile');
	  $data->EmailId= Input::get('EmailId');
	  $data->City= Input::get('City');
	  $data->Comments= Input::get('Comments');
      Log::info($data->FirstName);
      Log::info($data->LastName);
      Log::info($data->CompanyName);
      Log::info($data->Mobile);Log::info($data->EmailId);
      Log::info($data->City);Log::info($data->Comments);
      $data->save();
      $email=Input::get('EmailId');
      //Log::info($email);
      echo "'$data->FirstName' inserted successfully.<br/>";
      echo '<a href = "/insertquot">Click Here</a> to go back.';
      
   }

      public function SaveMessage()
      {
      $msg=new DropYourMessage();
     $msg->Name= Input::get('name');
     $msg->EmailId= Input::get('email');
     $msg->Subject= Input::get('subject');
     $msg->Message= Input::get('message');
      Log::info($msg->Name);
      Log::info($msg->EmailId);
      Log::info($msg->Subject);
      Log::info($msg->Message);
      
      //echo "Your message added successfully.<br/>";   

      if(Input::get('name')=='' && Input::get('email')==''&& Input::get('message')=='')
      {           
        return redirect()->route('contact')->with('message', 'Nothing to submit, Please enter the details!!!');  
      }
      else if(Input::get('message')!='' && Input::get('name')=='' && Input::get('email')=='')
      {
        return redirect()->route('contact')->with('message', 'Please provide either name or email id!!!');  
      }
      else
      {
        $msg->save();
        return view('contact')->with('message', 'Your message has been sent. Thank you!');
        //return redirect()->route('contact')->with('message', 'Your message has been sent. Thank you!');   
      }          
   }
   
}


