<?php

namespace App\Providers;

use App\Http\Controllers\User\CreateNewUser;
use App\Http\Controllers\User\ResetUserPassword;
use App\Http\Controllers\User\UpdateUserPassword;
use App\Http\Controllers\User\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
            return view('pages.auth.login');
        });

        Fortify::registerView(function () {
            return view('pages.auth.register');
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('pages.auth.forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('pages.auth.reset-password', ['request' => $request]);
        });

        Fortify::verifyEmailView(function () {
            return view('pages.auth.verify-email');
        });
    }
}
