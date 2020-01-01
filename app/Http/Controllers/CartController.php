<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function List(){
      
      $message = 'I am CartController actionList, view (list.blade.php)!';

      return view('list')->with('message', $message);

    }
     public function ListId(){

     	$message = 'I am CartController actionListId, view (listid.blade.php)!';

      return view('listid')->with('message', $message);
    	
    }
     public function Add(){
    	
    	$message = 'I am CartController actionAdd, view (add.blade.php)!';

      return view('add')->with('message', $message);

    }
     public function Edit(){
    	
    	$message = 'I am CartController actionEdit, view (edit.blade.php)!';

      return view('edit')->with('message', $message);

    }
     public function Delete(){
    	
    	$message = 'I am CartController actionDelete, view (delete.blade.php)!';

      return view('delete')->with('message', $message);

    }
}
