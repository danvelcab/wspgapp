<?php 

class AttackController extends BaseController {

    public function getAttacksByUser($id){
        try{
            $user = DB::table('users')->where('id','=',$id)->first();
            if($user->team_id == null ||$user->city_id == null) {
                return array('error' => true, 'message' => "Debes completar la configuración en la ventana de mi perfil");
            }
            $attacks = DB::table('attacks')
                ->join('users','users.id','=','attacks.user_id')
                ->where('attacks.team_id','=',$user->team_id)
                ->where('attacks.city_id','=',$user->city_id)
				->where('type','=',1)
                ->orderBy('attacks.created_at', 'desc')
                ->select('users.username as username', 'attacks.lugar as lugar','attacks.date as date',
                    'attacks.texto as texto')
                ->take(15)->get();
            $city = City::find($user->city_id);
            return array('city' => $city['name'] ,'attacks' => $attacks);
        }catch (Exception $e){
            return array('error' => true, 'message' => "Error on the operation. Try again later");
        }
    }
	public function getDefensesByUser($id){
        try{
            $user = DB::table('users')->where('id','=',$id)->first();
            if($user->team_id == null ||$user->city_id == null) {
                return array('error' => true, 'message' => "Debes completar la configuración en la ventana de mi perfil");
            }
            $attacks = DB::table('attacks')
                ->join('users','users.id','=','attacks.user_id')
                ->where('attacks.team_id','=',$user->team_id)
                ->where('attacks.city_id','=',$user->city_id)
                ->where('type','=',0)
                ->orderBy('attacks.created_at', 'desc')
                ->select('users.username as username', 'attacks.lugar as lugar','attacks.date as date',
                    'attacks.texto as texto')
                ->take(15)->get();
            $city = City::find($user->city_id);
            return array('city' => $city['name'] ,'attacks' => $attacks);
        }catch (Exception $e){
            return array('error' => true, 'message' => "Error on the operation. Try again later");
        }
    }
    public function newAttack($id){
        try{
            $attack_data = Input::all('u');
            $user = DB::table('users')->where('id','=',$id)->first();
            $attack = new Attack();
            $attack->user_id = $user->id;
            $attack->team_id = $user->team_id;
            $attack->type = 1;
            $attack->texto = $attack_data['comentario'];
            $attack->lugar = $attack_data['gimnasio'];
            if(isset($attack_data['ciudad'])){
                $attack->city_id = $attack_data['ciudad'];
            }else{
                $attack->city_id = $user->city_id;
            }
            $date = new DateTime();
            $date_string = $date->format('d-m-Y H:i:s');
            $attack->date = $date_string;
            $attack->save();
            return array('error' => false, 'message' => "The operation has been finished successful");
        }catch (Exception $e){
            return array('error' => true, 'message' => "Error on the operation. Try again later");
        }
    }
    public function newDefense($id){
        try{
            $attack_data = Input::all('u');
            $user = DB::table('users')->where('id','=',$id)->first();
            $attack = new Attack();
            $attack->user_id = $user->id;
            $attack->team_id = $user->team_id;
            $attack->type = 0;
            $attack->texto = $attack_data['comentario'];
            $attack->lugar = $attack_data['gimnasio'];
            if(isset($attack_data['ciudad'])){
                $attack->city_id = $attack_data['ciudad'];
            }else{
                $attack->city_id = $user->city_id;
            }
            $date = new DateTime();
            $date_string = $date->format('d-m-Y H:i:s');
            $attack->date = $date_string;
            $attack->save();
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