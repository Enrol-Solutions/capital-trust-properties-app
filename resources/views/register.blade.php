<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Find Apartments, Houses And Lands For Rent Or Sale | Capital Trust Properties</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Discover premium real estate opportunities in Sri Lanka with the No.1 Real Estate Agent, Capital Trust Properties. Specializing in luxury apartments, commercial spaces, and land sales, we offer personalized services to help you find your dream property. Trusted by clients for our expertise and market knowledge.">

    <link rel="shortcut icon" href="/images/main/favicon.png">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #0f172a;
            --secondary-color: #16a34a;
            --accent-color: #dc2626;
            --gold-color: #f59e0b;
            --dark-gradient: linear-gradient(135deg, #065f46 0%, #047857 50%, #059669 100%);
            --light-gradient: linear-gradient(135deg, #34d399 0%, #10b981 100%);
            --success-gradient: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #065f46 0%, #047857 30%, #059669 60%, #34d399 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating particles background */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) { width: 10px; height: 10px; left: 20%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 15px; height: 15px; left: 40%; animation-delay: 2s; }
        .particle:nth-child(3) { width: 8px; height: 8px; left: 60%; animation-delay: 4s; }
        .particle:nth-child(4) { width: 12px; height: 12px; left: 80%; animation-delay: 1s; }
        .particle:nth-child(5) { width: 18px; height: 18px; left: 10%; animation-delay: 3s; }

        @keyframes float {
            0%, 100% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10%, 90% { opacity: 1; }
            50% { transform: translateY(-100px) rotate(180deg); }
        }

        .main-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            box-shadow:
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            position: relative;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .left-panel {
            background: var(--dark-gradient);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100%;
            padding: 40px 20px;
        }

        .left-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1.5" fill="rgba(255,255,255,0.05)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .logo-container {
            position: relative;
            z-index: 2;
            text-align: center;
            margin-bottom: 30px;
        }

        .lottie-container {
            width: 200px;
            height: 200px;
            margin: 0 auto 20px;
            position: relative;
            z-index: 2;
        }

        .brand-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            letter-spacing: 2px;
        }

        .brand-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
            letter-spacing: 1px;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        }

        .right-panel {
            padding: 60px 40px;
            position: relative;
        }

        .welcome-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .welcome-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 10px;
            position: relative;
        }

        .welcome-subtitle {
            color: #6c757d;
            font-size: 1.1rem;
            font-weight: 300;
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 15px;
            padding: 15px 20px 15px 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(248, 249, 250, 0.8);
            backdrop-filter: blur(10px);
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(34, 197, 94, 0.25);
            background: #fff;
            transform: translateY(-2px);
        }

        .form-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 1.1rem;
            z-index: 5;
        }

        .btn-login {
            background: var(--success-gradient);
            border: none;
            border-radius: 15px;
            padding: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(34, 197, 94, 0.4);
        }

        .btn-home {
            background: rgba(108, 117, 125, 0.1);
            border: 2px solid #e9ecef;
            border-radius: 15px;
            padding: 12px;
            font-size: 1rem;
            color: #6c757d;
            transition: all 0.3s ease;
        }

        .btn-home:hover {
            background: #f8f9fa;
            border-color: #dee2e6;
            transform: translateY(-1px);
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
        }

        .signup-link a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        .alert {
            border-radius: 15px;
            border: none;
            backdrop-filter: blur(10px);
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .scroll-progress {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }

        .scroll-top {
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .scroll-top:hover {
            color: #fff;
            transform: translateY(-2px);
        }

        .scroll-line {
            width: 40px;
            height: 2px;
            background: rgba(255, 255, 255, 0.3);
            position: relative;
            border-radius: 1px;
        }

        .scroll-point {
            position: absolute;
            width: 8px;
            height: 8px;
            background: #fff;
            border-radius: 50%;
            top: -3px;
            animation: scrollPoint 2s ease-in-out infinite;
        }

        @keyframes scrollPoint {
            0%, 100% { left: 0; }
            50% { left: 32px; }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-card {
                margin: 10px;
                border-radius: 20px;
            }

            .left-panel {
                min-height: 300px;
                padding: 30px 20px;
            }

            .brand-title {
                font-size: 2rem;
            }

            .lottie-container {
                width: 150px;
                height: 150px;
            }

            .right-panel {
                padding: 40px 30px;
            }

            .welcome-title {
                font-size: 2.2rem;
            }
        }

        .error-text {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 5px;
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
    </style>
</head>

<body data-mobile-nav-style="classic">
    <!-- Floating Particles Background -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Alert Messages -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible position-fixed top-0 end-0 m-4 fade show" role="alert" style="z-index: 9999;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible position-fixed top-0 end-0 m-4 fade show" role="alert" style="z-index: 9999;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Main Container -->
    <div class="main-container">
        <div class="login-card">
            <div class="row g-0 h-100">
                <!-- Left Panel -->
                <div class="col-lg-6">
                    <div class="left-panel">
                        <div class="logo-container">
                            <!-- Lottie Real Estate Animation -->
                            <div class="lottie-container" id="real-estate-animation"></div>
                            <h1 class="brand-title">SELL | BUY | RENT</h1>
                            <p class="brand-subtitle">Capital Trust Properties</p>
                        </div>
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="col-lg-6">
                    <div class="right-panel">
                        <div class="welcome-section">
                            <h2 class="welcome-title">Welcome!</h2>
                            <p class="welcome-subtitle">Create your account to get started.</p>
                        </div>

                        <form action="/UserRegister" method="POST">
                            @csrf

                            <!-- Name Field -->
                            <div class="form-group">
                                <i class="fas fa-user form-icon"></i>
                                <input
                                    name="name"
                                    maxlength="30"
                                    type="text"
                                    class="form-control form-control-lg"
                                    placeholder="Enter Name"
                                    required
                                >
                            </div>
                            @error('name')
                                <div class="error-text">{{ $message }}</div>
                            @enderror

                            <!-- Email Field -->
                            <div class="form-group">
                                <i class="fas fa-envelope form-icon"></i>
                                <input
                                    name="email"
                                    maxlength="30"
                                    type="email"
                                    class="form-control form-control-lg"
                                    placeholder="Email address"
                                    required
                                >
                            </div>
                            @error('email')
                                <div class="error-text">{{ $message }}</div>
                            @enderror

                            <!-- Contact Field -->
                            <div class="form-group">
                                <i class="fas fa-phone form-icon"></i>
                                <input
                                    name="contact"
                                    maxlength="30"
                                    type="text"
                                    class="form-control form-control-lg"
                                    placeholder="Contact Number"
                                    required
                                >
                            </div>
                            @error('contact')
                                <div class="error-text">{{ $message }}</div>
                            @enderror

                            <!-- Password Field -->
                            <div class="form-group">
                                <i class="fas fa-lock form-icon"></i>
                                <input
                                    name="password"
                                    maxlength="30"
                                    type="password"
                                    class="form-control form-control-lg"
                                    placeholder="Password"
                                    required
                                >
                            </div>
                            @error('password')
                                <div class="error-text">{{ $message }}</div>
                            @enderror

                            <!-- Confirm Password Field -->
                            <div class="form-group">
                                <i class="fas fa-lock form-icon"></i>
                                <input
                                    name="password_confirmation"
                                    maxlength="30"
                                    type="password"
                                    class="form-control form-control-lg"
                                    placeholder="Confirm Password"
                                    required
                                >
                            </div>
                            @error('password_confirmation')
                                <div class="error-text">{{ $message }}</div>
                            @enderror

                            <!-- Register Button -->
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-login w-100">
                                    <i class="fas fa-user-plus me-2"></i>
                                    Register
                                </button>
                            </div>
                        </form>

                        <!-- Home Button -->
                        <div class="form-group">
                            <button onclick="location.href='/'" class="btn btn-home w-100">
                                <i class="fas fa-home me-2"></i>
                                Go Back Home
                            </button>
                        </div>

                        <!-- Sign In Link -->
                        <div class="signup-link">
                            <small>Already have an account? <a href="/login">Sign In</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span>
            <span class="scroll-line">
                <span class="scroll-point"></span>
            </span>
        </a>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>

    <script>
        // Initialize Lottie Animation - Real Estate House Animation
        const animation = lottie.loadAnimation({
            container: document.getElementById('real-estate-animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://lottie.host/a8c8b8d3-4f2a-4c6e-9b7f-3d8e2f5a1c9b/LottieFlow-House-20241101T120000-d5f7e8a9.json'
        });

        // Fallback animation if the first one doesn't load
        animation.addEventListener('data_failed', function() {
            console.log('Primary animation failed, loading fallback...');
            lottie.destroy();
            const fallbackAnimation = lottie.loadAnimation({
                container: document.getElementById('real-estate-animation'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'https://assets1.lottiefiles.com/packages/lf20_puciaact.json' // Simple house animation
            });
        });

        // Add floating animation to form elements
        document.addEventListener('DOMContentLoaded', function() {
            const formControls = document.querySelectorAll('.form-control');

            formControls.forEach((control, index) => {
                control.addEventListener('focus', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 8px 25px rgba(34, 197, 94, 0.15)';
                });

                control.addEventListener('blur', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });

            // Add entrance animations with delay
            const elements = document.querySelectorAll('.form-group, .welcome-section');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.animation = `slideUp 0.6s ease-out ${index * 0.1}s forwards`;
            });
        });

        // Enhanced scroll progress
        let scrollProgress = document.querySelector('.scroll-point');
        if (scrollProgress) {
            window.addEventListener('scroll', () => {
                let scrolled = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
                scrollProgress.style.left = `${Math.min(scrolled * 0.32, 32)}px`;
            });
        }

        // Add ripple effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                let ripple = document.createElement('span');
                ripple.classList.add('ripple');
                this.appendChild(ripple);

                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;

                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;

                setTimeout(() => {
                    ripple.remove();
                }, 300);
            });
        });
    </script>

    <style>
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            transform: scale(0);
            animation: ripple-animation 0.3s linear;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
    </style>
</body>
</html>
