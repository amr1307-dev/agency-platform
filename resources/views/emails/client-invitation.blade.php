<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Cairo', 'Tajawal', sans-serif;
            background: #050505;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            max-width: 520px;
            margin: 0 auto;
            padding: 40px 24px;
        }
        .card {
            background: linear-gradient(180deg, rgba(255,255,255,0.045), rgba(255,255,255,0.015));
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 24px;
            padding: 40px 32px;
            text-align: center;
        }
        .brand {
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #00e5ff;
            margin-bottom: 24px;
        }
        h1 {
            font-size: 24px;
            font-weight: 800;
            margin: 0 0 16px;
            letter-spacing: -0.5px;
        }
        p {
            font-size: 15px;
            line-height: 1.8;
            color: rgba(255,255,255,0.74);
            margin: 0 0 28px;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #00e5ff, #fff);
            color: #02121a;
            font-size: 15px;
            font-weight: 700;
            padding: 15px 36px;
            border-radius: 999px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(0,229,255,0.15);
        }
        .hr {
            border: 0;
            height: 1px;
            background: rgba(255,255,255,0.08);
            margin: 32px 0;
        }
        .footer {
            font-size: 12px;
            color: rgba(255,255,255,0.45);
            line-height: 1.6;
        }
        .footer a {
            color: #00e5ff;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="card">
            <div class="brand">Red Sea Digital Pro</div>
            <h1>مرحباً {{ $client->name }}</h1>
            <p>تم استلام طلبك بنجاح. لتفعيل حسابك والدخول إلى بوابة العميل الخاصة بك، يرجى إنشاء كلمة المرور الخاصة بك عبر الرابط أدناه.</p>
            <a class="btn" href="{{ $setupUrl }}" target="_blank">إنشاء كلمة المرور</a>
            <hr class="hr">
            <div class="footer">
                هذا الرابط صالح لمدة 48 ساعة.<br>
                إذا لم تقم بإنشاء حساب، يمكنك تجاهل هذه الرسالة.<br>
                <a href="{{ url('/apply') }}">redseadigitalpro.com</a>
            </div>
        </div>
    </div>
</body>
</html>
