<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بوابة المشرفين — Red Sea Digital Pro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700;800&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #050505;
            --panel: rgba(255, 255, 255, 0.035);
            --panel-strong: rgba(255, 255, 255, 0.08);
            --line: rgba(255, 255, 255, 0.08);
            --accent: #00e5ff;
            --accent-glow: rgba(0, 229, 255, 0.16);
            --text: #ffffff;
            --text-soft: rgba(255, 255, 255, 0.74);
            --muted: rgba(255, 255, 255, 0.45);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', 'Tajawal', -apple-system, sans-serif;
            background: 
                radial-gradient(circle at 15% 15%, rgba(0, 229, 255, 0.08), transparent 30%),
                radial-gradient(circle at 85% 85%, rgba(255, 255, 255, 0.03), transparent 25%),
                #050505;
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        .login-card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.045), rgba(255, 255, 255, 0.015));
            border: 1px solid var(--line);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 48px 40px;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 40px 120px rgba(0, 0, 0, 0.65);
            position: relative;
            z-index: 1;
        }

        .login-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 24px;
            background: radial-gradient(circle at 50% 0%, var(--accent-glow), transparent 60%);
            pointer-events: none;
            z-index: -1;
            opacity: 0.7;
        }

        .brand-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 32px;
        }

        .brand-logo {
            width: 180px;
            height: auto;
            margin-bottom: 12px;
            filter: drop-shadow(0 8px 16px rgba(0, 229, 255, 0.15));
        }

        .brand-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--accent);
            text-shadow: 0 0 10px rgba(0, 229, 255, 0.3);
        }

        h1 {
            font-size: 24px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 28px;
            letter-spacing: -0.5px;
            color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-soft);
            letter-spacing: 0.5px;
        }

        input {
            width: 100%;
            padding: 14px 16px;
            font-size: 15px;
            font-family: inherit;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.02);
            color: #fff;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: right;
        }

        input:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.04);
            box-shadow: 0 0 0 4px var(--accent-glow);
        }

        .error-text {
            font-size: 12px;
            color: #ff5f5f;
            margin-top: 6px;
            font-weight: 500;
        }

        .error-box {
            background: rgba(255, 95, 95, 0.08);
            border: 1px solid rgba(255, 95, 95, 0.2);
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 24px;
            color: #ff8b8b;
            font-size: 13px;
            line-height: 1.6;
        }

        .btn {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, var(--accent), #fff);
            color: #02121a;
            font-size: 15px;
            font-weight: 700;
            padding: 15px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 10px 30px rgba(0, 229, 255, 0.15);
            margin-top: 28px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(0, 229, 255, 0.25);
            background: linear-gradient(135deg, #fff, var(--accent));
        }

        .btn:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="brand-container">
            <img class="brand-logo" src="{{ asset('red-sea-logo.png') }}" alt="Red Sea Digital Pro logo">
            <div class="brand-title">Admin Command Portal</div>
        </div>
        
        <h1>بوابة المشرفين</h1>

        @if($errors->any())
            <div class="error-box">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.authenticate') }}">
            @csrf

            <div class="form-group">
                <label for="email">البريد الإلكتروني للإدارة</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="admin@redseadigitalpro.com" required autofocus dir="ltr">
                @error('email') <div class="error-text">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required dir="ltr">
                @error('password') <div class="error-text">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn">تسجيل الدخول كمسؤول</button>
        </form>
    </div>
</body>
</html>
