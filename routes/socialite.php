<?php 

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


// Redirect to provider
Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
});


// Callback from provider
Route::get('/auth/callback/{provider}', function ($provider) {
    $socialUser = Socialite::driver($provider)->stateless()->setHttpClient(new \GuzzleHttp\Client([
        'verify' => filter_var(get_web_config_env_data('SSL_VERIFY'), FILTER_VALIDATE_BOOLEAN) ?? false,
    ]))->user();


    // Find or create the user
    $user = User::firstOrCreate(
        ['email' => $socialUser->getEmail()],
        [
            'name' => $socialUser->getName(),
            'provider_id' => $socialUser->getId(),
            'avatar' => $socialUser->getAvatar(),
            'password' => Hash::make(Str::random(16)),
        ]
    );

    Auth::login($user);

    return redirect()->route('home');
});
