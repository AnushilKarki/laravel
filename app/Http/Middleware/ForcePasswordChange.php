<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ForcePasswordChange
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
        if(auth()->user()){
            $user_id=auth()->user()->id;
            $value=User::where('id',$user_id)->value('is_change');
            if($value==1)
            {
                return $next($request);
            }
            else{
                return response()->json([
                    'code' => '402',
                    'message' => 'you must change password to proceed',
                ]);
            }
        }else {
            return redirect()->route('login');
            return response()->json([
                'code' => '402',
                'message' => 'you must authenticate to proceed',
            ]);
        }
       

    }
}