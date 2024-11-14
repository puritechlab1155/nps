// sub04
// pc interview
gsap.fromTo(".title_interview", 
    {
        y: 0, // 원래 위치에서 시작
        opacity: 1 // 초기 상태의 불투명도
    },
    {
        y: -20, // 위로 이동할 위치
        opacity: 1, // 이동 중의 불투명도
        duration: 0.5, // 개별 애니메이션 지속 시간
        stagger: {
            each: 0.2, // 각 텍스트 사이의 지연 시간
            repeat: 1, // 각 텍스트의 애니메이션을 한 번 반복
            yoyo: true, // 역방향 재생 (원래 위치로 돌아오기)
            repeatDelay: 0.1 // 각 텍스트가 돌아온 후 다음 텍스트가 시작되기 전 지연 시간
        },
        ease: "sine.inOut", // 애니메이션의 이징 효과,
        scrollTrigger: {
            trigger: ".interview", // 트리거 요소
            start: "top 80%", // 트리거가 시작되는 위치 (요소의 상단과 뷰포트의 80% 지점)
            end: "bottom 20%", // 트리거가 끝나는 위치
            toggleActions: "play none none none", // 스크롤 시 애니메이션 동작 (재생, 역방향 재생, 정지, 정지)
            markers: false // 디버깅을 위한 마커 표시 (개발 시 유용)
        }
    }
);
// mo interview
gsap.fromTo(".title_interview", 
    {
        y: 0, // 원래 위치에서 시작
        opacity: 1 // 초기 상태의 불투명도
    },
    {
        y: -20, // 위로 이동할 위치
        opacity: 1, // 이동 중의 불투명도
        duration: 0.5, // 개별 애니메이션 지속 시간
        stagger: {
            each: 0.2, // 각 텍스트 사이의 지연 시간
            repeat: 1, // 각 텍스트의 애니메이션을 한 번 반복
            yoyo: true, // 역방향 재생 (원래 위치로 돌아오기)
            repeatDelay: 0.1 // 각 텍스트가 돌아온 후 다음 텍스트가 시작되기 전 지연 시간
        },
        ease: "sine.inOut", // 애니메이션의 이징 효과,
        scrollTrigger: {
            trigger: ".interview_mo", // 트리거 요소
            start: "top 10%", // 트리거가 시작되는 위치 (요소의 상단과 뷰포트의 80% 지점)
            end: "bottom 5%", // 트리거가 끝나는 위치
            toggleActions: "play none none none", // 스크롤 시 애니메이션 동작 (재생, 역방향 재생, 정지, 정지)
            markers: true // 디버깅을 위한 마커 표시 (개발 시 유용)
        }
    }
);




// sub13 gsap.timeline

// document.addEventListener('DOMContentLoaded', () => {
//     // GSAP Timeline 생성
//     const sub13_tl = gsap.timeline();

//     // 순차적으로 이미지가 나타나도록 애니메이션 설정
//     sub13_tl
//       .fromTo(".sub13 .img1", 
//         { opacity: 0, y: 0, x:-30 }, 
//         { opacity: 1, y: 5, x: 0, 
//             duration: 0.5,
//             repeat: 2, // 반복 횟수
//             yoyo: true, // 왔다 갔다 하는 효과
//             ease: "power1.inOut" // 부드러운 움직임을 위한 ease 설정 
//         }
//       )
//       .fromTo(".sub13 .img2", 
//         { opacity: 0, y: -10, x: 25 }, 
//         { opacity: 1, y: 0, x:0, 
//             duration: 0.5,
//             repeat: 2, // 반복 횟수
//             yoyo: true, // 왔다 갔다 하는 효과
//             ease: "power1.inOut" // 부드러운 움직임을 위한 ease 설정 
//          }
//       )
//       .fromTo(".sub13 .img3", 
//         { opacity: 0, y: -100}, 
//         { opacity: 1, y: 0, duration: 0.5}
//       )
//       .fromTo(".sub13 .img4", 
//         { opacity: 0, y: -10, x: -25 }, 
//         { opacity: 1, y: 0, x:0,
//             duration: 0.5,
//             repeat: 2, // 반복 횟수
//             yoyo: true, // 왔다 갔다 하는 효과
//             ease: "power1.inOut" // 부드러운 움직임을 위한 ease 설정 
//         }
//       )
//       .fromTo(".sub13 .img5", 
//         { opacity: 0, y: -50 }, 
//         { opacity: 1, y: 0, duration: 0.5 }
//       )

