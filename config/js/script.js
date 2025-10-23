window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  };
// ==========================================
// 📱 모바일 메뉴 기능
// ==========================================
// 모바일에서 햄버거 메뉴 클릭 시 사이드 메뉴 열기/닫기
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    // Open mobile menu
    if (mobileMenuBtn) {
        console.log('✅ 모바일 메뉴 버튼 찾음');
        mobileMenuBtn.addEventListener('click', function() {
            console.log('🔥 모바일 메뉴 버튼 클릭됨');
            mobileMenu.classList.add('open');
        });
    } else {
        console.log('❌ 모바일 메뉴 버튼을 찾을 수 없음');
    }

    // Close mobile menu
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', function() {
            mobileMenu.classList.remove('open');
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (mobileMenu.classList.contains('open') && 
            !mobileMenu.contains(event.target) && 
            !mobileMenuBtn.contains(event.target)) {
            mobileMenu.classList.remove('open');
        }
    });

    // Mobile dropdown functionality
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    
    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const navItem = this.closest('.mobile-nav-item');
            const isActive = navItem.classList.contains('active');
            
            // Close all other dropdowns
            document.querySelectorAll('.mobile-nav-item.active').forEach(item => {
                if (item !== navItem) {
                    item.classList.remove('active');
                }
            });
            
            // Toggle current dropdown
            if (isActive) {
                navItem.classList.remove('active');
            } else {
                navItem.classList.add('active');
            }
        });
    });

    // Close mobile menu when clicking on nav links
    const allMobileNavLinks = document.querySelectorAll('.mobile-nav-link, .mobile-nav-title-only');
    allMobileNavLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('open');
            // Also close all dropdowns
            document.querySelectorAll('.mobile-nav-item.active').forEach(item => {
                item.classList.remove('active');
            });
        });
    });
});
 

// ==========================================
// ⬆️ 페이지 상단으로 이동 버튼 기능
// ==========================================
// 우하단에 원형 버튼 생성, 클릭 시 페이지 맨 위로 스크롤
document.addEventListener('DOMContentLoaded', function() {
    // Create scroll to top button
    const scrollTopBtn = document.createElement('button');
    scrollTopBtn.innerHTML = '↑';
    scrollTopBtn.className = 'scroll-top-btn';
    scrollTopBtn.style.cssText = `
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        width: 3rem;
        height: 3rem;
        background-color: #01B3BC;
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 2.25rem;
        cursor: url('./config/img/cursor.png') 10 10, default;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        padding-bottom: 7px;
    `;

    document.body.appendChild(scrollTopBtn);

    // Show/hide scroll to top button
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollTopBtn.style.opacity = '1';
            scrollTopBtn.style.visibility = 'visible';
        } else {
            scrollTopBtn.style.opacity = '0';
            scrollTopBtn.style.visibility = 'hidden';
        }
    });

    // Scroll to top when clicked (instant)
    scrollTopBtn.addEventListener('click', function() {
        window.scrollTo(0, 0);
    });

    // Hover effects
    scrollTopBtn.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#15595D';
        this.style.transform = 'scale(1.1)';
    });

    scrollTopBtn.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '#01B3BC';
        this.style.transform = 'scale(1)';
    });
});

// ==========================================
// 🎨 헤더 투명도 조절 기능
// ==========================================
// 스크롤 위치에 따라 헤더 배경 투명도 변경
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const navItems = document.querySelectorAll('.nav-menu-item');
    
    if (header) {
        window.addEventListener('scroll', function() { 
            if (window.scrollY === 0) {
                header.style.backgroundColor = 'rgba(255,255,255, 1)';
                navItems.forEach(item => {
                    item.style.color = '#374151';
                });
            } else {
                header.style.backgroundColor = 'rgb(255 255 255 / 17%)';
                navItems.forEach(item => {
                    item.style.color = '#374151';
                });
            }
        });
    }
});

// ==========================================
// 📊 탭 기능 (코스 안내)
// ==========================================
// 10KM, HALF 탭 클릭 시 해당 코스 내용 표시
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding content
            const targetContent = document.getElementById( 'content-' + targetTab);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });
});
