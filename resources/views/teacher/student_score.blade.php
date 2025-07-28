<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتائج الاختبارات - منصة ذاكر التاريخ</title>
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
        
        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
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
        
        .badge-success {
            background-color: var(--success-color);
        }
        
        .badge-warning {
            background-color: var(--warning-color);
        }
        
        .badge-danger {
            background-color: var(--accent-color);
        }
        
        .progress {
            height: 20px;
            border-radius: 10px;
        }
        
        .progress-bar {
            border-radius: 10px;
        }
        
        .search-box {
            position: relative;
            margin-bottom: 20px;
        }
        
        .search-box i {
            position: absolute;
            right: 15px;
            top: 12px;
            color: var(--secondary-color);
        }
        
        .student-select {
            width: 300px;
        }
        
        .exam-score-card {
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s;
        }
        
        .exam-score-card:hover {
            transform: translateX(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .exam-details-btn {
            cursor: pointer;
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
                        <a class="nav-link" href="#"><i class="fas fa-tachometer-alt me-1"></i> لوحة التحكم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users me-1"></i> الطلاب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-book me-1"></i> المحاضرات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-question-circle me-1"></i> الاختبارات</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="dashboard-header text-center">
            <h1 class="mb-3">نتائج اختبارات الطلاب</h1>
            <p class="mb-0">عرض جميع نتائج الاختبارات لكل طالب</p>
        </div>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-graduation-cap"></i>
                        <h5 class="card-title">متوسط النتائج</h5>
                        <h2 class="mb-3">78%</h2>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 78%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-check-circle"></i>
                        <h5 class="card-title">طلاب ناجحون</h5>
                        <h2 class="mb-3">85</h2>
                        <p class="text-muted">65% من الطلاب</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-exclamation-circle"></i>
                        <h5 class="card-title">طلاب تحت المتوسط</h5>
                        <h2 class="mb-3">32</h2>
                        <p class="text-muted">25% من الطلاب</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-times-circle"></i>
                        <h5 class="card-title">طلاب راسبون</h5>
                        <h2 class="mb-3">13</h2>
                        <p class="text-muted">10% من الطلاب</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">اختيار الطالب</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select student-select" id="studentSelect">
                            <option value="" selected disabled>اختر طالباً لعرض نتائجه</option>
                            <option value="1">أحمد محمد</option>
                            <option value="2">سارة علي</option>
                            <option value="3">محمد حسن</option>
                            <option value="4">نورا خالد</option>
                            <option value="5">خالد أحمد</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-success" id="exportStudentResultsBtn">
                            <i class="fas fa-file-excel me-1"></i> تصدير نتائج الطالب
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="studentResultsCard" style="display: none;">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0" id="studentNameHeader">نتائج اختبارات أحمد محمد</h5>
                <div>
                    <span class="badge bg-primary me-2">المعدل: 82%</span>
                    <span class="badge bg-success">ناجح</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card exam-score-card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">اختبار التاريخ الإسلامي</h6>
                                    <span class="badge bg-primary">اختيار من متعدد</span>
                                </div>
                                <p class="text-muted">المحاضرة: مقدمة في التاريخ الإسلامي</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">النتيجة: </span>
                                        <span>36/40 (90%)</span>
                                    </div>
                                    <span class="badge bg-success">ناجح</span>
                                </div>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-muted">تاريخ الاختبار: 15/04/2023</small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary w-100 mt-2 exam-details-btn">
                                    <i class="fas fa-info-circle me-1"></i> عرض التفاصيل
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card exam-score-card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">اختبار الخلافة الراشدة</h6>
                                    <span class="badge bg-warning">مقالي</span>
                                </div>
                                <p class="text-muted">المحاضرة: الخلافة الراشدة</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">النتيجة: </span>
                                        <span>18/25 (72%)</span>
                                    </div>
                                    <span class="badge bg-success">ناجح</span>
                                </div>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-success" style="width: 72%"></div>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-muted">تاريخ الاختبار: 22/04/2023</small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary w-100 mt-2 exam-details-btn">
                                    <i class="fas fa-info-circle me-1"></i> عرض التفاصيل
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card exam-score-card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">اختبار الدولة الأموية</h6>
                                    <span class="badge bg-info">صح وخطأ</span>
                                </div>
                                <p class="text-muted">المحاضرة: الدولة الأموية</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">النتيجة: </span>
                                        <span>21/30 (70%)</span>
                                    </div>
                                    <span class="badge bg-success">ناجح</span>
                                </div>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-success" style="width: 70%"></div>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-muted">تاريخ الاختبار: 05/05/2023</small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary w-100 mt-2 exam-details-btn">
                                    <i class="fas fa-info-circle me-1"></i> عرض التفاصيل
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card exam-score-card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">اختبار الدولة العباسية</h6>
                                    <span class="badge bg-primary">اختيار من متعدد</span>
                                </div>
                                <p class="text-muted">المحاضرة: الدولة العباسية</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">النتيجة: </span>
                                        <span>15/35 (43%)</span>
                                    </div>
                                    <span class="badge bg-danger">راسب</span>
                                </div>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-danger" style="width: 43%"></div>
                                </div>
                                <div class="text-end mt-2">
                                    <small class="text-muted">تاريخ الاختبار: 18/05/2023</small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary w-100 mt-2 exam-details-btn">
                                    <i class="fas fa-info-circle me-1"></i> عرض التفاصيل
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">إحصائيات الطالب</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <canvas id="studentProgressChart" height="250"></canvas>
                            </div>
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>المؤشر</th>
                                                <th>القيمة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>عدد الاختبارات المكتملة</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>عدد الاختبارات الناجحة</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>عدد الاختبارات الراسبة</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>أعلى درجة</td>
                                                <td>90% (اختبار التاريخ الإسلامي)</td>
                                            </tr>
                                            <tr>
                                                <td>أدنى درجة</td>
                                                <td>43% (اختبار الدولة العباسية)</td>
                                            </tr>
                                            <tr>
                                                <td>المعدل العام</td>
                                                <td>82%</td>
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

    <!-- Exam Details Modal -->
    <div class="modal fade" id="examDetailsModal" tabindex="-1" aria-labelledby="examDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examDetailsModalLabel">تفاصيل الاختبار</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>معلومات الاختبار</h6>
                            <table class="table table-bordered">
                                <tr>
                                    <td>اسم الاختبار</td>
                                    <td id="examNameDetail">اختبار التاريخ الإسلامي</td>
                                </tr>
                                <tr>
                                    <td>نوع الاختبار</td>
                                    <td id="examTypeDetail">اختيار من متعدد</td>
                                </tr>
                                <tr>
                                    <td>المحاضرة</td>
                                    <td id="examLectureDetail">مقدمة في التاريخ الإسلامي</td>
                                </tr>
                                <tr>
                                    <td>تاريخ الاختبار</td>
                                    <td id="examDateDetail">15/04/2023</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6>نتيجة الطالب</h6>
                            <table class="table table-bordered">
                                <tr>
                                    <td>الدرجة الكلية</td>
                                    <td id="examTotalMarks">40</td>
                                </tr>
                                <tr>
                                    <td>درجة الطالب</td>
                                    <td id="examStudentMarks">36</td>
                                </tr>
                                <tr>
                                    <td>النسبة المئوية</td>
                                    <td id="examPercentage">90%</td>
                                </tr>
                                <tr>
                                    <td>حالة الاختبار</td>
                                    <td><span id="examStatus" class="badge bg-success">ناجح</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <h6 class="mb-3">تفاصيل الإجابات</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>السؤال</th>
                                    <th>الإجابة الصحيحة</th>
                                    <th>إجابة الطالب</th>
                                    <th>النقطة</th>
                                </tr>
                            </thead>
                            <tbody id="examAnswersDetails">
                                <!-- Will be filled by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-3" id="examTeacherNotesSection">
                        <label for="examTeacherNotes" class="form-label">ملاحظات المعلم:</label>
                        <textarea class="form-control" id="examTeacherNotes" rows="3"></textarea>
                        <button class="btn btn-primary mt-2">حفظ الملاحظات</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Student selection
            const studentSelect = document.getElementById('studentSelect');
            const studentResultsCard = document.getElementById('studentResultsCard');
            const studentNameHeader = document.getElementById('studentNameHeader');
            
            studentSelect.addEventListener('change', function() {
                if (this.value) {
                    // In a real app, you would fetch student data via AJAX
                    const studentName = this.options[this.selectedIndex].text;
                    studentNameHeader.textContent = `نتائج اختبارات ${studentName}`;
                    studentResultsCard.style.display = 'block';
                    
                    // Initialize chart
                    initStudentChart();
                } else {
                    studentResultsCard.style.display = 'none';
                }
            });
            
            // Export student results
            document.getElementById('exportStudentResultsBtn').addEventListener('click', function() {
                if (!studentSelect.value) {
                    alert('الرجاء اختيار طالب أولاً');
                    return;
                }
                
                // Create a worksheet with student results
                const wsData = [
                    ['اسم الاختبار', 'المحاضرة', 'الدرجة الكلية', 'درجة الطالب', 'النسبة', 'الحالة', 'تاريخ الاختبار'],
                    ['اختبار التاريخ الإسلامي', 'مقدمة في التاريخ الإسلامي', 40, 36, '90%', 'ناجح', '15/04/2023'],
                    ['اختبار الخلافة الراشدة', 'الخلافة الراشدة', 25, 18, '72%', 'ناجح', '22/04/2023'],
                    ['اختبار الدولة الأموية', 'الدولة الأموية', 30, 21, '70%', 'ناجح', '05/05/2023'],
                    ['اختبار الدولة العباسية', 'الدولة العباسية', 35, 15, '43%', 'راسب', '18/05/2023']
                ];
                
                const ws = XLSX.utils.aoa_to_sheet(wsData);
                const wb = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(wb, ws, "نتائج الطالب");
                
                const studentName = studentSelect.options[studentSelect.selectedIndex].text;
                XLSX.writeFile(wb, `نتائج_${studentName}.xlsx`);
            });
            
            // Exam details buttons
            document.querySelectorAll('.exam-details-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const card = this.closest('.exam-score-card');
                    const examName = card.querySelector('.card-title').textContent;
                    const examType = card.querySelector('.badge').textContent;
                    const examLecture = card.querySelector('.text-muted').textContent.replace('المحاضرة: ', '');
                    const examDate = card.querySelector('.text-muted:last-child').textContent.replace('تاريخ الاختبار: ', '');
                    const examScore = card.querySelector('span:not(.badge)').textContent;
                    
                    // Set modal values
                    document.getElementById('examNameDetail').textContent = examName;
                    document.getElementById('examTypeDetail').textContent = examType;
                    document.getElementById('examLectureDetail').textContent = examLecture;
                    document.getElementById('examDateDetail').textContent = examDate;
                    
                    // Extract score details
                    const scoreParts = examScore.match(/(\d+)\/(\d+)\s+\((\d+)%\)/);
                    document.getElementById('examStudentMarks').textContent = scoreParts[1];
                    document.getElementById('examTotalMarks').textContent = scoreParts[2];
                    document.getElementById('examPercentage').textContent = scoreParts[3] + '%';
                    
                    // Set status badge
                    const statusBadge = document.getElementById('examStatus');
                    const isPassing = parseInt(scoreParts[3]) >= 60;
                    statusBadge.className = isPassing ? 'badge bg-success' : 'badge bg-danger';
                    statusBadge.textContent = isPassing ? 'ناجح' : 'راسب';
                    
                    // Generate sample answers (in real app this would come from server)
                    const answersTable = document.getElementById('examAnswersDetails');
                    answersTable.innerHTML = '';
                    
                    for (let i = 1; i <= 5; i++) {
                        const isCorrect = Math.random() > 0.3;
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${i}</td>
                            <td>سؤال نموذجي ${i} حول ${examLecture}</td>
                            <td>الإجابة الصحيحة ${i}</td>
                            <td>${isCorrect ? 'الإجابة الصحيحة ' + i : 'إجابة خاطئة ' + i}</td>
                            <td>${isCorrect ? '1' : '0'}</td>
                        `;
                        answersTable.appendChild(row);
                    }
                    
                    // Show modal
                    $('#examDetailsModal').modal('show');
                });
            });
            
            // Initialize student progress chart
            function initStudentChart() {
                const ctx = document.getElementById('studentProgressChart').getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['اختبار التاريخ الإسلامي', 'اختبار الخلافة الراشدة', 'اختبار الدولة الأموية', 'اختبار الدولة العباسية'],
                        datasets: [{
                            label: 'النسبة المئوية',
                            data: [90, 72, 70, 43],
                            backgroundColor: 'rgba(52, 152, 219, 0.2)',
                            borderColor: 'rgba(52, 152, 219, 1)',
                            borderWidth: 2,
                            tension: 0.1,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                                rtl: true
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        return context.parsed.y + '%';
                                    }
                                }
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
            }
        });
    </script>
</body>
</html>