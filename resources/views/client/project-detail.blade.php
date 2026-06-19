<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} — Red Sea Digital Pro</title>
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
            --accent-glow: rgba(0, 229, 255, 0.12);
            --text: #ffffff;
            --text-soft: rgba(255, 255, 255, 0.74);
            --muted: rgba(255, 255, 255, 0.45);
            --shadow: 0 28px 120px rgba(0, 0, 0, 0.56);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', 'Tajawal', -apple-system, sans-serif;
            background: 
                radial-gradient(circle at 10% 10%, rgba(0, 229, 255, 0.06), transparent 35%),
                radial-gradient(circle at 90% 80%, rgba(255, 255, 255, 0.02), transparent 30%),
                #050505;
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Navigation */
        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 5%;
            background: rgba(5, 5, 5, 0.75);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--line);
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo {
            width: 140px;
            height: auto;
            filter: drop-shadow(0 6px 12px rgba(0, 229, 255, 0.15));
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-links a {
            font-size: 14px;
            color: var(--text-soft);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.25s ease;
        }

        .nav-links a:hover {
            color: var(--accent);
            text-shadow: 0 0 10px rgba(0, 229, 255, 0.3);
        }

        .nav-links .btn-logout {
            font-size: 14px;
            color: var(--muted);
            text-decoration: none;
            padding: 6px 16px;
            border-radius: 999px;
            border: 1px solid var(--line);
            transition: all 0.25s ease;
        }

        .nav-links .btn-logout:hover {
            color: #ff5f5f;
            border-color: rgba(255, 95, 95, 0.3);
            background: rgba(255, 95, 95, 0.05);
        }

        /* Container */
        .container {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            padding: 40px 24px 80px;
            flex-grow: 1;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            font-size: 14px;
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 32px;
            transition: all 0.2s;
            gap: 6px;
        }

        .back-link:hover {
            color: #fff;
            transform: translateX(4px);
        }

        /* Header */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 12px;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #fff;
        }

        .meta {
            font-size: 14px;
            color: var(--muted);
            margin-bottom: 40px;
            border-bottom: 1px solid var(--line);
            padding-bottom: 20px;
        }

        /* Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            padding: 6px 16px;
            border-radius: 999px;
            border: 1px solid transparent;
        }

        .badge-received {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-soft);
            border-color: rgba(255, 255, 255, 0.1);
        }

        .badge-in_progress {
            background: rgba(0, 229, 255, 0.06);
            color: var(--accent);
            border-color: rgba(0, 229, 255, 0.2);
            box-shadow: 0 0 15px rgba(0, 229, 255, 0.1);
        }

        .badge-review {
            background: rgba(251, 191, 36, 0.06);
            color: #fbbf24;
            border-color: rgba(251, 191, 36, 0.2);
        }

        .badge-delivered {
            background: rgba(52, 211, 153, 0.06);
            color: #34d399;
            border-color: rgba(52, 211, 153, 0.2);
        }

        .badge-archived {
            background: rgba(156, 163, 175, 0.05);
            color: #9ca3af;
            border-color: rgba(156, 163, 175, 0.1);
        }

        /* Cards */
        .card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.015));
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 28px;
            backdrop-filter: blur(15px);
            box-shadow: var(--shadow);
        }

        .card h2 {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #fff;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-right: 3px solid var(--accent);
            padding-right: 12px;
        }

        .brief-text {
            font-size: 15px;
            line-height: 1.8;
            color: var(--text-soft);
            white-space: pre-wrap;
        }

        .deliverables-list {
            list-style: none;
            display: grid;
            gap: 16px;
        }

        .deliverables-list li {
            padding: 20px;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.015);
            transition: all 0.25s ease;
        }

        .deliverables-list li:hover {
            border-color: rgba(0, 229, 255, 0.18);
            background: rgba(255, 255, 255, 0.035);
        }

        .deliverable-title {
            font-weight: 700;
            font-size: 16px;
            color: #fff;
            margin-bottom: 6px;
        }

        .deliverable-type {
            font-size: 11px;
            color: var(--accent);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
            display: inline-block;
            background: rgba(0, 229, 255, 0.08);
            padding: 2px 10px;
            border-radius: 999px;
        }

        .deliverable-notes {
            font-size: 14px;
            color: var(--text-soft);
            line-height: 1.6;
        }

        /* Form */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text-soft);
        }

        select, textarea {
            width: 100%;
            padding: 14px 16px;
            font-size: 15px;
            font-family: inherit;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.02);
            color: #fff;
            outline: none;
            transition: all 0.25s ease;
            text-align: right;
        }

        select option {
            background: #0d0d0f;
            color: #fff;
        }

        select:focus, textarea:focus {
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.04);
            box-shadow: 0 0 0 4px var(--accent-glow);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--accent), #fff);
            color: #02121a;
            font-size: 14px;
            font-weight: 700;
            padding: 14px 32px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 10px 25px rgba(0, 229, 255, 0.1);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(0, 229, 255, 0.25);
        }

        .success-box {
            background: rgba(52, 211, 153, 0.08);
            border: 1px solid rgba(52, 211, 153, 0.2);
            border-radius: 12px;
            padding: 16px 20px;
            margin-bottom: 28px;
            color: #34d399;
            font-size: 14px;
            font-weight: 500;
        }

        /* Activity Log */
        .activity-list {
            list-style: none;
            display: grid;
            gap: 14px;
        }

        .activity-list li {
            padding: 16px 20px;
            border-radius: 12px;
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.01);
            font-size: 14px;
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .activity-date {
            color: var(--muted);
            font-size: 13px;
            white-space: nowrap;
            font-family: monospace;
            padding-top: 2px;
        }

        .activity-desc {
            color: var(--text-soft);
            line-height: 1.6;
            flex-grow: 1;
        }

        .empty-text {
            font-size: 14px;
            color: var(--muted);
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-brand">
            <a href="{{ route('client.dashboard') }}">
                <img class="brand-logo" src="{{ asset('red-sea-logo.png') }}" alt="Red Sea Digital Pro logo">
            </a>
        </div>
        <div class="nav-links">
            <a href="{{ route('client.dashboard') }}">لوحة التحكم</a>
            <a href="{{ route('client.logout') }}" class="btn-logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a>
            <form id="logout-form" action="{{ route('client.logout') }}" method="POST" style="display:none;">@csrf</form>
        </div>
    </nav>

    <div class="container">
        <a href="{{ route('client.dashboard') }}" class="back-link">&larr; العودة للوحة التحكم</a>

        @if(session('success'))
            <div class="success-box">{{ session('success') }}</div>
        @endif

        <div class="header">
            <h1>{{ $project->title }}</h1>
            @switch($project->status)
                @case('received') <span class="badge badge-received">تم الاستلام</span> @break
                @case('in_progress') <span class="badge badge-in_progress">قيد التنفيذ</span> @break
                @case('review') <span class="badge badge-review">تحت المراجعة</span> @break
                @case('delivered') <span class="badge badge-delivered">تم التسليم</span> @break
                @case('archived') <span class="badge badge-archived">مؤرشف</span> @break
                @default <span class="badge badge-received">{{ $project->status }}</span>
            @endswitch
        </div>

        <div class="meta">
            نوع الخدمة: 
            <strong>
                @switch($project->service_type)
                    @case('website_branding') المواقع والهوية البصرية @break
                    @case('marketing') التسويق الرقمي @break
                    @case('ai_systems') أنظمة الذكاء الاصطناعي @break
                    @default {{ $project->service_type }}
                @endswitch
            </strong>
            &nbsp;|&nbsp;
            بدأ المشروع بتاريخ: {{ $project->created_at->format('Y/m/d') }}
        </div>

        <div class="card">
            <h2>ملخص المشروع (Project Brief)</h2>
            <div class="brief-text">{{ $project->brief_text ?? 'لا يوجد تفاصيل إضافية.' }}</div>
        </div>

        <div class="card">
            <h2>المخرجات والتسليمات (Deliverables)</h2>
            @if($project->deliverables && count($project->deliverables) > 0)
                <ul class="deliverables-list">
                    @foreach($project->deliverables as $deliverable)
                        <li>
                            <div class="deliverable-type">مخرج #{{ $deliverable->id }} &mdash; {{ $deliverable->type }}</div>
                            <div class="deliverable-title">{{ $deliverable->title }}</div>
                            @if($deliverable->notes)
                                <div class="deliverable-notes">{{ $deliverable->notes }}</div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="empty-text">لم يتم رفع أي مخرجات للمشروع بعد. ستظهر مخرجاتك هنا فور إتمامها.</p>
            @endif
        </div>

        <div class="card">
            <h2>طلب تعديل أو مراجعة (Request a Revision)</h2>
            @if($project->deliverables && count($project->deliverables) > 0)
                <form method="POST" action="{{ route('client.revision', $project->id) }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="deliverable_id">حدد المخرج المراد تعديله *</label>
                        <select id="deliverable_id" name="deliverable_id" required>
                            <option value="" disabled selected>اختر المخرج...</option>
                            @foreach($project->deliverables as $deliverable)
                                <option value="{{ $deliverable->id }}">{{ $deliverable->title }} (مخرج #{{ $deliverable->id }})</option>
                            @endforeach
                        </select>
                        @error('deliverable_id') <div class="error-text" style="color:#ff5f5f; font-size:12px; margin-top:4px;">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="client_request">صف بالتفصيل التعديلات المطلوبة *</label>
                        <textarea id="client_request" name="client_request" placeholder="يرجى كتابة ملاحظاتك والتعديلات التي ترغب في تطبيقها بوضوح ودقة..." required></textarea>
                        @error('client_request') <div class="error-text" style="color:#ff5f5f; font-size:12px; margin-top:4px;">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn">إرسال طلب التعديل</button>
                </form>
            @else
                <p class="empty-text" style="color: var(--muted)">سيكون نموذج طلبات التعديل متاحاً بمجرد رفع المخرجات الأولى للمشروع من قبل الإدارة.</p>
            @endif
        </div>

        <div class="card">
            <h2>الأنشطة وطلبات التعديل السابقة (Activity &amp; Revisions)</h2>
            @if($project->revisions && count($project->revisions) > 0)
                <ul class="activity-list">
                    @foreach($project->revisions as $revision)
                        <li>
                            <span class="activity-date">{{ $revision->created_at->format('Y/m/d H:i') }}</span>
                            <div class="activity-desc">
                                طلب تعديل على مخرج <strong>{{ $revision->deliverable->title ?? 'مخرج محذوف' }}</strong>: 
                                <p style="margin: 8px 0; color: #fff; padding-right: 14px; border-right: 2px solid var(--accent);">"{{ $revision->client_request }}"</p>
                                حالة الطلب: 
                                <span class="badge" style="padding: 2px 10px; font-size: 11px; margin-right: 6px;
                                    @switch($revision->status)
                                        @case('pending') background: rgba(251, 191, 36, 0.06); color: #fbbf24; border-color: rgba(251, 191, 36, 0.2); @break
                                        @case('completed') background: rgba(52, 211, 153, 0.06); color: #34d399; border-color: rgba(52, 211, 153, 0.2); @break
                                        @case('rejected') background: rgba(255, 95, 95, 0.06); color: #ff5f5f; border-color: rgba(255, 95, 95, 0.2); @break
                                    @endswitch">
                                    @switch($revision->status)
                                        @case('pending') معلق @break
                                        @case('completed') تم التنفيذ @break
                                        @case('rejected') مرفوض @break
                                        @default {{ $revision->status }}
                                    @endswitch
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="empty-text">لا توجد طلبات تعديل أو أنشطة مسجلة لهذا المشروع بعد.</p>
            @endif
        </div>
    </div>
</body>
</html>
