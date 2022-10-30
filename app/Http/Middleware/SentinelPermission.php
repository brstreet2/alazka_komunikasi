<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Cartalyst\Sentinel\Hashing\BcryptHasher;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Closure;

class SentinelPermission {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @param                           $role
     *
     * @return mixed
     */
	public function handle(Request $request, Closure $next, $role ) {

        Sentinel::setHasher( new BcryptHasher() );

        $user = Sentinel::check();

        if ( ! $user ) {
            return redirect()->guest( '/login' );
        }

        if ( ! isset($user->roles[0]) ) {
            return redirect ('no-access');
        }

        if (isset($user->roles[0]) && $user->roles[0]->slug == 'root_admin') {
            return $next($request);
        }

        if (isset($user->roles[0]) && $user->roles[0]->slug == 'employee') {
            return $next($request);
        }

        if ( $user->roles[0]->hasAccess( $role ) ) {
            return $next( $request );
        }

        if ( $request->ajax() || $request->wantsJson() ) {
            return response( trans( 'backpack::base.unauthorized' ), 401 );
        }

        #return abort(404, 'Unauthorized action.');
        return redirect( 'no-access' );
        
	}
}
