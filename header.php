

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEOUL MUSICAL MARATHON 2025</title> 
    <meta name="description" content="2025 서울 뮤지컬 마라톤 - 10km, Half Marathon 코스로 진행되는 한국 최고의 음악 축제">
    
    <!-- 파비콘 -->
    <link rel="icon" type="image/x-icon" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/img/favicon.ico">
    <link rel="shortcut icon" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/img/favicon.ico">

    <!-- 스타일시트 -->
     <link rel="stylesheet" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/css/styles.css">   
     <link rel="stylesheet" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/css/custom.css">   
     <link rel="stylesheet" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/css/font.css">    
     <link rel="stylesheet" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/css/header.css">   
     <link rel="stylesheet" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/css/responsive.css">   
     <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body>
        <!-- Header -->
        <header id="header" class="bg-white sticky top-0 z-50">
            <div class="header_wrapper_div mx-auto px-4 py-4"> 
                <div class="header_flex_div flex space-x-8"> 
                    <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#home' : '#home'; ?>"><img src="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/img/logo.png" alt="logo" style="width: 90px;"></a>
                     
                     <nav class="hidden md:flex space-x-8">
                         <!-- 대회안내 -->
                         <div class="nav-dropdown">
                             <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './overview.php' : './sub_page/overview.php'; ?>" class="nav-menu-item">대회안내</a>
                             <div class="dropdown-content">
                                 <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './overview.php' : './sub_page/overview.php'; ?>">대회개요</a>
                                 <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './location.php' : './sub_page/location.php'; ?>">집결지 안내</a>
                             </div>
                         </div>
                         
                         <!-- 기념품 -->
                         <div class="nav-dropdown">
                             <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './reward.php' : './sub_page/reward.php'; ?>" class="nav-menu-item">기념품</a>  
                         </div>
                         
                         <!-- 코스 -->
                         <div class="nav-dropdown">
                             <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './course_10km.php' : './sub_page/course_10km.php'; ?>" class="nav-menu-item">코스</a>
                             <div class="dropdown-content">
                                 <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './course_10km.php' : './sub_page/course_10km.php'; ?>">10km 코스</a>
                                 <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './course_half.php' : './sub_page/course_half.php'; ?>">하프 마라톤</a>
                             </div>
                         </div>
                         
                         <!-- 참가접수 -->
                         <div class="nav-dropdown">
                             <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './form.php' : './sub_page/form.php'; ?>" class="nav-menu-item">참가접수</a>
                         </div>
                         
                         <!-- 커뮤니티 -->
                         <div class="nav-dropdown">
                             <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#community' : '#community'; ?>" class="nav-menu-item">커뮤니티</a>
                             <div class="dropdown-content">
                                 <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#com1' : '#com1'; ?>">공지사항</a>
                                 <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#com2' : '#com2'; ?>">FAQ</a>
                             </div>
                         </div>
                     </nav>

                    <div class="participateDiv items-center space-x-4">
                        <button class="participateBtn btn btn-primary hidden">
                            참가신청
                        </button>
                        <button id="mobile-menu-btn" class="md:hidden btn btn-ghost p-2">
                            <i data-lucide="menu" style="width: 2.2rem; height: 2.2rem;"></i>
                            <span class="sr-only">메뉴 열기</span>
                        </button>
                    </div>
                </div> 
            </div>
        </header>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="mobile-menu">
            <div class="mobile-menu-content">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-bold">메뉴</h2>
                    <button id="mobile-menu-close" class="mobile-menu-close">
                        X
                    </button>
                </div>
                
                <!-- 모바일 네비게이션 메뉴 -->
                <nav class="mobile-nav">
                    <!-- 대회안내 -->
                    <div class="mobile-nav-item">
                        <div class="mobile-nav-header">
                            <span class="mobile-nav-title">대회안내</span>
                            <button class="mobile-dropdown-toggle">
                                <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mobile-dropdown-content">
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './overview.php' : './sub_page/overview.php'; ?>" class="mobile-nav-link">대회개요</a>
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#info2' : '#info2'; ?>" class="mobile-nav-link">오시는 길</a>
                        </div>
                    </div>

                    <!-- 기념품 -->
                    <div class="mobile-nav-item">
                        <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#goods' : '#goods'; ?>" class="mobile-nav-title-only">기념품</a>
                    </div>

                    <!-- 코스 -->
                    <div class="mobile-nav-item">
                        <div class="mobile-nav-header">
                            <span class="mobile-nav-title">코스</span>
                            <button class="mobile-dropdown-toggle">
                                <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mobile-dropdown-content">
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './course_10km.php' : './sub_page/course_10km.php'; ?>" class="mobile-nav-link">10km 코스</a>
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './course_half.php' : './sub_page/course_half.php'; ?>" class="mobile-nav-link">하프 마라톤</a>
                        </div>
                    </div>

                    <!-- 참가접수 -->
                    <div class="mobile-nav-item">
                        <div class="mobile-nav-header">
                            <span class="mobile-nav-title">참가접수</span>
                            <button class="mobile-dropdown-toggle">
                                <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mobile-dropdown-content">
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? './form.php' : './sub_page/form.php'; ?>" class="mobile-nav-link">신청하기</a>
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#reg2' : '#reg2'; ?>" class="mobile-nav-link">공지사항</a>
                        </div>
                    </div>

                    <!-- 커뮤니티 -->
                    <div class="mobile-nav-item">
                        <div class="mobile-nav-header">
                            <span class="mobile-nav-title">커뮤니티</span>
                            <button class="mobile-dropdown-toggle">
                                <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mobile-dropdown-content">
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#com1' : '#com1'; ?>" class="mobile-nav-link">공지사항</a>
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#com2' : '#com2'; ?>" class="mobile-nav-link">FAQ</a>
                            <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#com3' : '#com3'; ?>" class="mobile-nav-link">문의하기</a>
                        </div>
                    </div>
                </nav>
                
                <div class="pt-4 border-t mt-6">
                    <button class="btn btn-primary w-full">
                        참가신청
                    </button>
                </div>
            </div>
        </div>
</body>
</html>