//       .fromTo(".sub13 .img6", 
//         { opacity: 0, y: -50, x: -160 }, 
//         { opacity: 1, y: 0, x: -170,
//             duration: 0.5,
//             repeat: 2, // 반복 횟수
//             yoyo: true, // 왔다 갔다 하는 효과
//             ease: "power1.inOut" // 부드러운 움직임을 위한 ease 설정 
//         }
//       )
//       .fromTo(".sub13 .img7", 
//         { opacity: 0, y: -50 }, 
//         { opacity: 1, y: 0, duration: 0.5 }
//       );
// });


document.addEventListener('DOMContentLoaded', () => {
    // GSAP Timeline 생성
    const sub13_tl = gsap.timeline();

    // 순차적으로 이미지가 나타나도록 애니메이션 설정
    sub13_tl
      .fromTo(".sub13 .img1", 
        { opacity: 0, y: 0, x: -30 }, 
        { 
            opacity: 1, y: 5, x: 0, 
            duration: 0.5,
            repeat: 1, // 반복 횟수
            yoyo: true, // 왔다 갔다 하는 효과
            ease: "power1.inOut", // 부드러운 움직임을 위한 ease 설정
            onComplete: () => gsap.set(".sub13 .img1", { opacity: 1 }) // 애니메이션 후 opacity 유지
        }
      )
      .fromTo(".sub13 .img2", 
        { opacity: 0, y: -10, x: 25 }, 
        { 
            opacity: 1, y: 70, x: 50, 
            duration: 0.5,
            repeat: 1, // 반복 횟수
            yoyo: true, // 왔다 갔다 하는 효과
            ease: "power1.inOut", // 부드러운 움직임을 위한 ease 설정
            onComplete: () => gsap.set(".sub13 .img2", { opacity: 1 }) // 애니메이션 후 opacity 유지
         }
      )
      .fromTo(".sub13 .img3", 
        { opacity: 0, y: -100 }, 
        { 
            opacity: 1, y: 0, 
            duration: 0.5,
            onComplete: () => gsap.set(".sub13 .img3", { opacity: 1 }) // 애니메이션 후 opacity 유지
        }
      )
      .fromTo(".sub13 .img4", 
        { opacity: 0, y: -10, x: -25 }, 
        { 
            opacity: 1, y: 0, x: 0,
            duration: 0.5,
            repeat: 1, // 반복 횟수
            yoyo: true, // 왔다 갔다 하는 효과
            ease: "power1.inOut", // 부드러운 움직임을 위한 ease 설정
            onComplete: () => gsap.set(".sub13 .img4", { opacity: 1 }) // 애니메이션 후 opacity 유지
        }
      )
      .fromTo(".sub13 .img5", 
        { opacity: 0, y: -50 }, 
        { 
            opacity: 1, y: 0, 
            duration: 0.5,
            onComplete: () => gsap.set(".sub13 .img5", { opacity: 1 }) // 애니메이션 후 opacity 유지
        }
      )
      .fromTo(".sub13 .img6", 
        { opacity: 0, y: -50, x: -160 }, 
        { 
            opacity: 1, y: 0, x: -170,
            duration: 0.5,
            repeat: 1, // 반복 횟수
            yoyo: true, // 왔다 갔다 하는 효과
            ease: "power1.inOut", // 부드러운 움직임을 위한 ease 설정
            onComplete: () => gsap.set(".sub13 .img6", { opacity: 1 }) // 애니메이션 후 opacity 유지
        }
      )
      .fromTo(".sub13 .img7", 
        { opacity: 0, y: -50 }, 
        { 
            opacity: 1, y: 0, 
            duration: 0.5,
            onComplete: () => gsap.set(".sub13 .img7", { opacity: 1 }) // 애니메이션 후 opacity 유지
        }
      );
});
