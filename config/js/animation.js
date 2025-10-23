// ==========================================
// 🔥 페이지 로딩 스피너 기능
// ==========================================
// 페이지 로드 시 "SEOUL MUSICAL MARATHON" 텍스트와 스피너 표시
class PageLoader {
    constructor() {
        this.createLoader();
        this.hideLoader();
    }

    createLoader() {
        const loader = document.createElement('div');
        loader.className = 'page-loader';
        loader.innerHTML = `
            <div class="loader-content">
                <div class="loader-spinner"></div>
                <p>SEOUL MUSICAL MARATHON</p>
            </div>
        `;
        document.body.appendChild(loader);
    }

    hideLoader() {
        // 페이지 로드 완료 후 로더 숨기기
        window.addEventListener('load', () => {
            setTimeout(() => {
                const loader = document.querySelector('.page-loader');
                if (loader) {
                    loader.style.opacity = '0';
                    setTimeout(() => {
                        loader.remove();
                    }, 300);
                }
            }, 500);
        });
    }
}

// ==========================================
// 🎈 플로팅 애니메이션 기능
// ==========================================
// Hero 섹션의 통계 카드들을 위아래로 부드럽게 움직이는 효과
function applyFloatingAnimation() {
    // 통계 카드들에 floating 애니메이션 적용
    const stats = document.querySelectorAll('.stat');
    stats.forEach((stat, index) => {
        stat.style.animationDelay = `${index * 0.2}s`;
        stat.classList.add('floating');
    });
 
}

// 초기화 (로딩화면 제거, floating만 유지)
document.addEventListener('DOMContentLoaded', () => {
    // 페이지 로더 비활성화 (사용자 요청으로 제거)
    // new PageLoader();
    
    // floating 애니메이션 적용 (즉시 적용)
    applyFloatingAnimation();
    
    console.log('✅ 기본 애니메이션과 floating 효과 로드됨 (로딩화면 비활성화)');
});
 
