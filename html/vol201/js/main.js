// document.addEventListener('DOMContentLoaded', function () {
//     // backimage02는 처음에 보이지 않도록 설정
//     document.getElementById('backimage02').style.display = 'none';

//     // ladder_list의 모든 li 요소는 처음에 보이지 않도록 설정
//     const ladderListItems = document.querySelectorAll('.ladder_list li');
//     ladderListItems.forEach(function (listItem) {
//         listItem.style.display = 'none';
//     });

//     // ladder_select의 각 li 요소 클릭 시 동작 설정
//     document.querySelectorAll('.ladder_select li').forEach(function (item) {
//         item.addEventListener('click', function () {
//             // backimage01 숨기고 backimage02 표시
//             document.getElementById('backimage01').style.display = 'none';
//             document.getElementById('backimage02').style.display = 'block';

//             // 모든 ladder_list 이미지를 숨김
//             ladderListItems.forEach(function (listItem) {
//                 listItem.style.display = 'none';
//             });

//             // 클릭된 항목에 따라 해당 ladder_list 이미지를 표시
//             if (item.classList.contains('img1')) {
//                 ladderListItems[2].style.display = 'block'; // img1 클릭 시 rline03 보이기
//             } else if (item.classList.contains('img2')) {
//                 ladderListItems[3].style.display = 'block'; // img2 클릭 시 rline04 보이기
//             } else if (item.classList.contains('img3')) {
//                 ladderListItems[0].style.display = 'block'; // img3 클릭 시 rline01 보이기
//             } else if (item.classList.contains('img4')) {
//                 ladderListItems[1].style.display = 'block'; // img4 클릭 시 rline02 보이기
//             }
//         });
//     });
// });

//     document.addEventListener('DOMContentLoaded', function () {
//     // backimage02는 처음에 보이지 않도록 설정
//     document.getElementById('backimage02').style.display = 'none';

//     // ladder_list의 모든 li 요소는 처음에 숨겨진 상태
//     const ladderListItems = document.querySelectorAll('.ladder_list li');

//     // ladder_select의 각 li 요소 클릭 시 동작 설정
//     document.querySelectorAll('.ladder_select li').forEach(function (item) {
//         item.addEventListener('click', function () {
//             // backimage01 숨기고 backimage02 표시
//             document.getElementById('backimage01').style.display = 'none';
//             document.getElementById('backimage02').style.display = 'block';

//             // 모든 ladder_list 이미지를 숨김
//             ladderListItems.forEach(function (listItem) {
//                 listItem.classList.remove('show'); // 애니메이션 초기화
//             });

//             // 클릭된 항목에 따라 해당 ladder_list 이미지를 표시
//             if (item.classList.contains('img1')) {
//                 setTimeout(function () {
//                     ladderListItems[2].classList.add('show'); // img1 클릭 시 rline03 보이기
//                 }, 100); // 0.1초 지연
//             } else if (item.classList.contains('img2')) {
//                 setTimeout(function () {
//                     ladderListItems[3].classList.add('show'); // img2 클릭 시 rline04 보이기
//                 }, 100);
//             } else if (item.classList.contains('img3')) {
//                 setTimeout(function () {
//                     ladderListItems[0].classList.add('show'); // img3 클릭 시 rline01 보이기
//                 }, 100);
//             } else if (item.classList.contains('img4')) {
//                 setTimeout(function () {
//                     ladderListItems[1].classList.add('show'); // img4 클릭 시 rline02 보이기
//                 }, 100);
//             }
//         });
//     });
// });


// document.addEventListener('DOMContentLoaded', function () {
//     // backimage02는 처음에 보이지 않도록 설정
//     document.getElementById('backimage02').style.display = 'none';

//     // ladder_list의 모든 li 요소는 처음에 숨겨진 상태
//     const ladderListItems = document.querySelectorAll('.ladder_list li');

//     // ladder_select의 각 li 요소 클릭 시 동작 설정
//     document.querySelectorAll('.ladder_select li').forEach(function (item) {
//         item.addEventListener('click', function () {
//             // backimage01 숨기고 backimage02 표시
//             document.getElementById('backimage01').style.display = 'none';
//             document.getElementById('backimage02').style.display = 'block';

