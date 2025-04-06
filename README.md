# php

/project-root
├── app/
│   ├── controllers/    ← 앱의 컨트롤러들 
│   ├── models/         ← 앱의 모델들
│   ├── views/          ← 앱의 뷰들
├── core/
│   ├── App.php         ← 라우터 역할
│   ├── Controller.php  ← 모든 컨트롤러의 부모
│   └── Model.php       ← 모든 모델의 부모
├── public/
│   ├── index.php       ← 진입점 (프론트 컨트롤러)
│   └── assets/         ← CSS, JS, 이미지 등
├── .htaccess           ← URL 리라이트 (Apache용)
└── config/
    └── config.php      ← DB 설정, 기본 경로 등