<?php
/**
 * Created by PhpStorm.
 * User: bundalla
 * Date: 3/29/2017
 * Time: 2:13 PM
 */

namespace  App\Http\Controllers;

class  PagesController extends  Controller
{
    public function  getIndex()
    {
      return view('pages.welcome');
    }

    public  function getAbout()
    {

       return view('pages.about');
    }

    public function  getContact()
    {
        return view('pages.contact');
    }


}