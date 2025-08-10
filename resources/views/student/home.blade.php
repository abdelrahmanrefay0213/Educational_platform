<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>منصة ذاكر التاريخ - تعليم التاريخ بطريقة تفاعلية</title>
    <meta name="description" content="منصة تعليمية متخصصة في تدريس التاريخ للمراحل الثانوية تحت إشراف د/سماح حافظ">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Tajawal -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap RTL -->
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
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--secondary-color);
            font-size: 1.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.25rem;
            color: var(--dark-color);
        }
        
        .nav-link:hover, .nav-link.active {
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
        }
        
        .hero-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 15px;
            padding: 3rem;
            margin: 2rem 0;
        }
        
        .hero-img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            border: 5px solid white;
        }
        
        .hero-img:hover {
            transform: scale(1.03);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
            text-align: right;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .card-title {
            color: var(--secondary-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 1.25rem;
        }
        
        .card-link {
            display: block;
            padding: 0.5rem 0;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .card-link:hover {
            color: var(--accent-color);
            padding-right: 10px;
        }
        
        footer {
            background-color: var(--secondary-color);
        }
        
        footer h5 {
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        footer h5::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-left: 10px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
            color: white !important;
        }
        
        .newsletter-input {
            border-radius: 30px !important;
            padding: 10px 20px;
            border: none;
        }
        
        .newsletter-btn {
            border-radius: 30px !important;
            padding: 10px 20px;
            margin-right: -40px;
            z-index: 2;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 3rem;
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
            margin: 0 auto;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 2rem 1rem;
                text-align: center;
            }
            
            .hero-img {
                width: 70% !important;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container">
                <div class="d-flex flex-row-reverse justify-content-between align-items-center w-100">
                    <!-- Buttons -->
                    <div class="d-flex align-items-center">
                        <a href="{{ route('login') }}" class="btn btn-primary ms-3 me-2" type="button">تسجيل الدخول</a>
                        <a href="{{ route('create_account') }}" class="btn btn-outline-primary" type="button">إنشاء حساب</a>
                    </div>
                    
                    <!-- Brand and Navigation -->
                    <div class="d-flex align-items-center">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <span class="text-primary">ذاكر <span class="text-dark">تاريخ</span> اونلاين</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="container my-5">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('samah_pic.jpg') }}" class="hero-img w-50" alt="د. سماح حافظ - مدرسة التاريخ">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">
                        <span class="text-primary">تعلم التاريخ</span> بطريقة تفاعلية
                    </h1>
                    <h3 class="mb-4 text-primary"><b>د/سماح حافظ</b></h3>
                    <p class="lead mb-4">
                        منصة تعليمية متخصصة في تدريس التاريخ المرحلة الثانوية بطريقة سهلة وممتعة. نقدم محتوى تعليمي متنوع يشمل فيديوهات شرح، ملخصات، خرائط ذهنية، واختبارات تفاعلية لضمان أفضل فهم للمادة.
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">ابدأ التعلم الآن</a>
                </div>
            </div>
        </section>
        
        <!-- Grades Section -->
        <section class="my-5 py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">المرحلة الثانوية</h2>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <!-- Grade 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title text-center">الصف الأول الثانوي</h5>
                            <div class="text-center">
                                <span class="card-link">
                                    <i class="fas fa-book me-2"></i> الفصل الدراسي الأول
                                </span>
                                <span class="card-link">
                                    <i class="fas fa-book me-2"></i> الفصل الدراسي الثاني
                                </span>
                                <span class="card-link">
                                    <i class="fas fa-question-circle me-2"></i> نماذج اختبارات
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Grade 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-user-graduate fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title text-center">الصف الثاني الثانوي</h5>
                            <div class="text-center">
                                <span class="card-link">
                                    <i class="fas fa-book me-2"></i> الفصل الدراسي الأول
                                </span>
                                <span class="card-link">
                                    <i class="fas fa-book me-2"></i> الفصل الدراسي الثاني
                                </span>
                                <span class="card-link">
                                    <i class="fas fa-question-circle me-2"></i> نماذج اختبارات
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Grade 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-medal fa-3x text-primary"></i>
                            </div>
                            <h5 class="card-title text-center">الصف الثالث الثانوي</h5>
                            <div class="text-center">
                                <span class="card-link">
                                    <i class="fas fa-book me-2"></i> الفصل الدراسي الأول
                                </span>
                                <span class="card-link">
                                    <i class="fas fa-book me-2"></i> الفصل الدراسي الثاني
                                </span>
                                <span class="card-link">
                                    <i class="fas fa-question-circle me-2"></i> مراجعات نهائية
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Features Section -->
        <section class="my-5 py-5 bg-light rounded-3">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title d-inline-block">لماذا منصتنا؟</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-video fa-2x"></i>
                        </div>
                        <h4 class="mb-3">فيديوهات تعليمية</h4>
                        <p class="text-muted">
                            دروس مصورة بجودة عالية تشرح المنهج بطريقة مبسطة مع استخدام الوسائل التوضيحية
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-brain fa-2x"></i>
                        </div>
                        <h4 class="mb-3">خرائط ذهنية</h4>
                        <p class="text-muted">
                            تلخيص المنهج في خرائط ذهنية تساعد على الفهم والاستيعاب والحفظ بطريقة أسهل
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                        <h4 class="mb-3">اختبارات تفاعلية</h4>
                        <p class="text-muted">
                            بنك أسئلة شامل مع تصحيح آلي وتقارير أداء لقياس مستوى الطالب
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="fw-bold">منصة ذاكر تاريخ اونلاين</h5>
                    <p class="text-white mt-3">
                        منصة تعليمية متخصصة في تدريس التاريخ للمراحل الثانوية تحت إشراف د/سماح حافظ، نهدف إلى تبسيط المادة العلمية وتقديمها بطريقة تفاعلية ممتعة.
                    </p>
                    <div class="social-icons mt-4">
                        <a target="_blank" href="https://www.facebook.com/groups/393691115855559/user/100000717019113/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.instagram.com/samahhafez1811/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@drsamahhafez7872"><i class="fab fa-youtube"></i></a>
                        <a target="_blank" href="https://telegram.org/"><i class="fab fa-telegram"></i></a>
                        <a target="_blank" href="https://wa.me/201551932203"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                {{-- <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold">روابط سريعة</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none hover-primary">الدروس</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none hover-primary">الاختبارات</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none hover-primary">المدرسون</a></li>
                    </ul>
                </div> --}}
                
                <!-- Contact -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold">تواصل معنا</h5>
                    <ul class="list-unstyled text-white mt-3">

                        {{-- location --}}
                        {{-- <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-map-marker-alt mt-1 me-2"></i>
                            <span>123 شارع الجامعة، الرياض، المملكة العربية السعودية</span>
                        </li>  --}}

                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-phone me-2"></i>
                            <span>01280929444</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fab fa-whatsapp me-2"></i>
                            <a href="https://wa.me/201551932203" class="text-white text-decoration-none" target="_blank">01551932203</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-envelope me-2"></i>
                            <span><samah@gmail class="com">samah@gmail.com</samah@gmail></span>
                        </li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold">النشرة البريدية</h5>
                    <p class="text-white mt-3">
                        اشترك ليصلك كل جديد عن المنصة والدروس والعروض الخاصة
                    </p>
                    <div class="input-group mb-3 mt-4">
                        <input type="text" id="whatsappMessage" class="form-control newsletter-input" placeholder="للاستفسار او الاشتراك">
                        <button class="btn btn-success newsletter-btn" type="button" onclick="sendWhatsAppMessage()">
                            <i class="fab fa-whatsapp"></i>
                        </button>
                    </div>

                </div>
            </div>
            
            <hr class="my-4 bg-secondary">
            
            <!-- Copyright -->
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-muted mb-0">
                        &copy; 2023 منصة ذاكر التاريخ. جميع الحقوق محفوظة.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-muted text-decoration-none me-3">شروط الاستخدام</a>
                    <a href="#" class="text-muted text-decoration-none">سياسة الخصوصية</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Activate hover effects
        document.querySelectorAll('.hover-primary').forEach(link => {
            link.addEventListener('mouseover', function() {
                this.classList.add('text-primary');
            });
            link.addEventListener('mouseout', function() {
                this.classList.remove('text-primary');
            });
        });
    </script>
    <script>
        function sendWhatsAppMessage() {
            var message = document.getElementById('whatsappMessage').value;
            var phone = '201503388998'; // International format for WhatsApp
            var url = 'https://wa.me/' + phone + '?text=' + encodeURIComponent(message);
            window.open(url, '_blank');
        }
    </script>
</body>
</html>