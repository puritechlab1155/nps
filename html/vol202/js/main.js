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
