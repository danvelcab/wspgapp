<?php 

class UserController extends BaseController {
    public function register(){
        $username = DB::table('users')->where('username','=',Input::all('username'))->first();
        if($username){
            return array('error' => true, 'El username ya está en uso. Elije otro');
        }
        $username = DB::table('users')->where('email','=',Input::all('email'))->first();
        if($username){
            return array('error' => true, 'El email ya está en uso. Elije otro');
        }
        $user = new User();
        $user->username = Input::all('username');
        $user->email = Input::all('email');
        $user->password = Input::all('password');
        $user->save();
        return array('error' => false, 'user' => $user);

    }
    public function login(){
        $user = DB::table('users')
            ->where('username','=',Input::all('name')['name'])
            ->where('password','=',Input::all('name')['pw'])
            ->first();
        if($user == null){
            return array('result'=>false);
        }else{
            return array('result'=>true, 'id' => $user->id);
        }
    }
    public function getProfile($id){
        $user = DB::table('users')->where('id','=',$id)->first();
        $teams = Team::all();
        $cities = DB::table('cities')
			->orderby('name','asc')
			->get();
        return array('user' => $user, 'teams' => $teams, 'cities' => $cities);
    }
    public function updateProfile($id){
        try{
            $setting = Input::all('u');
            $user = DB::table('users')->where('id','=',$id)->first();
            $user = User::find($user->id);
            if(isset($setting['team'])){
                $user->team_id = $setting['team'];
            }
            if(isset($setting['city'])){
                $user->city_id = $setting['city'];
            }
            $user->save();
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