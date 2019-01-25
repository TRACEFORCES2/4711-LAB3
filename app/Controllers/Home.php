<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
    public function mate3()
    {
        return view('mate3');
    }

    public function mate1()
    {
        return view('mate1');
    }
  public function mate4()
  {
    return view('mate4');
  }

  public function mate2(){ //aaron's mate 2 function
      return view('mate2');
  }


}
