# Laravel Auth with Socialite Demo

A demo Laravel application with authentication and social login integration using **Laravel Socialite**.

## 🚀 Features

- User authentication with Laravel Breeze (or default auth scaffolding)
- Social login via Laravel Socialite
  - Google
  - Facebook
  - GitHub
  - (Easily extendable to more providers)
- Clean and simple starter code
- Ready-to-use authentication boilerplate

## 🛠 Installation

1. Clone the repository:

```bash
git clone https://github.com/teaminfinitydev/laravel-auth-with-socialite-demo.git
cd laravel-auth-with-socialite-demo
```

2. Install dependencies:

```bash
composer install
npm install && npm run dev
```

3. Create a copy of `.env` file:

```bash
cp .env.example .env
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Configure your database in `.env` and run migrations:

```bash
php artisan migrate
```

6. Configure Socialite providers (Google, Facebook, GitHub, etc.) in `.env`:

```env
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URL=http://localhost:8000/auth/google/callback

GITHUB_CLIENT_ID=your-client-id
GITHUB_CLIENT_SECRET=your-client-secret
GITHUB_REDIRECT_URL=http://localhost:8000/auth/github/callback

FACEBOOK_CLIENT_ID=your-client-id
FACEBOOK_CLIENT_SECRET=your-client-secret
FACEBOOK_REDIRECT_URL=http://localhost:8000/auth/facebook/callback
```

7. Start the development server:

```bash
php artisan serve
```

Now you can log in with email/password or via social login providers.

## 📂 Project Structure

- `app/Models/User.php` – User model with Socialite integration
- `app/Http/Controllers/Auth/` – Authentication & Social login controllers
- `routes/web.php` – Routes for authentication and social login
- `resources/views/auth/` – Authentication views


## 📜 License

This project is open-sourced software licensed under the [MIT license](LICENSE).
