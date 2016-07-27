<?php 

class SightingController extends BaseController {

  public function getSightingsByUser($id){
    try{
      $user = DB::table('users')->where('id','=',$id)->first();
      $sightings = DB::table('sightings')
          ->join('users','users.id','=','sightings.user_id')
          ->join('pokemons','pokemons.id','=','sightings.pokemon_id')
          ->where('sightings.team_id','=',$user->team_id)
          ->where('sightings.city_id','=',$user->city_id)
          ->orderBy('sightings.created_at', 'desc')
          ->select('users.username as username', 'sightings.place as lugar','sightings.date as date',
              'pokemons.name as pokemon')
          ->take(15)->get();
      $city = City::find($user->city_id);
      return array('city' => $city['name'] ,'sightings' => $sightings);
    }catch (Exception $e){
      return array('error' => true, 'message' => "Error on the operation. Try again later");
    }
  }

  public function newSighting($id){
    try{
      $sighting_data = Input::all('u');
      $user = DB::table('users')->where('id','=',$id)->first();
      $sighting = new Sighting();
      $sighting->user_id = $user->id;
      $sighting->team_id = $user->team_id;
      if(isset($sighting_data['ciudad'])){
        $sighting->city_id = $sighting_data['ciudad'];
      }else{
        $sighting->city_id = $user->city_id;
      }
      $sighting->pokemon_id = $sighting_data['pokemon'];
      $sighting->place  = $sighting_data['lugar'];
      $date = new DateTime();
      $date_string = $date->format('d-m-Y H:i:s');
      $sighting->date = $date_string;
      $sighting->save();
      return array('error' => false, 'message' => "The operation has been finished successful");
    }catch (Exception $e){
      return array('error' => true, 'message' => "Error on the operation. Try again later");
    }
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>