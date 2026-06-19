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
            border-bottom: 2px solid transparent;
            padding-bottom: 4px;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--accent);
            border-bottom-color: var(--accent);
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
            max-width: 1200px;
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

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            font-size: 28px;
            font-weight: 800;
            color: #fff;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 20px;
            margin-bottom: 28px;
        }

        .card {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.015));
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 24px;
            backdrop-filter: blur(15px);
            box-shadow: var(--shadow);
        }

        .card h3 {
            font-size: 13px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding-bottom: 10px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            font-size: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            color: var(--text-soft);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-row .val {
            font-weight: 700;
            color: #fff;
        }

        /* Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 12px;
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

        .badge-website_branding {
            background: rgba(192, 132, 252, 0.06);
            color: #c084fc;
            border-color: rgba(192, 132, 252, 0.2);
        }

        .badge-marketing {
            background: rgba(45, 212, 191, 0.06);
            color: #2dd4bf;
            border-color: rgba(45, 212, 191, 0.2);
        }

        .badge-ai_systems {
            background: rgba(129, 140, 248, 0.06);
            color: #818cf8;
            border-color: rgba(129, 140, 248, 0.2);
        }

        .section {
            margin-bottom: 32px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 16px;
            color: #fff;
            border-right: 3px solid var(--accent);
            padding-right: 12px;
        }

        .brief-box {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.01));
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 20px;
            font-size: 14px;
            line-height: 1.8;
            color: var(--text-soft);
            white-space: pre-wrap;
        }

        /* Forms */
        textarea, select, input {
            width: 100%;
            padding: 12px 16px;
            font-size: 14px;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.02);
            color: #fff;
            outline: none;
            transition: all 0.25s ease;
            font-family: inherit;
            text-align: right;
        }

        select option {
            background: #0d0d0f;
            color: #fff;
        }

        textarea:focus, select:focus, input:focus {
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.04);
            box-shadow: 0 0 0 4px var(--accent-glow);
        }

        .notes-area {
            min-height: 120px;
            resize: vertical;
        }

        .status-form {
            display: flex;
            gap: 12px;
            align-items: center;
            max-width: 500px;
        }

        .status-form select {
            flex: 1;
        }

        .btn {
            padding: 12px 24px;
            background: linear-gradient(135deg, var(--accent), #fff);
            color: #02121a;
            border: none;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 10px 25px rgba(0, 229, 255, 0.1);
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 15px 30px rgba(0, 229, 255, 0.25);
        }

        /* Tables */
        .table-container {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.01));
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden;
            backdrop-filter: blur(15px);
            box-shadow: var(--shadow);
            margin-bottom: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: right;
        }

        th {
            padding: 14px 18px;
            font-size: 11px;
            font-weight: 700;
            color: var(--text-soft);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: rgba(255, 255, 255, 0.02);
            border-bottom: 1px solid var(--line);
        }

        td {
            padding: 14px 18px;
            font-size: 14px;
            color: var(--text-soft);
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: rgba(255, 255, 255, 0.005);
        }

        .add-form {
            display: flex;
            gap: 12px;
            margin-top: 16px;
            flex-wrap: wrap;
        }

        .add-form input {
            flex: 1;
            min-width: 200px;
        }

        .add-form textarea {
            flex: 2;
            min-width: 300px;
            height: 48px;
            min-height: 48px;
            padding: 12px 16px;
        }

        .flash {
            background: rgba(52, 211, 153, 0.08);
            border: 1px solid rgba(52, 211, 153, 0.2);
            border-radius: 12px;
            padding: 14px 18px;
            font-size: 14px;
            margin-bottom: 24px;
            color: #34d399;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img class="brand-logo" src="{{ asset('red-sea-logo.png') }}" alt="Red Sea Digital Pro logo">
            </a>
        </div>
        <div class="nav-links">
            <a href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
            <a href="{{ route('admin.projects') }}" class="active">المشاريع</a>
            <a href="{{ route('admin.clients') }}">العملاء</a>
            <a href="{{ route('admin.logout') }}" class="btn-logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display:none;">@csrf</form>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="flash">{{ session('success') }}</div>
        @endif

        <div class="page-header">
            <a href="{{ route('admin.projects') }}" class="back-link">&larr; العودة لقائمة المشاريع</a>
            <h1>{{ $project->title }}</h1>
        </div>

        <div class="grid-2">
            <div class="card">
                <h3>معلومات المشروع</h3>
                <div class="info-row"><span>الخدمة</span><span class="val"><span class="badge badge-{{ $project->service_type }}">
                    @switch($project->service_type)
                        @case('website_branding') المواقع والهوية @break
                        @case('marketing') التسويق الرقمي @break
                        @case('ai_systems') الذكاء الاصطناعي @break
                        @default {{ $project->service_type }}
                    @endswitch
                </span></span></div>
                <div class="info-row"><span>حالة المشروع</span><span class="val"><span class="badge badge-{{ $project->status }}">
                    @switch($project->status)
                        @case('received') تم الاستلام @break
                        @case('in_progress') قيد التنفيذ @break
                        @case('review') تحت المراجعة @break
                        @case('delivered') تم التسليم @break
                        @case('archived') مؤرشف @break
                        @default {{ $project->status }}
                    @endswitch
                </span></span></div>
                <div class="info-row"><span>الميزانية</span><span class="val">
                    @if($project->budget_range)
                        @switch($project->budget_range)
                            @case('under_2k') أقل من $2K @break
                            @case('2k_5k') $2–5K @break
                            @case('5k_10k') $5–10K @break
                            @case('10k_20k') $10–20K @break
                            @case('20k_plus') $20K+ @break
                            @case('not_sure') غير محدد @break
                            @default {{ $project->budget_range }}
                        @endswitch
                    @else
                        غير محدد
                    @endif
                </span></div>
                <div class="info-row"><span>الجدول الزمني</span><span class="val">
                    @if($project->timeline)
                        @switch($project->timeline)
                            @case('under_1_week') أقل من أسبوع @break
                            @case('1_2_weeks') أسبوع - أسبوعين @break
                            @case('1_month') شهر واحد @break
                            @case('2_3_months') شهرين - 3 أشهر @break
                            @case('flexible') مرن @break
                            @default {{ $project->timeline }}
                        @endswitch
                    @else
                        غير محدد
                    @endif
                </span></div>
                <div class="info-row"><span>تاريخ الطلب</span><span class="val" style="font-family: monospace;">{{ $project->created_at->format('Y/m/d H:i') }}</span></div>
            </div>
            
            <div class="card">
                <h3>معلومات العميل</h3>
                <div class="info-row"><span>الاسم</span><span class="val">{{ $project->client->name ?? '—' }}</span></div>
                <div class="info-row"><span>الشركة / العلامة</span><span class="val">{{ $project->client->company ?? '—' }}</span></div>
                <div class="info-row"><span>البريد الإلكتروني</span><span class="val" dir="ltr">{{ $project->client->email ?? '—' }}</span></div>
                <div class="info-row"><span>رقم الواتساب</span><span class="val" dir="ltr">{{ $project->client->whatsapp ?? '—' }}</span></div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">ملخص طلب المشروع (Brief)</div>
            <div class="brief-box">{{ $project->brief_text ?? 'لم يتم تقديم تفاصيل إضافية.' }}</div>
        </div>

        <div class="section">
            <div class="section-title">ملاحظات الإدارة الداخلية (Internal Notes)</div>
            <form method="POST" action="{{ route('admin.project.notes', $project->id) }}">
                @csrf
                <textarea class="notes-area" name="notes" placeholder="اكتب هنا ملاحظات الإدارة الخاصة بالمشروع (سرية ولا تظهر للعميل)...">{{ $project->internal_notes ?? '' }}</textarea>
                <div style="margin-top:12px;"><button type="submit" class="btn">حفظ ملاحظات المشرف</button></div>
            </form>
        </div>

        <div class="section">
            <div class="section-title">تحديث حالة المشروع (Project Status)</div>
            <form class="status-form" method="POST" action="{{ route('admin.project.status', $project->id) }}">
                @csrf
                <select name="status">
                    <option value="received" {{ $project->status == 'received' ? 'selected' : '' }}>تم الاستلام (Received)</option>
                    <option value="in_progress" {{ $project->status == 'in_progress' ? 'selected' : '' }}>قيد التنفيذ (In Progress)</option>
                    <option value="review" {{ $project->status == 'review' ? 'selected' : '' }}>تحت المراجعة (Review)</option>
                    <option value="delivered" {{ $project->status == 'delivered' ? 'selected' : '' }}>تم التسليم (Delivered)</option>
                    <option value="archived" {{ $project->status == 'archived' ? 'selected' : '' }}>مؤرشف (Archived)</option>
                </select>
                <button type="submit" class="btn">تحديث الحالة</button>
            </form>
        </div>

        <div class="section">
            <div class="section-title">المخرجات والتسليمات (Deliverables)</div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr><th>عنوان المخرج</th><th>ملاحظات إضافية</th><th>نوع المخرج</th><th>تاريخ الرفع</th></tr>
                    </thead>
                    <tbody>
                        @forelse($project->deliverables ?? [] as $deliverable)
                            <tr>
                                <td><strong>{{ $deliverable->title }}</strong></td>
                                <td>{{ $deliverable->notes ?? '—' }}</td>
                                <td><span class="badge badge-received" style="text-transform: uppercase;">{{ $deliverable->type }}</span></td>
                                <td style="font-family: monospace;">{{ $deliverable->created_at->format('Y/m/d') }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="4" style="text-align:center;color:var(--muted);padding:24px;">لا توجد أي مخرجات مرفوعة لهذا المشروع بعد.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <form class="add-form" method="POST" action="{{ route('admin.project.deliverable', $project->id) }}">
                @csrf
                <input type="text" name="title" placeholder="عنوان المخرج الجديد (مثال: الشعار الأولي، نموذج الويب...)" required>
                <textarea name="notes" placeholder="ملاحظات توضيحية حول المخرج (اختياري)..."></textarea>
                <button type="submit" class="btn">إضافة مخرج جديد</button>
            </form>
        </div>

        <div class="section">
            <div class="section-title">طلبات التعديل المقدمة من العميل (Revision Requests)</div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr><th>المخرج المعني</th><th>تفاصيل طلب العميل</th><th>حالة التعديل</th><th>تاريخ الطلب</th></tr>
                    </thead>
                    <tbody>
                        @forelse($project->revisions ?? [] as $revision)
                            <tr>
                                <td><strong>{{ $revision->deliverable->title ?? 'مخرج محذوف' }}</strong></td>
                                <td>{{ $revision->client_request }}</td>
                                <td>
                                    <span class="badge" style="
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
                                </td>
                                <td style="font-family: monospace;">{{ $revision->created_at->format('Y/m/d H:i') }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="4" style="text-align:center;color:var(--muted);padding:24px;">لا توجد أي طلبات تعديل مقدمة من العميل بعد.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
