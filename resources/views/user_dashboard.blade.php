<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لوحة التحكم - منصة ذاكر التاريخ</title>
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
        
        .lesson-item {
            transition: all 0.3s;
            margin-bottom: 0.75rem;
            border-radius: 8px !important;
            border-right: 4px solid var(--primary-color);
            background-color: white;
        }
        
        .lesson-item:hover {
            background-color: var(--light-color);
            transform: translateX(-5px);
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
        
        .contact-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 1.5rem 0;
            margin-top: 3rem;
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
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--secondary-color);
            font-size: 1.5rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .badge-completed {
            background-color: #2ecc71;
        }
        
        .badge-in-progress {
            background-color: #f39c12;
        }
        
        .badge-not-started {
            background-color: #95a5a6;
        }
    </style>
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
            padding-bottom: 80px; /* Space for chat button */
        }
        
        /* ... (keep all previous styles) ... */

        /* Chat Support Styles */
        .chat-support {
            position: fixed;
            left: 20px; /* Right in RTL */
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
        
        .chat-container {
            position: absolute;
            left: 0;
            bottom: 70px;
            width: 350px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.2);
            overflow: hidden;
            display: none;
        }
        
        .chat-header {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 15px;
            font-weight: 700;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .chat-close {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        
        .chat-body {
            padding: 15px;
            height: 300px;
            overflow-y: auto;
        }
        
        .chat-message {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }
        
        .chat-message.support {
            align-items: flex-start;
        }
        
        .chat-message.user {
            align-items: flex-end;
        }
        
        .message-bubble {
            max-width: 80%;
            padding: 10px 15px;
            border-radius: 15px;
            margin-bottom: 5px;
        }
        
        .support .message-bubble {
            background-color: #f1f1f1;
            border-bottom-right-radius: 5px;
        }
        
        .user .message-bubble {
            background-color: var(--primary-color);
            color: white;
            border-bottom-left-radius: 5px;
        }
        
        .message-time {
            font-size: 12px;
            color: #7f8c8d;
        }
        
        .chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #eee;
            background-color: white;
        }
        
        .chat-input input {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 30px;
            padding: 10px 15px;
            margin-left: 10px;
        }
        
        .chat-input button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
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
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-2 d-none d-sm-inline">أحمد محمد</span>
                            {{-- <img src="https://via.placeholder.com/40" alt="صورة المستخدم" class="user-avatar"> --}}
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
                        <a class="nav-link active" href="#"><i class="fas fa-home me-1"></i> الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-book me-1"></i> الدروس</a>
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

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-check-circle"></i>
                        <h5 class="card-title">الدروس المكتملة</h5>
                        <h2 class="mb-3">5</h2>
                        <p class="text-muted">من أصل 8 دروس</p>
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 62.5%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-clock"></i>
                        <h5 class="card-title">الوقت المستثمر</h5>
                        <h2 class="mb-3">12</h2>
                        <p class="text-muted">ساعة تعلم</p>
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="stat-card card">
                    <div class="card-body text-center">
                        <i class="fas fa-trophy"></i>
                        <h5 class="card-title">الإنجازات</h5>
                        <h2 class="mb-3">3</h2>
                        <p class="text-muted">شهادات محققة</p>
                        <div class="progress-container">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-white border-bottom-0">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-book-open me-2"></i>الدروس المتاحة</h5>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item lesson-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 fw-bold">الدرس 1: مقدمة في التاريخ الإسلامي</h6>
                                    <small class="text-muted">المدة: 2 ساعة | المستوى: مبتدئ</small>
                                </div>
                                <div>
                                    <span class="badge badge-completed me-2">مكتمل</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">مراجعة</a>
                                </div>
                            </li>
                            <li class="list-group-item lesson-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 fw-bold">الدرس 2: الخلفاء الراشدون</h6>
                                    <small class="text-muted">المدة: 3 ساعات | المستوى: مبتدئ</small>
                                </div>
                                <div>
                                    <span class="badge badge-completed me-2">مكتمل</span>
                                    <a href="#" class="btn btn-outline-primary btn-sm">مراجعة</a>
                                </div>
                            </li>
                            <li class="list-group-item lesson-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 fw-bold">الدرس 3: الدولة الأموية</h6>
                                    <small class="text-muted">المدة: 4 ساعات | المستوى: متوسط</small>
                                </div>
                                <div>
                                    <span class="badge badge-in-progress me-2">قيد التقدم</span>
                                    <a href="#" class="btn btn-primary btn-sm">استكمال الدرس</a>
                                </div>
                            </li>
                            <li class="list-group-item lesson-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 fw-bold">الدرس 4: الدولة العباسية</h6>
                                    <small class="text-muted">المدة: 5 ساعات | المستوى: متوسط</small>
                                </div>
                                <div>
                                    <span class="badge badge-not-started me-2">لم يبدأ</span>
                                    <a href="#" class="btn btn-primary btn-sm">بدء التعلم</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header bg-white border-bottom-0">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-bullhorn me-2"></i>أحدث الإعلانات</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="alert alert-info">
                            <h6 class="alert-heading">ورشة عمل جديدة!</h6>
                            <p class="small mb-0">سجل الآن في ورشة العمل القادمة حول "تحليل النصوص التاريخية" يوم السبت القادم.</p>
                        </div>
                        <div class="alert alert-warning">
                            <h6 class="alert-heading">مسابقة التاريخ</h6>
                            <p class="small mb-0">آخر موعد للتسجيل في مسابقة التاريخ الشهرية هو 15 من الشهر الحالي.</p>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="contact-card">
                    <h5 class="fw-bold mb-4"><i class="fas fa-headset me-2"></i>الدعم الفني</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <div class="icon-circle bg-primary text-white me-3 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; border-radius: 50%;">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">واتساب</h6>
                                <a href="https://wa.me/201551932203" class="text-decoration-none" target="_blank">+20 155 193 2203</a>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <div class="icon-circle bg-primary text-white me-3 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; border-radius: 50%;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">البريد الإلكتروني</h6>
                                <a href="mailto:support@example.com" class="text-decoration-none">support@example.com</a>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-primary w-100 mt-2">فتح تذكرة دعم</button>
                </div> --}}
            </div>
        </div>
    </div>
    
    <!-- Floating Chat Support -->
    <div class="chat-support">
        <div class="chat-container" id="chatContainer">
            <div class="chat-header">
                <span>الدعم الفني</span>
                <button class="chat-close" id="chatClose">&times;</button>
            </div>
            <div class="chat-body" id="chatBody">
                <div class="chat-message support">
                    <div class="message-bubble">مرحباً بك في دعم منصة ذاكر التاريخ. كيف يمكنني مساعدتك اليوم؟</div>
                    <div class="message-time">١٠:٣٠ ص</div>
                </div>
                <div class="chat-message user">
                    <div class="message-bubble">أحتاج مساعدة في الوصول إلى الدرس الثالث</div>
                    <div class="message-time">١٠:٣٢ ص</div>
                </div>
                <div class="chat-message support">
                    <div class="message-bubble">بالطبع، يمكنك الضغط على زر "استكمال الدرس" بجانب الدرس الثالث في قائمة الدروس</div>
                    <div class="message-time">١٠:٣٣ ص</div>
                </div>
            </div>
            <div class="chat-input">
                <input type="text" placeholder="اكتب رسالتك هنا..." id="chatMessage">
                <button id="chatSend"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
        <button class="chat-button" id="chatButton">
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
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Chat functionality
        const chatButton = document.getElementById('chatButton');
        const chatContainer = document.getElementById('chatContainer');
        const chatClose = document.getElementById('chatClose');
        const chatBody = document.getElementById('chatBody');
        const chatMessage = document.getElementById('chatMessage');
        const chatSend = document.getElementById('chatSend');
        
        // Toggle chat visibility
        chatButton.addEventListener('click', () => {
            chatContainer.style.display = chatContainer.style.display === 'block' ? 'none' : 'block';
        });
        
        chatClose.addEventListener('click', () => {
            chatContainer.style.display = 'none';
        });
        
        // Send message function
        function sendMessage() {
            const message = chatMessage.value.trim();
            if (message) {
                // Add user message
                const userMessage = document.createElement('div');
                userMessage.className = 'chat-message user';
                userMessage.innerHTML = `
                    <div class="message-bubble">${message}</div>
                    <div class="message-time">${new Date().toLocaleTimeString('ar-EG', {hour: '2-digit', minute:'2-digit'})}</div>
                `;
                chatBody.appendChild(userMessage);
                
                // Clear input
                chatMessage.value = '';
                
                // Scroll to bottom
                chatBody.scrollTop = chatBody.scrollHeight;
                
                // Simulate response after 1 second
                setTimeout(() => {
                    const supportMessage = document.createElement('div');
                    supportMessage.className = 'chat-message support';
                    supportMessage.innerHTML = `
                        <div class="message-bubble">تم استلام رسالتك، سيتم الرد عليك في أقرب وقت من قبل فريق الدعم.</div>
                        <div class="message-time">${new Date().toLocaleTimeString('ar-EG', {hour: '2-digit', minute:'2-digit'})}</div>
                    `;
                    chatBody.appendChild(supportMessage);
                    chatBody.scrollTop = chatBody.scrollHeight;
                }, 1000);
            }
        }
        
        // Send message on button click or Enter key
        chatSend.addEventListener('click', sendMessage);
        chatMessage.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
</body>
</html>