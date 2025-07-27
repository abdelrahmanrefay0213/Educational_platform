<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سجلات الاختبارات - منصة ذاكر التاريخ</title>
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
        
        .score-card {
            transition: all 0.3s;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 1.5rem;
        }
        
        .score-card-header {
            padding: 1rem 1.5rem;
            font-weight: 600;
            background-color: white;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .score-card-body {
            padding: 1.5rem;
            background-color: white;
        }
        
        .score-progress {
            height: 10px;
            border-radius: 5px;
        }
        
        .progress-excellent {
            background-color: rgba(46, 204, 113, 0.2);
        }
        
        .progress-good {
            background-color: rgba(52, 152, 219, 0.2);
        }
        
        .progress-average {
            background-color: rgba(241, 196, 15, 0.2);
        }
        
        .progress-poor {
            background-color: rgba(231, 76, 60, 0.2);
        }
        
        .progress-bar-excellent {
            background-color: #2ecc71;
        }
        
        .progress-bar-good {
            background-color: #3498db;
        }
        
        .progress-bar-average {
            background-color: #f1c40f;
        }
        
        .progress-bar-poor {
            background-color: #e74c3c;
        }
        
        .badge-excellent {
            background-color: #2ecc71;
            color: white;
        }
        
        .badge-good {
            background-color: #3498db;
            color: white;
        }
        
        .badge-average {
            background-color: #f1c40f;
            color: #333;
        }
        
        .badge-poor {
            background-color: #e74c3c;
            color: white;
        }
        
        .stats-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 1.5rem;
            height: 100%;
            border: none;
        }
        
        .stats-card .card-body {
            padding: 1.5rem;
        }
        
        .stats-card i {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .score-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .score-table thead th {
            background-color: var(--light-color);
            padding: 1rem;
            font-weight: 600;
            text-align: right;
        }
        
        .score-table tbody tr {
            background-color: white;
            transition: all 0.3s;
        }
        
        .score-table tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .score-table tbody td {
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }
        
        .score-table tbody tr:last-child td {
            border-bottom: none;
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
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
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
        
        .tabs-nav {
            border-bottom: 2px solid #eee;
            margin-bottom: 2rem;
        }
        
        .tabs-nav .nav-link {
            color: #555;
            font-weight: 500;
            border: none;
            padding: 0.75rem 1.5rem;
            margin-left: 0.5rem;
            border-radius: 8px 8px 0 0;
        }
        
        .tabs-nav .nav-link.active {
            color: var(--primary-color);
            font-weight: 600;
            background-color: rgba(52, 152, 219, 0.1);
            border-bottom: 2px solid var(--primary-color);
        }
        
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <a class="nav-link" href="#"><i class="fas fa-question-circle me-1"></i> الاختبارات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-chart-bar me-1"></i> النتائج</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2 class="section-title"><i class="fas fa-chart-line me-2"></i>سجلات الاختبارات والنتائج</h2>
            </div>
            <div class="col-md-4 text-md-start">
                <button class="btn btn-outline-primary me-2"><i class="fas fa-download me-1"></i> تصدير النتائج</button>
                <button class="btn btn-primary"><i class="fas fa-print me-1"></i> طباعة</button>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stats-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-check-circle"></i>
                        <h3 class="mb-2">85%</h3>
                        <p class="text-muted mb-0">متوسط النجاح</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-trophy"></i>
                        <h3 class="mb-2">12</h3>
                        <p class="text-muted mb-0">اختبار مكتمل</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-medal"></i>
                        <h3 class="mb-2">3</h3>
                        <p class="text-muted mb-0">أعلى تقدير</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-pie"></i>
                        <h3 class="mb-2">75%</h3>
                        <p class="text-muted mb-0">فوق المتوسط</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8">
                <ul class="nav tabs-nav" id="resultsTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">الكل</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="quizzes-tab" data-bs-toggle="tab" data-bs-target="#quizzes" type="button" role="tab">اختبارات قصيرة</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="exams-tab" data-bs-toggle="tab" data-bs-target="#exams" type="button" role="tab">اختبارات نهائية</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab">اختبارات شهرية</button>
                    </li>
                </ul>
                
                <div class="tab-content" id="resultsTabsContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                        <div class="card score-card">
                            <div class="score-card-header d-flex justify-content-between align-items-center">
                                <span>جميع الاختبارات</span>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                                        ترتيب حسب: الأحدث
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="sortDropdown">
                                        <li><a class="dropdown-item" href="#">الأحدث</a></li>
                                        <li><a class="dropdown-item" href="#">الأقدم</a></li>
                                        <li><a class="dropdown-item" href="#">الأعلى تقييماً</a></li>
                                        <li><a class="dropdown-item" href="#">الأقل تقييماً</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="score-card-body">
                                <div class="table-responsive">
                                    <table class="score-table">
                                        <thead>
                                            <tr>
                                                <th>الاختبار</th>
                                                <th>التاريخ</th>
                                                <th>الدرجة</th>
                                                <th>الحالة</th>
                                                <th>التفاصيل</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>اختبار الدولة الأموية</strong>
                                                    <div class="text-muted small">الدرس الثالث</div>
                                                </td>
                                                <td>15/03/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress score-progress progress-excellent flex-grow-1 me-2">
                                                            <div class="progress-bar progress-bar-excellent" role="progressbar" style="width: 92%"></div>
                                                        </div>
                                                        <span>92%</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-excellent">ممتاز</span></td>
                                                <td><a href="#" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>الاختبار النصفي الأول</strong>
                                                    <div class="text-muted small">الوحدات 1-3</div>
                                                </td>
                                                <td>10/03/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress score-progress progress-good flex-grow-1 me-2">
                                                            <div class="progress-bar progress-bar-good" role="progressbar" style="width: 85%"></div>
                                                        </div>
                                                        <span>85%</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-good">جيد جداً</span></td>
                                                <td><a href="#" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>اختبار الفتوحات الإسلامية</strong>
                                                    <div class="text-muted small">الدرس الثاني</div>
                                                </td>
                                                <td>05/03/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress score-progress progress-average flex-grow-1 me-2">
                                                            <div class="progress-bar progress-bar-average" role="progressbar" style="width: 72%"></div>
                                                        </div>
                                                        <span>72%</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-average">متوسط</span></td>
                                                <td><a href="#" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>اختبار الحضارة المصرية</strong>
                                                    <div class="text-muted small">الدرس الأول</div>
                                                </td>
                                                <td>01/03/2023</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress score-progress progress-poor flex-grow-1 me-2">
                                                            <div class="progress-bar progress-bar-poor" role="progressbar" style="width: 65%"></div>
                                                        </div>
                                                        <span>65%</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-poor">مقبول</span></td>
                                                <td><a href="#" class="btn btn-sm btn-outline-primary">عرض</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="quizzes" role="tabpanel">
                        <!-- Quizzes content would go here -->
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            لا توجد اختبارات قصيرة متاحة حاليًا.
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="exams" role="tabpanel">
                        <!-- Exams content would go here -->
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            لا توجد اختبارات نهائية متاحة حاليًا.
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="monthly" role="tabpanel">
                        <!-- Monthly tests content would go here -->
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            لا توجد اختبارات شهرية متاحة حاليًا.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card score-card">
                    <div class="score-card-header">
                        <span>تقدم الأداء</span>
                    </div>
                    <div class="score-card-body">
                        <div class="chart-container">
                            <canvas id="performanceChart"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="card score-card">
                    <div class="score-card-header">
                        <span>أفضل النتائج</span>
                    </div>
                    <div class="score-card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-trophy"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 me-3">
                                <h6 class="mb-0">اختبار الدولة الأموية</h6>
                                <small class="text-muted">أعلى درجة: 92%</small>
                            </div>
                            <span class="badge bg-primary">الأول</span>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-medal"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 me-3">
                                <h6 class="mb-0">الاختبار النصفي الأول</h6>
                                <small class="text-muted">الدرجة: 85%</small>
                            </div>
                            <span class="badge bg-secondary">الثاني</span>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fas fa-award"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 me-3">
                                <h6 class="mb-0">اختبار الفتوحات الإسلامية</h6>
                                <small class="text-muted">الدرجة: 72%</small>
                            </div>
                            <span class="badge bg-warning">الثالث</span>
                        </div>
                    </div>
                </div>
                
                <div class="card score-card">
                    <div class="score-card-header">
                        <span>المقارنة مع المتوسط</span>
                    </div>
                    <div class="score-card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>أدائك</span>
                            <strong>85%</strong>
                        </div>
                        <div class="progress score-progress progress-good mb-3">
                            <div class="progress-bar progress-bar-good" role="progressbar" style="width: 85%"></div>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-2">
                            <span>متوسط الطلاب</span>
                            <strong>76%</strong>
                        </div>
                        <div class="progress score-progress progress-average">
                            <div class="progress-bar progress-bar-average" role="progressbar" style="width: 76%"></div>
                        </div>
                    </div>
                </div>
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
        // Performance Chart
        const ctx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
                datasets: [{
                    label: 'أدائك',
                    data: [65, 72, 80, 85, 82, 92],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                }
            }
        });
        
        // Tab functionality
        const triggerTabList = [].slice.call(document.querySelectorAll('#resultsTabs button'));
        triggerTabList.forEach(function (triggerEl) {
            const tabTrigger = new bootstrap.Tab(triggerEl);
            
            triggerEl.addEventListener('click', function (event) {
                event.preventDefault();
                tabTrigger.show();
            });
        });
    </script>
</body>
</html>