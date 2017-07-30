<?php
/**
 * Created by PhpStorm.
 * User: mrashid
 * Date: 7/15/2017
 * Time: 9:00 PM
 */
namespace App\Http\Controllers;



use app\Http\Requests\Request;


class HomeController extends Controller
{


    /**
     * HomeController constructor.
     * @param $post
     *
     */




    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('student.create');
    }




}