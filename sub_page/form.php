<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참가신청 - Seoul Musical Marathon</title>
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
        
        /* 신청 폼 스타일 */
        .form-section {
            padding: 10rem 0;
            background-color: #f8fafc;
            min-height: 100vh;
        }
        
        .form-container {
            max-width: 100%;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .form-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 1rem;
            font-family: 'Paperozi700', sans-serif;
        }
        
        .form-subtitle {
            color: #6b7280;
            font-size: 1rem;
        }
        
        .form-notice {
            background: #fef3c7;
            border: 1px solid #f59e0b;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .form-notice-title {
            font-weight: 600;
            color: #92400e;
            margin-bottom: 0.5rem;
        }
        
        .form-notice-text {
            color: #92400e;
            font-size: 0.9rem;
        }
        
        /* 폼 그룹 스타일 */
        .form-group {
            margin-bottom: 2rem;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .form-label.required::after {
            content: " *";
            color: #ef4444;
        }
        
        .form-input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #01B3BC;
            box-shadow: 0 0 0 3px rgba(1, 179, 188, 0.1);
        }
        
        .form-select {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            background: white;
            cursor: pointer;
        }
        
        .form-select:focus {
            outline: none;
            border-color: #01B3BC;
        }
        
        /* 체크박스 스타일 */
        .checkbox-group {
            margin: 1.5rem 0;
        }
        
        .checkbox-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
            padding: 1rem;
            background: #f9fafb;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }
        
        .checkbox-item input[type="checkbox"] {
            margin-right: 0.75rem;
            margin-top: 0.25rem;
            transform: scale(1.2);
        }
        
        .checkbox-label {
            font-size: 0.95rem;
            color: #374151;
            line-height: 1.5;
        }
        
        /* 개인정보 입력 섹션 */
        .personal-info {
            background: #f8fafc;
            border-radius: 15px;
            padding: 2rem;
            margin: 2rem 0;
        }
        
        .personal-info-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .personal-info-title::before {
            content: "👤";
            margin-right: 0.5rem;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        
        /* 버튼 스타일 */
        .form-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 3rem;
        }
        
        .btn {
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            min-width: 150px;
        }
        
        .btn-primary {
            background: #01B3BC;
            color: white;
        }
        
        .btn-primary:hover {
            background: #0891b2;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(1, 179, 188, 0.3);
        }
        
        .btn-secondary {
            background: #6b7280;
            color: white;
        }
        
        .btn-secondary:hover {
            background: #4b5563;
            transform: translateY(-2px);
        }


        /* type 'date' 전체영역 클릭 가능하게 하기 */
        input[type=date] {
            position: relative;
            background: url("../config/img/calendar.png") no-repeat right;
            background-size: 30px;
            padding-right: 10px;
            background-position-x: 97%;
            background-color: #fff;
        }

        /* 기존 달력 아이콘 (버튼) 숨김 */
        input[type=date]::-webkit-clear-button,
        input[type=date]::-webkit-inner-spin-button {
            display: none;
        }

        /* 클릭시 나타나는 달력 스타일 */
        input[type=date]::-webkit-calendar-picker-indicator {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            color: transparent;
        }



        /* 반응형 디자인 */
        @media (max-width: 768px) {
            .form-section {
                padding: 2rem 0;
            }
            
            .form-container {
                margin: 0 1rem;
                padding: 2rem 1.5rem;
            }
            
            .form-title {
                font-size: 2rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .form-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <main>
            <section class="form-section">
                <div class="container mx-auto px-4">
                    <div class="form-container">
                        <!-- 폼 헤더 -->
                        <div class="form-header">
                            <h1 class="form-title">서울 뮤지컬 마라톤 신청하기</h1>
                            <p class="form-subtitle">대회일: 2025.11.8(토)</p>
                        </div>
                        
                        <!-- 참가신청 안내 -->
                        <div class="form-notice">
                            <div class="form-notice-title">📝 참가자 유의사항 및 동의 서약서</div>
                            <div class="form-notice-text">참가로 발생하는 본인 상해에 대하여 주최자에게 일체 책임을 묻지 않을 것을 동의합니다.</div>
                        </div>
                        
                        <!-- 신청 폼 -->
                        <form id="applicationForm" method="POST" action="">
                            <!-- 동의 체크박스 -->
                            <div class="form-group">
                                <label class="form-label">※ 참가자 유의사항</label>
                                <div class="checkbox-group">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="agree1" name="agreements[]" value="개인정보" class="chkbox">
                                        <label for="agree1" class="checkbox-label">
                                            개인 정보를 수집하고 기부, 기부금 등의 사용에 동의합니다.<br>
                                            단체 참가자들은 총 기부금의 기부자 명단에 기부자 대표자만 등록 대상자가 됩니다.
                                        </label>
                                    </div>
                                    
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="agree2" name="agreements[]" value="참가비" class="chkbox">
                                        <label for="agree2" class="checkbox-label">참가비 환불 시에 대한 동의</label>
                                    </div>
                                    
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="agree3" name="agreements[]" value="개인정보수집" class="chkbox">
                                        <label for="agree3" class="checkbox-label">개인정보 수집 · 이용 동의서</label>
                                    </div>
                                    
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="agree4" name="agreements[]" value="제3자제공" class="chkbox">
                                        <label for="agree4" class="checkbox-label">개인 정보의 제3자 제공 동의 동의</label>
                                    </div>
                                    
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="agree5" name="agreements[]" value="마케팅" class="chkbox">
                                        <label for="agree5" class="checkbox-label">개인정보 동의 목적 개인정보 대한 동의</label>
                                    </div>

                                     <div class="checkbox-item">
                                         <input type="checkbox" id="all_agree" value="전체동의">
                                         <label for="all_agree" class="checkbox-label" style="color: #00858b; font-weight: 900;">전체동의</label>
                                     </div>
                                </div>
                            </div>
                            
                            <!-- 개인정보 입력 -->
                            <div class="personal-info">
                                <h3 class="personal-info-title">참가자 유의사항</h3>
                                
                                <div class="form-group">
                                    <label for="name" class="form-label required">이름을 한글로만 입력해주세요</label>
                                    <input type="text" id="name" name="name" class="form-input" placeholder="홍길동" required>
                                </div> 
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="birth" class="form-label required">생년월일</label>
                                        <input type="date" id="birth" name="birth" class="form-input" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="gender" class="form-label required">성별</label>
                                        <select id="gender" name="gender" class="form-select" required>
                                            <option value="">선택</option>
                                            <option value="남자">남자</option>
                                            <option value="여자">여자</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 안내 메시지 -->
                            <div style="text-align: center; margin: 2rem 0; color: #6b7280; font-size: 0.9rem;">
                                참가자를 등록 시 개인 정보에 참가자 사용을 동의한 것으로 간주 및 입력한 정보에 대한 책임은 본인에게 있습니다.
                            </div>
                            
                            <div style="text-align: center; font-weight: 600; color: #1f2937; margin: 1rem 0;">
                                단체참가 자동 신청 되지 않으며, 단체참가 참가 신청을 해야 합니다.
                            </div>
                            
                            <!-- 제출 버튼 -->
                            <div class="form-buttons">
                                <button type="submit" class="btn btn-primary">개인 참가</button>
                                <button type="button" class="btn btn-secondary">단체참가(2인이상)</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include '../footer.php'; ?>
        
        <script>
        // 폼 유효성 검사
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // 필수 동의사항 체크
            const agreements = document.querySelectorAll('input[name="agreements[]"]:checked');
            if (agreements.length < 5) {
                alert('모든 동의사항에 체크해주세요.');
                return;
            }
            
            // 필수 입력사항 체크
            const name = document.getElementById('name').value.trim();
            const birth = document.getElementById('birth').value;
            const gender = document.getElementById('gender').value;
            
            if (!name || !birth || !gender) {
                alert('필수 입력사항을 모두 작성해주세요.');
                return;
            }
            
            // 한글 이름 검증
            const koreanRegex = /^[가-힣]+$/;
            if (!koreanRegex.test(name)) {
                alert('이름은 한글로만 입력해주세요.');
                return;
            }
            
            alert('참가신청이 완료되었습니다!');
            // 실제로는 서버로 데이터 전송
        });
        
        // 단체참가 버튼 
        document.querySelector('.btn-secondary').addEventListener('click', function() {
            alert('오픈예정입니다.');
            // 실제로는 단체참가 페이지로 이동 
        });

         // ========================
         //       전체동의 체크박스
         // ========================
         const allAgreeCheckbox = document.getElementById('all_agree');
         const individualCheckboxes = document.querySelectorAll('.chkbox');
         
         // 전체동의 클릭 시 모든 개별 체크박스 제어
         allAgreeCheckbox.addEventListener('click', function(e) {
             const isChecked = e.target.checked;
             
             individualCheckboxes.forEach((checkbox) => {
                 checkbox.checked = isChecked;
             });
         });
         
         // 개별 체크박스 변경 시 전체동의 상태 업데이트
         individualCheckboxes.forEach((checkbox) => {
             checkbox.addEventListener('change', function() {
                 const checkedCount = document.querySelectorAll('.chkbox:checked').length;
                 const totalCount = individualCheckboxes.length;
                 
                 allAgreeCheckbox.checked = (checkedCount === totalCount);
             });
         });
      
         function solution(n) { 
               setTimeout(() => {
                 ;
               }, 6000);
            }
            console.log('결과 : ' + solution(14));

        </script>
    </div>
</body>
</html>
