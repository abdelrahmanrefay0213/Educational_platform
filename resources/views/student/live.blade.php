<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الفصل الافتراضي - منصة ذاكر التاريخ</title>
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
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .live-classroom-container {
            display: grid;
            grid-template-columns: 3fr 1fr;
            gap: 20px;
            padding: 20px;
            max-width: 1400px;
            margin: 20px auto;
            height: calc(100vh - 100px);
        }
        
        .video-container {
            background-color: var(--dark-color);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            height: 100%;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        #live-video {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .video-controls {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .control-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: var(--light-color);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .control-btn:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }
        
        .control-btn i {
            font-size: 16px;
        }
        
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
            height: 100%;
        }
        
        .class-info {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .class-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--secondary-color);
        }
        
        .teacher-info {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        
        .teacher-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
            object-fit: cover;
        }
        
        .chat-container {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .chat-header {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--light-color);
            color: var(--secondary-color);
        }
        
        .chat-messages {
            flex-grow: 1;
            overflow-y: auto;
            margin-bottom: 15px;
            max-height: 300px;
        }
        
        .message {
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
        }
        
        .user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-left: 10px;
            object-fit: cover;
        }
        
        .message-content {
            flex-grow: 1;
        }
        
        .message-user {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 2px;
        }
        
        .message-text {
            font-size: 14px;
            background-color: var(--light-color);
            padding: 8px 12px;
            border-radius: 18px;
            display: inline-block;
            max-width: 80%;
        }
        
        .chat-input {
            display: flex;
            align-items: center;
        }
        
        #message-input {
            flex-grow: 1;
            padding: 10px 15px;
            border: 1px solid var(--light-color);
            border-radius: 20px;
            outline: none;
            font-size: 14px;
            font-family: 'Tajawal', sans-serif;
        }
        
        #send-message {
            background-color: var(--primary-color);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        #send-message:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }
        
        .participants-container {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .participants-header {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--light-color);
            color: var(--secondary-color);
        }
        
        .participants-list {
            max-height: 200px;
            overflow-y: auto;
        }
        
        .participant {
            display: flex;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid var(--light-color);
        }
        
        .participant:last-child {
            border-bottom: none;
        }
        
        .participant-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-left: 10px;
            object-fit: cover;
        }
        
        .participant-name {
            font-size: 14px;
        }
        
        .recording-indicator {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent-color);
            color: var(--light-color);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
        }
        
        .recording-indicator i {
            margin-left: 5px;
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
        
        .screen-share-btn.active {
            background-color: #2ecc71;
        }
        
        .raise-hand-btn.active {
            background-color: var(--primary-color);
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
        
        @media (max-width: 992px) {
            .live-classroom-container {
                grid-template-columns: 1fr;
                height: auto;
            }
            
            .video-container {
                height: 400px;
            }
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
                            <span class="ms-2 d-none d-sm-inline">أحمد محمد</span>
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="صورة المستخدم" class="user-avatar">
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
                        <a class="nav-link" href="#"><i class="fas fa-home me-1"></i> الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-book me-1"></i> الدروس</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-chalkboard-teacher me-1"></i> الفصول الافتراضية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-question-circle me-1"></i> الاختبارات</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="live-classroom-container">
        <div class="video-container">
            <video id="live-video" autoplay playsinline></video>
            
            <div class="recording-indicator">
                <span>يتم التسجيل</span>
                <i class="fas fa-circle"></i>
            </div>
            
            <div class="video-controls">
                <div class="right-controls">
                    <button class="control-btn raise-hand-btn" title="رفع اليد">
                        <i class="fas fa-hand-paper"></i>
                    </button>
                    <button class="control-btn screen-share-btn" title="مشاركة الشاشة">
                        <i class="fas fa-desktop"></i>
                    </button>
                </div>
                <div class="center-controls">
                    <button class="control-btn" title="كتم الصوت">
                        <i class="fas fa-microphone"></i>
                    </button>
                    <button class="control-btn" title="إيقاف الكاميرا">
                        <i class="fas fa-video"></i>
                    </button>
                </div>
                <div class="left-controls">
                    <button class="control-btn" title="مغادرة الفصل" id="leave-class">
                        <i class="fas fa-phone-slash"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="sidebar">
            <div class="class-info">
                <h2 class="class-title">التاريخ الإسلامي - المحاضرة 12: الخلافة العباسية</h2>
                <p class="class-time"><i class="far fa-clock"></i> مباشر الآن - ينتهي بعد 45 دقيقة</p>
                <div class="teacher-info">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="المعلمة" class="teacher-avatar">
                    <div>
                        <p class="teacher-name">د. سامحة حافظ</p>
                        <p class="teacher-title">قسم التاريخ الإسلامي</p>
                    </div>
                </div>
            </div>
            
            <div class="chat-container">
                <h3 class="chat-header">محادثة الفصل</h3>
                <div class="chat-messages" id="chat-messages">
                    <div class="message">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="المستخدم" class="user-avatar">
                        <div class="message-content">
                            <p class="message-user">د. سامحة حافظ</p>
                            <p class="message-text">مرحباً بكم جميعاً في محاضرتنا اليوم عن الخلافة العباسية.</p>
                        </div>
                    </div>
                    <div class="message">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="المستخدم" class="user-avatar">
                        <div class="message-content">
                            <p class="message-user">أحمد محمد</p>
                            <p class="message-text">صباح الخير دكتورة، هل يمكنك توضيح نقطة من المحاضرة السابقة؟</p>
                        </div>
                    </div>
                </div>
                <div class="chat-input">
                    <input type="text" id="message-input" placeholder="اكتب رسالتك هنا...">
                    <button id="send-message"><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
            
            <div class="participants-container">
                <h3 class="participants-header">الحضور (24)</h3>
                <div class="participants-list">
                    <div class="participant">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="المشارك" class="participant-avatar">
                        <span class="participant-name">د. سامحة حافظ (المحاضر)</span>
                    </div>
                    <div class="participant">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="المشارك" class="participant-avatar">
                        <span class="participant-name">أحمد محمد</span>
                    </div>
                    <div class="participant">
                        <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="المشارك" class="participant-avatar">
                        <span class="participant-name">سارة علي</span>
                    </div>
                    <div class="participant">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="المشارك" class="participant-avatar">
                        <span class="participant-name">أنت</span>
                    </div>
                    <div class="participant">
                        <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="المشارك" class="participant-avatar">
                        <span class="participant-name">محمد حسن</span>
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
        // Simulate live video stream (in a real app, this would connect to WebRTC or other streaming service)
        document.addEventListener('DOMContentLoaded', function() {
            // This is just a placeholder - in a real app you would connect to a live stream
            const liveVideo = document.getElementById('live-video');
            
            // For demo purposes, we'll just show a placeholder
            liveVideo.innerHTML = `
                <div style="display: flex; justify-content: center; align-items: center; height: 100%; color: white; font-size: 24px; font-family: 'Tajawal', sans-serif;">
                    <div style="text-align: center;">
                        <i class="fas fa-chalkboard-teacher" style="font-size: 48px; margin-bottom: 20px;"></i>
                        <p>بث مباشر من د. سامحة حافظ</p>
                        <p style="font-size: 16px; margin-top: 10px;">التاريخ الإسلامي - المحاضرة 12</p>
                    </div>
                </div>
            `;
            
            // Chat functionality
            const chatMessages = document.getElementById('chat-messages');
            const messageInput = document.getElementById('message-input');
            const sendMessageBtn = document.getElementById('send-message');
            
            function addMessage(user, text, isCurrentUser = false) {
                const messageDiv = document.createElement('div');
                messageDiv.className = 'message';
                
                const avatarUrl = isCurrentUser ? 
                    'https://randomuser.me/api/portraits/men/45.jpg' : 
                    `https://randomuser.me/api/portraits/${Math.random() > 0.5 ? 'men' : 'women'}/${Math.floor(Math.random() * 50)}.jpg`;
                
                messageDiv.innerHTML = `
                    <img src="${avatarUrl}" alt="المستخدم" class="user-avatar">
                    <div class="message-content">
                        <p class="message-user">${user}</p>
                        <p class="message-text">${text}</p>
                    </div>
                `;
                
                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
            
            sendMessageBtn.addEventListener('click', function() {
                const message = messageInput.value.trim();
                if (message) {
                    addMessage('أنت', message, true);
                    messageInput.value = '';
                    
                    // Simulate response after a short delay
                    setTimeout(() => {
                        const responses = [
                            "نقطة ممتازة!",
                            "هل يمكنك توضيح هذا أكثر؟",
                            "شكراً على مشاركتك!",
                            "أتفق مع هذا الرأي",
                            "هذا سؤال جيد"
                        ];
                        const randomUser = ["د. سامحة حافظ", "سارة علي", "محمد حسن", "أحمد محمد", "نورا خالد"][Math.floor(Math.random() * 5)];
                        addMessage(randomUser, responses[Math.floor(Math.random() * responses.length)]);
                    }, 1000 + Math.random() * 2000);
                }
            });
            
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessageBtn.click();
                }
            });
            
            // Raise hand button
            const raiseHandBtn = document.querySelector('.raise-hand-btn');
            raiseHandBtn.addEventListener('click', function() {
                this.classList.toggle('active');
                
                if (this.classList.contains('active')) {
                    // In a real app, this would notify the teacher
                    addMessage('النظام', 'لقد رفعت يدك', true);
                    this.innerHTML = '<i class="fas fa-hand-paper"></i>';
                } else {
                    this.innerHTML = '<i class="fas fa-hand-paper"></i>';
                }
            });
            
            // Screen share button
            const screenShareBtn = document.querySelector('.screen-share-btn');
            screenShareBtn.addEventListener('click', function() {
                // In a real app, this would initiate screen sharing
                this.classList.toggle('active');
                
                if (this.classList.contains('active')) {
                    alert('طلب مشاركة الشاشة. في التطبيق الفعلي، سيبدأ مشاركة الشاشة.');
                }
            });
            
            // Leave class button
            const leaveClassBtn = document.getElementById('leave-class');
            leaveClassBtn.addEventListener('click', function() {
                if (confirm('هل أنت متأكد أنك تريد مغادرة الفصل؟')) {
                    // In a real app, this would disconnect from the stream
                    alert('لقد غادرت الفصل. يتم التوجيه...');
                    // window.location.href = '/dashboard'; // Redirect to dashboard
                }
            });
        });
    </script>
</body>
</html>