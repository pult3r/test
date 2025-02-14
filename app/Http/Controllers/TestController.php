<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;


class TestController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try { 
            $testId = Test::create([
                'title' => 'title '. rand(0,100), 
                'content' => 'content '. rand(0,100),   
            ]) ;
        } catch (Exception $e){
            return $this->sendResponse('error', __( "global.error" ) , [], self::HTTP_STATUST_OK );
        }
        
        return $this->sendResponse('success', __( "test.added" ), [
            'testId' => $testId, 
        ], self::HTTP_STATUST_OK );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        
        dd($test);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
