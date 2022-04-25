<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /* Return error response */
    public function error($msg = 'something is wrong')
    {
        $this->alertError($msg);
        return back();
    }

    /* Return error response when there is duplicate */
    public function duplicateError($msg)
    {
        $this->alertError($msg);
        return back()->withErrors($msg);
    }

    /* Return error response with form request  */
    public function errorWithInput($request,$msg = 'Something is Wrong')
    {
        $this->alertError($msg);
        return back()->withInput($request);
    }

    /* Return success response */
    public function success($msg)
    {
        $this->alertSuccess($msg);
        return back();
    }

    /* Return success with route */
    public function successRoute($route,$msg)
    {
        $this->alertSuccess($msg);
        return redirect()->route($route);
    }

    /* error sweet alert */
    private function alertError($msg = 'Something went Wrong')
    {
        return flash($msg)->error();
    }

    /* success sweet alert */
    private function alertSuccess($msg = 'Successful created')
    {
        return flash($msg)->success();
    }



}
