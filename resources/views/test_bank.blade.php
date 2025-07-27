<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بنك الأسئلة - منصة ذاكر التاريخ</title>
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
        
        .question-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 1.5rem;
            background-color: white;
        }
        
        .question-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .question-card .card-header {
            background-color: var(--light-color);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-weight: 600;
        }
        
        .question-card .card-body {
            padding: 1.5rem;
        }
        
        .question-type {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-left: 0.5rem;
        }
        
        .type-mcq {
            background-color: #e3f2fd;
            color: #1976d2;
        }
        
        .type-tf {
            background-color: #e8f5e9;
            color: #388e3c;
        }
        
        .type-essay {
            background-color: #fce4ec;
            color: #d81b60;
        }
        
        .question-difficulty {
            font-size: 0.85rem;
            color: #666;
        }
        
        .difficulty-easy {
            color: #2ecc71;
        }
        
        .difficulty-medium {
            color: #f39c12;
        }
        
        .difficulty-hard {
            color: #e74c3c;
        }
        
        .options-list {
            list-style-type: none;
            padding: 0;
            margin: 1rem 0;
        }
        
        .options-list li {
            padding: 0.75rem;
            margin-bottom: 0.5rem;
            background-color: #f8f9fa;
            border-radius: 6px;
            border-left: 3px solid #ddd;
        }
        
        .options-list li.correct {
            background-color: #e8f5e9;
            border-left-color: #2ecc71;
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
        
        .tab-content {
            padding: 1.5rem 0;
        }
        
        .nav-tabs .nav-link {
            color: #555;
            font-weight: 500;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            font-weight: 600;
            border-color: var(--primary-color);
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
                            <img src="https://via.placeholder.com/40" alt="صورة المستخدم" class="user-avatar">
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
                        <a class="nav-link" href="{{ route('lessons') }}"><i class="fas fa-book me-1"></i> الدروس</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-question-circle me-1"></i> بنك الأسئلة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-bar me-1"></i> التقدم</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="section-title"><i class="fas fa-question-circle me-2"></i>بنك الأسئلة</h2>
            </div>
            <div class="col-md-6 text-md-start">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ابحث عن أسئلة...">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        
        <div class="filter-container">
            <h5 class="filter-title"><i class="fas fa-filter me-2"></i>تصفية الأسئلة</h5>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">نوع السؤال</label>
                    <select class="form-select">
                        <option selected>جميع الأنواع</option>
                        <option>اختيار من متعدد</option>
                        <option>صح أو خطأ</option>
                        <option>مقالي</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">مستوى الصعوبة</label>
                    <select class="form-select">
                        <option selected>جميع المستويات</option>
                        <option>سهل</option>
                        <option>متوسط</option>
                        <option>صعب</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">الدرس</label>
                    <select class="form-select">
                        <option selected>جميع الدروس</option>
                        <option>الحضارة المصرية</option>
                        <option>الفتوحات الإسلامية</option>
                        <option>الدولة الأموية</option>
                        <option>الدولة العباسية</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3 d-flex align-items-end">
                    <button class="btn btn-outline-primary w-100">تطبيق الفلتر</button>
                </div>
            </div>
        </div>
        
        <ul class="nav nav-tabs" id="questionTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">الكل</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="mcq-tab" data-bs-toggle="tab" data-bs-target="#mcq" type="button" role="tab">اختيار من متعدد</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tf-tab" data-bs-toggle="tab" data-bs-target="#tf" type="button" role="tab">صح أو خطأ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="essay-tab" data-bs-toggle="tab" data-bs-target="#essay" type="button" role="tab">مقالي</button>
            </li>
        </ul>
        
        <div class="tab-content" id="questionTabsContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <!-- Question 1 -->
                <div class="card question-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>سؤال #1</span>
                        <span class="question-type type-mcq">اختيار من متعدد</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ما هي عاصمة الدولة الأموية؟</h5>
                        <p class="question-difficulty difficulty-medium">متوسط الصعوبة</p>
                        <p class="card-text text-muted mb-3">اختر الإجابة الصحيحة من الخيارات التالية:</p>
                        
                        <ul class="options-list">
                            <li class="correct">أ) دمشق</li>
                            <li>ب) بغداد</li>
                            <li>ج) القاهرة</li>
                            <li>د) قرطبة</li>
                        </ul>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">الدرس: الدولة الأموية</small>
                            <button class="btn btn-outline-primary btn-sm">عرض التفاصيل</button>
                        </div>
                    </div>
                </div>
                
                <!-- Question 2 -->
                <div class="card question-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>سؤال #2</span>
                        <span class="question-type type-tf">صح أو خطأ</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">أسس عبد الرحمن الداخل الدولة الأموية في الأندلس.</h5>
                        <p class="question-difficulty difficulty-easy">سهل</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="badge bg-success">الإجابة: صح</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">عرض التفاصيل</button>
                        </div>
                    </div>
                </div>
                
                <!-- Question 3 -->
                <div class="card question-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>سؤال #3</span>
                        <span class="question-type type-essay">مقالي</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ناقش أسباب سقوط الدولة العباسية.</h5>
                        <p class="question-difficulty difficulty-hard">صعب</p>
                        <p class="card-text text-muted">اكتب إجابة مفصلة لا تقل عن 100 كلمة.</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">الدرس: الدولة العباسية</small>
                            <button class="btn btn-outline-primary btn-sm">عرض التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="mcq" role="tabpanel">
                <!-- MCQ Question -->
                <div class="card question-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>سؤال #4</span>
                        <span class="question-type type-mcq">اختيار من متعدد</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">من هو الخليفة العباسي الذي أسس مدينة بغداد؟</h5>
                        <p class="question-difficulty difficulty-medium">متوسط الصعوبة</p>
                        
                        <ul class="options-list">
                            <li>أ) أبو جعفر المنصور</li>
                            <li class="correct">ب) أبو العباس السفاح</li>
                            <li>ج) هارون الرشيد</li>
                            <li>د) المأمون</li>
                        </ul>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">الدرس: الدولة العباسية</small>
                            <button class="btn btn-outline-primary btn-sm">عرض التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="tf" role="tabpanel">
                <!-- True/False Question -->
                <div class="card question-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>سؤال #5</span>
                        <span class="question-type type-tf">صح أو خطأ</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">معركة بلاط الشهداء كانت بين المسلمين والفرنجة.</h5>
                        <p class="question-difficulty difficulty-easy">سهل</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="badge bg-success">الإجابة: صح</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">عرض التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="essay" role="tabpanel">
                <!-- Essay Question -->
                <div class="card question-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>سؤال #6</span>
                        <span class="question-type type-essay">مقالي</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">قارن بين نظام الحكم في الدولة الأموية والدولة العباسية.</h5>
                        <p class="question-difficulty difficulty-hard">صعب</p>
                        <p class="card-text text-muted">اكتب إجابة مفصلة تشمل النقاط التالية: نظام الخلافة، العلاقة مع الولايات، نظام الوزارة.</p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted">الدرس: مقارنة بين الدولتين</small>
                            <button class="btn btn-outline-primary btn-sm">عرض التفاصيل</button>
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