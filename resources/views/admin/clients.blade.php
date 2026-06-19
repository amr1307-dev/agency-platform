<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة العملاء — Red Sea Digital Pro</title>
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
            margin-bottom: 32px;
        }

        .page-header h1 {
            font-size: 26px;
            font-weight: 800;
            color: #fff;
            border-right: 3px solid var(--accent);
            padding-right: 12px;
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

        .client-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.2s;
        }

        .client-link:hover {
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 229, 255, 0.3);
        }

        .count-badge {
            display: inline-flex;
            background: rgba(0, 229, 255, 0.08);
            color: var(--accent);
            padding: 2px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid rgba(0, 229, 255, 0.15);
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
            <a href="{{ route('admin.projects') }}">المشاريع</a>
            <a href="{{ route('admin.clients') }}" class="active">العملاء</a>
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
            <h1>قائمة العملاء</h1>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>رقم العميل</th>
                        <th>الاسم الكامل</th>
                        <th>الشركة / العلامة التجارية</th>
                        <th>البريد الإلكتروني</th>
                        <th>رقم الواتساب</th>
                        <th>عدد المشاريع</th>
                        <th>تاريخ الانضمام</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clients ?? [] as $client)
                        <tr>
                            <td style="font-family: monospace;">#{{ $client->id }}</td>
                            <td><a href="{{ route('admin.client.detail', $client->id) }}" class="client-link">{{ $client->name }}</a></td>
                            <td>{{ $client->company ?? '—' }}</td>
                            <td dir="ltr">{{ $client->email ?? '—' }}</td>
                            <td dir="ltr">{{ $client->whatsapp ?? '—' }}</td>
                            <td><span class="count-badge">{{ $client->projects_count ?? $client->projects->count() ?? 0 }}</span></td>
                            <td style="font-family: monospace;">{{ $client->created_at->format('Y/m/d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align:center;color:var(--muted);padding:32px;">لا يوجد أي عملاء مسجلين حالياً.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $clients->links() }}
        </div>
    </div>
</body>
</html>
