<?php

namespace App\Http\Middleware;
use App\Model\Factor;
use Closure;

class AddressCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $factor=Factor::where('id',$request->id)->first();
        if($factor->checkaddress($request->id))
        { 
            return $next($request);
        }
        else
        {
            return response()->json(['Message'=>"لطفا قبل از رفتن به صفحه پرداخت، آدرس را انتخاب و یا وارد کنید."]);
        }
        abort(403);
    }
}
