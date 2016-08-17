<?php

namespace Litepie\User\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Litepie\User\Exceptions\RoleDeniedException;

class VerifyRole
{
    /**
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param int|string               $role
     *
     * @throws \Litepie\User\Exceptions\RoleDeniedException
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($this->auth->check() && $this->auth->user()->is($role)) {
            return $next($request);
        }

        throw new RoleDeniedException($role);
    }
}
