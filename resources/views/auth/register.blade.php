@extends('layouts.home')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8 space-y-6">

        <!-- Header -->
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800">Create an account</h2>
            <p class="mt-2 text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium">Login</a>
            </p>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 text-green-700 border border-green-300 rounded-md p-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 border border-red-300 rounded-md p-4 text-sm">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}" class="space-y-4" id="registerForm">
            @csrf

            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    required
                    autofocus
                    value="{{ old('name') }}"
                    class="block w-full rounded-md border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none transition-colors @error('name') border-red-500 @enderror"
                    placeholder="Enter your full name"
                >
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    required
                    value="{{ old('email') }}"
                    class="block w-full rounded-md border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none transition-colors @error('email') border-red-500 @enderror"
                    placeholder="Enter your email address"
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        class="block w-full rounded-md border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none transition-colors @error('password') border-red-500 @enderror"
                        placeholder="Create a strong password"
                    >
                    <button
                        type="button"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center"
                        onclick="togglePasswordVisibility('password')"
                    >
                        <svg id="passwordEyeIcon" class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                <p class="text-xs text-gray-500 mt-1">Minimum 8 characters with at least one number and one special character</p>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <div class="relative">
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        required
                        class="block w-full rounded-md border border-gray-300 px-4 py-3 text-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none transition-colors @error('password_confirmation') border-red-500 @enderror"
                        placeholder="Confirm your password"
                    >
                    <button
                        type="button"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center"
                        onclick="togglePasswordVisibility('password_confirmation')"
                    >
                        <svg id="confirmPasswordEyeIcon" class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Terms and Conditions -->
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input
                        id="terms"
                        name="terms"
                        type="checkbox"
                        required
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition-colors"
                    >
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="text-gray-700">
                        I agree to the
                        <a href="#" class="text-blue-600 hover:underline">Terms of Service</a>
                        and
                        <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                    </label>
                </div>
            </div>

            <!-- Register Button -->
            <div>
                <button
                    type="submit"
                    id="registerButton"
                    class="w-full bg-blue-600 text-white py-3 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 flex items-center justify-center font-medium"
                >
                    <span class="loading-text">Create Account</span>
                    <svg class="loading-spinner animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </form>

        <!-- Terms and Privacy -->
        <div class="text-center text-xs text-gray-500 mt-4">
            By creating an account, you agree to our
            <a href="#" class="text-blue-600 hover:underline">Terms of Service</a>
            and
            <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
        </div>

    </div>
</div>

<!-- JavaScript -->
<script>
    // Form submission with loading state
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        const button = document.getElementById('registerButton');
        const loadingText = button.querySelector('.loading-text');
        const loadingSpinner = button.querySelector('.loading-spinner');

        // Disable button and show loading state
        button.disabled = true;
        button.classList.add('opacity-75', 'cursor-not-allowed');
        loadingText.textContent = 'Creating Account...';
        loadingSpinner.classList.remove('hidden');
    });

    // Password visibility toggle
    function togglePasswordVisibility(fieldId) {
        const passwordInput = document.getElementById(fieldId);
        const eyeIcon = document.getElementById(fieldId === 'password' ? 'passwordEyeIcon' : 'confirmPasswordEyeIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L8.464 8.464m1.414 1.414L12 12m-3.536-3.536l-1.414-1.414m4.95 4.95l1.414 1.414M12 12l3.536 3.536m-1.414-1.414L12 12m1.414 1.414l1.414 1.414" />
            `;
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            `;
        }
    }

    // Password strength validation
    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const strengthIndicator = document.getElementById('password-strength');

        // Basic password strength check
        let strength = 0;
        if (password.length >= 8) strength++;
        if (password.match(/[0-9]/)) strength++;
        if (password.match(/[!@#$%^&*(),.?":{}|<>]/)) strength++;
        if (password.match(/[a-z]/)) strength++;
        if (password.match(/[A-Z]/)) strength++;

        // You can add visual strength indicator here
    });

    // Password confirmation validation
    document.getElementById('password_confirmation').addEventListener('input', function() {
        const password = document.getElementById('password').value;
        const confirmPassword = this.value;

        if (confirmPassword && password !== confirmPassword) {
            this.classList.add('border-red-500');
            this.classList.remove('border-gray-300');
        } else {
            this.classList.remove('border-red-500');
            this.classList.add('border-gray-300');
        }
    });

    // Auto-hide success/error messages after 5 seconds
    setTimeout(function() {
        const successMessage = document.querySelector('.bg-green-100');
        const errorMessage = document.querySelector('.bg-red-100');

        if (successMessage) {
            successMessage.style.transition = 'opacity 0.5s ease-out';
            successMessage.style.opacity = '0';
            setTimeout(() => successMessage.remove(), 500);
        }

        if (errorMessage) {
            errorMessage.style.transition = 'opacity 0.5s ease-out';
            errorMessage.style.opacity = '0';
            setTimeout(() => errorMessage.remove(), 500);
        }
    }, 5000);

    // Form validation feedback
    document.getElementById('email').addEventListener('blur', function() {
        const email = this.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email && !emailRegex.test(email)) {
            this.classList.add('border-red-500');
            this.classList.remove('border-gray-300');
        } else {
            this.classList.remove('border-red-500');
            this.classList.add('border-gray-300');
        }
    });

    // Enhanced form interaction
    const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.classList.add('ring-2', 'ring-blue-500', 'ring-opacity-50');
        });

        input.addEventListener('blur', function() {
            this.classList.remove('ring-2', 'ring-blue-500', 'ring-opacity-50');
        });
    });
</script>

@endsection
