<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function showTwitter()
	{
		return view('twitter');
	}

	public function show($query)
	{		
		$connection = new TwitterOAuth('MaHaYdMEVGiLpV2NyStuwGqtx', 'ChoFTQKj1gORuGfJcjzWfM0Jm6DC19GGZXyCL87pavI4AOgcf8', '374546018-YInloWwoPOsbwbgZ2BMgZn44wzSC1DwcFeaBYf5k', 'XF9gUZHzFOOkrvYShsDECGsEr6XKF6cFksPWEGvYQIczR');
    	// $positive = $connection->get("search/tweets", array("q" => "#UGM", "count" => "100"));
		$hasil = $connection->get("search/tweets", array("q" => $query, "geocode" => "-6.1750,106.8283,2500km", "count" => "100"));

		// $hasilArr = array();

		// foreach($hasil->statuses as $value) {
        	// $item = [];
		// 	$item = [
      		// 'twit' => $value->text,
		// 	'lokasi' => $value->place->full_name
		// 	];
		// 	array_push($hasilArr, $item);
		// }

		return response()->json([
			'pure' => $hasil
      // 'hasil' => $hasilArr
			]);
	}
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
