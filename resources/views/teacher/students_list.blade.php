<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الطلاب - منصة ذاكر التاريخ</title>
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
        
        .btn-danger {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
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
        
        .subscription-status {
            cursor: pointer;
            transition: all 0.3s;
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
        
        .filter-buttons .btn {
            margin-left: 5px;
            margin-bottom: 5px;
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
                        <a class="nav-link active" href="#"><i class="fas fa-users me-1"></i> الطلاب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-book me-1"></i> المحاضرات</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-question-circle me-1"></i> الاختبارات</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        <div class="dashboard-header text-center">
            <h1 class="mb-3">إدارة الطلاب</h1>
            <p class="mb-0">عرض جميع الطلاب المسجلين وإدارتهم</p>
        </div>

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
                        <i class="fas fa-user-check"></i>
                        <h5 class="card-title">طلاب نشطين</h5>
                        <h2 class="mb-3">118</h2>
                        <p class="text-muted">83% من الطلاب</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-user-clock"></i>
                        <h5 class="card-title">اشتراكات منتهية</h5>
                        <h2 class="mb-3">15</h2>
                        <p class="text-muted">10.5% من الطلاب</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-user-slash"></i>
                        <h5 class="card-title">طلاب محظورين</h5>
                        <h2 class="mb-3">9</h2>
                        <p class="text-muted">6.3% من الطلاب</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">قائمة الطلاب</h5>
                <div>
                    <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                        <i class="fas fa-plus me-1"></i> إضافة طالب
                    </button>
                    <button class="btn btn-success" id="exportStudentsBtn">
                        <i class="fas fa-file-excel me-1"></i> تصدير البيانات
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="search-box">
                            <input type="text" class="form-control" id="studentSearch" placeholder="ابحث عن طالب...">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filter-buttons text-left">
                            <button class="btn btn-outline-primary filter-btn active" data-filter="all">الكل</button>
                            <button class="btn btn-outline-success filter-btn" data-filter="active">نشطين</button>
                            <button class="btn btn-outline-warning filter-btn" data-filter="expiring">منتهية قريباً</button>
                            <button class="btn btn-outline-danger filter-btn" data-filter="expired">منتهية</button>
                            <button class="btn btn-outline-secondary filter-btn" data-filter="blocked">محظورين</button>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table id="studentsTable" class="table table-hover" style="width:100%">
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
                            <tr data-status="active">
                                <td>1</td>
                                <td><img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-avatar"></td>
                                <td>أحمد محمد</td>
                                <td>ahmed@example.com</td>
                                <td>10/01/2023</td>
                                <td>10/07/2023</td>
                                <td>
                                    <span class="badge bg-success subscription-status" data-id="1">نشط</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-danger block-btn" title="حظر الطالب"><i class="fas fa-user-slash"></i></button>
                                </td>
                            </tr>
                            <tr data-status="expiring">
                                <td>2</td>
                                <td><img src="https://randomuser.me/api/portraits/women/44.jpg" class="user-avatar"></td>
                                <td>سارة علي</td>
                                <td>sara@example.com</td>
                                <td>15/02/2023</td>
                                <td>15/05/2023</td>
                                <td>
                                    <span class="badge bg-warning subscription-status" data-id="2">منتهي قريباً</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-success" title="تجديد الاشتراك"><i class="fas fa-sync-alt"></i></button>
                                </td>
                            </tr>
                            <tr data-status="expired">
                                <td>3</td>
                                <td><img src="https://randomuser.me/api/portraits/men/22.jpg" class="user-avatar"></td>
                                <td>محمد حسن</td>
                                <td>mohamed@example.com</td>
                                <td>01/03/2023</td>
                                <td>01/04/2023</td>
                                <td>
                                    <span class="badge bg-danger subscription-status" data-id="3">منتهي</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-success" title="تجديد الاشتراك"><i class="fas fa-sync-alt"></i></button>
                                </td>
                            </tr>
                            <tr data-status="blocked">
                                <td>4</td>
                                <td><img src="https://randomuser.me/api/portraits/women/33.jpg" class="user-avatar"></td>
                                <td>نورا خالد</td>
                                <td>nora@example.com</td>
                                <td>10/12/2022</td>
                                <td>10/06/2023</td>
                                <td>
                                    <span class="badge bg-secondary subscription-status" data-id="4">محظور</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-success unblock-btn" title="إلغاء الحظر"><i class="fas fa-user-check"></i></button>
                                </td>
                            </tr>
                            <tr data-status="active">
                                <td>5</td>
                                <td><img src="https://randomuser.me/api/portraits/men/45.jpg" class="user-avatar"></td>
                                <td>خالد أحمد</td>
                                <td>khaled@example.com</td>
                                <td>05/03/2023</td>
                                <td>05/09/2023</td>
                                <td>
                                    <span class="badge bg-success subscription-status" data-id="5">نشط</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" title="عرض التفاصيل"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-danger block-btn" title="حظر الطالب"><i class="fas fa-user-slash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Student Modal -->
    <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStudentModalLabel">إضافة طالب جديد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="studentForm">
                        <div class="mb-3">
                            <label for="studentName" class="form-label">اسم الطالب الكامل</label>
                            <input type="text" class="form-control" id="studentName" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="studentEmail" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="studentEmail" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="studentPhone" class="form-label">رقم الهاتف</label>
                            <input type="tel" class="form-control" id="studentPhone">
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="subscriptionStart" class="form-label">تاريخ بداية الاشتراك</label>
                                <input type="date" class="form-control" id="subscriptionStart" required>
                            </div>
                            <div class="col-md-6">
                                <label for="subscriptionEnd" class="form-label">تاريخ نهاية الاشتراك</label>
                                <input type="date" class="form-control" id="subscriptionEnd" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="studentPassword" class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control" id="studentPassword" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary" id="saveStudentBtn">حفظ الطالب</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Block Student Modal -->
    <div class="modal fade" id="blockStudentModal" tabindex="-1" aria-labelledby="blockStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blockStudentModalLabel">حظر الطالب</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="blockStudentText">هل أنت متأكد أنك تريد حظر هذا الطالب؟</p>
                    <div class="mb-3">
                        <label for="blockReason" class="form-label">سبب الحظر (اختياري)</label>
                        <textarea class="form-control" id="blockReason" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-danger" id="confirmBlockBtn">تأكيد الحظر</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Renew Subscription Modal -->
    <div class="modal fade" id="renewSubscriptionModal" tabindex="-1" aria-labelledby="renewSubscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="renewSubscriptionModalLabel">تجديد اشتراك الطالب</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="renewSubscriptionText">حدد فترة تجديد الاشتراك:</p>
                    <div class="mb-3">
                        <label for="subscriptionPeriod" class="form-label">فترة الاشتراك</label>
                        <select class="form-select" id="subscriptionPeriod">
                            <option value="1">شهر واحد</option>
                            <option value="3">3 أشهر</option>
                            <option value="6">6 أشهر</option>
                            <option value="12">سنة واحدة</option>
                            <option value="custom">مخصص</option>
                        </select>
                    </div>
                    <div class="row" id="customDateFields" style="display: none;">
                        <div class="col-md-6">
                            <label for="customStartDate" class="form-label">تاريخ البدء</label>
                            <input type="date" class="form-control" id="customStartDate">
                        </div>
                        <div class="col-md-6">
                            <label for="customEndDate" class="form-label">تاريخ الانتهاء</label>
                            <input type="date" class="form-control" id="customEndDate">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary" id="confirmRenewBtn">تجديد الاشتراك</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize DataTable
            const studentsTable = $('#studentsTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/ar.json'
                },
                dom: '<"top"f>rt<"bottom"lip><"clear">',
                responsive: true
            });
            
            // Search functionality
            $('#studentSearch').on('keyup', function() {
                studentsTable.search(this.value).draw();
            });
            
            // Filter functionality
            $('.filter-btn').on('click', function() {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                
                const filter = $(this).data('filter');
                if (filter === 'all') {
                    studentsTable.columns().search('').draw();
                } else {
                    studentsTable.columns(6).search(filter).draw();
                }
            });
            
            // Export to Excel
            $('#exportStudentsBtn').on('click', function() {
                const table = document.getElementById('studentsTable');
                const wb = XLSX.utils.table_to_book(table);
                XLSX.writeFile(wb, 'قائمة_الطلاب.xlsx');
            });
            
            // Block student buttons
            let currentStudentId = null;
            
            $('.block-btn').on('click', function() {
                const row = $(this).closest('tr');
                const studentName = row.find('td:eq(2)').text();
                currentStudentId = row.find('.subscription-status').data('id');
                
                $('#blockStudentText').text(`هل أنت متأكد أنك تريد حظر الطالب ${studentName}؟`);
                $('#blockStudentModal').modal('show');
            });
            
            // Unblock student buttons
            $('.unblock-btn').on('click', function() {
                const row = $(this).closest('tr');
                const studentName = row.find('td:eq(2)').text();
                currentStudentId = row.find('.subscription-status').data('id');
                
                if (confirm(`هل تريد إلغاء حظر الطالب ${studentName}؟`)) {
                    // In a real app, you would make an AJAX call here
                    row.find('.subscription-status')
                        .removeClass('bg-secondary')
                        .addClass('bg-success')
                        .text('نشط');
                    
                    row.attr('data-status', 'active');
                    alert(`تم إلغاء حظر الطالب ${studentName}`);
                }
            });
            
            // Confirm block
            $('#confirmBlockBtn').on('click', function() {
                const reason = $('#blockReason').val();
                
                // In a real app, you would make an AJAX call here
                $(`span.subscription-status[data-id="${currentStudentId}"]`)
                    .removeClass('bg-success bg-warning bg-danger')
                    .addClass('bg-secondary')
                    .text('محظور');
                
                $(`tr[data-status][data-id="${currentStudentId}"]`).attr('data-status', 'blocked');
                
                $('#blockReason').val('');
                $('#blockStudentModal').modal('hide');
                alert('تم حظر الطالب بنجاح');
            });
            
            // Renew subscription buttons
            $('.btn-success[title="تجديد الاشتراك"]').on('click', function() {
                const row = $(this).closest('tr');
                const studentName = row.find('td:eq(2)').text();
                currentStudentId = row.find('.subscription-status').data('id');
                
                $('#renewSubscriptionText').text(`تجديد اشتراك الطالب ${studentName}:`);
                $('#renewSubscriptionModal').modal('show');
            });
            
            // Subscription period change
            $('#subscriptionPeriod').on('change', function() {
                if ($(this).val() === 'custom') {
                    $('#customDateFields').show();
                } else {
                    $('#customDateFields').hide();
                }
            });
            
            // Confirm renew subscription
            $('#confirmRenewBtn').on('click', function() {
                // In a real app, you would make an AJAX call here
                const period = $('#subscriptionPeriod').val();
                let message = '';
                
                if (period === 'custom') {
                    const startDate = $('#customStartDate').val();
                    const endDate = $('#customEndDate').val();
                    message = `تم تجديد الاشتراك من ${startDate} إلى ${endDate}`;
                } else {
                    const periods = {
                        '1': 'شهر واحد',
                        '3': '3 أشهر',
                        '6': '6 أشهر',
                        '12': 'سنة واحدة'
                    };
                    message = `تم تجديد الاشتراك لمدة ${periods[period]}`;
                }
                
                $(`span.subscription-status[data-id="${currentStudentId}"]`)
                    .removeClass('bg-warning bg-danger')
                    .addClass('bg-success')
                    .text('نشط');
                
                $(`tr[data-status][data-id="${currentStudentId}"]`).attr('data-status', 'active');
                
                $('#renewSubscriptionModal').modal('hide');
                alert(message);
            });
            
            // Save new student
            $('#saveStudentBtn').on('click', function() {
                const name = $('#studentName').val();
                const email = $('#studentEmail').val();
                const password = $('#studentPassword').val();
                const confirmPassword = $('#confirmPassword').val();
                
                if (!name || !email || !password || !confirmPassword) {
                    alert('الرجاء إدخال جميع الحقول المطلوبة');
                    return;
                }
                
                if (password !== confirmPassword) {
                    alert('كلمة المرور وتأكيدها غير متطابقين');
                    return;
                }
                
                // In a real app, you would make an AJAX call here
                alert(`تم إضافة الطالب ${name} بنجاح`);
                $('#addStudentModal').modal('hide');
                $('#studentForm')[0].reset();
                
                // Refresh the table or add the new student to it
                // This would normally be done after a successful AJAX response
            });
            
            // Toggle subscription status on click
            $('.subscription-status').on('click', function() {
                const status = $(this).hasClass('bg-success') ? 'active' : 
                              $(this).hasClass('bg-warning') ? 'expiring' : 
                              $(this).hasClass('bg-danger') ? 'expired' : 'blocked';
                const studentId = $(this).data('id');
                
                // In a real app, this would open a modal to update subscription
                console.log(`Update subscription for student ${studentId}, current status: ${status}`);
            });
        });
    </script>
</body>
</html>