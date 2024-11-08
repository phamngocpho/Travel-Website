<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
    </style>
    <script>
        // Function to toggle password visibility
        function togglePasswordVisibility(inputId, eyeIconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(eyeIconId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <!-- Main Container -->
    <div class="max-w-4xl w-full flex rounded-xl shadow-2xl overflow-hidden">
        <!-- Form Container -->
        <div class="w-full md:w-1/2 glass-effect p-8">
            <!-- Register Form -->
            <div>
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Đăng ký</h1>
                    <p class="text-gray-600">Tạo tài khoản mới</p>
                </div>

                <!-- Social Register Buttons -->
                <div class="space-y-3 mb-6">
                    <button class="w-full flex items-center justify-center gap-2 bg-white border border-gray-300 rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-50 transition duration-300">
                        <img src="https://www.google.com/favicon.ico" alt="Google" class="w-5 h-5">
                        Đăng ký với Google
                    </button>
                    <button class="w-full flex items-center justify-center gap-2 bg-[#1877f2] text-white rounded-lg px-4 py-2 hover:bg-[#1865d1] transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                        Đăng ký với Facebook
                    </button>
                </div>

                <div class="relative flex items-center justify-center mb-6">
                    <div class="border-t border-gray-300 w-full"></div>
                    <div class="bg-white px-4 text-sm text-gray-500">hoặc</div>
                    <div class="border-t border-gray-300 w-full"></div>
                </div>

                <!-- Register Form -->
                <form class="space-y-6" action="{{route('register')}}" method="post">
                @if(session('success'))
                    <div style="color: green;">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors->any())
                    <div style="color: red;">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div>
                    @csrf
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Họ và tên
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                <i class="far fa-user"></i>
                            </span>
                            <input type="text" id="full_name"  name="full_name" value="{{old('full_name')}}"
                                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                   placeholder="Nguyễn Văn A" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                <i class="far fa-envelope"></i>
                            </span>
                            <input type="email" id="email" name="email" value="{{old('email')}}"
                                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                   placeholder="example@domain.com" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Mật khẩu
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input id="password" type="password" name="password"
                                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                   placeholder="••••••••" required>
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700"
                                    onclick="togglePasswordVisibility('password', 'password-eye')">
                                <i id="password-eye" class="far fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Xác nhận mật khẩu
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input id="confirm-password" type="password" name="password_confirmation"
                                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                   placeholder="••••••••" required>
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700"
                                    onclick="togglePasswordVisibility('confirm-password', 'confirm-password-eye')">
                                <i id="confirm-password-eye" class="far fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="terms" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            Tôi đồng ý với <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline">Điều khoản sử dụng</a> và <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline">Chính sách bảo mật</a>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white rounded-lg px-4 py-2 font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                        Đăng ký
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-gray-600">
                    Đã có tài khoản? 
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 hover:underline font-medium">
                        Đăng nhập ngay
                    </a>
                </p>
            </div>
        </div>

        <!-- Right Side - Image -->
        <div class="hidden md:block md:w-1/2 bg-cover bg-center" 
             style="background-image: url('https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?auto=format&fit=crop&w=800&q=80')">
        </div>
    </div>
</body>
</html>
