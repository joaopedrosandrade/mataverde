<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Admin Mata Verde</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            max-width: 450px;
            width: 100%;
            padding: 20px;
        }
        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .login-header {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .login-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 1.8rem;
        }
        .login-header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 0.9rem;
        }
        .login-body {
            padding: 40px 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #333;
        }
        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
        }
        .btn-login {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
            width: 100%;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(40, 167, 69, 0.4);
        }
        .form-check-label {
            color: #666;
            cursor: pointer;
        }
        .forgot-password {
            color: #28a745;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .back-to-site {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .back-to-site a {
            color: #28a745;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s;
        }
        .back-to-site a:hover {
            color: #20c997;
        }
        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .input-icon {
            position: relative;
        }
        .input-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        .input-icon .form-control {
            padding-left: 45px;
        }
        .brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 5px;
        }
        .brand-icon {
            font-size: 2rem;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="brand-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="brand">Mata Verde</div>
                <p>Painel Administrativo</p>
            </div>
            
            <div class="login-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ $errors->first() }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ session('error') }}
                    </div>
                @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope me-1"></i>E-mail
                        </label>
                        <div class="input-icon">
                            <i class="fas fa-envelope"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                                @error('email')
                            <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                    <div class="form-group">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock me-1"></i>Senha
                        </label>
                        <div class="input-icon">
                            <i class="fas fa-lock"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password">
                        </div>
                                @error('password')
                            <span class="text-danger small">{{ $message }}</span>
                                @enderror
                        </div>

                    <div class="form-group d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                Lembrar-me
                                    </label>
                        </div>

                                @if (Route::has('password.request'))
                            <a class="forgot-password" href="{{ route('password.request') }}">
                                Esqueceu a senha?
                                    </a>
                                @endif
                            </div>

                    <button type="submit" class="btn btn-primary btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>Entrar
                    </button>
                    </form>

                <div class="back-to-site">
                    <a href="{{ route('front.index') }}">
                        <i class="fas fa-arrow-left me-1"></i>Voltar para o site
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
