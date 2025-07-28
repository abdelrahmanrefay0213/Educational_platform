<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم المعلم - منصة ذاكر التاريخ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --success-color: #2ecc71;
            --warning-color: #f39c12;
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
        
        .stat-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 1.5rem;
            background-color: white;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .stat-card .card-body {
            padding: 1.5rem;
        }
        
        .stat-card i {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
        }
        
        .nav-pills .nav-link {
            color: var(--secondary-color);
        }
        
        .tab-content {
            background-color: white;
            border-radius: 0 0 10px 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
            left: 0;
            bottom: -10px;
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-danger {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }
        
        .badge-primary {
            background-color: var(--primary-color);
        }
        
        .badge-success {
            background-color: var(--success-color);
        }
        
        .badge-warning {
            background-color: var(--warning-color);
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .table th {
            background-color: var(--light-color);
            color: var(--secondary-color);
        }
        
        .modal-header {
            background-color: var(--primary-color);
            color: white;
        }
        
        .lecture-status-badge {
            cursor: pointer;
        }
        
        .subscription-status-badge {
            cursor: pointer;
        }
        
        #examResultsTable_wrapper .row:first-child {
            padding: 10px;
        }
        
        .file-upload-box {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .file-upload-box:hover {
            border-color: var(--primary-color);
            background-color: rgba(52, 152, 219, 0.05);
        }
        
        .file-upload-box i {
            font-size: 48px;
            color: var(--primary-color);
            margin-bottom: 10px;
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
                            <span class="ms-2 d-none d-sm-inline">د. سامحة حافظ</span>
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="صورة المستخدم" class="user-avatar">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>الملف الشخصي</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>الإعدادات</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>تسجيل الخروج</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Brand -->
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="#">
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
                        <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt me-1"></i> لوحة التحكم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users me-1"></i> الطلاب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-book me-1"></i> المحاضرات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-question-circle me-1"></i> الاختبارات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-bar me-1"></i> التقارير</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="dashboard-header text-center">
            <h1 class="mb-3">لوحة تحكم المعلم</h1>
            <p class="mb-0">إدارة المحاضرات، الطلاب، الاختبارات، والإحصائيات</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendNotificationModal">
            <i class="fas fa-bell me-1"></i> إرسال إشعار
        </button>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-users"></i>
                        <h5 class="card-title">الطلاب المسجلين</h5>
                        <h2 class="mb-3">142</h2>
                        <p class="text-muted">+12 هذا الشهر</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-book-open"></i>
                        <h5 class="card-title">المحاضرات</h5>
                        <h2 class="mb-3">28</h2>
                        <p class="text-muted">5 محاضرات جديدة</p>
                    </div>
                </div>
            </div>


            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-question-circle"></i>
                        <h5 class="card-title">الاختبارات</h5>
                        <h2 class="mb-3">15</h2>
                        <p class="text-muted">3 اختبارات تحت التصحيح</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-money-bill-wave"></i>
                        <h5 class="card-title">الإيرادات</h5>
                        <h2 class="mb-3">8,750</h2>
                        <p class="text-muted">ريال سعودي</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-lectures-tab" data-bs-toggle="pill" data-bs-target="#pills-lectures" type="button" role="tab">إدارة المحاضرات</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-students-tab" data-bs-toggle="pill" data-bs-target="#pills-students" type="button" role="tab">إدارة الطلاب</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-exams-tab" data-bs-toggle="pill" data-bs-target="#pills-exams" type="button" role="tab">إدارة الاختبارات</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-reports-tab" data-bs-toggle="pill" data-bs-target="#pills-reports" type="button" role="tab">التقارير والإحصائيات</button>
                    </li>
                </ul>
                
                <div class="tab-content" id="pills-tabContent">
                    <!-- Lectures Management Tab -->
                    <div class="tab-pane fade show active" id="pills-lectures" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="section-title">إدارة المحاضرات</h3>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLectureModal">
                                <i class="fas fa-plus me-1"></i> إضافة محاضرة جديدة
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>كود المحاضرة</th>
                                        <th>عنوان المحاضرة</th>
                                        <th>تاريخ النشر</th>
                                        <th>الحالة</th>
                                        <th>المرفقات</th>
                                        <th>عدد المشاهدات</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>HIST101</td>
                                        <td>مقدمة في التاريخ الإسلامي</td>
                                        <td>15/03/2023</td>
                                        <td>
                                            <span class="badge bg-success lecture-status-badge" data-id="1">مفتوحة</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">3 PDF</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">245</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="تعديل"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-success" title="إضافة ملف"><i class="fas fa-file-pdf"></i></button>
                                            <button class="btn btn-sm btn-warning" title="ضبط المشاهدات"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>HIST102</td>
                                        <td>الخلافة الراشدة</td>
                                        <td>22/03/2023</td>
                                        <td>
                                            <span class="badge bg-success lecture-status-badge" data-id="2">مفتوحة</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">2 PDF</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">198</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="تعديل"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-success" title="إضافة ملف"><i class="fas fa-file-pdf"></i></button>
                                            <button class="btn btn-sm btn-warning" title="ضبط المشاهدات"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>HIST103</td>
                                        <td>الدولة الأموية</td>
                                        <td>05/04/2023</td>
                                        <td>
                                            <span class="badge bg-danger lecture-status-badge" data-id="3">مغلقة</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">1 PDF</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">156</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="تعديل"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-success" title="إضافة ملف"><i class="fas fa-file-pdf"></i></button>
                                            <button class="btn btn-sm btn-warning" title="ضبط المشاهدات"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Students Management Tab -->
                    <div class="tab-pane fade" id="pills-students" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="section-title">إدارة الطلاب</h3>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendNotificationModal">
                                <i class="fas fa-bell me-1"></i> إرسال إشعار
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الصورة</th>
                                        <th>اسم الطالب</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>تاريخ التسجيل</th>
                                        <th>تاريخ انتهاء الاشتراك</th>
                                        <th>حالة الاشتراك</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-avatar"></td>
                                        <td>أحمد محمد</td>
                                        <td>ahmed@example.com</td>
                                        <td>10/01/2023</td>
                                        <td>10/07/2023</td>
                                        <td>
                                            <span class="badge bg-success subscription-status-badge" data-id="1">نشط</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-danger" title="إيقاف الاشتراك"><i class="fas fa-user-slash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="https://randomuser.me/api/portraits/women/44.jpg" class="user-avatar"></td>
                                        <td>سارة علي</td>
                                        <td>sara@example.com</td>
                                        <td>15/02/2023</td>
                                        <td>15/05/2023</td>
                                        <td>
                                            <span class="badge bg-warning subscription-status-badge" data-id="2">منتهي قريباً</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-danger" title="إيقاف الاشتراك"><i class="fas fa-user-slash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="https://randomuser.me/api/portraits/men/22.jpg" class="user-avatar"></td>
                                        <td>محمد حسن</td>
                                        <td>mohamed@example.com</td>
                                        <td>01/03/2023</td>
                                        <td>01/06/2023</td>
                                        <td>
                                            <span class="badge bg-danger subscription-status-badge" data-id="3">منتهي</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-success" title="تجديد الاشتراك"><i class="fas fa-sync-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Exams Management Tab -->
                    <div class="tab-pane fade" id="pills-exams" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="section-title">إدارة الاختبارات</h3>
                            <div>
                                <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addExamModal">
                                    <i class="fas fa-plus me-1"></i> إضافة اختبار
                                </button>
                                <button class="btn btn-success" id="exportResultsBtn">
                                    <i class="fas fa-file-excel me-1"></i> تصدير النتائج
                                </button>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الاختبار</th>
                                        <th>نوع الاختبار</th>
                                        <th>المحاضرة المرتبطة</th>
                                        <th>عدد الأسئلة</th>
                                        <th>الدرجة الكلية</th>
                                        <th>الحالة</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>اختبار التاريخ الإسلامي</td>
                                        <td><span class="badge bg-primary">اختيار من متعدد</span></td>
                                        <td>مقدمة في التاريخ الإسلامي</td>
                                        <td>20</td>
                                        <td>40</td>
                                        <td><span class="badge bg-success">نشط</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="تعديل"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-info" title="عرض النتائج"><i class="fas fa-chart-bar"></i></button>
                                            <button class="btn btn-sm btn-danger" title="حذف"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>اختبار الخلافة الراشدة</td>
                                        <td><span class="badge bg-warning">مقالي</span></td>
                                        <td>الخلافة الراشدة</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td><span class="badge bg-success">نشط</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="تعديل"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-info" title="عرض النتائج"><i class="fas fa-chart-bar"></i></button>
                                            <button class="btn btn-sm btn-danger" title="حذف"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>اختبار الدولة الأموية</td>
                                        <td><span class="badge bg-info">صح وخطأ</span></td>
                                        <td>الدولة الأموية</td>
                                        <td>15</td>
                                        <td>30</td>
                                        <td><span class="badge bg-secondary">غير نشط</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" title="تعديل"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-info" title="عرض النتائج"><i class="fas fa-chart-bar"></i></button>
                                            <button class="btn btn-sm btn-success" title="تفعيل"><i class="fas fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Reports Tab -->
                    <div class="tab-pane fade" id="pills-reports" role="tabpanel">
                        <h3 class="section-title">تقارير النتائج</h3>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <h5 class="mb-0">إحصائيات النتائج</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="resultsChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <h5 class="mb-0">توزيع الدرجات</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="gradesChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="mb-0">نتائج جميع الاختبارات</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="examResultsTable" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>اسم الطالب</th>
                                                <th>الاختبار</th>
                                                <th>المحاضرة</th>
                                                <th>تاريخ الاختبار</th>
                                                <th>الدرجة</th>
                                                <th>النسبة</th>
                                                <th>الحالة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>أحمد محمد</td>
                                                <td>اختبار التاريخ الإسلامي</td>
                                                <td>مقدمة في التاريخ الإسلامي</td>
                                                <td>15/04/2023</td>
                                                <td>36</td>
                                                <td>90%</td>
                                                <td><span class="badge bg-success">ناجح</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>سارة علي</td>
                                                <td>اختبار التاريخ الإسلامي</td>
                                                <td>مقدمة في التاريخ الإسلامي</td>
                                                <td>16/04/2023</td>
                                                <td>28</td>
                                                <td>70%</td>
                                                <td><span class="badge bg-success">ناجح</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>محمد حسن</td>
                                                <td>اختبار الخلافة الراشدة</td>
                                                <td>الخلافة الراشدة</td>
                                                <td>22/04/2023</td>
                                                <td>18</td>
                                                <td>72%</td>
                                                <td><span class="badge bg-success">ناجح</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>نورا خالد</td>
                                                <td>اختبار الخلافة الراشدة</td>
                                                <td>الخلافة الراشدة</td>
                                                <td>23/04/2023</td>
                                                <td>12</td>
                                                <td>48%</td>
                                                <td><span class="badge bg-danger">راسب</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Lecture Modal -->
    <div class="modal fade" id="addLectureModal" tabindex="-1" aria-labelledby="addLectureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLectureModalLabel">إضافة محاضرة جديدة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="lectureForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="lectureCode" class="form-label">كود المحاضرة</label>
                                <input type="text" class="form-control" id="lectureCode" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lectureTitle" class="form-label">عنوان المحاضرة</label>
                                <input type="text" class="form-control" id="lectureTitle" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="lectureDate" class="form-label">تاريخ المحاضرة</label>
                                <input type="date" class="form-control" id="lectureDate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="maxViews" class="form-label">الحد الأقصى للمشاهدات (0 = غير محدود)</label>
                                <input type="number" class="form-control" id="maxViews" min="0" value="0">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="lectureDescription" class="form-label">وصف المحاضرة</label>
                            <textarea class="form-control" id="lectureDescription" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">ملفات المحاضرة (PDF)</label>
                            <div class="file-upload-box" id="fileUploadBox">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p>اسحب وأسقط ملفات PDF هنا أو انقر للاختيار</p>
                                <input type="file" id="lectureFiles" class="d-none" accept=".pdf" multiple>
                            </div>
                            <div id="fileList" class="mt-3"></div>
                        </div>
                        
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="lectureStatus" checked>
                            <label class="form-check-label" for="lectureStatus">المحاضرة متاحة للطلاب</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary" id="saveLectureBtn">حفظ المحاضرة</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Send Notification Modal -->
<div class="modal fade" id="sendNotificationModal" tabindex="-1" aria-labelledby="sendNotificationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendNotificationModalLabel">إرسال إشعار للطلاب</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="notificationForm">
                    <div class="mb-3">
                        <label for="notificationTitle" class="form-label">عنوان الإشعار</label>
                        <input type="text" class="form-control" id="notificationTitle" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="notificationMessage" class="form-label">نص الإشعار</label>
                        <textarea class="form-control" id="notificationMessage" rows="4" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">المستلمون</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recipients" id="allStudents" checked>
                            <label class="form-check-label" for="allStudents">
                                جميع الطلاب
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recipients" id="activeStudents">
                            <label class="form-check-label" for="activeStudents">
                                الطلاب النشطين فقط
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recipients" id="specificStudents">
                            <label class="form-check-label" for="specificStudents">
                                طلاب محددين
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="button" class="btn btn-primary" id="sendNotificationBtn">إرسال الإشعار</button>
            </div>
        </div>
    </div>
</div>
    <!-- Add Exam Modal -->
    <div class="modal fade" id="addExamModal" tabindex="-1" aria-labelledby="addExamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addExamModalLabel">إضافة اختبار جديد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="examForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="examName" class="form-label">اسم الاختبار</label>
                                <input type="text" class="form-control" id="examName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="examType" class="form-label">نوع الاختبار</label>
                                <select class="form-select" id="examType" required>
                                    <option value="" selected disabled>اختر نوع الاختبار</option>
                                    <option value="mcq">اختيار من متعدد</option>
                                    <option value="essay">مقالي</option>
                                    <option value="true_false">صح وخطأ</option>
                                    <option value="mixed">مختلط</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="relatedLecture" class="form-label">المحاضرة المرتبطة</label>
                                <select class="form-select" id="relatedLecture" required>
                                    <option value="" selected disabled>اختر المحاضرة</option>
                                    <option value="1">مقدمة في التاريخ الإسلامي</option>
                                    <option value="2">الخلافة الراشدة</option>
                                    <option value="3">الدولة الأموية</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="totalMarks" class="form-label">الدرجة الكلية</label>
                                <input type="number" class="form-control" id="totalMarks" min="1" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="passingMarks" class="form-label">درجة النجاح</label>
                                <input type="number" class="form-control" id="passingMarks" min="1" required>
                            </div>
                            <div class="col-md-6">
                                <label for="examDuration" class="form-label">مدة الاختبار (دقائق)</label>
                                <input type="number" class="form-control" id="examDuration" min="1" required>
                            </div>
                        </div>
                        
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="examStatus" checked>
                            <label class="form-check-label" for="examStatus">الاختبار نشط</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary" id="saveExamBtn">حفظ الاختبار</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Send Notification Modal -->
    <div class="modal fade" id="sendNotificationModal" tabindex="-1" aria-labelledby="sendNotificationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sendNotificationModalLabel">إرسال إشعار للطلاب</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="notificationForm">
                        <div class="mb-3">
                            <label for="notificationTitle" class="form-label">عنوان الإشعار</label>
                            <input type="text" class="form-control" id="notificationTitle" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="notificationMessage" class="form-label">نص الإشعار</label>
                            <textarea class="form-control" id="notificationMessage" rows="4" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">المستلمون</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recipients" id="allStudents" checked>
                                <label class="form-check-label" for="allStudents">
                                    جميع الطلاب
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recipients" id="activeStudents">
                                <label class="form-check-label" for="activeStudents">
                                    الطلاب النشطين فقط
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recipients" id="specificStudents">
                                <label class="form-check-label" for="specificStudents">
                                    طلاب محددين
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary" id="sendNotificationBtn">إرسال الإشعار</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Limits Modal -->
    <div class="modal fade" id="viewLimitsModal" tabindex="-1" aria-labelledby="viewLimitsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewLimitsModalLabel">ضبط حدود المشاهدة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="viewLimitsForm">
                        <div class="mb-3">
                            <label for="maxViewsSetting" class="form-label">الحد الأقصى لعدد المشاهدات</label>
                            <input type="number" class="form-control" id="maxViewsSetting" min="0" value="0">
                            <div class="form-text">ادخل 0 للسماح بعدد غير محدود من المشاهدات</div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary" id="saveViewLimitsBtn">حفظ الإعدادات</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        // Send notification
document.getElementById('sendNotificationBtn').addEventListener('click', function() {
    const title = document.getElementById('notificationTitle').value;
    const message = document.getElementById('notificationMessage').value;
    
    if (!title || !message) {
        alert('الرجاء إدخال عنوان ورسالة الإشعار');
        return;
    }
    
    // In a real app, you would send the notification via AJAX
    console.log('Sending notification...');
    alert('تم إرسال الإشعار بنجاح');
    $('#sendNotificationModal').modal('hide');
});
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize DataTable
            $('#examResultsTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ar.json'
                }
            });
            
            // Initialize charts
            const resultsCtx = document.getElementById('resultsChart').getContext('2d');
            const resultsChart = new Chart(resultsCtx, {
                type: 'bar',
                data: {
                    labels: ['مقدمة في التاريخ الإسلامي', 'الخلافة الراشدة', 'الدولة الأموية'],
                    datasets: [{
                        label: 'متوسط الدرجات',
                        data: [85, 72, 68],
                        backgroundColor: [
                            'rgba(52, 152, 219, 0.7)',
                            'rgba(52, 152, 219, 0.7)',
                            'rgba(52, 152, 219, 0.7)'
                        ],
                        borderColor: [
                            'rgba(52, 152, 219, 1)',
                            'rgba(52, 152, 219, 1)',
                            'rgba(52, 152, 219, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                            rtl: true
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
            
            const gradesCtx = document.getElementById('gradesChart').getContext('2d');
            const gradesChart = new Chart(gradesCtx, {
                type: 'pie',
                data: {
                    labels: ['90-100%', '80-89%', '70-79%', '60-69%', 'أقل من 60%'],
                    datasets: [{
                        data: [15, 25, 30, 20, 10],
                        backgroundColor: [
                            'rgba(46, 204, 113, 0.7)',
                            'rgba(52, 152, 219, 0.7)',
                            'rgba(155, 89, 182, 0.7)',
                            'rgba(241, 196, 15, 0.7)',
                            'rgba(231, 76, 60, 0.7)'
                        ],
                        borderColor: [
                            'rgba(46, 204, 113, 1)',
                            'rgba(52, 152, 219, 1)',
                            'rgba(155, 89, 182, 1)',
                            'rgba(241, 196, 15, 1)',
                            'rgba(231, 76, 60, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right',
                            rtl: true
                        }
                    }
                }
            });
            
            // File upload functionality
            const fileUploadBox = document.getElementById('fileUploadBox');
            const lectureFiles = document.getElementById('lectureFiles');
            const fileList = document.getElementById('fileList');
            
            fileUploadBox.addEventListener('click', function() {
                lectureFiles.click();
            });
            
            lectureFiles.addEventListener('change', function() {
                fileList.innerHTML = '';
                if (this.files.length > 0) {
                    const list = document.createElement('ul');
                    list.className = 'list-group';
                    
                    for (let i = 0; i < this.files.length; i++) {
                        const item = document.createElement('li');
                        item.className = 'list-group-item d-flex justify-content-between align-items-center';
                        item.innerHTML = `
                            ${this.files[i].name}
                            <button class="btn btn-sm btn-danger remove-file" data-index="${i}">
                                <i class="fas fa-times"></i>
                            </button>
                        `;
                        list.appendChild(item);
                    }
                    
                    fileList.appendChild(list);
                    
                    // Add event listeners to remove buttons
                    document.querySelectorAll('.remove-file').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const index = parseInt(this.getAttribute('data-index'));
                            const dt = new DataTransfer();
                            const files = lectureFiles.files;
                            
                            for (let i = 0; i < files.length; i++) {
                                if (i !== index) {
                                    dt.items.add(files[i]);
                                }
                            }
                            
                            lectureFiles.files = dt.files;
                            this.parentNode.remove();
                            
                            if (lectureFiles.files.length === 0) {
                                fileList.innerHTML = '';
                            }
                        });
                    });
                }
            });
            
            // Drag and drop functionality
            fileUploadBox.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.style.borderColor = var('--primary-color');
                this.style.backgroundColor = 'rgba(52, 152, 219, 0.05)';
            });
            
            fileUploadBox.addEventListener('dragleave', function() {
                this.style.borderColor = '#ddd';
                this.style.backgroundColor = 'transparent';
            });
            
            fileUploadBox.addEventListener('drop', function(e) {
                e.preventDefault();
                this.style.borderColor = '#ddd';
                this.style.backgroundColor = 'transparent';
                
                if (e.dataTransfer.files.length > 0) {
                    lectureFiles.files = e.dataTransfer.files;
                    const event = new Event('change');
                    lectureFiles.dispatchEvent(event);
                }
            });
            
            // Toggle lecture status
            document.querySelectorAll('.lecture-status-badge').forEach(badge => {
                badge.addEventListener('click', function() {
                    const isActive = this.classList.contains('bg-success');
                    this.classList.remove(isActive ? 'bg-success' : 'bg-danger');
                    this.classList.add(isActive ? 'bg-danger' : 'bg-success');
                    this.textContent = isActive ? 'مغلقة' : 'مفتوحة';
                    
                    // In a real app, you would send an AJAX request to update the status
                    const lectureId = this.getAttribute('data-id');
                    console.log(`Lecture ${lectureId} status changed to ${isActive ? 'closed' : 'open'}`);
                });
            });
            
            // Toggle subscription status
            document.querySelectorAll('.subscription-status-badge').forEach(badge => {
                badge.addEventListener('click', function() {
                    const status = this.classList.contains('bg-success') ? 'active' : 
                                  this.classList.contains('bg-warning') ? 'expiring' : 'expired';
                    const studentId = this.getAttribute('data-id');
                    
                    // In a real app, this would open a modal to update subscription
                    console.log(`Update subscription for student ${studentId}, current status: ${status}`);
                });
            });
            
            // Export results to Excel
            document.getElementById('exportResultsBtn').addEventListener('click', function() {
                const table = document.getElementById('examResultsTable');
                const wb = XLSX.utils.table_to_book(table);
                XLSX.writeFile(wb, 'نتائج_الاختبارات.xlsx');
            });
            
            // Save lecture
            document.getElementById('saveLectureBtn').addEventListener('click', function() {
                // Validate form
                if (!document.getElementById('lectureCode').value || !document.getElementById('lectureTitle').value) {
                    alert('الرجاء إدخال كود المحاضرة وعنوانها');
                    return;
                }
                
                // In a real app, you would submit the form via AJAX
                console.log('Saving lecture...');
                alert('تم حفظ المحاضرة بنجاح');
                $('#addLectureModal').modal('hide');
            });
            
            // Save exam
            document.getElementById('saveExamBtn').addEventListener('click', function() {
                // Validate form
                if (!document.getElementById('examName').value || !document.getElementById('examType').value) {
                    alert('الرجاء إدخال اسم الاختبار ونوعه');
                    return;
                }
                
                // In a real app, you would submit the form via AJAX
                console.log('Saving exam...');
                alert('تم حفظ الاختبار بنجاح');
                $('#addExamModal').modal('hide');
            });
            
            // Send notification
            document.getElementById('sendNotificationBtn').addEventListener('click', function() {
                const title = document.getElementById('notificationTitle').value;
                const message = document.getElementById('notificationMessage').value;
                
                if (!title || !message) {
                    alert('الرجاء إدخال عنوان ورسالة الإشعار');
                    return;
                }
                
                // In a real app, you would send the notification via AJAX
                console.log('Sending notification...');
                alert('تم إرسال الإشعار بنجاح');
                $('#sendNotificationModal').modal('hide');
            });
            
            // View limits button
            document.querySelectorAll('.btn-warning[title="ضبط المشاهدات"]').forEach(btn => {
                btn.addEventListener('click', function() {
                    $('#viewLimitsModal').modal('show');
                });
            });
            
            // Save view limits
            document.getElementById('saveViewLimitsBtn').addEventListener('click', function() {
                const maxViews = document.getElementById('maxViewsSetting').value;
                
                // In a real app, you would save this setting via AJAX
                console.log(`Setting max views to: ${maxViews}`);
                alert('تم حفظ إعدادات المشاهدة بنجاح');
                $('#viewLimitsModal').modal('hide');
            });
        });
    </script>
</body>
</html>