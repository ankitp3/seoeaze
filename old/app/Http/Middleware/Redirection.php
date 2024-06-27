<?php

namespace App\Http\Middleware;
use  PulkitJalan\GeoIP\GeoIP;
use Closure;
class Redirection
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

        $geoip = new GeoIP();
        $geoip->setIp(\Request::ip());
        $country_code = $geoip->getCountryCode();
        
        if($country_code == 'IN'){
            if($request->path() == '/'){
                return \Redirect::intended('https://www.seoeaze.in'); 
            }else{
                return \Redirect::intended('https://www.seoeaze.in/'.$request->path());
            }
        }elseif ($country_code == 'GB'){
            if($request->path() == '/'){
                return \Redirect::intended('https://www.seoeaze.co.uk');
            }else{
                return \Redirect::intended('https://www.seoeaze.co.uk/'.$request->path());
            }
        }
        else{
            return $next($request);
        }
        
      

    }
}
