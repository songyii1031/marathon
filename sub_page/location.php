<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>집결지 안내 - Seoul Musical Marathon</title>
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
    <style>
        /* 집결지 안내 섹션 스타일 */
    
        
        .location-container {
            text-align: center;
        }
        
        .location-image-wrapper {
            border-radius: 18px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            display: inline-block;
            max-width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
         
        .location-image {
            display: block;
            width: 100%;
            height: auto;
            max-width: 800px;
        }
        
        /* 반응형 디자인 */
        @media (max-width: 768px) {
            .location-section {
                padding: 2rem 0;
            }
  
            .location-image-wrapper {
                border-radius: 12px;
                margin: 0 1rem;
            }
        }
        
        @media (max-width: 480px) {
    
            
            .location-image-wrapper {
                border-radius: 8px;
                margin: 0 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <main>
            <!-- 집결지 안내 -->   
            <section id="location_wrapper" class="location-section fst-section"> 
                <h2 class="title_h2">집결지 안내</h2>
                <div class="container mx-auto px-4 location-container" >
                     <div class="location-image-wrapper">
                         <img class="location-image" src="../config/img/location.png" alt="집결지 안내" >
                     </div>
                </div>
            </section>
        </main>

     
        <?php include '../footer.php'; ?>