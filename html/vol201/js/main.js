
// 팝업 열기 함수는 DOMContentLoaded 이벤트 핸들러 밖에서 정의.
function openModal(modalClass) {
 document.querySelector('.' + modalClass).style.display = 'block';
}



document.addEventListener('DOMContentLoaded', function () {
 // 초기 상태 설정 등 나머지 코드를 여기에 포함시킵니다.
 document.getElementById('backimage02').style.display = 'none';
 const ladderListItems = document.querySelectorAll('.ladder_list li');
 const destinationListItems = document.querySelectorAll('#destination_list li');

 // 모든 goods_result의 이미지를 숨김
 const goodsResults = document.querySelectorAll('.goods_result img');
 goodsResults.forEach(function(img) {
     img.style.display = 'none';
 });

 // 초기 설정: destination_list의 배경 이미지를 설정
 destinationListItems.forEach(function(destItem) {
     destItem.style.background = "url('img/sub13/sub13_ladder_rbtn.png') no-repeat";
     destItem.style.backgroundSize = '100%';
     destItem.style.position = 'relative';
 });

 let gamePlayed = false; // 게임이 한 번 실행되었는지 확인하는 변수

 // 이미 이벤트에 참여했는지 확인
 var hasVoted = <?php echo json_encode($vote); ?>;

 // ladder_select 클릭 이벤트 설정
 document.querySelectorAll('.ladder_select li').forEach(function (item) {
     item.addEventListener('click', function () {
         if (hasVoted) {
             // 이미 참여한 경우 팝업을 표시하고 더 이상 진행하지 않음
             openModal('result_modal04');
             return;
         }

         if (gamePlayed) return; // 게임이 이미 실행되었다면 더 이상 진행하지 않음
         gamePlayed = true; // 게임이 실행되었음을 표시

         // 첫 번째 이미지 변경
         document.getElementById('backimage01').style.display = 'none';
         document.getElementById('backimage02').style.display = 'block';

         // 모든 ladder_list 이미지를 숨김
         ladderListItems.forEach(function (listItem) {
             listItem.classList.remove('show');
         });

         // 클릭된 항목에 따라 ladder_list 이미지 표시
         let index;
         if (item.classList.contains('img1')) {
             index = 2;
         } else if (item.classList.contains('img2')) {
             index = 3;
         } else if (item.classList.contains('img3')) {
             index = 0;
         } else if (item.classList.contains('img4')) {
             index = 1;
         }

         // ladder_list 항목을 지연 후 표시
         if (index !== undefined) {
             setTimeout(function () {
                 ladderListItems[index].classList.add('show');
             }, 100);

             // ladder_list 이미지가 표시된 후 해당 goods_result를 표시
             setTimeout(function () {
                 const goodsResult = destinationListItems[index].querySelector('.goods_result');

                 if (goodsResult) {
                     // 30분의 1 확률로 winner 이미지 표시
                     const isWinner = Math.random() < (1/30); 

                     console.log("Index:", index, "Is Winner:", isWinner);

                     // 선택된 goods_result의 이미지를 표시하고 나머지는 숨김
                     if (isWinner) {
                         goodsResult.querySelector('.winner').style.display = 'block';
                         goodsResult.querySelector('.fail').style.display = 'none';
                         openModal('result_modal01'); // "축하합니다! 당첨되셨습니다." 팝업 열기
                     } else {
                         goodsResult.querySelector('.winner').style.display = 'none';
                         goodsResult.querySelector('.fail').style.display = 'block';
                         openModal('result_modal04'); // "당첨되지 않았습니다." 팝업 열기
                     }

                     // 선택된 goods_result를 보이게 함
                     goodsResult.style.display = 'block';

                     // 이벤트 페이지 종료
                     gamePlayed = true;
                 } else {
                     console.error("goodsResult가 null입니다. HTML 구조를 확인하세요.");
                 }
             }, 500); // ladder_list 이미지가 표시된 후 0.5초 지연
         }
     });
 });

 // 팝업 닫기 버튼에 이벤트 리스너 추가
 document.querySelectorAll('.modal-close').forEach(function(button) {
     button.addEventListener('click', function(event) {
         closeModal(event);
     });
 });
});

// 팝업 닫기 함수
function closeModal(event) {
 // 현재 클릭된 버튼의 부모 요소 중 .popUp 클래스를 가진 요소를 찾아서 닫음
 var modal = event.target.closest('.popUp');
 if (modal) {
     modal.style.display = 'none';
 }
}



     // 현재 날짜와 비교하여 send와 end 클래스를 제어하는 함수
     function controlSendEnd() {
     // 현재 날짜 및 시간 객체 생성
     var currentDate = new Date();

     // 비교할 날짜와 시간 설정 (2024년 08월 25일 23시 59분 59초)
     var targetDate = new Date("2024-08-25T23:59:59");

     // 현재 날짜가 지정한 날짜보다 이후인 경우
     if (currentDate > targetDate) {
         // send 클래스 비활성화, end 클래스 활성화
         document.querySelector('.subscribe').style.display = 'none';
         document.querySelector('.end').style.display = 'block';
     } else {
         // send 클래스 활성화, end 클래스 비활성화
         document.querySelector('.subscribe').style.display = 'block';
         document.querySelector('.end').style.display = 'none';
     }
     }

     // 페이지가 로드될 때 controlSendEnd 함수 호출
     window.onload = controlSendEnd;

