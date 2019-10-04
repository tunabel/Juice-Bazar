<?php 
include "scripts/dbconnect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="../assets/css/bootstrap.min.css"      
      crossorigin="anonymous"
    />
    <!-- google font -->
    <link
    href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
    rel="stylesheet"
    />
    <!--  font awesome -->
    <link href="../assets/css/all.min.css" rel="stylesheet" /> 
    <!-- favicon -->
    <link href="../assets/image/favicon.png" sizes="32x32" rel="shortcut icon">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    
    <title>Juice Bazar</title>
  </head>
  <body>
    <div class="container-fluid site-wrap">
      <nav class="navbar navbar-expand-lg sticky-top row">
        <div class="col-4 px-0 pt-2">
          <i
          class="fas fa-bars btn-nav js-menu-toggle d-sm-block d-lg-none"
            style="color: #ffc634; cursor: pointer"
          ></i>
          <div class=" d-none d-lg-block">
            <ul class="navbar-nav js-clone-nav">
              <li class="nav-item">
                <a class="nav-link nav-hover nav-hover-active mr-lg-3" href="?section=shopAll" id="navShop"
                  >Shop <span class="sr-only">(current)</span></a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link nav-hover mr-lg-3" href="?section=blogAll" id="navBlog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-hover" href="?section=aboutus" id="navAbout">Về chúng tôi</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-4 text-center">
          <a class="text-center js-logo-clone text-decoration-none" href="home.html">
            <svg
              width="128"
              height="32"
              viewBox="0 0 128 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="img-fluid"
            >
              <path
                d="M47.5408 31.5455C46.5768 31.5455 45.748 30.7787 45.748 29.8039V5.90383C45.748 4.95637 46.5768 4.16226 47.5408 4.16226C48.5443 4.16226 49.3336 4.96185 49.3336 5.90383V29.8039C49.3392 30.7787 48.5499 31.5455 47.5408 31.5455Z"
                fill="#FFC634"
              />
              <path
                d="M8.02672 31.9288C6.94993 31.9288 6.01409 31.8248 5.12334 31.6167C2.93595 31.0909 1.2503 29.9463 0.246803 28.3416C-0.254946 27.5092 0.0325729 26.4631 0.889491 25.9429C1.71258 25.4554 2.82883 25.7293 3.32494 26.5672C3.82669 27.3339 4.68925 27.8925 5.90697 28.2102C6.48201 28.3471 7.27128 28.4457 7.98726 28.4457C9.63908 28.4457 10.8568 28.0733 11.6066 27.3011C12.6157 26.2222 12.5425 24.6887 12.5425 24.6504V5.90383C12.5425 4.92899 13.3317 4.16226 14.3352 4.16226C15.3049 4.16226 16.128 4.92899 16.128 5.90383V24.4751C16.128 25.0337 16.1618 27.6078 14.2281 29.6286C13.546 30.357 12.6834 30.9211 11.7194 31.3045C10.6426 31.7152 9.38539 31.9288 8.02672 31.9288Z"
                fill="#FFC634"
              />
              <path
                d="M30.8704 31.9617C28.2545 31.9617 25.9938 31.4414 24.1616 30.3954C22.5831 29.5246 21.3654 28.3033 20.469 26.737C18.9976 24.0918 18.9976 21.337 18.9976 20.4334V5.90383C18.9976 4.95637 19.8263 4.16226 20.7903 4.16226C21.7938 4.16226 22.5831 4.96185 22.5831 5.90383V20.4279C22.5831 21.1234 22.5831 23.2155 23.626 25.0611C24.2011 26.0688 24.9509 26.841 25.9544 27.3942C27.2116 28.0952 28.8578 28.4785 30.8704 28.4785C32.8774 28.4785 34.5292 28.0952 35.7808 27.3996C36.7504 26.841 37.5397 26.0743 38.0753 25.0995C39.1182 23.2155 39.1182 21.1289 39.1182 20.4334V5.90383C39.1182 4.95637 39.9413 4.16226 40.911 4.16226C41.9145 4.16226 42.7038 4.96185 42.7038 5.90383V20.4279C42.7038 21.337 42.7038 24.1191 41.2323 26.7315C39.9075 29.1357 37.038 31.9617 30.8704 31.9617Z"
                fill="#FFC634"
              />
              <path
                d="M66.6977 31.9946C64.6907 31.9946 62.7514 31.6112 60.9191 30.8445C59.1997 30.1106 57.6211 29.1029 56.2568 27.7775C54.8925 26.4851 53.8552 24.9516 53.0998 23.2484C52.3105 21.5068 51.9553 19.6557 51.9553 17.7772C51.9553 15.8604 52.35 14.0148 53.0998 12.2677C53.8552 10.5973 54.932 9.06387 56.2963 7.77139C57.6606 6.45152 59.273 5.43834 61.0319 4.70447C62.8641 3.97608 64.7978 3.59271 66.771 3.59271C70.0014 3.59271 73.0119 4.56755 75.5206 6.45152C76.3099 7.04299 76.4564 8.12189 75.8814 8.88862C75.2725 9.64987 74.1225 9.79774 73.3727 9.23365C71.4728 7.80425 69.2121 7.07585 66.771 7.07585C65.2658 7.07585 63.7943 7.34969 62.3962 7.91378C61.0714 8.4724 59.8536 9.23365 58.8107 10.2468C57.8072 11.2271 56.9841 12.3718 56.409 13.6643C55.834 14.9567 55.5521 16.3478 55.5521 17.7772C55.5521 19.2011 55.8396 20.5648 56.409 21.8902C56.9841 23.1772 57.7734 24.3273 58.8107 25.3021C60.9248 27.3558 63.7267 28.5114 66.7034 28.5114C68.0282 28.5114 69.2854 28.265 70.5031 27.8487C71.687 27.4325 72.7638 26.8027 73.7278 26.036C74.4833 25.4062 75.5939 25.5102 76.2422 26.2441C76.8849 26.978 76.7778 28.0897 76.028 28.6812C74.737 29.7327 73.305 30.5268 71.7603 31.0854C70.1367 31.6879 68.4172 31.9946 66.6977 31.9946Z"
                fill="#FFC634"
              />
              <path
                d="M91.4185 18.8945C90.99 18.8945 90.5728 18.8726 90.1556 18.8397C89.964 18.8288 89.7723 18.8068 89.5806 18.7849C88.6448 18.8397 87.9006 19.59 87.9006 20.5101C87.9006 21.3151 88.47 21.9888 89.2423 22.1859C89.4284 22.2078 89.6201 22.2188 89.8117 22.2407C90.3417 22.279 90.8773 22.3119 91.4185 22.3119C96.6784 22.3119 101.431 20.1924 104.83 16.7914C105.907 15.7125 106.843 14.5077 107.621 13.1933C107.142 11.8187 106.454 10.5316 105.591 9.38702C102.925 5.82721 98.6064 3.51059 93.7299 3.51059C87.1451 3.51059 81.5752 7.7276 79.7204 13.5328C79.2919 14.8637 79.0608 16.2876 79.0608 17.7608C79.0608 17.7663 79.0608 17.7663 79.0608 17.7718V17.7772C79.0608 17.7827 79.0608 17.7827 79.0608 17.7882C79.0608 19.3764 79.3201 20.9373 79.8726 22.4269C81.8627 27.9966 87.3143 32.0001 93.7243 32.0001H93.7581H93.7975C94.5022 32.0001 95.207 31.9453 95.906 31.8412C95.9568 31.8303 96.0075 31.8303 96.0582 31.8193C96.2217 31.792 96.3796 31.7646 96.5374 31.7317C96.6445 31.7153 96.7573 31.6879 96.8644 31.666C96.9546 31.6496 97.0392 31.6277 97.1237 31.6112C97.2929 31.5729 97.4564 31.5291 97.6199 31.4853C97.6255 31.4853 97.6311 31.4798 97.6368 31.4798C97.8735 31.4141 98.1103 31.3429 98.3527 31.2662C98.4937 31.2169 98.629 31.1731 98.7699 31.1293C98.7981 31.1183 98.8319 31.1074 98.8601 31.0909C98.8827 31.08 98.9052 31.069 98.9278 31.0581C99.2379 30.9486 99.5423 30.8226 99.8411 30.6912C99.9031 30.6583 99.9595 30.6419 100.021 30.609C100.354 30.4502 100.687 30.2914 101.008 30.1106C101.053 30.0832 101.104 30.0613 101.155 30.034C101.273 29.9628 101.391 29.897 101.504 29.8258C101.589 29.7711 101.679 29.7218 101.764 29.667C101.848 29.6123 101.938 29.552 102.023 29.4918C102.141 29.4151 102.26 29.3384 102.372 29.2508C102.429 29.2179 102.485 29.1741 102.541 29.1303C102.705 29.0153 102.863 28.8893 103.021 28.7634C103.032 28.7524 103.043 28.7469 103.055 28.7415C103.077 28.7196 103.1 28.7031 103.122 28.6867C103.133 28.6812 103.145 28.6648 103.156 28.6538C103.872 28.0514 103.968 26.967 103.336 26.2496C102.767 25.6088 101.842 25.45 101.115 25.8498C101.014 25.8991 100.918 25.9703 100.828 26.047C99.8636 26.8137 98.7812 27.4435 97.6029 27.8597C96.3852 28.276 95.128 28.5224 93.8032 28.5224C90.8265 28.5224 88.0302 27.3723 85.9105 25.3131C84.8732 24.3437 84.0839 23.1882 83.5089 21.9011C83.289 21.3863 83.1086 20.877 82.9733 20.3567C82.7534 19.5243 82.6463 18.6699 82.6463 17.7937C82.6463 17.2789 82.6858 16.7641 82.7591 16.2602C82.8944 15.3675 83.1368 14.5022 83.5089 13.6807C84.0839 12.3882 84.907 11.2436 85.9105 10.2633C86.9535 9.25558 88.1712 8.48885 89.496 7.93024C90.8942 7.37162 92.3656 7.09231 93.8708 7.09231C96.3119 7.09231 98.567 7.8207 100.467 9.25011C100.591 9.34321 100.737 9.41441 100.878 9.46917C102.017 10.3947 102.964 11.5448 103.646 12.8428C100.895 16.5067 96.4416 18.8945 91.4185 18.8945Z"
                fill="#FFC634"
              />
              <path
                d="M108.45 12.5196C108.45 12.5196 109.34 0.317645 127.95 0C127.95 0 123.282 17.936 108.45 12.5196Z"
                fill="#FFC634"
              />
              <path
                d="M108.715 13.6368C108.715 13.6368 116.405 14.1681 116.608 25.2364C116.602 25.2364 105.298 22.4652 108.715 13.6368Z"
                fill="#FFC634"
              />
            </svg>
            <svg
              width="129"
              height="28"
              viewBox="0 0 129 28"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="img-fluid"
            >
              <path
                d="M74.6507 27.9124H55.1051C54.423 27.9124 53.8141 27.529 53.4928 26.8992C53.2052 26.3077 53.2785 25.5738 53.707 25.0536L70.9186 4.04517H55.6745C54.7048 4.04517 53.8817 3.27844 53.8817 2.3036C53.8817 1.33423 54.7048 0.567505 55.6745 0.567505H74.6451C75.3272 0.567505 75.9361 0.950869 76.2631 1.54235C76.5506 2.16668 76.4773 2.86222 76.0489 3.3825L58.8372 24.4292H74.6507C75.6204 24.4292 76.4435 25.196 76.4435 26.1653C76.4435 27.1073 75.6204 27.9124 74.6507 27.9124Z"
                fill="#FFC634"
              />
              <path
                d="M126.365 27.9124C125.536 27.9124 124.786 27.3209 124.606 26.483C124.178 24.3526 123.495 22.6493 122.565 21.3623C121.883 20.3875 121.02 19.6865 120.056 19.2374C119.301 18.854 118.551 18.7116 117.976 18.6788C117.508 18.6788 117.006 18.7116 116.505 18.7116C115.608 18.7116 114.819 18.0161 114.746 17.1124C114.639 16.2417 115.281 15.3983 116.178 15.2668C116.319 15.2285 117.001 15.0861 118.004 15.1573C119.87 15.0532 121.342 14.6699 122.419 14.0784C123.997 13.2131 124.753 11.8494 124.753 9.79566C124.753 8.4046 124.465 7.24902 123.963 6.34538C123.569 5.68271 122.994 5.15695 122.317 4.74072C121.026 4.04519 119.701 4.01233 119.588 4.01233H110.732V26.1653C110.732 27.1073 109.942 27.9124 108.939 27.9124C107.969 27.9124 107.146 27.1073 107.146 26.1653V2.26528C107.146 1.29044 107.969 0.523712 108.939 0.523712H119.588C119.735 0.523712 120.592 0.523712 121.703 0.803021C123.281 1.18639 124.679 1.91478 125.756 2.96082C126.545 3.72207 127.188 4.66405 127.616 5.74843C128.084 6.93138 128.338 8.28959 128.338 9.79018C128.338 13.0652 126.906 15.6064 124.217 17.107C124.037 17.2056 123.856 17.2767 123.642 17.3863C124.285 17.9066 124.86 18.498 125.401 19.1936C126.692 20.9023 127.588 23.1313 128.124 25.8148C128.304 26.7568 127.695 27.6988 126.726 27.874C126.579 27.874 126.472 27.9124 126.365 27.9124Z"
                fill="#FFC634"
              />
              <path
                d="M50.967 25.4862L39.7933 1.54782C39.5396 0.956339 38.8631 0.534637 38.1753 0.534637C37.4537 0.534637 36.8448 0.923479 36.5235 1.54782L25.1749 25.4862C24.8141 26.2858 24.707 27.2661 25.4963 27.7535C26.2517 28.2081 27.1481 27.9945 27.8303 27.3318C29.1946 26.0448 31.0606 24.6099 32.859 23.531C34.6179 22.4795 36.4163 21.8223 38.2429 21.4773C38.8292 21.3459 39.4156 21.2582 40.0075 21.198C40.0583 21.2035 40.1146 21.2035 40.171 21.2035C40.3119 21.2035 40.4416 21.1925 40.5713 21.1542C41.2873 20.9844 41.8115 20.3491 41.8115 19.6098C41.8115 18.739 41.0899 18.027 40.1992 18.0106H40.1654C40.0752 18.0106 39.9906 18.0215 39.906 18.0325C39.1562 18.0982 38.4064 18.2077 37.6623 18.3666C35.6496 18.7499 33.1352 19.6919 31.2354 20.7434L38.1302 6.47131L47.6465 26.9539C48.1482 27.8959 49.225 28.1752 50.0537 27.8247C50.967 27.4085 51.3617 26.3953 50.967 25.4862Z"
                fill="#FFC634"
              />
              <path
                d="M104.762 25.4862L93.5934 1.54782C93.3397 0.956339 92.6575 0.534637 91.9754 0.534637C91.2594 0.534637 90.6449 0.923479 90.3235 1.54782L78.975 25.4862C78.6142 26.2858 78.507 27.2661 79.2963 27.7535C80.0518 28.2081 80.9481 27.9945 81.6303 27.3318C82.9946 26.0448 84.8607 24.6099 86.6591 23.531C88.418 22.4795 90.2164 21.8223 92.043 21.4773C92.6237 21.3459 93.2156 21.2582 93.8019 21.198C93.8583 21.2035 93.9147 21.2035 93.9654 21.2035C94.1064 21.2035 94.2417 21.1925 94.3714 21.1542C95.0873 20.9844 95.6116 20.3491 95.6116 19.6098C95.6116 18.739 94.8956 18.027 93.9993 18.0106H93.9654C93.8752 18.0106 93.7907 18.0215 93.7061 18.0325C92.9563 18.0982 92.2121 18.2077 91.468 18.3666C89.461 18.7499 86.9409 19.6919 85.0411 20.7434L91.9359 6.47131L101.452 26.9539C101.954 27.8959 103.036 28.1752 103.859 27.8247C104.761 27.4085 105.156 26.3953 104.762 25.4862Z"
                fill="#FFC634"
              />
              <path
                d="M19.2724 13.3117C20.9581 12.1233 22.3901 10.1024 21.9278 6.83282C21.3189 2.61581 18.0547 0.562073 13.3586 0.562073H2.74295C1.77328 0.562073 0.950195 1.3288 0.950195 2.29817V26.1763C0.950195 26.1654 0.95583 26.1599 0.95583 26.1489C0.95583 26.1599 0.95583 26.1763 0.95583 26.1873C0.95583 26.1818 0.95583 26.1763 0.95583 26.1763V26.1982V26.2037C0.95583 26.2092 0.95583 26.2092 0.95583 26.2092C0.95583 26.4447 1.00657 26.6802 1.09677 26.8883V26.8938C1.18697 27.1019 1.32228 27.299 1.49141 27.4578C1.49705 27.4688 1.50832 27.4688 1.51959 27.4798C1.67181 27.6221 1.85222 27.7426 2.05517 27.8248C2.16229 27.8686 2.26939 27.896 2.38215 27.9179C2.51745 27.9453 2.65276 27.9672 2.7937 27.9672C2.85008 27.9672 2.90645 27.9562 2.96846 27.9507H2.93464C3.84793 27.8631 4.53572 27.1183 4.53572 26.2092C4.53572 26.1489 4.55264 26.0942 4.547 26.0339V4.04521H13.3699C16.4142 4.04521 18.1055 4.98172 18.3874 7.24905C18.7087 10.075 17.3106 11.8111 14.6553 12.0904L11.9323 12.1233C10.9626 12.1233 10.1395 12.89 10.1395 13.8648C10.179 14.8068 10.9682 15.6064 11.9323 15.6064H11.9661L14.7624 15.579H14.8695C18.3873 15.579 20.321 17.2439 19.9602 20.6613C19.7122 23.2408 17.9871 24.4293 15.0837 24.4293H8.53279H7.86756C7.01064 24.5826 6.36231 25.3 6.36231 26.1818C6.36231 27.1073 7.0952 27.8631 8.02541 27.9453H8.37494H15.0837C19.8531 27.9453 23.1906 25.2946 23.5514 20.979C23.8615 17.0413 21.6346 14.1113 19.2724 13.3117Z"
                fill="#FFC634"
              />
            </svg>
          </a>
        </div>
        <div class="col-4 pr-0">
          <div
            class="float-right nav-icon-group d-flex flex-row align-items-center justify-content-end"
          >
            <form class="search-input-wrap d-flex flex-row align-items-center ">
              <input type="text" class="form-control pb-0 px-0 d-none d-lg-block" name="search" id="searchInput" placeholder="Search">
              <button type="submit" class="btn pb-0 px-0 d-none d-lg-block"><i class="fas fa-search nav-icon" aria-hidden="true"></i></button>
            </form>
            <a href="profile.html" class="text-decoration-none"
              ><i class="far fa-user-circle  nav-icon  d-none d-lg-block"></i
            ></a>
            <a
              href="cart.html"
              class="d-flex justify-content-center align-items-center btn-cart text-decoration-none px-3 py-2 text-white"
            >
              <span class="cart-sum d-none d-lg-block mr-2"
                >40.000₫</span
              >
              <span>
                <svg
                  class="cart-icon mr-2"
                  width="30"
                  height="24"
                  viewBox="0 0 30 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  class="img-fluid"
                >
                  <path
                    d="M26.04 15.6718L29.5424 5.18898C29.7181 4.68503 29.5851 4.38209 29.4433 4.18206C29.0802 3.67035 28.3335 3.66549 28.1888 3.66549L8.39518 3.66161L7.86696 1.15548C7.72423 0.564146 7.30282 0 6.4532 0H0.890398C0.31363 0 0 0.269936 0 0.808836V2.25561C0 2.77704 0.312659 2.91297 0.910789 2.91297H5.60747L9.20207 18.1741C8.63113 18.779 8.32041 19.6606 8.32041 20.4831C8.32041 22.293 9.76136 23.9612 11.6024 23.9612C13.3404 23.9612 14.6435 22.3328 14.8552 21.3618H21.856C22.0677 22.3328 23.1232 24 25.1079 24C26.9168 24 28.3879 22.4328 28.3879 20.6258C28.3879 18.8285 27.2955 17.2351 25.1263 17.2351C24.2243 17.2351 23.1542 17.7206 22.6571 18.4488H14.0551C13.4307 17.4778 12.5782 17.1768 11.716 17.1429L11.5965 16.5069H24.6845C25.671 16.5069 25.8652 16.1476 26.04 15.6718ZM25.1321 19.3528C25.8128 19.3528 26.3653 19.9053 26.3653 20.586C26.3653 21.2667 25.8128 21.8192 25.1321 21.8192C24.4515 21.8192 23.898 21.2676 23.898 20.586C23.899 19.9053 24.4515 19.3528 25.1321 19.3528ZM12.8219 20.586C12.8219 21.2744 12.2626 21.8347 11.5761 21.8347C10.8877 21.8327 10.3274 21.2744 10.3274 20.586C10.3274 19.8976 10.8877 19.3373 11.5761 19.3373C12.2626 19.3373 12.8219 19.8976 12.8219 20.586Z"
                    fill="white"
                  />
                </svg>
              </span>
              <span class="cart-count">1</span>
            </a>
          </div>
        </div>
      </nav>
      <!--END OF NAVIGATION -->

      <?php include "scripts/body.php";?>

      <div class="row px-0">
        <div class="page-section newsletter-section col py-3">
          <div class="section-body row row-eq-height newsletter-text">
            <div
              class="col-12 col-md-7 d-flex flex-column justify-content-center pl-3 pl-lg-0" 
            >
              <h5 class="text-uppercase font-weight-bold">
                Cập nhật thông tin từ Juice Bazar
              </h5>
              <p class="mb-0 w-75">
                Đăng ký nhận các thông báo mới nhất về dinh dưỡng và khuyến mãi
                từ chúng tôi!
              </p>
            </div>
            <div
              class="col-12 col-md-5 d-flex flex-column justify-content-center mt-3 mt-lg-0"
            >
              <form class="newsletter-input-wrap d-flex flex-row">
                <input
                  type="text"
                  class="form-control py-1 mr-n4"
                  placeholder="email@domain.com"
                  aria-label="Newsletter email"
                  aria-describedby="sendEmailBtn"
                />
                <button
                  class="btn"
                  type="button"
                  id="sendEmailBtn"
                  style="
                  position:  relative;
                  right:  30px;
                  color:  #ffc634;
              "
                >
                  <i class="fas fa-paper-plane" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end of row -->
      <div class="row footer">
        <div class="page-section col pt-5 px-3 px-md-2 px-lg-0 mb-4">
          <div class="row">
            <div class="col-6 col-lg-8">
              <div class="row">
                <div class="col-12 col-lg-3">
                  <div class="footer-title pl-0 mb-0">
                    <a href="?section=shopAll" class="text-decoration-none text-dark"
                      >Cửa hàng</a
                    >
                    </div>
                    <ul class="footer-list">
                    <li><a href="?section=shopFruits" class="text-decoration-none text-dark"
                      >Fruits</a
                    ></li>
                    <li><a href="?section=shopGreen" class="text-decoration-none text-dark"
                      >Green</a
                    ></li>
                    <li><a href="?section=shopCombo" class="text-decoration-none text-dark"
                      >Combo</a
                    ></li>
                  </ul>
                </div>
                <div class="col-12 col-lg-3">
                  <div class="footer-title">
                      <a href="blog.html?section=blogAll" class="text-decoration-none text-dark"
                      >Blog</a
                    >
                    </div>
                    <ul class="footer-list d-none d-lg-block">
                    <li><a href="?section=blogEatDrink" class="text-decoration-none text-dark"
                      >Ăn & Uống</a
                    ></li>
                    <li><a href="?section=blogLifestyle" class="text-decoration-none text-dark"
                      >Lối sống</a
                    ></li>
                    <li><a href="?section=blogBeauty" class="text-decoration-none text-dark"
                      >Làm đẹp</a
                    ></li>
                    <li><a href="?section=blogEvent" class="text-decoration-none text-dark"
                      >Sự kiện</a
                    ></li>
                  </ul>
                </div>
                <div class="col-12 col-lg-3">
                  <a href="?section=aboutus" class="footer-title text-decoration-none text-dark"
                    >Về chúng tôi</a
                  >
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-4">
              <div class="d-flex flex-column align-items-end">
                <svg
                  width="128"
                  height="65"
                  viewBox="0 0 128 65"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M47.5678 32.4795C46.6016 32.4795 45.7734 31.6913 45.7734 30.6888V6.07679C45.7734 5.10336 46.6016 4.28247 47.5678 4.28247C48.5739 4.28247 49.3621 5.10336 49.3621 6.07679V30.6888C49.3621 31.6913 48.5739 32.4795 47.5678 32.4795Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M8.03826 32.8754C6.96312 32.8754 6.026 32.7701 5.13247 32.5522C2.94587 32.0146 1.25688 30.8305 0.254383 29.1778C-0.250498 28.317 0.0364484 27.2418 0.897288 26.7043C1.72181 26.203 2.83327 26.4863 3.33452 27.3472C3.8394 28.139 4.69661 28.7129 5.91704 29.0362C6.49093 29.1742 7.27913 29.2795 7.99831 29.2795C9.65098 29.2795 10.8678 28.8945 11.6196 28.1027C12.6258 26.9912 12.5568 25.4112 12.5568 25.3712V6.0768C12.5568 5.0743 13.345 4.28247 14.3511 4.28247C15.3173 4.28247 16.1418 5.0743 16.1418 6.0768V25.1969C16.1418 25.7708 16.1781 28.4223 14.2421 30.5036C13.5593 31.2555 12.6984 31.833 11.7322 32.2289C10.6535 32.6575 9.40035 32.8754 8.03826 32.8754Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M30.8884 32.9081C28.2696 32.9081 26.0103 32.3706 24.1797 31.2954C22.5997 30.3982 21.3829 29.1415 20.4857 27.5251C19.0146 24.7973 19.0146 21.9678 19.0146 21.0343V6.0768C19.0146 5.10336 19.8428 4.28247 20.809 4.28247C21.8151 4.28247 22.6033 5.10336 22.6033 6.0768V21.0343C22.6033 21.7499 22.6033 23.9038 23.6457 25.8071C24.2196 26.8459 24.9715 27.6377 25.9776 28.2116C27.2344 28.9272 28.8834 29.3231 30.8921 29.3231C32.9007 29.3231 34.5534 28.9272 35.8065 28.2116C36.7763 27.6377 37.5645 26.8459 38.102 25.8434C39.1445 23.9038 39.1445 21.7535 39.1445 21.038V6.0768C39.1445 5.10336 39.969 4.28247 40.9388 4.28247C41.9413 4.28247 42.7295 5.10336 42.7295 6.0768V21.0343C42.7295 21.9678 42.7295 24.8373 41.2585 27.5251C39.9291 30.0023 37.0596 32.9081 30.8884 32.9081Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M66.7242 32.9443C64.7155 32.9443 62.7759 32.5484 60.9453 31.7602C59.2272 31.0047 57.6472 29.9659 56.2815 28.6038C54.9194 27.2744 53.877 25.6944 53.1251 23.94C52.3369 22.1457 51.9773 20.2424 51.9773 18.3064C51.9773 16.3341 52.3732 14.4308 53.1251 12.6365C53.8806 10.9148 54.9594 9.33843 56.3215 8.00903C57.6835 6.64694 59.2963 5.60813 61.0579 4.85262C62.8885 4.10075 64.8245 3.70483 66.7968 3.70483C70.0259 3.70483 73.0406 4.71096 75.5505 6.65058C76.3387 7.26079 76.484 8.37226 75.9101 9.16045C75.2999 9.94502 74.1521 10.0939 73.3966 9.51641C71.4933 8.04172 69.2341 7.29348 66.7932 7.29348C65.2894 7.29348 63.8184 7.5768 62.4163 8.15432C61.0906 8.72822 59.8701 9.51641 58.8277 10.5552C57.8216 11.565 56.997 12.7418 56.4232 14.0712C55.8493 15.4006 55.5623 16.8354 55.5623 18.3064C55.5623 19.7738 55.8493 21.1759 56.4232 22.538C56.997 23.8637 57.7852 25.0479 58.8277 26.0504C60.9417 28.1679 63.7457 29.3521 66.7205 29.3521C68.0463 29.3521 69.3031 29.0978 70.5235 28.6728C71.7076 28.2442 72.7827 27.5941 73.7489 26.8059C74.5044 26.1557 75.6159 26.2683 76.2624 27.0202C76.909 27.7757 76.8 28.9235 76.0481 29.53C74.7587 30.6088 73.3239 31.4333 71.7802 32.0072C70.1675 32.6247 68.4459 32.9443 66.7242 32.9443Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M74.2974 64.7445H54.7488C54.0659 64.7445 53.4557 64.3486 53.1324 63.7057C52.8455 63.0955 52.9181 62.34 53.3467 61.806L70.5635 40.1724H55.3154C54.3456 40.1724 53.5211 39.3806 53.5211 38.3781C53.5211 37.3792 54.3456 36.5874 55.3154 36.5874H74.2938C74.9767 36.5874 75.5833 36.9833 75.9102 37.5935C76.1971 38.2364 76.1245 38.952 75.6922 39.4896L58.4754 61.1631H74.2938C75.2636 61.1631 76.0881 61.9549 76.0881 62.9538C76.0918 63.9163 75.2636 64.7445 74.2974 64.7445Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M126.024 64.7444C125.196 64.7444 124.444 64.1342 124.266 63.2734C123.837 61.0795 123.155 59.3251 122.221 57.9994C121.538 56.9932 120.677 56.2741 119.711 55.8128C118.959 55.4169 118.204 55.2716 117.63 55.2352C117.161 55.2352 116.66 55.2716 116.159 55.2716C115.262 55.2716 114.473 54.556 114.401 53.6262C114.292 52.729 114.938 51.8609 115.836 51.7229C115.981 51.6829 116.66 51.5376 117.666 51.6139C119.53 51.5049 121.004 51.109 122.079 50.5024C123.659 49.6089 124.411 48.2105 124.411 46.0929C124.411 44.6582 124.124 43.4704 123.619 42.5406C123.224 41.8577 122.65 41.3202 121.97 40.8879C120.677 40.1724 119.352 40.136 119.243 40.136H110.384V62.9501C110.384 63.9199 109.595 64.7481 108.589 64.7481C107.619 64.7481 106.795 63.9236 106.795 62.9501V38.3417C106.795 37.3356 107.619 36.551 108.589 36.551H119.243C119.388 36.551 120.245 36.551 121.36 36.838C122.94 37.2339 124.339 37.9858 125.417 39.0609C126.206 39.8491 126.852 40.8153 127.281 41.934C127.749 43.1508 128 44.5528 128 46.0929C128 49.4636 126.565 52.0825 123.877 53.6298C123.696 53.7315 123.518 53.8078 123.303 53.9131C123.95 54.4507 124.52 55.0609 125.061 55.7764C126.351 57.5381 127.248 59.83 127.789 62.5905C127.971 63.564 127.361 64.5338 126.391 64.7118C126.238 64.7081 126.133 64.7444 126.024 64.7444Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M50.6079 62.2494L39.4315 37.601C39.1773 36.9945 38.4981 36.5586 37.8152 36.5586C37.096 36.5586 36.4858 36.9581 36.1625 37.601L24.8118 62.2494C24.4522 63.0739 24.3432 64.08 25.1351 64.5849C25.8906 65.0499 26.7877 64.8319 27.4706 64.1491C28.8363 62.8233 30.7033 61.3486 32.5012 60.2371C34.2592 59.1584 36.0608 58.4755 37.8878 58.1232C38.4726 57.9888 39.0611 57.898 39.6531 57.8399C39.7076 57.8435 39.7621 57.8435 39.8166 57.8435C39.9546 57.8435 40.089 57.8326 40.2197 57.7963C40.9317 57.6183 41.462 56.9681 41.462 56.2054C41.462 55.3082 40.7428 54.5781 39.8493 54.56H39.8166C39.7258 54.56 39.6422 54.5672 39.5587 54.5817C38.8068 54.6471 38.0586 54.7597 37.314 54.9232C35.3017 55.3191 32.7882 56.2889 30.8849 57.3677L37.7789 42.668L47.299 63.7568C47.8002 64.7266 48.879 65.0135 49.7071 64.6539C50.6079 64.2253 51.0002 63.1829 50.6079 62.2494Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M104.412 62.2494L93.2396 37.601C92.989 36.9945 92.3061 36.5586 91.6233 36.5586C90.9041 36.5586 90.2939 36.9581 89.967 37.601L78.6162 62.2494C78.2566 63.0739 78.1477 64.08 78.9395 64.5849C79.695 65.0499 80.5922 64.8319 81.275 64.1491C82.6408 62.8233 84.5077 61.3486 86.3057 60.2371C88.0673 59.1584 89.8616 58.4755 91.6923 58.1232C92.2771 57.9888 92.8655 57.898 93.4539 57.8399C93.5084 57.8435 93.5629 57.8435 93.6174 57.8435C93.7554 57.8435 93.8934 57.8326 94.0206 57.7963C94.7325 57.6183 95.2628 56.9681 95.2628 56.2054C95.2628 55.3082 94.5436 54.5781 93.6537 54.56H93.6174C93.5302 54.56 93.443 54.5672 93.3595 54.5817C92.6112 54.6471 91.863 54.7597 91.1184 54.9232C89.1098 55.3191 86.5926 56.2889 84.6893 57.3677L91.587 42.6716L101.107 63.7604C101.608 64.7302 102.691 65.0172 103.515 64.6576C104.412 64.2253 104.808 63.1829 104.412 62.2494Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M18.3355 49.7145C20.0209 48.4905 21.4556 46.4128 20.9907 43.0421C20.3805 38.6979 17.1151 36.584 12.4186 36.584H1.79796C0.831782 36.584 0.00363224 37.3758 0.00363224 38.3747V62.9613C0.00363224 62.9468 0.00726447 62.9431 0.00726447 62.9359C0.00726447 62.9504 0.00363224 62.9613 0.00363224 62.9758C0.00363224 62.9722 0 62.9685 0 62.9613V62.9831L0.00363224 62.9867C0.00363224 62.9903 0 62.9903 0 62.9903C0 63.2337 0.0508513 63.4734 0.141657 63.6877V63.695C0.232463 63.9129 0.366856 64.1127 0.537571 64.2762C0.544835 64.2834 0.555732 64.2907 0.566629 64.2979C0.722815 64.4432 0.900794 64.5667 1.10057 64.6539C1.2059 64.6975 1.3185 64.7229 1.4311 64.7483C1.56549 64.7774 1.69989 64.7956 1.84154 64.7956C1.89966 64.7956 1.95777 64.781 2.01589 64.7774H1.97957C2.89489 64.6866 3.58138 63.9202 3.58138 62.9831C3.58138 62.9213 3.59591 62.8632 3.58865 62.8015V40.169H12.415C15.4624 40.169 17.1478 41.1352 17.4347 43.4671C17.758 46.3765 16.3596 48.1672 13.7044 48.4541L10.9766 48.4905C10.0104 48.4905 9.18229 49.2823 9.18229 50.2848C9.21861 51.2546 10.0104 52.0755 10.9766 52.0755H11.0129L13.8098 52.0464H13.9151C17.4311 52.0464 19.3671 53.7608 19.0075 57.2805C18.7569 59.9356 17.0352 61.1597 14.1294 61.1597H7.58774H6.91941C6.06583 61.3195 5.41566 62.0569 5.41566 62.9649C5.41566 63.9166 6.14574 64.6939 7.07923 64.7847H7.42792H14.1367C18.9094 64.7847 22.2474 62.0569 22.6034 57.611C22.9267 53.5502 20.7037 50.5354 18.3355 49.7145Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M91.4559 19.4544C91.0273 19.4544 90.6132 19.4326 90.1919 19.3963C89.9994 19.3817 89.8069 19.3599 89.6144 19.3381C88.6773 19.3963 87.9327 20.1699 87.9327 21.1143C87.9327 21.9461 88.5066 22.6398 89.273 22.8396C89.4618 22.8614 89.6507 22.8723 89.8396 22.8941C90.3699 22.9341 90.9038 22.9704 91.4487 22.9704C96.7118 22.9704 101.466 20.7874 104.863 17.2859C105.938 16.1745 106.878 14.9322 107.656 13.5811C107.176 12.1645 106.49 10.8423 105.629 9.65824C102.963 5.99331 98.6405 3.60693 93.7624 3.60693C87.1772 3.60693 81.6053 7.95109 79.7492 13.9261C79.3206 15.2991 79.0918 16.7629 79.0918 18.2775C79.0918 18.2812 79.0954 18.2848 79.0954 18.2921V18.2957C79.0954 18.2993 79.0918 18.303 79.0918 18.3066C79.0918 19.9411 79.3533 21.5465 79.9054 23.0866C81.8995 28.8219 87.3479 32.9445 93.7624 32.9445H93.7987H93.8387C94.5433 32.9445 95.248 32.8864 95.9454 32.7811C95.9962 32.7738 96.0471 32.7702 96.0979 32.7593C96.2614 32.7338 96.4212 32.7048 96.5774 32.6685C96.6863 32.6539 96.7953 32.6249 96.9006 32.6031C96.9878 32.5849 97.075 32.5631 97.1585 32.545C97.3256 32.505 97.4927 32.4614 97.6562 32.4178C97.6634 32.4178 97.667 32.4142 97.6743 32.4142C97.914 32.3488 98.1501 32.2725 98.3862 32.1926C98.5279 32.1454 98.6623 32.0946 98.8039 32.051C98.833 32.0364 98.8621 32.0255 98.8911 32.0147C98.9165 32.0074 98.9383 31.9929 98.9565 31.982C99.2652 31.8694 99.574 31.7386 99.8682 31.6042C99.9263 31.5715 99.988 31.5497 100.05 31.5207C100.384 31.3608 100.714 31.1938 101.038 31.0085C101.085 30.9831 101.136 30.954 101.183 30.9286C101.299 30.856 101.419 30.787 101.535 30.7107C101.623 30.6562 101.71 30.6017 101.793 30.5472C101.88 30.4891 101.968 30.431 102.055 30.3692C102.175 30.2893 102.287 30.2094 102.407 30.1223C102.462 30.0859 102.52 30.0423 102.578 29.9988C102.741 29.8789 102.901 29.7481 103.057 29.621C103.068 29.6137 103.079 29.6028 103.09 29.5992C103.112 29.5774 103.134 29.5593 103.159 29.5411C103.17 29.5338 103.181 29.5193 103.192 29.5084C103.911 28.8909 104.005 27.7722 103.373 27.0312C102.807 26.3738 101.88 26.2103 101.15 26.6171C101.049 26.6716 100.951 26.7406 100.86 26.8169C99.8936 27.6051 98.8148 28.2517 97.6307 28.6839C96.4103 29.1125 95.1535 29.3631 93.8278 29.3631C90.8493 29.3631 88.0525 28.1754 85.9349 26.0614C84.8961 25.0589 84.1079 23.8748 83.534 22.549C83.3125 22.0187 83.1345 21.4957 83.0001 20.9581C82.7821 20.1009 82.6732 19.2183 82.6732 18.3175C82.6732 17.7836 82.7095 17.2569 82.7858 16.7375C82.9202 15.8221 83.1672 14.9286 83.534 14.0823C84.1079 12.7529 84.9324 11.5761 85.9349 10.5663C86.9774 9.52748 88.1942 8.73928 89.5236 8.16539C90.9256 7.58786 92.393 7.30455 93.9004 7.30455C96.3413 7.30455 98.6005 8.05642 100.5 9.52748C100.627 9.62555 100.769 9.69456 100.914 9.75268C102.055 10.708 102.999 11.8884 103.686 13.2287C100.936 16.9954 96.4757 19.4544 91.4559 19.4544Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M108.491 12.8908C108.491 12.8908 109.385 0.326901 128 0C127.996 0 123.329 18.4663 108.491 12.8908Z"
                    fill="#FFC634"
                  />
                  <path
                    d="M108.753 14.0422C108.753 14.0422 116.446 14.5871 116.646 25.9887C116.646 25.9887 105.338 23.1301 108.753 14.0422Z"
                    fill="#FFC634"
                  />
                </svg>
                <div class="mt-4 text-right">
                  Hotline:
                  <a
                    href="tel:0966001084"
                    class="text-decoration-none font-weight-bold text-dark"
                    >096 600 1084</a
                  >
                </div>
                <div class="mt-2 text-right">
                  Email:
                  <a
                    href="mailto:hello@juicebazar.com"
                    class="text-decoration-none font-weight-bold text-dark"
                    >hello@juicebazar.com</a
                  >
                </div>
                <div class="social-btn-group mt-3">
                  <a
                    href="#!"
                    class="fab fa-facebook-square text-decoration-none text-dark"
                    style="font-size:24px"
                  ></a>
                  <a
                    href="#!"
                    class="fab fa-instagram text-decoration-none text-dark"
                    style="font-size:24px"
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of row -->
    </div>

    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
    <!-- Font awesome  -->
    <script src="../assets/js/all.min.js"></script>
    
    <!-- custom script -->
    <script src="../assets/js/custom.js"></script>
  </body>
</html>