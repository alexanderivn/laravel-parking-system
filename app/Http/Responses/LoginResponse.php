<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return RedirectResponse
     */

    public function toResponse($request)
    {
        if (\Auth::user()->hasRole('Admin')) {
            return redirect()->route('dashboard.index');
        }

        return redirect()->route('parking-check-in.index');
    }
}
