<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대회개요 - Seoul Musical Marathon</title>
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
            <!-- 대회개요 -->
            <section id="info1" class="event-info-section section01 fst-section"> 
                <h2 class="title_h2" style="text-align: center;">대회개요</h2>
                <div class="container mx-auto px-4">
                    <div class="event-info-card">
                        <div class="event-header">
                            <h1 class="event-title">2025 <span class="asia-text">Seoul</span> <span class="open-text">Musical</span> <span class="marathon-text">Marathon</span></h1> 
                        </div>
                        
                        <div class="event-details">
                            <div class="detail-row">
                                <div class="detail-label">대회일시</div>
                                <div class="detail-value">2025. 10. 19. (일) / START 08:00</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">대회장소</div>
                                <div class="detail-value">광화문광장</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">참가인원</div>
                                <div class="detail-value">1,200명 (선착순 마감)</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">참가접수</div>
                                <div class="detail-value">2025년 9월 4일 (목) 오후 1시 ~ 10월 13일 (일) 오후 5시</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">참가비</div>
                                <div class="detail-value">HALF - 80,000 | 10km 60,000 ( 전 종목 기념품 제공 )</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">시상안내</div>
                                <div class="detail-value">1등-100만원 / 2등-70만원 / 3등-50만원</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">주최</div>
                                <div class="detail-value">서울경제, 한국뮤지컬협회</div>
                            </div>
                            <div class="detail-row">
                                <div class="detail-label">후원사</div>
                                <div class="detail-value">
                                    <span class="sponsor-seoul">SEOUL </span>
                                    <span class="sponsor-m">M</span>
                                    <span class="sponsor-seoul">DREAM</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="event-notice">
                            ※ 주최사의 사정에 따라 상기 내용은 변경될 수 있습니다.
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include '../footer.php'; ?>