<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ABE Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
                <!-- Logo -->
                <div class="text-center mb-8">
                    <img src="{{ asset('assets/img/LOGO ABE GROUP-02.png') }}" alt="ABE Group Logo" class="h-12 w-auto mx-auto mb-4">
                    <p class="text-gray-600 dark:text-gray-400 mt-2">Masuk ke akun Anda</p>
                </div>

                <!-- Login Form -->
                <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                    @csrf
                    @if ($errors->any())
                        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Email
                        </label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="nama@email.com"
                        >
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Password
                        </label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="•••••••••"
                        >
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                id="remember"
                                name="remember"
                                type="checkbox"
                                class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded"
                            >
                            <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                                Ingat saya
                            </label>
                        </div>
                        <a href="#" class="text-sm text-purple-600 hover:text-purple-500 dark:text-purple-400">
                            Lupa password?
                        </a>
                    </div>

                    <button
                        type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                    >
                        Masuk
                    </button>
                </form>

                <!-- Register Link -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Belum punya akun?
                        <a href="{{ route('auth.register') }}" class="font-medium text-purple-600 hover:text-purple-500 dark:text-purple-400">
                            Daftar sekarang
                        </a>
                    </p>
                </div>

                <!-- Back to Home -->
                <div class="mt-4 text-center">
                    <a href="{{ url('/') }}" class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
