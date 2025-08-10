<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الدولة الأموية - منصة ذاكر التاريخ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--secondary-color);
            font-size: 1.5rem;
        }
        
        .lesson-header {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 15px 15px;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .lesson-content {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }
        
        .resources-card {
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }
        
        .resource-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #eee;
            transition: all 0.3s;
        }
        
        .resource-item:hover {
            background-color: #f8f9fa;
        }
        
        .resource-icon {
            width: 40px;
            height: 40px;
            background-color: var(--light-color);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 1rem;
            color: var(--primary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .lesson-nav {
            position: sticky;
            top: 20px;
        }
        
        .nav-item {
            margin-bottom: 0.5rem;
        }
        
        .nav-link {
            color: #555;
            border-radius: 8px;
            padding: 0.75rem 1rem;
        }
        
        .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }
        
        .nav-link:hover:not(.active) {
            background-color: #f0f0f0;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        
        .progress-container {
            height: 8px;
            border-radius: 4px;
            background-color: #e0e0e0;
            margin-top: 10px;
        }
        
        .progress-bar {
            background-color: var(--primary-color);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 1.5rem;
            font-weight: 700;
            color: var(--secondary-color);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -10px;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <div class="d-flex flex-row-reverse justify-content-between align-items-center w-100">
                <!-- User Profile -->
                <div class="d-flex align-items-center">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                            <span class="me-2 d-none d-sm-inline">أحمد محمد</span>
                            {{-- <img src="https://via.placeholder.com/40" alt="صورة المستخدم" class="user-avatar"> --}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                            {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>الملف الشخصي</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>الإعدادات</a></li> --}}
                            {{-- <li><hr class="dropdown-divider"></li> --}}
                            <li><a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-sign-out-alt me-2"></i>تسجيل الخروج</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Brand -->
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="{{ route('user_dashboard') }}">
                        <span class="text-primary">ذاكر <span class="text-dark">تاريخ</span> اونلاين</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user_dashboard') }}"><i class="fas fa-home me-1"></i> الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lessons') }}"><i class="fas fa-book me-1"></i> الدروس</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('score') }}"><i class="fas fa-chart-bar me-1"></i> التقدم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('test_bank') }}"><i class="fas fa-question-circle me-1"></i> بنك الاسئلة</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="lesson-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('lessons') }}" class="text-white">الدروس</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-white">التاريخ الإسلامي</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">الدولة الأموية</li>
                        </ol>
                    </nav>
                    <h1 class="mb-3">الدولة الأموية</h1>
                    <p class="lead mb-4">دراسة شاملة لنشأة الدولة الأموية وأهم خلفائها وإنجازاتها الحضارية</p>
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <span class="badge bg-light text-dark"><i class="fas fa-clock me-1"></i> 4 ساعات</span>
                        </div>
                        {{-- <div class="me-4">
                            <span class="badge bg-light text-dark"><i class="fas fa-layer-group me-1"></i> متوسط</span>
                        </div> --}}
                        {{-- <div class="progress-container" style="width: 200px;">
                            <div class="progress-bar" style="width: 65%"></div>
                        </div>
                        <span class="me-2">65% مكتمل</span> --}}
                    </div>
                </div>
                {{-- <div class="col-md-4 text-md-start">
                    <button class="btn btn-light me-2"><i class="fas fa-bookmark me-1"></i> حفظ</button>
                    <button class="btn btn-outline-light"><i class="fas fa-share-alt me-1"></i> مشاركة</button>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="lesson-nav">
                    <div class="card mb-3">
                        <div class="card-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#video-section"><i class="fas fa-play-circle me-2"></i> الفيديو التعليمي</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#content-section"><i class="fas fa-file-alt me-2"></i> المحتوى التعليمي</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#resources-section"><i class="fas fa-file-download me-2"></i> المصادر والملفات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#questions-section"><i class="fas fa-question-circle me-2"></i> أسئلة الدرس</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header bg-white">
                            <h6 class="mb-0"><i class="fas fa-list-ol me-2"></i> محتويات الدرس</h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action active">1. مقدمة عن الدولة الأموية</a>
                                <a href="#" class="list-group-item list-group-item-action">2. مؤسس الدولة الأموية</a>
                                <a href="#" class="list-group-item list-group-item-action">3. أهم الخلفاء الأمويين</a>
                                <a href="#" class="list-group-item list-group-item-action">4. الإنجازات الحضارية</a>
                                <a href="#" class="list-group-item list-group-item-action">5. أسباب سقوط الدولة</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                <!-- Video Section -->
                <section id="video-section" class="mb-5">
                    <h3 class="section-title"><i class="fas fa-play-circle me-2"></i> الفيديو التعليمي</h3>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    {{-- <div class="d-flex justify-content-between align-items-center mt-2">
                        <div>
                            <button class="btn btn-outline-secondary me-2"><i class="fas fa-thumbs-up"></i> أعجبني</button>
                            <button class="btn btn-outline-secondary"><i class="fas fa-thumbs-down"></i> لم يعجبني</button>
                        </div>
                        <div>
                            <span class="text-muted me-2"><i class="fas fa-eye me-1"></i> 245 مشاهدة</span>
                            <span class="text-muted"><i class="far fa-clock me-1"></i> 32:15 دقيقة</span>
                        </div>
                    </div> --}}
                </section>
                
                <!-- Content Section -->
                <section id="content-section" class="mb-5">
                    <h3 class="section-title"><i class="fas fa-file-alt me-2"></i> المحتوى التعليمي</h3>
                    <div class="lesson-content">
                        <h4 class="mb-4">مقدمة عن الدولة الأموية</h4>
                        <p>الدولة الأموية هي ثاني خلافة في التاريخ الإسلامي، وأكبر دولة في الإسلام من حيث المساحة. قامت بعد نهاية عصر الخلفاء الراشدين، وامتدت من عام 41 هـ إلى 132 هـ (662-750 م).</p>
                        
                        <h5 class="mt-4">أهمية دراسة الدولة الأموية:</h5>
                        <ul>
                            <li>تعتبر أول دولة وراثية في الإسلام</li>
                            <li>شهدت أكبر توسع للإسلام في العالم</li>
                            <li>ظهرت فيها العديد من الإنجازات الحضارية</li>
                            <li>وضعت الأساس للدول الإسلامية اللاحقة</li>
                        </ul>
                        
                        <h5 class="mt-4">الخلفاء الأمويون:</h5>
                        <p>حكم الدولة الأموية 14 خليفة، كان أولهم معاوية بن أبي سفيان وآخرهم مروان بن محمد. من أشهر خلفائها:</p>
                        <ol>
                            <li>معاوية بن أبي سفيان (مؤسس الدولة)</li>
                            <li>عبد الملك بن مروان (مؤسس الدولة الأموية الثانية)</li>
                            <li>الوليد بن عبد الملك (عصر التوسع والفتوحات)</li>
                            <li>هشام بن عبد الملك (العصر الذهبي)</li>
                        </ol>
                        
                        <div class="alert alert-info mt-4">
                            <i class="fas fa-lightbulb me-2"></i>
                            <strong>ملاحظة مهمة:</strong> الدولة الأموية تنقسم إلى فرعين: الأمويون في دمشق (الفرع السفياني) والأمويون في الأندلس (الفرع الأموي الأندلسي).
                        </div>
                    </div>
                </section>
                
                <!-- Resources Section -->
                <section id="resources-section" class="mb-5">
                    <h3 class="section-title"><i class="fas fa-file-download me-2"></i> المصادر والملفات</h3>
                    <div class="resources-card">
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">ملخص الدرس PDF</h6>
                                <small class="text-muted">حجم الملف: 2.4 MB | الصفحات: 12</small>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download me-1"></i> تحميل</a>
                        </div>
                        
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-file-word"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">أسئلة وتمارين DOC</h6>
                                <small class="text-muted">حجم الملف: 1.1 MB | الأسئلة: 25</small>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download me-1"></i> تحميل</a>
                        </div>
                        
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">خرائط الدولة الأموية</h6>
                                <small class="text-muted">حجم الملف: 3.7 MB | الصور: 5</small>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download me-1"></i> تحميل</a>
                        </div>
                        
                        <div class="resource-item border-bottom-0">
                            <div class="resource-icon">
                                <i class="fas fa-link"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">روابط خارجية للاستزادة</h6>
                                <small class="text-muted">مقالات ومراجع إضافية</small>
                            </div>
                            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-external-link-alt me-1"></i> زيارة</a>
                        </div>
                    </div>
                </section>
                
                <!-- Questions Section -->
                <section id="questions-section">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="section-title mb-0"><i class="fas fa-question-circle me-2"></i> أسئلة الدرس</h3>
                        <a href="#" class="btn btn-primary"><i class="fas fa-play me-1"></i> بدء الاختبار</a>
                    </div>
                    
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">أسئلة الاختيار من متعدد</h5>
                                <span class="badge bg-primary">5 أسئلة</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="mb-0">اختبر فهمك للدرس من خلال هذه الأسئلة التفاعلية</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">عرض الكل</a>
                            </div>
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                يجب الحصول على 75% على الأقل لاجتياز اختبار الدرس.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">أسئلة الصح والخطأ</h5>
                                <span class="badge bg-primary">3 أسئلة</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>اختبر معلوماتك الأساسية عن الدولة الأموية</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">عرض الأسئلة</a>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">أسئلة مقالية</h5>
                                <span class="badge bg-primary">سؤالان</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>أسئلة متعمقة تحتاج إلى إجابة مفصلة</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">عرض الأسئلة</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <footer class="pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">
                        &copy; 2023 منصة ذاكر التاريخ. جميع الحقوق محفوظة.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-icons">
                        <a target="_blank" href="https://www.facebook.com/groups/393691115855559/user/100000717019113/" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.instagram.com/samahhafez1811/" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@drsamahhafez7872" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Update active nav link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
        
        // Update active nav link based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 300)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>