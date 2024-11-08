// sub13 gsap.timeline

import gsap from 'gsap';

// GSAP Timeline 생성
const sub13_tl = gsap.timeline();

// 순차적으로 이미지가 나타나도록 애니메이션 설정
sub13_tl
  .fromTo(".sub13 .img1", 
    { opacity: 0, y: 0 }, // 시작 상태
    { opacity: 1, y: -50, duration: 0.5 } // 끝 상태
  )
  .fromTo(".sub13 .img2", 
    { opacity: 0, y: -100 }, // 시작 상태
    { opacity: 1, y: 0, duration: 0.5 } // 끝 상태
  )
  .fromTo(".sub13 .img3", 
    { opacity: 0, y: -50 }, // 시작 상태
    { opacity: 1, y: 0, duration: 0.5 } // 끝 상태
  )
  .fromTo(".sub13 .img4", 
    { opacity: 0, y: -50 }, // 시작 상태
    { opacity: 1, y: 0, duration: 0.5 } // 끝 상태
  )
  .fromTo(".sub13 .img5", 
    { opacity: 0, y: -50 }, // 시작 상태
    { opacity: 1, y: 0, duration: 0.5 } // 끝 상태
  )
  .fromTo(".sub13 .img6", 
    { opacity: 0, y: -50 }, // 시작 상태
    { opacity: 1, y: 0, duration: 0.5 } // 끝 상태
  )
  .fromTo(".sub13 .img7", 
    { opacity: 0, y: -50 }, // 시작 상태
    { opacity: 1, y: 0, duration: 0.5 } // 끝 상태
  );
