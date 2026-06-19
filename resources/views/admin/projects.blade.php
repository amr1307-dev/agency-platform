<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المشاريع — Red Sea Digital Pro</title>
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
            padding: 40px 24px;
            flex-grow: 1;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 32px;
        }

        .page-header h1 {
            font-size: 26px;
            font-weight: 800;
            color: #fff;
            border-right: 3px solid var(--accent);
            padding-right: 12px;
        }

        /* Search Form */
        .search-form {
            display: flex;
            gap: 10px;
        }

        .search-form input {
            padding: 10px 16px;
            font-size: 14px;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.02);
            color: #fff;
            outline: none;
            width: 280px;
            transition: all 0.25s ease;
            text-align: right;
            font-family: inherit;
        }

        .search-form input:focus {
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.04);
            box-shadow: 0 0 0 4px var(--accent-glow);
        }

        .search-form button {
            padding: 10px 24px;
            background: linear-gradient(135deg, var(--accent), #fff);
            color: #02121a;
            border: none;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 10px 25px rgba(0, 229, 255, 0.15);
        }

        .search-form button:hover {
            transform: translateY(-1px);
            box-shadow: 0 15px 30px rgba(0, 229, 255, 0.25);
        }

        /* Table Styling */
        .table-container {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.015));
            border: 1px solid var(--line);
            border-radius: 20px;
            overflow: hidden;
            backdrop-filter: blur(15px);
            box-shadow: var(--shadow);
            margin-bottom: 32px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: right;
        }

        th {
            padding: 16px 20px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-soft);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: rgba(255, 255, 255, 0.02);
            border-bottom: 1px solid var(--line);
        }

        td {
            padding: 16px 20px;
            font-size: 14px;
            color: var(--text-soft);
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: rgba(255, 255, 255, 0.01);
            color: #fff;
        }

        .project-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.2s;
        }

        .project-link:hover {
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 229, 255, 0.3);
        }

        /* Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 12px;
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

        /* Pagination */
        .pagination {
            display: flex;
            gap: 8px;
            justify-content: center;
            align-items: center;
            margin-top: 24px;
        }

        .pagination a, .pagination span {
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 13px;
            text-decoration: none;
            color: var(--text-soft);
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--line);
            transition: all 0.25s ease;
        }

        .pagination a:hover {
            border-color: var(--accent);
            color: var(--accent);
            background: rgba(0, 229, 255, 0.05);
        }

        .pagination .active, .pagination span.current {
            background: linear-gradient(135deg, var(--accent), #fff);
            color: #02121a;
            border-color: transparent;
            font-weight: 700;
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
            <h1>المشاريع الجارية</h1>
            <form class="search-form" method="GET" action="{{ route('admin.projects') }}">
                <input type="text" name="search" placeholder="بحث باسم المشروع..." value="{{ request('search') }}">
                <button type="submit">بحث</button>
            </form>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>رقم المشروع</th>
                        <th>العميل</th>
                        <th>عنوان المشروع</th>
                        <th>الخدمة</th>
                        <th>حالة المشروع</th>
                        <th>الميزانية</th>
                        <th>الجدول الزمني</th>
                        <th>تاريخ الطلب</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects ?? [] as $project)
                        <tr>
                            <td><a href="{{ route('admin.project.detail', $project->id) }}" class="project-link">#{{ $project->id }}</a></td>
                            <td>{{ $project->client->name ?? '—' }}</td>
                            <td>{{ $project->title }}</td>
                            <td>
                                <span class="badge badge-{{ $project->service_type }}">
                                    @switch($project->service_type)
                                        @case('website_branding') المواقع والهوية @break
                                        @case('marketing') التسويق الرقمي @break
                                        @case('ai_systems') الذكاء الاصطناعي @break
                                        @default {{ $project->service_type }}
                                    @endswitch
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-{{ $project->status }}">
                                    @switch($project->status)
                                        @case('received') تم الاستلام @break
                                        @case('in_progress') قيد التنفيذ @break
                                        @case('review') تحت المراجعة @break
                                        @case('delivered') تم التسليم @break
                                        @case('archived') مؤرشف @break
                                        @default {{ $project->status }}
                                    @endswitch
                                </span>
                            </td>
                            <td>
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
                                    —
                                @endif
                            </td>
                            <td>
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
                                    —
                                @endif
                            </td>
                            <td style="font-family: monospace;">{{ $project->created_at->format('Y/m/d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="text-align:center;color:var(--muted);padding:32px;">لم يتم العثور على أي مشاريع.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $projects->links() }}
        </div>
    </div>
</body>
</html>
