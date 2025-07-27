<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الدروس - منصة ذاكر التاريخ</title>
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
        
        .dashboard-header {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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
        
        .section-title {
            position: relative;
            margin-bottom: 2rem;
            font-weight: 700;
            color: var(--secondary-color);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -10px;
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .lesson-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 1.5rem;
            height: 100%;
        }
        
        .lesson-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .lesson-card .card-img-top {
            height: 180px;
            object-fit: cover;
        }
        
        .lesson-card .card-body {
            padding: 1.5rem;
        }
        
        .lesson-card .card-title {
            color: var(--secondary-color);
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        
        .lesson-card .card-text {
            color: #666;
            margin-bottom: 1.25rem;
        }
        
        .lesson-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .lesson-badge {
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .badge-beginner {
            background-color: #e3f2fd;
            color: #1976d2;
        }
        
        .badge-intermediate {
            background-color: #e8f5e9;
            color: #388e3c;
        }
        
        .badge-advanced {
            background-color: #fce4ec;
            color: #d81b60;
        }
        
        .lesson-duration {
            color: #666;
            font-size: 0.9rem;
        }
        
        .lesson-progress {
            height: 6px;
            border-radius: 3px;
            background-color: #e0e0e0;
            margin-bottom: 1rem;
        }
        
        .progress-bar {
            background-color: var(--primary-color);
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
        
        .filter-container {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        
        .filter-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        /* Chat Support Styles */
        .chat-support {
            position: fixed;
            left: 20px;
            bottom: 20px;
            z-index: 1000;
        }
        
        .chat-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            transition: all 0.3s;
        }
        
        .chat-button:hover {
            transform: scale(1.1);
            background-color: #2980b9;
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
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>الملف الشخصي</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>الإعدادات</a></li>
                            <li><hr class="dropdown-divider"></li>
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
                        <a class="nav-link active" href="{{ route('lessons') }}"><i class="fas fa-book me-1"></i> الدروس</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-bar me-1"></i> التقدم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-question-circle me-1"></i> الاختبارات</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="section-title"><i class="fas fa-book-open me-2"></i>جميع الدروس</h2>
            </div>
            <div class="col-md-6 text-md-start">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ابحث عن دروس...">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        
        <div class="filter-container">
            <h5 class="filter-title"><i class="fas fa-filter me-2"></i>تصفية الدروس</h5>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">المستوى</label>
                    <select class="form-select">
                        <option selected>جميع المستويات</option>
                        <option>مبتدئ</option>
                        <option>متوسط</option>
                        <option>متقدم</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">الحالة</label>
                    <select class="form-select">
                        <option selected>جميع الحالات</option>
                        <option>غير مكتمل</option>
                        <option>قيد التقدم</option>
                        <option>مكتمل</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">التصنيف</label>
                    <select class="form-select">
                        <option selected>جميع التصنيفات</option>
                        <option>التاريخ الإسلامي</option>
                        <option>التاريخ الحديث</option>
                        <option>الحضارات القديمة</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3 d-flex align-items-end">
                    <button class="btn btn-outline-primary w-100">تطبيق الفلتر</button>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Lesson 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card lesson-card">
                    <img src="https://source.unsplash.com/random/600x400?egypt" class="card-img-top" alt="الحضارة المصرية القديمة">
                    <div class="card-body">
                        <div class="lesson-meta">
                            <span class="lesson-badge badge-beginner">مبتدئ</span>
                            <span class="lesson-duration"><i class="far fa-clock me-1"></i> 2 ساعة</span>
                        </div>
                        <h5 class="card-title">الحضارة المصرية القديمة</h5>
                        <p class="card-text">اكتشف أسرار الحضارة المصرية القديمة وأهم إنجازاتها في العمارة والعلوم والفنون.</p>
                        <div class="lesson-progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-success"><i class="fas fa-check-circle me-1"></i> مكتمل</span>
                            <a href="#" class="btn btn-outline-primary">مراجعة الدرس</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lesson 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card lesson-card">
                    <img src="https://source.unsplash.com/random/600x400?islamic" class="card-img-top" alt="الفتوحات الإسلامية">
                    <div class="card-body">
                        <div class="lesson-meta">
                            <span class="lesson-badge badge-intermediate">متوسط</span>
                            <span class="lesson-duration"><i class="far fa-clock me-1"></i> 3 ساعات</span>
                        </div>
                        <h5 class="card-title">الفتوحات الإسلامية</h5>
                        <p class="card-text">تعرف على مراحل الفتوحات الإسلامية وأهم المعارك التي غيرت خريطة العالم القديم.</p>
                        <div class="lesson-progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-success"><i class="fas fa-check-circle me-1"></i> مكتمل</span>
                            <a href="#" class="btn btn-outline-primary">مراجعة الدرس</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lesson 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card lesson-card">
                    <img src="https://source.unsplash.com/random/600x400?umayyad" class="card-img-top" alt="الدولة الأموية">
                    <div class="card-body">
                        <div class="lesson-meta">
                            <span class="lesson-badge badge-intermediate">متوسط</span>
                            <span class="lesson-duration"><i class="far fa-clock me-1"></i> 4 ساعات</span>
                        </div>
                        <h5 class="card-title">الدولة الأموية</h5>
                        <p class="card-text">دراسة شاملة لنشأة الدولة الأموية وأهم خلفائها وإنجازاتها الحضارية.</p>
                        <div class="lesson-progress">
                            <div class="progress-bar" style="width: 65%"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-warning"><i class="fas fa-spinner me-1"></i> قيد التقدم</span>
                            <a href="#" class="btn btn-primary">استكمال الدرس</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lesson 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card lesson-card">
                    <img src="https://source.unsplash.com/random/600x400?abbasid" class="card-img-top" alt="الدولة العباسية">
                    <div class="card-body">
                        <div class="lesson-meta">
                            <span class="lesson-badge badge-intermediate">متوسط</span>
                            <span class="lesson-duration"><i class="far fa-clock me-1"></i> 5 ساعات</span>
                        </div>
                        <h5 class="card-title">الدولة العباسية</h5>
                        <p class="card-text">رحلة عبر عصور الدولة العباسية من القوة إلى الضعف وأسباب سقوطها.</p>
                        <div class="lesson-progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-secondary"><i class="far fa-circle me-1"></i> لم يبدأ</span>
                            <a href="#" class="btn btn-primary">بدء التعلم</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lesson 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card lesson-card">
                    <img src="https://source.unsplash.com/random/600x400?ottoman" class="card-img-top" alt="الدولة العثمانية">
                    <div class="card-body">
                        <div class="lesson-meta">
                            <span class="lesson-badge badge-advanced">متقدم</span>
                            <span class="lesson-duration"><i class="far fa-clock me-1"></i> 6 ساعات</span>
                        </div>
                        <h5 class="card-title">الدولة العثمانية</h5>
                        <p class="card-text">تحليل لتاريخ الدولة العثمانية من القيام إلى السقوط وأثرها على العالم الإسلامي.</p>
                        <div class="lesson-progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-secondary"><i class="far fa-circle me-1"></i> لم يبدأ</span>
                            <a href="#" class="btn btn-primary">بدء التعلم</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lesson 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card lesson-card">
                    <img src="https://source.unsplash.com/random/600x400?modern" class="card-img-top" alt="التاريخ الحديث">
                    <div class="card-body">
                        <div class="lesson-meta">
                            <span class="lesson-badge badge-advanced">متقدم</span>
                            <span class="lesson-duration"><i class="far fa-clock me-1"></i> 4 ساعات</span>
                        </div>
                        <h5 class="card-title">التاريخ الحديث</h5>
                        <p class="card-text">أهم الأحداث العالمية في القرنين التاسع عشر والعشرين وتأثيرها على العالم العربي.</p>
                        <div class="lesson-progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-secondary"><i class="far fa-circle me-1"></i> لم يبدأ</span>
                            <a href="#" class="btn btn-primary">بدء التعلم</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">السابق</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">التالي</a>
                </li>
            </ul>
        </nav>
    </div>
    
    <!-- Floating Chat Support -->
    <div class="chat-support">
        <button class="chat-button">
            <i class="fas fa-headset"></i>
        </button>
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
</body>
</html>