        <!-- Footer -->
        <footer class="footer">
            <div class="container mx-auto px-4">
                <div class="footer-content">
                    <div class="footer-section">
                        <h3 class="footer-title">SEOUL MARATHON</h3>
                        <p class="footer-description">
                            한국 최고의 음악 스포츠 축제로 여러분을 초대합니다.
                        </p>
                        <div class="social-links">
                            <i data-lucide="facebook" class="social-icon"></i>
                            <i data-lucide="instagram" class="social-icon"></i>
                            <i data-lucide="youtube" class="social-icon"></i>
                        </div>
                    </div>
                    
                    <div class="footer-section">
                        <h4 class="footer-subtitle">이벤트 정보</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#home' : '#home'; ?>">대회안내</a></li>
                            <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#goods' : '#goods'; ?>">기념품</a></li>
                            <li><a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../index.php#course' : '#course'; ?>">코스안내</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-section">
                        <h4 class="footer-subtitle">고객 지원</h4>
                        <ul class="footer-links">
                            <li><a href="#">자주 묻는 질문</a></li>
                            <li><a href="#">환불 정책</a></li> 
                            <li><a href="#">분실물 센터</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-section">
                        <h4 class="footer-subtitle">연락처</h4>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i data-lucide="map-pin" class="contact-icon"></i>
                                <span>서울특별시 중구 광화문로 25</span>
                            </div>
                            <div class="contact-item">
                                <i data-lucide="phone" class="contact-icon"></i>
                                <span>02-123-4567</span>
                            </div>
                            <div class="contact-item">
                                <i data-lucide="mail" class="contact-icon"></i>
                                <span>info@seoulmarathon.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <p>&copy; <?php echo date('Y'); ?> Seoul Marathon. All rights reserved.</p>
                    <p class="demo-notice">본 사이트는 데모 목적으로 제작되었습니다.</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/js/script.js"></script>
    <script src="<?php echo (strpos($_SERVER['REQUEST_URI'], '/sub_page/') !== false) ? '../' : './'; ?>config/js/animation.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        console.log('✅ 간단한 PHP 페이지 로드 성공!');
        console.log('📅 현재 연도: <?php echo date("Y"); ?>');
    </script>
</body>
</html>
