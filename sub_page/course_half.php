<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>하프마라톤 코스 - Seoul Musical Marathon</title>
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
        .course-section {
            padding: 10rem 0;
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <main>
            <!-- 하프 마라톤 코스 안내 -->
            <section class="course-section">
                <div class="container mx-auto px-4">
                    <div class="course-content">
                        <!-- 섹션 제목 -->
                        <div class="course-header">
                            <h2 class="course-title">
                                <span class="course-eng">HALF MARATHON COURSE</span>
                                <span class="course-kor">하프 마라톤 코스 안내</span>
                            </h2>
                        </div>
                        
                        <!-- 코스 내용 -->
                        <div class="course-card">
                            <div class="course-info">
                                <h3 class="course-subtitle">하프 마라톤 코스</h3>
                                <div class="course-details">
                                    <div class="course-detail-item">
                                        <span class="detail-label">거리</span>
                                        <span class="detail-value">21.0975KM</span>
                                    </div>
                                    <div class="course-detail-item">
                                        <span class="detail-label">제한시간</span>
                                        <span class="detail-value">2시간 30분</span>
                                    </div>
                                    <div class="course-detail-item">
                                        <span class="detail-label">출발지점</span>
                                        <span class="detail-value">광화문광장</span>
                                    </div>
                                    <div class="course-detail-item">
                                        <span class="detail-label">도착지점</span>
                                        <span class="detail-value">광화문광장</span>
                                    </div>
                                </div>
                                <div class="course-route">
                                    <h4>코스 경로</h4>
                                    <p>광화문광장 → 청계천 → 동대문 → 성수대교 → 한강공원 → 반포대교 → 광화문광장</p>
                                </div>
                            </div>
                            <div class="course-map">
                                <div class="map-placeholder">
                                    <img src="../config/img/map_half_km.png" alt="하프 마라톤 코스 지도" class="map-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

     
        <?php include '../footer.php'; ?>