//             // 모든 ladder_list 이미지를 숨김
//             ladderListItems.forEach(function (listItem) {
//                 listItem.classList.remove('show'); // 애니메이션 초기화
//             });

//             // 클릭된 항목에 따라 해당 ladder_list 이미지를 표시
//             if (item.classList.contains('img1')) {
//                 setTimeout(function () {
//                     ladderListItems[2].classList.add('show'); // img1 클릭 시 rline03 보이기
//                 }, 100); // 0.1초 지연
//             } else if (item.classList.contains('img2')) {
//                 setTimeout(function () {
//                     ladderListItems[3].classList.add('show'); // img2 클릭 시 rline04 보이기
//                 }, 100);
//             } else if (item.classList.contains('img3')) {
//                 setTimeout(function () {
//                     ladderListItems[0].classList.add('show'); // img3 클릭 시 rline01 보이기
//                 }, 100);
//             } else if (item.classList.contains('img4')) {
//                 setTimeout(function () {
//                     ladderListItems[1].classList.add('show'); // img4 클릭 시 rline02 보이기
//                 }, 100);
//             }

//             // ladder_list 이미지가 나타난 후 destination_list 이미지 교체
//             setTimeout(function () {
//                 const destinationListItems = document.querySelectorAll('#destination_list li');
//                 const winnerImg = './img/sub13/sub13_winner.png';
//                 const failImg = './img/sub13/sub13_fail.png';

//                 destinationListItems.forEach(function (destItem) {
//                     const isWinner = Math.random() < 0.25; // 25% 확률로 winner
//                     if (isWinner) {
//                         destItem.style.background = `url(${winnerImg}) no-repeat`;
//                     } else {
//                         destItem.style.background = `url(${failImg}) no-repeat`;
//                     }
//                     destItem.style.backgroundSize = '100%';
//                 });
//             }, 500); // ladder_list 애니메이션 후 실행되도록 0.5초 지연
//         });
//     });
// });

document.addEventListener('DOMContentLoaded', function () {
    // backimage02는 처음에 보이지 않도록 설정
    document.getElementById('backimage02').style.display = 'none';

    // ladder_list의 모든 li 요소는 처음에 숨겨진 상태
    const ladderListItems = document.querySelectorAll('.ladder_list li');

    // ladder_select의 각 li 요소 클릭 시 동작 설정
    document.querySelectorAll('.ladder_select li').forEach(function (item) {
        item.addEventListener('click', function () {
            // backimage01 숨기고 backimage02 표시
            document.getElementById('backimage01').style.display = 'none';
            document.getElementById('backimage02').style.display = 'block';

            // 모든 ladder_list 이미지를 숨김
            ladderListItems.forEach(function (listItem) {
                listItem.classList.remove('show'); // 애니메이션 초기화
            });

            // 클릭된 항목에 따라 해당 ladder_list 이미지를 표시하고 destination_list 이미지 교체
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

            if (index !== undefined) {
                setTimeout(function () {
                    ladderListItems[index].classList.add('show');
                }, 100); // 0.1초 지연

                // ladder_list 이미지가 나타난 후 destination_list 이미지 교체
                setTimeout(function () {
                    const destinationListItems = document.querySelectorAll('#destination_list li');
                    const winnerImg = './img/sub13/sub13_winner.png';
                    const failImg = './img/sub13/sub13_fail.jpg';
                    const destIndex = index; // ladder_list와 대응하는 destination_list의 인덱스

                    const isWinner = Math.random() < 0.25; // 25% 확률로 winner
                    if (isWinner) {
                        destinationListItems[destIndex].style.background = `url(${winnerImg}) no-repeat`;
                    } else {
                        destinationListItems[destIndex].style.background = `url(${failImg}) no-repeat`;
                    }
                    destinationListItems[destIndex].style.backgroundSize = '100%';
                }, 500); // ladder_list 애니메이션 후 실행되도록 0.5초 지연
            }
        });
    });
});




