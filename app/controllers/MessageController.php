<?php 

class MessageController extends BaseController {

  public function getMessagesByUser($id){
    try{
      $user = DB::table('users')->where('id','=',$id)->first();
      $messages = DB::table('messages')
          ->join('users','users.id','=','messages.user_id')
          ->where('messages.team_id','=',$user->team_id)
          ->where('messages.city_id','=',$user->city_id)
          ->orderBy('messages.created_at', 'desc')
          ->select('users.username as username', 'messages.texto as texto','messages.date as date')
          ->take(15)->get();
      $city = City::find($user->city_id);
      return array('city' => $city['name'] ,'messages' => $messages);
    }catch (Exception $e){
      return array('error' => true, 'message' => "Error on the operation. Try again later");
    }
  }

  public function newMessage($id){
    try{
      $message_data = Input::all('u');
      $user = DB::table('users')->where('id','=',$id)->first();
      $message = new Message();
      $message->user_id = $user->id;
      $message->team_id = $user->team_id;
      $message->city_id = $user->city_id;
      $message->texto = $message_data['texto'];
      $date = new DateTime();
      $date_string = $date->format('d-m-Y H:i:s');
      $message->date = $date_string;
      $message->save();
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