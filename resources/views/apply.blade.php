<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Sea Digital Pro — أنظمة رقمية تضاعف أرباحك وتعمل 24/7</title>
    <meta name="description" content="نبني مواقع فاخرة فائقة الأداء وأنظمة تسويق مدعومة بالذكاء الاصطناعي تضاعف أرباحك وتدير عملك تلقائياً. Red Sea Digital Pro — Elite Digital Systems.">
    <meta name="keywords" content="تصميم مواقع, برمجة, ذكاء اصطناعي, تسويق رقمي, Red Sea Digital Pro, وكالة رقمية, مواقع فاخرة">
    <meta property="og:title" content="Red Sea Digital Pro — أنظمة رقمية تضاعف أرباحك">
    <meta property="og:description" content="نبني مواقع فاخرة وأنظمة أتمتة بالذكاء الاصطناعي تحوّل موقعك إلى آلة أرباح تعمل 24/7.">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#050505">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Cairo:wght@300;400;500;700;800&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @php
        $portfolioWorks = [
            [
                'title' => 'لايف تورز (Life Tours)',
                'category' => 'منصة حجز وتجارب سياحية فاخرة',
                'image' => asset('portfolio/life-tours.webp'),
                'tag' => 'سياحة وضيافة فاخرة',
                'impact' => 'تصميم موقع حجز مباشر خفض الاعتماد على منصات الوساطة وزاد الحجوزات بنسبة 180%.',
            ],
            [
                'title' => 'لوحة تحكم نيكسس (Nexuse)',
                'category' => 'نظام تحليلات ولوحة تحكم للمؤسسات',
                'image' => asset('portfolio/nexuse.webp'),
                'tag' => 'واجهات مظلمة متطورة',
                'impact' => 'إعادة بناء واجهة النظام بالكامل لتسريع وصول المستخدم، مما قلل نسبة إلغاء الاشتراكات بـ 42%.',
            ],
            [
                'title' => 'موقع يلا (YallaAA)',
                'category' => 'نظام كامل وإعادة تصميم مدعومة بـ WordPress',
                'image' => asset('portfolio/yallaa-wp.webp'),
                'tag' => 'ذكاء اصطناعي وهوية رقمية',
                'impact' => 'بناء هوية بصرية كاملة وموقع فائق السرعة متوافق مع جوجل، زاد عدد الزيارات بـ 3 أضعاف.',
            ],
            [
                'title' => 'منصة سيلفي جو (Selfigo)',
                'category' => 'تصميم وتطوير تطبيق نمط حياة عصري',
                'image' => asset('portfolio/selfigo.webp'),
                'tag' => 'تصميم تطبيقات ذكية',
                'impact' => 'واجهة مستخدم تفاعلية جذابة زادت من معدلات تحميل التطبيق بنسبة 210% خلال أول 30 يوماً.',
            ],
            [
                'title' => 'متجر لايف بيتس (Life Pets)',
                'category' => 'متجر تجارة إلكترونية متكامل لمستلزمات الحيوانات',
                'image' => asset('portfolio/life-pets.webp'),
                'tag' => 'تجارة إلكترونية فاخرة',
                'impact' => 'تحسين قمع الشراء وتسهيل الدفع، مما رفع متوسط قيمة الطلب (AOV) بنسبة 35% وضاعف المبيعات.',
            ],
            [
                'title' => 'متجر سيلفي ستور (Selfie Store)',
                'category' => 'متجر إلكتروني لملحقات التصوير الحديثة',
                'image' => asset('portfolio/selfie-store.webp'),
                'tag' => 'متجر رقمي سريع',
                'impact' => 'تصميم عصري متوافق بالكامل مع الهواتف، رفع نسبة إتمام عملية الشراء من السلة بـ 64%.',
            ],
            [
                'title' => 'برمجة يلا الخاصة (Yalla Custom)',
                'category' => 'موقع برمجة خاصة عالي الأداء للمؤسسات',
                'image' => asset('portfolio/yalla-custom.webp'),
                'tag' => 'تطوير خاص متكامل',
                'impact' => 'موقع مبني بأحدث التقنيات لسرعة فائقة تضمن البقاء في صدارة نتائج بحث Google.',
            ],
        ];

        $portfolioRails = array_chunk($portfolioWorks, 4);
    @endphp
