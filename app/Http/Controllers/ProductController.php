<?php

namespace App\Http\Controllers;

use App\Services\weatherServices;
use SalimMbise\TanzaniaRegions\TanzaniaRegions;
use App\Models\products;
use App\Models\User;
use App\Models\shamba;
use App\Models\ratiba;
use App\Models\message;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function dashboard(){
        return view('products.dashboard');
    }
    
    public function store(Request $request)
    
    {
        // Validate the request data
        $validated = $request->validate([
            'product' => 'required|string|max:255',
            'description' => 'required|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'address' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

     
        $imagePath = null;
        if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        }

       
       $product = products::create([

           'product' => $request->product,
           'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'address' => $request->address,
            'image_path' =>$imagePath,

        
       ]);
       return redirect()->route('products.dashboard')->with('success', 'Product created successfully.');
       
    }


    public function sendData(Request $request) {
      
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|max:255|digits:10|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        $user = user::create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'password' => hash::make($request->password),
        ]);
    
        return redirect()->route('products.login')->with('success', 'Your account has been successfully created!');
    
    }
    public function register(){
        return view('products.register');
    }


    public function loginProcessing(Request $request) {
        $validated = $request->validate([
            'telephone' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $credentials = [
            'telephone' => $request->telephone,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('products.dashboard')->with('success', 'Umefanikiwa kuingia!');
        }
        return back()->with('error', 'Nambari ya simu au neno siri si sahihi. Tafadhali jaribu tena.');

    }
    public function login(){
        return view('products.login');
    }


    public function mikoa(Request $request)
    {
        $validated = $request->validate([
            'region' => 'required',
        ]);
    
        $selectedRegion = $validated['region'];
    
        $tanzaniaRegions = new TanzaniaRegions();
        $regions = $tanzaniaRegions->getRegions(); 
    
        return view('products.weather', compact('regions', 'selectedRegion',));
    }
    

   public function weather()
   {
    $tanzaniaRegions = new TanzaniaRegions();
    $regions = $tanzaniaRegions->getRegions();

    return view('products.weather', compact('regions'));
   }

  //get fucking weather
  public function getWeather(Request $request, weatherServices $weatherServices){
    // Validation
    $request->validate([
        'region' => 'required',
    ]);
    
    // Get weather data
    $weather = $weatherServices->getWeatherByMikoa($request->region);
    
    if(!$weather){
        $tanzaniaRegions = new TanzaniaRegions();
        $regions = $tanzaniaRegions->getRegions();
        $selectedRegion = $request->region;
        
        return view('products.weather', compact('regions', 'selectedRegion'))
            ->with('error', 'Hatukuweza kupata hali ya hewa kwa sasa.');
    }
    
    $tanzaniaRegions = new TanzaniaRegions();
    $regions = $tanzaniaRegions->getRegions();
    $selectedRegion = $request->region;
    
    return view('products.weather', compact('weather', 'regions', 'selectedRegion'));
}

//controlling mashamba on the system
public function mashamba(){
    return view('products.mashamba');
}
//testing myfunction
public function test(){
    return view('products.test');
}
//sending mashamba data to the database
public function storeMashamba(Request $request)
{
    $validated = $request->validate([
        'jina_la_shamba' => 'nullable|string|max:255',
        'ukubwa_wa_shamba' => 'nullable|string|max:255',
        'aina_ya_zao' => 'nullable|string|max:255',
        
    ]);
    
    $shamba = Shamba::create([
        'jina_la_shamba' => $request->jina_la_shamba,
        'ukubwa_wa_shamba' => $request->ukubwa_wa_shamba,
        'aina_ya_zao' => $request->aina_ya_zao,
       
    ]);
    
    return redirect()->route('products.mashamba')->with('success', 'umefanikiwa kutuma taarifa');
}
//sending schedule data to database
public function storeRatiba(Request $request) {
    $validated = $request->validate([
        'kazi' => 'required|string|max:255',
        'tarehe' => 'required|date',
    ]);
    
    
    $ratiba = ratiba::create([
        'kazi' => $request->kazi,
        'tarehe' => $request->tarehe,
    ]);
    
    return redirect()->route('products.mashamba')->with('success', 'umefanikiwa kutuma taarifa');
}

  public function getMashambaData(){
    $mashamba = shamba::all();
    $ratiba = ratiba::all();

    return view('products.mashamba', compact('mashamba','ratiba'));
  }
  public function masoko(){
    $products = products::all();
    return view('products.masoko', compact('products'));
  }
  public function about(){
    return view('products.about');
  }
  public function contact(){
    return view('products.contact');
  }
  public function service(){
    return view('products.service');
  }


  //message handling
  public function message(Request $request){
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|min:5',
    ]);
    
    
    $message = message::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);
    return redirect()->route('home')->with('success', 'umefanikiwa kutuma taarifa');
    
  }
  public function ujumbe(Request $request){
    $validated = $request->validate([
     'phone' => 'required|string|max:255|digits:10',
     'email' => 'required|string|max:255',
     'subject' => 'required|string|max:255',
     'message' => 'required|string|max:255',
    ]);

    $contact = contact::create([
        'phone' => $request->phone,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,

    ]);
    return redirect()->route('products.contact')->with('success', 'umefanikiwa kutuma ujumbe');
  }
}
