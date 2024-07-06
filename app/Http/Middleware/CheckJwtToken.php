<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class CheckJwtToken
{
    public function handle($request, Closure $next, ...$guards)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
    
            // Contoh pengecekan role
            if ($user->role !== 'mahasiswa' && $user->role !== 'dosen') {
                return response()->json(['error' => 'Unauthorized, role not allowed'], 403);
            }
    
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => 'Token is invalid'], 401);
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => 'Token is expired'], 401);
        } catch (Exception $e) {
            return response()->json(['error' => 'Authorization Token not found'], 401);
        }
    
        return $next($request);
    }
    
}
