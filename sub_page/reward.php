<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../config/css/page_style.css/reward.css">
    <title>기념품 - Seoul Musical Marathon</title>
    <?php include '../header.php'; ?>
    <style>
        /* 커서 경로 수정 (서브 페이지용) */
        * {
            cursor: url('../config/img/cursor.png') 10 10, auto !important;
        }
        
        body {
            cursor: url('../config/img/cursor.png') 10 10, default !important;
        }
        
        a, button, input[type="submit"], input[type="button"], .btn {
            cursor: url('../config/img/cursor.png') 10 10, auto !important;
        }
    </style>
  
</head>
<body>
    <div class="min-h-screen">
        <main>
            <!-- 기념품 섹션 -->   
            <section id="reward_wrapper" class="reward-section fst-section"> 
                <h2 class="title_h2">기념품</h2>
                <div class="container mx-auto px-4 reward-container" >
                     <div class="reward-image-wrapper">
                         <img class="reward-image" src="../config/img/gift_2_back_1.png" alt="기념품-티셔츠" >
                     </div>
                     <div class="size-table-container">
                         <h3 class="size-table-title">사이즈 안내</h3>
                         <div class="size-table-wrapper">
                             <table class="size-table">
                                 <thead>
                                     <tr>
                                         <th>사이즈</th>
                                         <th>가슴단면</th>
                                         <th>총기장</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>S</td>
                                         <td>48</td>
                                         <td>65.5</td>
                                     </tr>
                                     <tr>
                                         <td>M</td>
                                         <td>50.5</td>
                                         <td>66.5</td>
                                     </tr>
                                     <tr>
                                         <td>L</td>
                                         <td>53</td>
                                         <td>69</td>
                                     </tr>
                                     <tr>
                                         <td>XL</td>
                                         <td>60</td>
                                         <td>72</td>
                                     </tr>
                                     <tr>
                                         <td>2XL</td>
                                         <td>63</td>
                                         <td>74</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <p class="size-note">*단면 길이(cm)이며 측정 방식에 따라 오차가 발생할 수 있습니다.</p>
                     </div>
                </div>
            </section>

             <section id="gift_wrapper" class="medal-section">
                 <div class="container mx-auto px-4">  
                     
                     <div class="medal-grid">
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                <img src="../config/img/reward_1.png" alt="배번호/기록칩" style="max-height: 65%;">
                             </div>
                             <h3 class="medal-item-title">배번호/기록칩</h3>
                             <p class="medal-item-desc">기록 측정 기록표 부착된 배번호표 필수지참</p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                <img src="../config/img/gift_4.png" alt="완주메달">
                             </div>
                             <h3 class="medal-item-title">완주메달</h3>
                             <p class="medal-item-desc">코스 완주시 발급</p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                <img src="../config/img/gift_5.jpg" alt="에너지젤">
                             </div>
                             <h3 class="medal-item-title">에너지젤</h3>
                             <p class="medal-item-desc">에너지 충전을 위한 에너지젤 2개입 </p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                <img src="../config/img/reward_4.png" alt="뱃지" style="max-height: 60%;">
                             </div>
                             <h3 class="medal-item-title">뱃지 </h3>
                             <p class="medal-item-desc">SSM 기념 뱃지 </p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                 <img src="../config/img/reward_5.jpg" alt="스티커" >
                             </div>
                             <h3 class="medal-item-title">스티커</h3>
                             <p class="medal-item-desc">SSM마스코트 햄스터 스티커 배부 </p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                 <img src="../config/img/reward_2.png" alt="프로그램북">
                             </div>
                             <h3 class="medal-item-title">프로그램북</h3>
                             <p class="medal-item-desc">SSM 협업 뮤지컬 콜라보 프로그램북 <br> *해당 뮤지컬의 프로그램북이 아니라 SSM에서 재창조 되었습니다.</p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                <img src="../config/img/reward_7.png" alt="기념 CD">
                             </div>
                             <h3 class="medal-item-title">기념 CD</h3>
                             <p class="medal-item-desc">SSM 협업 뮤지컬의 일부 넘버가 수록되어있습니다.</p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                 <img src="../config/img/reward_3.png" alt="스낵" style="max-height: 60%;">
                             </div>
                             <h3 class="medal-item-title">에그과자</h3>
                             <p class="medal-item-desc">협업 뮤지컬의 상징적인 음식중 하나인 에그  </p>
                         </div>
                         
                         <div class="medal-item">
                             <div class="medal-image-placeholder">
                                 <img src="../config/img/reward_6.jpg" alt="베이커리" > 
                             </div>
                             <h3 class="medal-item-title">베이커리</h3>
                             <p class="medal-item-desc">협업 뮤지컬의 상징적인 음식중 하나인 빵 </p>
                         </div>
                     </div>
                 </div>
             </section>
        </main>

     
        <?php include '../footer.php'; ?>
        
        <script>
        // 스크롤 애니메이션 함수
        function animateMedalItems() {
            const medalItems = document.querySelectorAll('.medal-item');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        // 각 아이템에 순차적으로 딜레이를 적용
                        const itemIndex = Array.from(medalItems).indexOf(entry.target);
                        setTimeout(() => {
                            entry.target.classList.add('animate');
                        }, itemIndex * 150); // 150ms씩 딜레이
                        
                        // 한 번 애니메이션이 실행되면 관찰 중지
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2, // 20% 보일 때 트리거
                rootMargin: '0px 0px -50px 0px' // 약간 일찍 트리거
            });

            medalItems.forEach(item => {
                observer.observe(item);
            });
        }

        // DOM이 로드되면 애니메이션 초기화
        document.addEventListener('DOMContentLoaded', function() {
            animateMedalItems();
        });
        </script>