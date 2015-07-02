<?php namespace App\Http\Controllers;
use Request;  
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | Home Controller
  |--------------------------------------------------------------------------
  |
  | This controller renders your application's "dashboard" for users that
  | are authenticated. Of course, you are free to change or remove the
  | controller as you wish. It is just here to get your app started!
  |
  */
  public function showTwitter()
  {
    return view('twitter');
  }

  public function feed()
  {
    $query = Request::input('query');
    $connection = new TwitterOAuth('MaHaYdMEVGiLpV2NyStuwGqtx', 'ChoFTQKj1gORuGfJcjzWfM0Jm6DC19GGZXyCL87pavI4AOgcf8', '374546018-YInloWwoPOsbwbgZ2BMgZn44wzSC1DwcFeaBYf5k', 'XF9gUZHzFOOkrvYShsDECGsEr6XKF6cFksPWEGvYQIczR');
    $hasil = $connection->get("search/tweets", array("q" => $query, "geocode" => "-6.1750,106.8283,2500km", "count" => "100"));
    if ($connection->getLastHttpCode() == 200) {
      return view('hasil')->with('hasil',$hasil)->with('query',$query);
    }
    else{
      return "Terjadi Error koneksi ke Twitter";
    }
  }
}