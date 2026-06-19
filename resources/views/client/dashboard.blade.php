<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم — Red Sea Digital Pro</title>
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
            --green: #34d399;
            --green-bg: rgba(52, 211, 153, 0.06);
            --green-border: rgba(52, 211, 153, 0.2);
            --amber: #fbbf24;
            --amber-bg: rgba(251, 191, 36, 0.06);
            --amber-border: rgba(251, 191, 36, 0.2);
            --red: #ff5f5f;
            --red-bg: rgba(255, 95, 95, 0.06);
            --red-border: rgba(255, 95, 95, 0.2);
            --blue: #60a5fa;
            --blue-bg: rgba(96, 165, 250, 0.06);
            --blue-border: rgba(96, 165, 250, 0.2);
            --shadow: 0 28px 120px rgba(0, 0, 0, 0.56);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

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

        .nav-brand { display: flex; align-items: center; gap: 12px; }

        .brand-logo {
            width: 140px; height: auto;
            filter: drop-shadow(0 6px 12px rgba(0, 229, 255, 0.15));
        }

        .nav-links { display: flex; align-items: center; gap: 24px; }

        .nav-links a {
            font-size: 14px; color: var(--text-soft);
            text-decoration: none; font-weight: 500;
            transition: all 0.25s ease;
        }

        .nav-links a:hover { color: var(--accent); text-shadow: 0 0 10px rgba(0, 229, 255, 0.3); }

        .nav-links .btn-logout {
            font-size: 14px; color: var(--muted);
            text-decoration: none; padding: 6px 16px;
            border-radius: 999px; border: 1px solid var(--line);
            transition: all 0.25s ease;
            background: none;
            cursor: pointer;
            font-family: inherit;
        }

        .nav-links .btn-logout:hover {
            color: var(--red);
            border-color: var(--red-border);
            background: var(--red-bg);
        }

        .container {
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
            padding: 50px 24px;
            flex-grow: 1;
        }

        .welcome {
            font-size: 26px; font-weight: 800;
            margin-bottom: 40px; color: #fff;
        }

        .welcome span { color: var(--accent); text-shadow: 0 0 10px rgba(0, 229, 255, 0.2); }

        .success-box {
            background: var(--green-bg);
            border: 1px solid var(--green-border);
            border-radius: 12px; padding: 16px 20px;
            margin-bottom: 28px; color: var(--green);
            font-size: 14px; font-weight: 500;
        }

        .error-box {
            background: var(--red-bg);
            border: 1px solid var(--red-border);
            border-radius: 12px; padding: 16px 20px;
            margin-bottom: 28px; color: var(--red);
            font-size: 14px; font-weight: 500;
        }

        /* ── Project Card ── */
        .project-hero {
            background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.01));
            border: 1px solid var(--line);
            border-radius: 24px; padding: 32px;
            box-shadow: var(--shadow);
            margin-bottom: 32px;
            position: relative;
            overflow: hidden;
        }

        .project-hero::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(circle at 90% 10%, var(--accent-glow), transparent 45%);
            pointer-events: none;
            opacity: 0.5;
        }

        .project-hero-content { position: relative; z-index: 1; }

        .project-title {
            font-size: 22px; font-weight: 800;
            margin-bottom: 12px; color: #fff;
        }

        .project-meta-grid {
            display: flex; flex-wrap: wrap; gap: 24px;
            font-size: 14px; color: var(--text-soft);
        }

        .project-meta-item { display: flex; align-items: center; gap: 6px; }

        .project-meta-item .label { color: var(--muted); font-weight: 600; }

        .progress-summary {
            margin-top: 20px; padding-top: 20px;
            border-top: 1px solid var(--line);
            display: flex; flex-wrap: wrap; gap: 16px;
        }

        .progress-stat {
            display: flex; align-items: center; gap: 8px;
            font-size: 13px; color: var(--text-soft);
        }

        .progress-stat strong { font-size: 18px; color: #fff; }

        .progress-stat .dot { width: 8px; height: 8px; border-radius: 50%; }

        .dot-green { background: var(--green); box-shadow: 0 0 8px var(--green); }
        .dot-amber { background: var(--amber); box-shadow: 0 0 8px var(--amber); }
        .dot-blue { background: var(--blue); box-shadow: 0 0 8px var(--blue); }
        .dot-muted { background: var(--muted); }
        .dot-red { background: var(--red); box-shadow: 0 0 8px var(--red); }

        /* ── Progress Bar ── */
        .progress-track {
            margin-top: 24px;
            display: flex; align-items: center;
            gap: 0;
            position: relative;
        }

        .progress-step {
            flex: 1; text-align: center;
            position: relative;
        }

        .progress-step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 14px;
            right: 55%;
            width: 90%;
            height: 2px;
            background: var(--line);
            z-index: 0;
        }

        .progress-step.completed:not(:last-child)::after { background: var(--green); }
        .progress-step.active:not(:last-child)::after { background: linear-gradient(90deg, var(--green), var(--line) 80%); }

        .step-dot {
            width: 28px; height: 28px;
            border-radius: 50%;
            border: 2px solid var(--line);
            background: var(--bg);
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 12px; font-weight: 700;
            position: relative; z-index: 1;
            transition: all 0.3s ease;
        }

        .progress-step.completed .step-dot {
            background: var(--green); border-color: var(--green);
            color: #02121a; box-shadow: 0 0 16px rgba(52, 211, 153, 0.3);
        }

        .progress-step.active .step-dot {
            border-color: var(--accent);
            box-shadow: 0 0 20px var(--accent-glow);
            animation: pulse-dot 2s ease-in-out infinite;
        }

        .progress-step.pending .step-dot { border-color: var(--line); }

        .progress-step.approved .step-dot {
            background: var(--green); border-color: var(--green);
            color: #02121a;
        }

        .progress-step.revision_requested .step-dot {
            background: var(--amber); border-color: var(--amber);
            color: #02121a;
        }

        @keyframes pulse-dot {
            0%, 100% { box-shadow: 0 0 10px var(--accent-glow); }
            50% { box-shadow: 0 0 25px rgba(0, 229, 255, 0.35); }
        }

        .step-label {
            display: block;
            font-size: 10px;
            color: var(--muted);
            margin-top: 8px;
            line-height: 1.3;
            max-width: 90px;
            margin-inline: auto;
        }

        .progress-step.active .step-label { color: var(--accent); font-weight: 600; }
        .progress-step.completed .step-label { color: var(--green); }

        .step-deadline {
            display: block;
            font-size: 9px;
            color: var(--muted);
            margin-top: 2px;
        }

        /* ── Task List ── */
        .tasks-section { margin-top: 12px; }

        .tasks-section h2 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 16px;
            color: var(--text-soft);
            letter-spacing: 0.5px;
        }

        .task-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.008));
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 20px 24px;
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            transition: all 0.25s ease;
        }

        .task-card:hover { border-color: rgba(255,255,255,0.14); }

        .task-card-left { flex: 1; min-width: 0; }

        .task-title {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .task-deadline {
            font-size: 12px;
            color: var(--muted);
        }

        .task-card-right { display: flex; align-items: center; gap: 12px; flex-shrink: 0; }

        .badge {
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 11px; font-weight: 700;
            padding: 5px 14px; border-radius: 999px;
            border: 1px solid transparent;
            white-space: nowrap;
        }

        .badge-pending { background: rgba(255,255,255,0.04); color: var(--muted); border-color: var(--line); }
        .badge-in_progress { background: var(--blue-bg); color: var(--blue); border-color: var(--blue-border); }
        .badge-under_review { background: var(--amber-bg); color: var(--amber); border-color: var(--amber-border); }
        .badge-approved { background: var(--green-bg); color: var(--green); border-color: var(--green-border); }
        .badge-revision_requested { background: var(--red-bg); color: var(--red); border-color: var(--red-border); }

        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            font-size: 12px; font-weight: 700;
            padding: 8px 18px;
            border-radius: 999px;
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
            font-family: inherit;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn:hover { transform: translateY(-1px); }

        .btn-approve {
            background: linear-gradient(135deg, var(--green), rgba(52, 211, 153, 0.8));
            color: #02121a;
            box-shadow: 0 6px 20px rgba(52, 211, 153, 0.15);
        }

        .btn-approve:hover { box-shadow: 0 8px 28px rgba(52, 211, 153, 0.25); }

        .btn-revision {
            background: var(--amber-bg);
            color: var(--amber);
            border: 1px solid var(--amber-border);
        }

        .btn-revision:hover { background: rgba(251, 191, 36, 0.1); }

        .btn-revision-locked {
            background: var(--red-bg);
            color: var(--red);
            border: 1px solid var(--red-border);
            cursor: not-allowed;
            opacity: 0.7;
        }

        .btn-revision-locked:hover { transform: none; }

        /* ── Revision Notes ── */
        .revision-textarea {
            width: 100%;
            padding: 12px 16px;
            font-size: 13px;
            font-family: inherit;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: rgba(255,255,255,0.02);
            color: #fff;
            resize: vertical;
            min-height: 80px;
            transition: all 0.25s ease;
            text-align: right;
        }

        .revision-textarea:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 4px var(--accent-glow);
        }

        .revision-submit-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 8px;
        }

        .revision-submit-row .btn {
            font-size: 12px;
            padding: 8px 18px;
        }

        .submitted-revision {
            margin-top: 10px;
            padding: 10px 14px;
            background: var(--red-bg);
            border: 1px solid var(--red-border);
            border-radius: 10px;
            font-size: 12px;
            color: var(--text-soft);
            line-height: 1.7;
        }

        .submitted-revision strong {
            color: var(--red);
            display: block;
            margin-bottom: 4px;
            font-size: 11px;
        }

        .empty-state {
            text-align: center; padding: 60px 40px;
            background: rgba(255,255,255,0.02);
            border: 1px dashed var(--line);
            border-radius: 20px;
        }

        .empty-state p { font-size: 15px; color: var(--muted); margin-bottom: 20px; }

        .empty-state .btn-apply {
            display: inline-flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, var(--accent), #fff);
            color: #02121a; font-size: 14px; font-weight: 700;
            padding: 12px 28px; border-radius: 12px;
            text-decoration: none;
            transition: all 0.25s ease;
            box-shadow: 0 10px 25px rgba(0, 229, 255, 0.15);
        }

        .empty-state .btn-apply:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(0, 229, 255, 0.25);
        }

        @media (max-width: 640px) {
            .task-card { flex-direction: column; }
            .task-card-right { width: 100%; flex-wrap: wrap; }
            .progress-step .step-label { font-size: 8px; }
            .project-meta-grid { flex-direction: column; gap: 8px; }
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
            <span style="font-size:13px;color:var(--muted);">{{ Auth::guard('client')->user()->name }}</span>
            <form action="{{ route('client.logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn-logout">تسجيل الخروج</button>
            </form>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="success-box">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="error-box">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <div class="welcome">مرحباً بك، <span>{{ Auth::guard('client')->user()->name }}</span></div>

        @forelse($projects as $project)
            @php
                $tasks = $project->tasks->sortBy('sort_order');
                $totalTasks = $tasks->count();
                $completedTasks = $tasks->whereIn('status', ['approved'])->count();
                $pct = $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100) : 0;
            @endphp

            {{-- ── Project Hero ── --}}
            <div class="project-hero">
                <div class="project-hero-content">
                    <div class="project-title">{{ $project->title }}</div>
                    <div class="project-meta-grid">
                        <div class="project-meta-item">
                            <span class="label">نوع الخدمة:</span>
                            <span>
                                @switch($project->service_type)
                                    @case('website_branding') تصميم وبرمجة مواقع @break
                                    @case('marketing') تسويق رقمي @break
                                    @case('ai_systems') أنظمة ذكاء اصطناعي @break
                                    @default {{ $project->service_type }}
                                @endswitch
                            </span>
                        </div>
                        <div class="project-meta-item">
                            <span class="label">تاريخ البدء:</span>
                            <span>{{ $project->created_at->format('Y/m/d') }}</span>
                        </div>
                        <div class="project-meta-item">
                            <span class="label">آخر تحديث:</span>
                            <span>{{ $project->updated_at->diffForHumans() }}</span>
                        </div>
                    </div>

                    <div class="progress-summary">
                        <div class="progress-stat"><strong>{{ $pct }}%</strong> اكتمال</div>
                        <div class="progress-stat"><span class="dot dot-green"></span> <strong>{{ $completedTasks }}</strong> / {{ $totalTasks }} مهام</div>
                        <div class="progress-stat"><span class="dot dot-amber"></span> {{ $tasks->where('status', 'under_review')->count() }} قيد المراجعة</div>
                        <div class="progress-stat"><span class="dot dot-red"></span> {{ $tasks->where('status', 'revision_requested')->count() }} طلب تعديل</div>
                    </div>

                    {{-- ── Mini Progress Bar ── --}}
                    @if($tasks->isNotEmpty())
                        <div class="progress-track">
                            @foreach($tasks as $task)
                                @php
                                    $stepClass = match(true) {
                                        $task->status === 'approved' => 'completed',
                                        $task->status === 'in_progress' => 'active',
                                        $loop->first && $task->status === 'pending' && $completedTasks === 0 => 'active',
                                        $task->status === 'under_review' || $task->status === 'revision_requested' => 'active',
                                        default => 'pending',
                                    };
                                @endphp
                                <div class="progress-step {{ $stepClass }}">
                                    <div class="step-dot">
                                        @if($task->status === 'approved') ✓
                                        @elseif($task->status === 'revision_requested') ▲
                                        @else {{ $loop->iteration }}
                                        @endif
                                    </div>
                                    <span class="step-label">
                                        {{ $task->title }}
                                        <span class="step-deadline">{{ $task->deadline->format('d M') }}</span>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            {{-- ── Task Detail List ── --}}
            <div class="tasks-section">
                <h2>تفاصيل المهام والمشروع</h2>

                @foreach($tasks as $task)
                    @php
                        $statusBadgeClass = match($task->status) {
                            'pending' => 'badge-pending',
                            'in_progress' => 'badge-in_progress',
                            'under_review' => 'badge-under_review',
                            'approved' => 'badge-approved',
                            'revision_requested' => 'badge-revision_requested',
                            default => 'badge-pending',
                        };

                        $statusLabel = match($task->status) {
                            'pending' => 'قيد الانتظار',
                            'in_progress' => 'قيد التنفيذ',
                            'under_review' => 'بانتظار مراجعتك',
                            'approved' => 'تمت الموافقة',
                            'revision_requested' => 'طلب تعديل',
                            default => $task->status,
                        };
                    @endphp

                    <div class="task-card">
                        <div class="task-card-left">
                            <div class="task-title">
                                <span>{{ $task->title }}</span>
                                <span class="badge {{ $statusBadgeClass }}">{{ $statusLabel }}</span>
                            </div>
                            <div class="task-deadline">الموعد النهائي: {{ $task->deadline->format('Y/m/d') }}</div>

                            @if($task->status === 'revision_requested' && $task->revision_notes)
                                <div class="submitted-revision">
                                    <strong>✦ ملاحظات طلب التعديل (قيد المراجعة)</strong>
                                    {{ $task->revision_notes }}
                                </div>
                            @endif
                        </div>

                        <div class="task-card-right">
                            {{-- Approve Button --}}
                            @if($task->status === 'under_review')
                                <form action="{{ route('client.task.approve', $task->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-approve">✓ اعتماد</button>
                                </form>

                                {{-- Revision Button --}}
                                <button type="button" class="btn btn-revision"
                                        onclick="toggleRevisionForm('revision-form-{{ $task->id }}')">
                                    ✦ طلب تعديل
                                </button>
                            @endif

                            {{-- Locked Revision Button --}}
                            @if($task->status === 'revision_requested')
                                <span class="btn btn-revision-locked">✦ تم إرسال طلب التعديل</span>
                            @endif
                        </div>
                    </div>

                    {{-- Revision Form (hidden by default) --}}
                    @if($task->status === 'under_review')
                        <div id="revision-form-{{ $task->id }}" style="display:none; padding: 0 24px 20px;">
                            <form action="{{ route('client.task.revision', $task->id) }}" method="POST">
                                @csrf
                                <textarea class="revision-textarea" name="revision_notes"
                                          placeholder="اشرح التعديلات المطلوبة بالتفصيل..." required minlength="10"></textarea>
                                <div class="revision-submit-row">
                                    <button type="submit" class="btn btn-revision">✦ إرسال طلب التعديل</button>
                                    <span style="font-size:11px;color:var(--muted);">حد أدنى 10 أحرف</span>
                                </div>
                            </form>
                        </div>
                    @endif
                @endforeach
            </div>

        @empty
            <div class="empty-state">
                <p>ليس لديك أي مشاريع جارية في الوقت الحالي.</p>
                <a href="{{ route('apply') }}" class="btn-apply">ابدأ مشروعك الأول الآن</a>
            </div>
        @endforelse
    </div>

    <script>
        function toggleRevisionForm(id) {
            const form = document.getElementById(id);
            if (form) form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