</head>
<body class="apply-page">
    <div class="page-shell" id="page-shell">
        <div class="cursor" aria-hidden="true"></div>
        <div class="cursor-spot" aria-hidden="true"></div>
        <div class="ambient ambient-left" aria-hidden="true"></div>
        <div class="ambient ambient-right" aria-hidden="true"></div>

        <header class="topbar" data-reveal>
            <a class="brand" href="#top" aria-label="Red Sea Digital Pro">
                <img class="brand-logo" src="{{ asset('red-sea-logo.png') }}" alt="Red Sea Digital Pro logo">
            </a>

            <div class="topbar-actions">
                <a class="topbar-pill" href="#brief">احجز التشخيص</a>
                <button class="menu-button" type="button" aria-expanded="false" aria-controls="site-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="sr-only">فتح القائمة</span>
                </button>
            </div>
        </header>

        <div class="menu-overlay" id="site-menu" aria-hidden="true">
            <div class="menu-panel">
                <div class="menu-panel-head">
                    <span>Navigation</span>
                    <button class="menu-close" type="button">إغلاق</button>
                </div>
                <nav class="menu-links">
                    <a href="#philosophy">الفلسفة</a>
                    <a href="#services">خدماتنا</a>
                    <a href="#cases">النتائج والأعمال</a>
                    <a href="#process">كيف نعمل</a>
                    <a href="#brief">ابدأ المشروع</a>
                </nav>
                <div class="menu-note">
                    نبني أنظمة رقمية متكاملة تحوّل موقعك من صفحة صامتة إلى آلة أرباح تعمل على مدار الساعة — تصاميم سينمائية فاخرة، أتمتة بالذكاء الاصطناعي، ونتائج قابلة للقياس.
                </div>
            </div>
        </div>

        <main id="top">
            @if(session('success'))
                <section class="status-card success" data-reveal>
                    <strong>✓ تم استلام مشروعك بنجاح.</strong>
                    <p>سنرد عليك بخطة أولية خلال 24 ساعة. تم إرسال رابط تفعيل حسابك إلى بريدك الإلكتروني — يرجى التحقق لإنشاء كلمة المرور والدخول إلى بوابة العميل.</p>
                </section>
            @endif

            @if($errors->any())
                <section class="status-card error" data-reveal>
                    <strong>⚠ توجد حقول تحتاج مراجعة.</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </section>
            @endif

            {{-- ======== HERO ======== --}}
            <section class="hero" data-reveal data-depth-zone="hero">
                <div class="hero-media">
                    <div class="hero-poster">
                        <img src="https://img.youtube.com/vi/6dXUF120XIw/hqdefault.jpg" alt="" aria-hidden="true">
                    </div>
                    <div class="hero-video-shell" data-youtube-shell data-youtube-id="6dXUF120XIw"></div>
                    <div class="hero-overlay"></div>
                    <div class="hero-noise"></div>
                </div>

                <div class="hero-grid">
                    <div class="hero-copy hero-content glass-card" data-tilt data-depth="18" data-z="42">
                        <p class="eyebrow" data-reveal>Elite Digital Systems · Red Sea Digital Pro</p>
                        <h1 class="hero-title" data-reveal data-reveal-stagger>
                            أنظمة رقمية تضاعف
                            <span>أرباحك تلقائياً</span>
                        </h1>
                        <p class="hero-text hero-text-ar hero-subtitle" data-reveal>
                            تصاميم سينمائية فائقة الأداء مع أتمتة كاملة بالذكاء الاصطناعي. للعلامات التجارية التي ترفض الأقل من الاستثنائي — نتائج حقيقية لا وعود تسويقية.
                        </p>

                        <div class="hero-mobile-brief mobile-only" data-reveal>
                            <div class="hero-mobile-badge">التدقيق الاستراتيجي للنخبة</div>
                            <p>نبني أنظمة رقمية متطورة تضاعف أرباحك وتدير أعمالك تلقائياً.</p>
                            <ul>
                                <li>تصاميم فاخرة فائقة الأداء وأتمتة ذكية كاملة.</li>
                                <li>للشركات التي تبحث عن نتائج فعلية وأرقام حقيقية.</li>
                                <li>نتائج واضحة، لا وعود تسويقية فارغة.</li>
                            </ul>
                        </div>

                        <div class="hero-actions" data-reveal>
                            <a class="btn btn-primary" href="#brief">ابدأ تشخيصك الاستراتيجي مجاناً</a>
                            <a class="btn btn-secondary" href="https://wa.me/201028803080" target="_blank" rel="noreferrer">💬 تواصل على واتساب</a>
                        </div>

                        <div class="hero-stats" data-reveal>
                            <div class="stat">
                                <strong>340%+</strong>
                                <span>نمو متوسط في حجوزات وإيرادات العملاء خلال 6 أشهر</span>
                            </div>
                            <div class="stat">
                                <strong>+50</strong>
                                <span>مشروعاً رقمياً ناجحاً في قطاعات متعددة</span>
                            </div>
                            <div class="stat">
                                <strong>73%-</strong>
                                <span>خفض تكاليف الاستحواذ على العملاء بالأتمتة</span>
                            </div>
                        </div>
                    </div>

                    <aside class="hero-panel glass-card mobile-only-panel" data-tilt data-depth="26" data-z="96" data-reveal>
                        <div class="panel-halo"></div>
                        <p class="panel-label">رؤيتنا الاستراتيجية</p>
                        <h2>من مجرد صفحة صامتة إلى آلة أرباح تعمل على مدار الساعة.</h2>
                        <p>
                            نحن لا نصمم مواقع عادية. نبني أنظمة رقمية متكاملة تقنع العميل وتؤهله وتضعه في قائمة الانتظار تلقائياً — دون أن تتدخل.
                        </p>
                        <div class="panel-bullets">
                            <div>✦ تصاميم سينمائية فائقة التأثير والتحويل</div>
                            <div>↗ أتمتة AI تعمل 24/7 بدلاً عنك</div>
                            <div>◎ أرقام حقيقية وعائد استثماري موثق</div>
                            <div>⚡ تسليم خلال 7-21 يوماً فقط</div>
                        </div>
                    </aside>
                </div>
                <div class="hero-mobile-proof social-proof mobile-only" data-reveal>
                    <div>
                        <strong>340%+</strong>
                        <span>نمو في الإيرادات</span>
                    </div>
                    <div>
                        <strong>+50</strong>
                        <span>مشروع ناجح</span>
                    </div>
                    <div>
                        <strong>73%-</strong>
                        <span>خفض التكاليف</span>
                    </div>
                </div>
            </section>

            {{-- ======== PHILOSOPHY (BENTO) ======== --}}
            <section class="section section-philosophy" id="philosophy" data-depth-zone="philosophy">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">The Philosophy · لماذا نحن مختلفون</span>
                    <h2>أربعة مبادئ تصنع الفارق.</h2>
                    <p>لا قوالب جاهزة. لا حلول عامة. كل مشروع يُبنى من الصفر ليحقق هدفاً واحداً: نمو أرباحك.</p>
                </div>

                <div class="bento-grid">
                    <article class="bento-card bento-large glass-card" data-tilt data-depth="14" data-z="48" data-reveal>
                        <span class="card-icon">✦</span>
                        <h3>الفخامة الرقمية</h3>
                        <p style="font-size: 0.98rem; line-height: 1.8;">تصميم يُرسّخ مكانتك في السوق ويُقنع العميل قبل أن يقرأ كلمة واحدة. واجهات سينمائية تجعل منافسيك يبدون متأخرين بسنوات.</p>
                    </article>
                    <article class="bento-card glass-card" data-tilt data-depth="12" data-z="30" data-reveal>
                        <span class="card-icon">↗</span>
                        <h3>الأداء = الأرباح</h3>
                        <p style="font-size: 0.98rem; line-height: 1.8;">كل قرار تصميمي مرتبط بهدف تجاري محدد. نقيس النجاح بالأرقام الحقيقية: العملاء المؤهلون، الحجوزات، والإيرادات.</p>
                    </article>
                    <article class="bento-card glass-card" data-tilt data-depth="12" data-z="28" data-reveal>
                        <span class="card-icon">◎</span>
                        <h3>استثمار يعود عليك</h3>
                        <p style="font-size: 0.98rem; line-height: 1.8;">موقعك ليس مصاريف — هو أصل يجب أن يدفع مقابله بنفسه. كل مشروع نقدمه مصمم ليُحقق ROI خلال أول 90 يوماً.</p>
                    </article>
                    <article class="bento-card bento-quote glass-card" data-tilt data-depth="16" data-z="36" data-reveal>
                        <span class="card-icon">AI</span>
                        <h3>الأتمتة لا التعب</h3>
                        <p style="font-size: 0.98rem; line-height: 1.8;">ندمج الذكاء الاصطناعي في كل خطوة — من توليد العملاء إلى المتابعة التلقائية والتحليل المستمر. عملك يدور وأنت نائم.</p>
                    </article>
                </div>
            </section>

            {{-- ======== SERVICES ======== --}}
            <section class="section" id="services">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">Our Services · خدماتنا</span>
                    <h2>ثلاثة مسارات للنمو الاستثنائي.</h2>
                    <p>اختر ما يناسب مرحلتك الحالية — أو دعنا نبني لك النظام الكامل من البداية.</p>
                </div>

                <div class="services-grid" data-reveal>
                    <article class="service-card glass-card" data-tilt data-depth="10">
                        <div class="service-icon-wrap">
                            <span class="service-icon">🌐</span>
                        </div>
                        <div class="service-badge">الأكثر طلباً</div>
                        <h3>موقع فاخر + هوية بصرية</h3>
                        <p>موقع سينمائي فائق الأداء مبني على Laravel أو WordPress، يُصمم خصيصاً لإقناع عميلك المثالي وتحويله. يشمل: تصميم UI/UX احترافي، هوية بصرية كاملة، صفحات هبوط محسّنة للتحويل، وسرعة تحميل تحت 2 ثانية.</p>
                        <ul class="service-features">
                            <li>✓ تصميم UI/UX مخصص بالكامل</li>
                            <li>✓ هوية بصرية + شعار احترافي</li>
                            <li>✓ متوافق 100% مع الموبايل</li>
                            <li>✓ تحسين محركات البحث (SEO)</li>
                            <li>✓ لوحة تحكم لإدارة المحتوى</li>
                        </ul>
                        <div class="service-timeline">⏱ التسليم: 10-21 يوم</div>
                    </article>

                    <article class="service-card glass-card" data-tilt data-depth="10">
                        <div class="service-icon-wrap">
                            <span class="service-icon">📈</span>
                        </div>
                        <h3>تسويق رقمي + إعلانات مدفوعة</h3>
                        <p>استراتيجية تسويق متكاملة تضع علامتك أمام العملاء المناسبين في الوقت المناسب. إعلانات Google وMeta محسّنة بالذكاء الاصطناعي، مع تحليل مستمر وتحسين ROAS.</p>
                        <ul class="service-features">
                            <li>✓ إدارة إعلانات Google وMeta</li>
                            <li>✓ إنشاء محتوى إعلاني مقنع</li>
                            <li>✓ تحليل البيانات وتحسين مستمر</li>
                            <li>✓ تقارير أسبوعية شفافة</li>
                            <li>✓ استهداف دقيق للعملاء المثاليين</li>
                        </ul>
                        <div class="service-timeline">⏱ إطلاق الحملات: 5-7 أيام</div>
                    </article>

                    <article class="service-card glass-card" data-tilt data-depth="10">
                        <div class="service-icon-wrap">
                            <span class="service-icon">🤖</span>
                        </div>
                        <h3>أنظمة AI + أتمتة الأعمال</h3>
                        <p>حوّل عملياتك اليدوية إلى أنظمة ذكية تعمل تلقائياً. من روبوتات المحادثة إلى أنظمة إدارة العملاء وتأهيلهم تلقائياً — نبني البنية التحتية الرقمية لشركتك.</p>
                        <ul class="service-features">
                            <li>✓ Chatbot ذكي متكامل مع موقعك</li>
                            <li>✓ نظام CRM وإدارة العملاء</li>
                            <li>✓ أتمتة المتابعة والبريد الإلكتروني</li>
                            <li>✓ تحليل بيانات العملاء بـ AI</li>
                            <li>✓ تكامل مع أدوات عملك الحالية</li>
                        </ul>
                        <div class="service-timeline">⏱ التسليم: 14-30 يوم</div>
                    </article>
                </div>
            </section>

            {{-- ======== CASE STUDIES ======== --}}
            <section class="section" id="cases">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">Case Studies · دراسات الحالة</span>
                    <h2>أرقام حقيقية، تحولات موثقة.</h2>
                    <p>لا وعود مبهمة. هذه نتائج فعلية حققها عملاؤنا بعد بناء أنظمتهم الرقمية معنا.</p>
                </div>

                <div class="case-stack">
                    <article class="case-card glass-card" data-reveal data-parallax data-tilt data-depth="10">
                        <div class="case-track">
                            <div class="case-copy">
                                <span class="case-tag">سياحة وضيافة فاخرة · Life Tours</span>
                                <h3>كيف حولنا موقعاً ساكناً إلى منصة حجز تدرّ 340% نمواً.</h3>
                                <p>شركة Life Tours كانت تعتمد بالكامل على وسطاء ومنصات خارجية. بنينا لهم موقع حجز مباشر سينمائي الأداء مع نظام دفع متكامل وتأهيل تلقائي للعملاء. النتيجة: انتقلوا من الاعتماد الكامل على العمولات إلى إيرادات مباشرة تضاعفت في 4 أشهر.</p>
                                <div class="case-proof-points">
                                    <span>✓ نظام حجز مباشر متكامل</span>
                                    <span>✓ تأهيل العملاء تلقائياً</span>
                                    <span>✓ سرعة تحميل 1.2 ثانية</span>
                                </div>
                            </div>
                            <div class="case-metrics">
                                <strong>340%</strong>
                                <span>نمو في الحجوزات المباشرة</span>
                                <em>180%</em>
                                <small>زيادة متوسط قيمة العميل</small>
                            </div>
                        </div>
                    </article>

                    <article class="case-card case-card-alt glass-card" data-reveal data-parallax data-tilt data-depth="10">
                        <div class="case-track">
                            <div class="case-copy">
                                <span class="case-tag">SaaS Platform · Nexuse Dashboard</span>
                                <h3>إعادة بناء واجهة مؤسسية أنقذت 42% من الاشتراكات المهددة بالإلغاء.</h3>
                                <p>منصة Nexuse كانت تعاني من معدل إلغاء اشتراكات مرتفع بسبب تعقيد الواجهة. أجرينا تحليل UX شاملاً، أعدنا بناء كامل لتدفق المستخدم مع dark mode متطور وسرعة استجابة فائقة. المستخدمون بدأوا يُكملون مهامهم في 40% من الوقت السابق.</p>
                                <div class="case-proof-points">
                                    <span>✓ تحليل UX متعمق</span>
                                    <span>✓ إعادة بناء كاملة للواجهة</span>
                                    <span>✓ Dark mode + استجابة فائقة</span>
                                </div>
                            </div>
                            <div class="case-metrics">
                                <strong>42%</strong>
                                <span>انخفاض في معدل الإلغاء</span>
                                <em>60%</em>
                                <small>تحسن في إكمال المهام</small>
                            </div>
                        </div>
                    </article>

                    <article class="case-card glass-card" data-reveal data-parallax data-tilt data-depth="10">
                        <div class="case-track">
                            <div class="case-copy">
                                <span class="case-tag">E-Commerce · Life Pets Store</span>
                                <h3>كيف ضاعفنا مبيعات متجر إلكتروني بتحسين قمع الشراء فقط.</h3>
                                <p>متجر Life Pets كان يفقد 78% من زواره عند صفحة المنتج. حللنا مسار الشراء بالكامل، أعدنا تصميم صفحات المنتجات وعملية الدفع، وأضفنا عروض upsell ذكية. في أول 60 يوماً: تضاعفت المبيعات الشهرية وارتفع متوسط قيمة الطلب بـ 35%.</p>
                                <div class="case-proof-points">
                                    <span>✓ تحسين Conversion Rate</span>
                                    <span>✓ Upsell ذكي بالـ AI</span>
                                    <span>✓ تجربة شراء سلسة</span>
                                </div>
                            </div>
                            <div class="case-metrics">
                                <strong>2×</strong>
                                <span>مضاعفة المبيعات الشهرية</span>
                                <em>35%</em>
                                <small>ارتفاع متوسط قيمة الطلب</small>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            {{-- ======== PORTFOLIO SLIDER ======== --}}
            <section class="section section-gallery" id="gallery">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">Portfolio · أعمالنا المختارة</span>
                    <h2>مواقع تجعل المنافس يتوقف ليشاهد.</h2>
                    <p>كل مشروع قصة نجاح مختلفة — من السياحة الفاخرة إلى التجارة الإلكترونية والمنصات المؤسسية.</p>
                </div>

                <div class="portfolio-slider" aria-label="Portfolio slider">
                    @foreach($portfolioRails as $railIndex => $rail)
                        <div class="portfolio-row {{ $railIndex % 2 === 1 ? 'portfolio-row-reverse' : '' }}" data-reveal>
                            <div class="portfolio-track">
                                @for($copyIndex = 0; $copyIndex < 2; $copyIndex++)
                                    <div class="portfolio-group">
                                    @foreach($rail as $work)
                                        <article class="portfolio-card glass-card" data-tilt data-depth="12">
                                            <div class="portfolio-image">
                                                <img src="{{ $work['image'] }}" alt="{{ $work['title'] }} portfolio preview" loading="lazy">
                                                <div class="portfolio-overlay"></div>
                                                <div class="portfolio-badge">{{ $work['tag'] }}</div>
                                            </div>
                                            <div class="portfolio-copy">
                                                <span class="case-tag">{{ $work['category'] }}</span>
                                                <h3>{{ $work['title'] }}</h3>
                                                <p>{{ $work['impact'] }}</p>
                                            </div>
                                        </article>
                                    @endforeach
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- ======== PROCESS ======== --}}
            <section class="section section-process" id="process">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">Our Process · كيف نعمل</span>
                    <h2>من الفكرة إلى الإيراد في 4 خطوات.</h2>
                    <p>عملية مُجرَّبة ومُحسَّنة عبر أكثر من 50 مشروعاً — شفافة ومنظمة من اليوم الأول.</p>
                </div>

                <div class="process-grid" data-reveal>
                    <div class="process-step glass-card" data-tilt data-depth="8">
                        <div class="process-num">01</div>
                        <h3>التشخيص الاستراتيجي</h3>
                        <p>نحلل وضعك الحالي، منافسيك، وجمهورك المستهدف. نخرج بمخطط واضح للنمو يحدد أين الفرصة الأكبر لك.</p>
                        <div class="process-duration">⏱ 24-48 ساعة</div>
                    </div>
                    <div class="process-step glass-card" data-tilt data-depth="8">
                        <div class="process-num">02</div>
                        <h3>التصميم والبناء</h3>
                        <p>نبني نموذجاً أولياً خلال 48 ساعة تراه وتعدّله قبل أي تنفيذ نهائي. لا مفاجآت، لا تأخير.</p>
                        <div class="process-duration">⏱ 7-21 يوم</div>
                    </div>
                    <div class="process-step glass-card" data-tilt data-depth="8">
                        <div class="process-num">03</div>
                        <h3>الإطلاق والاختبار</h3>
                        <p>نختبر كل شيء: السرعة، التحويل، الأمان، وتجربة المستخدم على كل الأجهزة. الإطلاق يكون عندما نكون متأكدين 100%.</p>
                        <div class="process-duration">⏱ 3-5 أيام</div>
                    </div>
                    <div class="process-step glass-card" data-tilt data-depth="8">
                        <div class="process-num">04</div>
                        <h3>التحسين المستمر</h3>
                        <p>لا ننتهي عند التسليم. نتابع الأداء، نحسّن باستمرار، ونتأكد أن استثمارك يتضاعف مع الوقت.</p>
                        <div class="process-duration">⏱ دائم ومستمر</div>
                    </div>
                </div>
            </section>

            {{-- ======== TESTIMONIALS ======== --}}
            <section class="section section-testimonials">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">Client Voices · ماذا يقول عملاؤنا</span>
                    <h2>النجاح يتكلم عن نفسه.</h2>
                    <p>كلمات حقيقية من عملاء حقيقيين يعيشون النتائج يومياً.</p>
                </div>

                <div class="testimonial-grid">
                    <article class="testimonial-card glass-card" data-reveal data-tilt data-depth="10">
                        <div class="testimonial-top">
                            <span>أحمد الشريف · مدير Life Tours</span>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                        <h3>الموقع حقق في 3 أشهر ما لم يحققه التسويق التقليدي في سنة</h3>
                        <p>كنت أصرف على حملات إعلانية بدون نتيجة واضحة. بعد بناء الموقع مع Red Sea Digital Pro، أصبح لدي نظام حجز مباشر يعمل 24 ساعة. العملاء يحجزون في الليل وأنا نايم.</p>
                        <div class="testimonial-meta">
                            <div class="testimonial-avatar">أ.ش</div>
                            <div>
                                <strong>أحمد الشريف</strong>
                                <span>مؤسس ومدير Life Tours · القاهرة</span>
                            </div>
                        </div>
                    </article>

                    <article class="testimonial-card glass-card" data-reveal data-tilt data-depth="10">
                        <div class="testimonial-top">
                            <span>سارة المنصور · مديرة Nexuse</span>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                        <h3>أنقذوا منصتنا من الانهيار وحولوها إلى منتج يُفخر به</h3>
                        <p>كنا نخسر عملاء كل شهر بسبب تعقيد الواجهة. بعد الشراكة معهم، تغير كل شيء. الواجهة الجديدة نظيفة وقوية — العملاء يطرونها في كل مكان والإلغاءات توقفت.</p>
                        <div class="testimonial-meta">
                            <div class="testimonial-avatar">س.م</div>
                            <div>
                                <strong>سارة المنصور</strong>
                                <span>CPO · منصة Nexuse · الرياض</span>
                            </div>
                        </div>
                    </article>

                    <article class="testimonial-card glass-card" data-reveal data-tilt data-depth="10">
                        <div class="testimonial-top">
                            <span>محمد العتيبي · صاحب Selfie Store</span>
                            <div class="testimonial-stars">★★★★★</div>
                        </div>
                        <h3>استثمار الموقع رجع في أول شهر — الآن أتمنى بدأت معهم من البداية</h3>
                        <p>أعطيتهم الموقع في حالة سيئة — بطيء، معدل تحويل منخفض. في أسبوعين سلّموا موقعاً جديداً بالكامل. الأرباح في الشهر التالي غطّت كل التكلفة وزادت.</p>
                        <div class="testimonial-meta">
                            <div class="testimonial-avatar">م.ع</div>
                            <div>
                                <strong>محمد العتيبي</strong>
                                <span>مؤسس Selfie Store · دبي</span>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            {{-- ======== MOTION / TECH SECTION ======== --}}
            <section class="section section-directive glass-card" data-reveal data-tilt data-depth="12">
                <div>
                    <span class="section-kicker">Tech Stack · التقنيات التي نستخدمها</span>
                    <h2>نبني بأفضل الأدوات. نُسلّم بأعلى جودة.</h2>
                </div>
                <div class="tech-list">
                    <div class="tech-item">Laravel</div>
                    <div class="tech-item">WordPress</div>
                    <div class="tech-item">React / Vue</div>
                    <div class="tech-item">OpenAI API</div>
                    <div class="tech-item">GSAP Animations</div>
                    <div class="tech-item">Figma Pro</div>
                    <div class="tech-item">Google Analytics</div>
                    <div class="tech-item">Meta Business</div>
                </div>
            </section>

            {{-- ======== FAQ ======== --}}
            <section class="section section-faq" id="faq">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">FAQ · الأسئلة الشائعة</span>
                    <h2>نجاوب بصدق، لا بمبيعات.</h2>
                    <p>أكثر الأسئلة التي نسمعها — ونجيب عليها بشفافية كاملة.</p>
                </div>

                <div class="faq-grid" data-reveal>
                    <div class="faq-item glass-card">
                        <div class="faq-q">كم يستغرق بناء الموقع؟</div>
                        <div class="faq-a">المواقع الاحترافية من 10 إلى 21 يوماً حسب التعقيد. نعطيك نموذجاً أولياً خلال 48 ساعة من بداية العمل لترى الاتجاه وتعدّل قبل التنفيذ الكامل.</div>
                    </div>
                    <div class="faq-item glass-card">
                        <div class="faq-q">كم تكلف الخدمات؟</div>
                        <div class="faq-a">المواقع الاحترافية تبدأ من $1,500. الأنظمة الكاملة مع الأتمتة من $3,000+. الاستثمار يعود عليك خلال أول 60-90 يوماً في أغلب الحالات. نحدد السعر الدقيق بعد فهم احتياجاتك.</div>
                    </div>
                    <div class="faq-item glass-card">
                        <div class="faq-q">هل أحتاج خبرة تقنية لإدارة الموقع؟</div>
                        <div class="faq-a">لا. نبني لوحة تحكم بسيطة تناسبك أنت. ونقدم تدريباً كاملاً بعد التسليم. معظم عملائنا يديرون مواقعهم بأنفسهم دون أي خلفية تقنية.</div>
                    </div>
                    <div class="faq-item glass-card">
                        <div class="faq-q">ماذا يحدث بعد التسليم؟</div>
                        <div class="faq-a">لا تنتهي العلاقة عند التسليم. نتابع الأداء، نحل أي مشاكل تقنية، ونقدم تقارير دورية. لدينا خطط صيانة شهرية للعملاء الذين يريدون راحة بال كاملة.</div>
                    </div>
                    <div class="faq-item glass-card">
                        <div class="faq-q">هل تعملون مع كل المجالات؟</div>
                        <div class="faq-a">نتخصص في: السياحة والضيافة، التجارة الإلكترونية، الخدمات المهنية، العقارات، والتعليم. نقبل مشاريع محدودة شهرياً لضمان جودة عالية — تواصل معنا لنرى إذا كنا المناسبين لك.</div>
                    </div>
                    <div class="faq-item glass-card">
                        <div class="faq-q">ما الفرق بينكم وبين الفريلانسر؟</div>
                        <div class="faq-a">الفريلانسر يبني موقعاً. نحن نبني نظاماً رقمياً يحقق أهدافاً تجارية. لدينا فريق متخصص في التصميم، التطوير، والتسويق — وليس شخصاً واحداً يحاول كل شيء.</div>
                    </div>
                </div>
            </section>

            {{-- ======== CTA + FORM ======== --}}
            <section class="section section-form" id="brief">
                <div class="section-heading" data-reveal>
                    <span class="section-kicker">Start Your Project · ابدأ مشروعك</span>
                    <h2>ابدأ بتشخيص رقمي مجاني.</h2>
                    <p>3 دقائق فقط، وسنرسل لك خطة أولية خلال 24 ساعة — مجاناً وبدون أي التزام.</p>
                </div>

                <div class="form-shell glass-card" data-reveal data-tilt data-depth="10">
                    <div class="form-copy">
                        <p class="eyebrow">Lead Capture · نموذج التشخيص</p>
                        <h3>أخبرنا عن مشروعك.</h3>
                        <p>ما يكفي لفهم وضعك الحالي وأين تريد الوصول. لا عروض مزعجة. لا مبيعات ضاغطة.</p>
                    </div>

                    <form method="POST" action="{{ route('apply.store') }}" class="project-form">
                        @csrf

                        <div class="form-grid">
                            <div class="field">
                                <label for="name">الاسم الكامل *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="اسمك الكامل" required>
                                @error('name') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field">
                                <label for="company">اسم الشركة أو العلامة التجارية</label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}" placeholder="اسم شركتك أو علامتك">
                                @error('company') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field">
                                <label for="email">البريد الإلكتروني *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="name@company.com" required>
                                @error('email') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field">
                                <label for="whatsapp">رقم واتساب للتواصل السريع</label>
                                <input type="text" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="+966 / +20 XXX XXX XXXX">
                                @error('whatsapp') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field">
                                <label for="service_type">الخدمة التي تحتاجها *</label>
                                <select id="service_type" name="service_type" required>
                                    <option value="" disabled {{ old('service_type') ? '' : 'selected' }}>اختر الخدمة المناسبة</option>
                                    <option value="website_branding" {{ old('service_type') == 'website_branding' ? 'selected' : '' }}>موقع فاخر + هوية بصرية</option>
                                    <option value="marketing" {{ old('service_type') == 'marketing' ? 'selected' : '' }}>تسويق رقمي + إعلانات</option>
                                    <option value="ai_systems" {{ old('service_type') == 'ai_systems' ? 'selected' : '' }}>أنظمة AI + أتمتة الأعمال</option>
                                    <option value="full_system" {{ old('service_type') == 'full_system' ? 'selected' : '' }}>النظام الكامل (موقع + تسويق + AI)</option>
                                </select>
                                @error('service_type') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field">
                                <label for="budget">الميزانية التقريبية</label>
                                <select id="budget" name="budget">
                                    <option value="" disabled {{ old('budget') ? '' : 'selected' }}>اختر نطاق الميزانية</option>
                                    <option value="under_2k" {{ old('budget') == 'under_2k' ? 'selected' : '' }}>&lt;$2,000</option>
                                    <option value="2k_5k" {{ old('budget') == '2k_5k' ? 'selected' : '' }}>$2,000 – $5,000</option>
                                    <option value="5k_10k" {{ old('budget') == '5k_10k' ? 'selected' : '' }}>$5,000 – $10,000</option>
                                    <option value="10k_20k" {{ old('budget') == '10k_20k' ? 'selected' : '' }}>$10,000 – $20,000</option>
                                    <option value="20k_plus" {{ old('budget') == '20k_plus' ? 'selected' : '' }}>$20,000+</option>
                                    <option value="not_sure" {{ old('budget') == 'not_sure' ? 'selected' : '' }}>غير محدد — أريد استشارة</option>
                                </select>
                                @error('budget') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field">
                                <label for="timeline">متى تريد البدء؟</label>
                                <select id="timeline" name="timeline">
                                    <option value="" disabled {{ old('timeline') ? '' : 'selected' }}>اختر التوقيت</option>
                                    <option value="asap" {{ old('timeline') == 'asap' ? 'selected' : '' }}>الآن فوراً</option>
                                    <option value="1_2_weeks" {{ old('timeline') == '1_2_weeks' ? 'selected' : '' }}>خلال 1-2 أسبوع</option>
                                    <option value="1_month" {{ old('timeline') == '1_month' ? 'selected' : '' }}>خلال شهر</option>
                                    <option value="2_3_months" {{ old('timeline') == '2_3_months' ? 'selected' : '' }}>خلال 2-3 أشهر</option>
                                    <option value="flexible" {{ old('timeline') == 'flexible' ? 'selected' : '' }}>مرن — حسب الخطة</option>
                                </select>
                                @error('timeline') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field">
                                <label for="referral">كيف وصلت إلينا؟</label>
                                <input type="text" id="referral" name="referral" value="{{ old('referral') }}" placeholder="Google, Instagram, ترشيح من أحد...">
                                @error('referral') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="field field-full">
                                <label for="brief">صف مشروعك باختصار *</label>
                                <textarea id="brief" name="brief" placeholder="أخبرنا عن عملك، الهدف الأساسي، الجمهور المستهدف، وما الذي تريد تحقيقه. كلما كنت أوضح، كانت خطتنا لك أدق وأسرع." required>{{ old('brief') }}</textarea>
                                @error('brief') <div class="error-text">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-large btn-submit">🚀 احجز تشخيصك الرقمي المجاني</button>
                                <p style="text-align:center; color: rgba(255,255,255,0.5); font-size:0.88rem;">سنرد خلال 24 ساعة · لا عروض مزعجة · لا التزامات مسبقة</p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            {{-- ======== FOOTER CTA ======== --}}
            <footer class="footer glass-card" data-reveal>
                <div>
                    <strong>جاهز تحوّل موقعك إلى آلة أرباح؟</strong>
                    <span>تواصل معنا الآن على واتساب — نرد خلال دقائق، لا أيام.</span>
                </div>
                <a href="https://wa.me/201028803080" target="_blank" rel="noreferrer">💬 واتساب مباشر</a>
            </footer>

            <div class="mobile-dock">
                <a class="mobile-dock-primary" href="#brief">ابدأ مجاناً</a>
                <a class="mobile-dock-secondary" href="https://wa.me/201028803080" target="_blank" rel="noreferrer">واتساب</a>
            </div>
        </main>
    </div>
</body>
</html>
