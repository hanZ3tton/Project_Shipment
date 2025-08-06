 <!-- Tailwind CSS -->
 <script src="https://cdn.tailwindcss.com"></script>

 <!-- Bootstrap Icons -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

 <style>
     .flag {
         width: 30px;
         height: 30px;
         object-fit: cover;
         border-radius: 9999px;
     }

     .truck-icon {
         animation: moveTruck 2s linear infinite;
     }

     @keyframes moveTruck {
         0% {
             transform: translateX(-5px);
         }

         50% {
             transform: translateX(5px);
         }

         100% {
             transform: translateX(-5px);
         }
     }
 </style>