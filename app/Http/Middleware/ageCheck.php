<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // เขียน check if required ของ age จะตั้งอะไรก็ได้ ที่ส่ง path url ไปเป็น get ว่าถ้าอายุไม่เกินเท่าไร จะให้ redirect ไปที่ view ไหนต่อ เป็นต้น
        // $request->age ไม่ต้องมี () เวลา check
        if ($request->age && $request->age<18) {
            return redirect('noaccess');
        }
        return $next($request);
    }
}
