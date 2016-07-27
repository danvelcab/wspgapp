<?php 

class CityController extends BaseController {
  public function getCities($id){
    $user = DB::table('users')
        ->where('id','=',$id)
        ->first();
    $city = City::find($user->city_id);
    $provinces = Province::all();
    $cities = array();
    $province_id = 0;
    if($city != null){
      $cities = DB::table('cities')
          ->where('province_id','=',$city->province_id)
          ->orderby('name','asc')
          ->get();
      $province_id = $city->province_id;
    }
    return array('user' => $user, 'cities' => $cities,
        'provinces' => $provinces, 'province_id' => $province_id);
  }
  public function getCityByProvince($province_id){
    $cities = DB::table('cities')
        ->where('province_id','=',$province_id)
        ->orderby('name','asc')
        ->get();
    return array('cities' => $cities);
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