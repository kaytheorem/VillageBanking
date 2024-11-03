<!doctype html>
<html lang="en" dir="ltr">


<head>

    <title>Village Bank Dashboard</title>
    @include('auth.inc.head')

</head>

<body class="geex-dashboard demo-invoice">

    <header class="geex-header">

    </header>



    <main class="geex-main-content">


        @include('auth.inc.sidebar')



        <div class="geex-content">
            <div class="geex-content__header">
                <div class="geex-content__header__content">
                    <h2 class="geex-content__header__title">Village Banking </h2>
                    <p class="geex-content__header__subtitle">Welcome to Village Bank Modern Dashboard</p>
                </div>

                <div class="geex-content__header__action">

                    <div class="geex-content__header__action__wrap">
                        <ul class="geex-content__header__quickaction">
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18C11.7767 18.0022 13.5025 17.407 14.9 16.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29L16.31 14.9C17.407 13.5025 18.0022 11.7767 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10ZM10 4C11.1867 4 12.3467 4.35189 13.3334 5.01118C14.3201 5.67047 15.0891 6.60754 15.5433 7.7039C15.9974 8.80026 16.1162 10.0067 15.8847 11.1705C15.6532 12.3344 15.0818 13.4035 14.2426 14.2426C13.4035 15.0818 12.3344 15.6532 11.1705 15.8847C10.0067 16.1162 8.80026 15.9974 7.7039 15.5433C6.60754 15.0891 5.67047 14.3201 5.01118 13.3334C4.35189 12.3467 4 11.1867 4 10C4 8.4087 4.63214 6.88258 5.75736 5.75736C6.88258 4.63214 8.4087 4 10 4Z"
                                            fill="#464255" />
                                    </svg>
                                </a>
                                <div class="geex-content__header__searchform geex-content__header__popup">
                                    <input type="text" placeholder="Search" class="geex-content__header__btn" />
                                    <i class="uil uil-search"></i>
                                </div>
                            </li>
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 11.9998C12.5523 11.9998 13 11.552 13 10.9998C13 10.4475 12.5523 9.99976 12 9.99976C11.4477 9.99976 11 10.4475 11 10.9998C11 11.552 11.4477 11.9998 12 11.9998Z"
                                            fill="#464255" />
                                        <path
                                            d="M8 11.9998C8.55229 11.9998 9 11.552 9 10.9998C9 10.4475 8.55229 9.99976 8 9.99976C7.44772 9.99976 7 10.4475 7 10.9998C7 11.552 7.44772 11.9998 8 11.9998Z"
                                            fill="#464255" />
                                        <path
                                            d="M16 11.9998C16.5523 11.9998 17 11.552 17 10.9998C17 10.4475 16.5523 9.99976 16 9.99976C15.4477 9.99976 15 10.4475 15 10.9998C15 11.552 15.4477 11.9998 16 11.9998Z"
                                            fill="#464255" />
                                        <path
                                            d="M3.05007 21.87C3.25937 21.9564 3.48366 22.0005 3.71007 22C3.93336 22.0011 4.15461 21.9574 4.36072 21.8716C4.56684 21.7857 4.75364 21.6593 4.91007 21.5L7.41007 19H17.0001C18.3262 19 19.5979 18.4732 20.5356 17.5355C21.4733 16.5979 22.0001 15.3261 22.0001 14V8C22.0001 6.67392 21.4733 5.40215 20.5356 4.46447C19.5979 3.52678 18.3262 3 17.0001 3H7.00007C5.67399 3 4.40222 3.52678 3.46454 4.46447C2.52686 5.40215 2.00007 6.67392 2.00007 8V20.29C1.9969 20.6282 2.09528 20.9596 2.28247 21.2412C2.46966 21.5229 2.73705 21.7419 3.05007 21.87V21.87ZM4.00007 8C4.00007 7.20435 4.31614 6.44129 4.87875 5.87868C5.44136 5.31607 6.20442 5 7.00007 5H17.0001C17.7957 5 18.5588 5.31607 19.1214 5.87868C19.684 6.44129 20.0001 7.20435 20.0001 8V14C20.0001 14.7957 19.684 15.5587 19.1214 16.1213C18.5588 16.6839 17.7957 17 17.0001 17H7.00007C6.86847 16.9992 6.738 17.0245 6.61617 17.0742C6.49433 17.124 6.38351 17.1973 6.29007 17.29L4.00007 19.59V8Z"
                                            fill="#464255" />
                                    </svg>
                                    <span class="geex-content__header__badge">84</span>
                                </a>
                                <div class="geex-content__header__popup geex-content__header__popup--message">
                                    <h3 class="geex-content__header__popup__title">
                                        Messages<span class="content__header__popup__title__count">7</span>
                                    </h3>
                                    <div class="geex-content__header__popup__content">
                                        <ul class="geex-content__header__popup__items">
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mahabub Alam
                                                            <span class="geex-content__header__popup__item__time">1.2
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            David Warner
                                                            <span class="geex-content__header__popup__item__time">1.7
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mitchel Marsh
                                                            <span class="geex-content__header__popup__item__time">2.2
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mike Hesson
                                                            <span class="geex-content__header__popup__item__time">2.6
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count">3</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 20H10C10 20.5304 10.2107 21.0391 10.5858 21.4142C10.9609 21.7893 11.4696 22 12 22C12.5304 22 13.0391 21.7893 13.4142 21.4142C13.7893 21.0391 14 20.5304 14 20H20C20.2652 20 20.5196 19.8946 20.7071 19.7071C20.8946 19.5196 21 19.2652 21 19C21 18.7348 20.8946 18.4804 20.7071 18.2929C20.5196 18.1054 20.2652 18 20 18V11C20 8.87827 19.1571 6.84344 17.6569 5.34315C16.1566 3.84285 14.1217 3 12 3C9.87827 3 7.84344 3.84285 6.34315 5.34315C4.84285 6.84344 4 8.87827 4 11V18C3.73478 18 3.48043 18.1054 3.29289 18.2929C3.10536 18.4804 3 18.7348 3 19C3 19.2652 3.10536 19.5196 3.29289 19.7071C3.48043 19.8946 3.73478 20 4 20V20ZM6 11C6 9.4087 6.63214 7.88258 7.75736 6.75736C8.88258 5.63214 10.4087 5 12 5C13.5913 5 15.1174 5.63214 16.2426 6.75736C17.3679 7.88258 18 9.4087 18 11V18H6V11Z"
                                            fill="#464255" />
                                    </svg>
                                    <span class="geex-content__header__badge bg-info">2</span>
                                </a>
                                <div class="geex-content__header__popup geex-content__header__popup--notification">
                                    <h3 class="geex-content__header__popup__title">
                                        Notification<span class="content__header__popup__title__count">5</span>
                                    </h3>
                                    <div class="geex-content__header__popup__content">
                                        <ul class="geex-content__header__popup__items">
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Mahabub Alam
                                                            <span class="geex-content__header__popup__item__time">1.3
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Adam Smith
                                                            <span class="geex-content__header__popup__item__time">1.7
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            John Doe
                                                            <span class="geex-content__header__popup__item__time">2.1
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <div class="geex-content__header__popup__item__img">
                                                        <img src="dashboard/assets/img/avatar/user.svg" alt="Popup Img"
                                                            class="" />
                                                    </div>
                                                    <div class="geex-content__header__popup__item__content">
                                                        <h5 class="geex-content__header__popup__item__title">
                                                            Bruce Wayne
                                                            <span class="geex-content__header__popup__item__time">2.4
                                                                hrs ago</span>
                                                        </h5>
                                                        <div class="geex-content__header__popup__item__desc">
                                                            Lorem ipsum dolor amet cosec...
                                                            <span
                                                                class="geex-content__header__popup__item__count"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="geex-content__header__quickaction__item">
                                <a href="#" class="geex-content__header__quickaction__link">
                                    <img class="user-img" src="dashboard/assets/img/avatar/user.svg" alt="user" />
                                </a>
                                <div class="geex-content__header__popup geex-content__header__popup--author">
                                    <div class="geex-content__header__popup__header">
                                        <div class="geex-content__header__popup__header__img">
                                            <img src="dashboard/assets/img/avatar/user.svg" alt="user" />
                                        </div>
                                        <div class="geex-content__header__popup__header__content">
                                            <h3 class="geex-content__header__popup__header__title">Mahabub Alam</h3>
                                            <span class="geex-content__header__popup__header__subtitle">CEO,
                                                ThemeWant</span>
                                        </div>
                                    </div>
                                    <div class="geex-content__header__popup__content">
                                        <ul class="geex-content__header__popup__items">
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-user"></i>
                                                    Profile
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-cog"></i>
                                                    Settings
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-dollar-alt"></i>
                                                    Billing
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-users-alt"></i>
                                                    Activity
                                                </a>
                                            </li>
                                            <li class="geex-content__header__popup__item">
                                                <a class="geex-content__header__popup__link" href="#">
                                                    <i class="uil uil-bell"></i>
                                                    Help
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="geex-content__header__popup__footer">
                                        <a href="#" class="geex-content__header__popup__footer__link">
                                            <i class="uil uil-arrow-up-left"></i>Logout
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="geex-content__wrapper">
                <div class="geex-content__section-wrapper">
                    <div class="geex-content__summary">
                        <div class="geex-content__summary__count">
                            <div class="geex-content__summary__count__single primay-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">982</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Invoice Sent</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M26.9908 5.10791C26.7542 4.84524 26.4229 4.68728 26.0699 4.66878C25.7168 4.65027 25.3709 4.77274 25.1081 5.00925L12.7148 16.1626L6.94277 10.3906C6.81978 10.2632 6.67265 10.1617 6.50998 10.0918C6.34731 10.0219 6.17235 9.98512 5.99531 9.98358C5.81827 9.98204 5.6427 10.0158 5.47884 10.0828C5.31497 10.1499 5.16611 10.2489 5.04091 10.3741C4.91572 10.4992 4.81672 10.6481 4.74968 10.812C4.68264 10.9758 4.6489 11.1514 4.65044 11.3285C4.65198 11.5055 4.68876 11.6804 4.75864 11.8431C4.82852 12.0058 4.93009 12.1529 5.05744 12.2759L11.7241 18.9426C11.9656 19.184 12.2905 19.3235 12.6319 19.3325C12.9732 19.3414 13.305 19.219 13.5588 18.9906L26.8921 6.99058C27.1548 6.75397 27.3127 6.42272 27.3312 6.06968C27.3498 5.71663 27.2273 5.37069 26.9908 5.10791Z"
                                            fill="#464255" />
                                        <path
                                            d="M25.1085 13.0093L12.7152 24.1626L6.94321 18.3906C6.69174 18.1478 6.35494 18.0134 6.00534 18.0164C5.65575 18.0195 5.32133 18.1597 5.07412 18.4069C4.82691 18.6541 4.68668 18.9885 4.68364 19.3381C4.68061 19.6877 4.815 20.0245 5.05788 20.276L11.7245 26.9426C11.966 27.1841 12.291 27.3236 12.6323 27.3325C12.9737 27.3415 13.3054 27.2191 13.5592 26.9906L26.8925 14.9906C27.1473 14.752 27.2983 14.423 27.3131 14.0742C27.3279 13.7255 27.2054 13.3848 26.9718 13.1254C26.7383 12.866 26.4123 12.7086 26.0639 12.6868C25.7155 12.6651 25.3725 12.7809 25.1085 13.0093Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                            <div class="geex-content__summary__count__single danger-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">45</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Pending Invoice</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M15.9997 1.33321C13.0989 1.33321 10.2632 2.19339 7.85132 3.80498C5.4394 5.41658 3.55953 7.7072 2.44945 10.3872C1.33936 13.0672 1.04891 16.0161 1.61483 18.8612C2.18075 21.7063 3.57761 24.3196 5.62878 26.3708C7.67995 28.4219 10.2933 29.8188 13.1384 30.3847C15.9834 30.9506 18.9324 30.6602 21.6124 29.5501C24.2924 28.44 26.583 26.5602 28.1946 24.1482C29.8062 21.7363 30.6664 18.9007 30.6664 15.9999C30.6618 12.1114 29.1151 8.38358 26.3655 5.63404C23.616 2.8845 19.8881 1.33779 15.9997 1.33321ZM15.9997 27.9999C13.6263 27.9999 11.3062 27.2961 9.33284 25.9775C7.35945 24.6589 5.82138 22.7848 4.91313 20.5921C4.00488 18.3994 3.76724 15.9866 4.23026 13.6588C4.69328 11.331 5.83617 9.19282 7.5144 7.51459C9.19263 5.83636 11.3308 4.69347 13.6586 4.23045C15.9864 3.76743 18.3992 4.00507 20.5919 4.91332C22.7846 5.82157 24.6587 7.35964 25.9773 9.33303C27.2959 11.3064 27.9997 13.6265 27.9997 15.9999C27.9958 19.1813 26.7303 22.2313 24.4807 24.4809C22.2311 26.7305 19.1811 27.996 15.9997 27.9999Z"
                                            fill="#464255" />
                                        <path
                                            d="M18.9433 7.55344C18.1839 7.05351 17.3108 6.75286 16.4046 6.67923C15.4984 6.60559 14.5882 6.76134 13.758 7.13211C12.8218 7.54836 12.0291 8.23143 11.4792 9.09587C10.9292 9.96031 10.6463 10.9677 10.666 11.9921V12.0001C10.6671 12.3537 10.8086 12.6925 11.0594 12.9417C11.3101 13.191 11.6497 13.3305 12.0033 13.3294C12.357 13.3284 12.6957 13.1869 12.945 12.9361C13.1943 12.6853 13.3337 12.3457 13.3327 11.9921C13.3191 11.4931 13.4503 11.0009 13.7106 10.5749C13.9709 10.149 14.3491 9.80763 14.7993 9.59211C15.224 9.3921 15.6928 9.30424 16.161 9.33692C16.6292 9.3696 17.0813 9.52172 17.474 9.77878C17.8246 10.0106 18.1154 10.3221 18.3227 10.6877C18.53 11.0533 18.6479 11.4627 18.6669 11.8826C18.6859 12.3025 18.6054 12.7209 18.4319 13.1037C18.2584 13.4865 17.9969 13.8229 17.6687 14.0854C16.756 14.7825 16.0122 15.6761 15.4923 16.7001C14.9725 17.7241 14.6901 18.852 14.666 20.0001C14.6666 20.1752 14.7017 20.3485 14.7693 20.51C14.8369 20.6715 14.9356 20.8182 15.0598 20.9416C15.1841 21.0649 15.3314 21.1626 15.4934 21.2291C15.6554 21.2955 15.8289 21.3294 16.004 21.3288C16.1791 21.3282 16.3524 21.2931 16.5139 21.2255C16.6754 21.1579 16.8221 21.0592 16.9454 20.935C17.0688 20.8107 17.1665 20.6634 17.233 20.5014C17.2994 20.3394 17.3333 20.1659 17.3327 19.9908C17.3582 19.2435 17.5512 18.5115 17.8974 17.8488C18.2435 17.186 18.734 16.6094 19.3327 16.1614C19.9879 15.6361 20.5098 14.9634 20.8559 14.1982C21.202 13.4329 21.3624 12.5968 21.3242 11.7578C21.286 10.9188 21.0502 10.1008 20.636 9.37015C20.2218 8.63954 19.6409 8.01708 18.9407 7.55344H18.9433Z"
                                            fill="#464255" />
                                        <path
                                            d="M16.0003 25.3335C16.7367 25.3335 17.3337 24.7365 17.3337 24.0001C17.3337 23.2637 16.7367 22.6668 16.0003 22.6668C15.2639 22.6668 14.667 23.2637 14.667 24.0001C14.667 24.7365 15.2639 25.3335 16.0003 25.3335Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                            <div class="geex-content__summary__count__single success-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">73</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Paid Invoice</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M15.9997 1.33335C13.0989 1.33335 10.2632 2.19353 7.85132 3.80513C5.4394 5.41672 3.55953 7.70734 2.44945 10.3873C1.33936 13.0673 1.04891 16.0163 1.61483 18.8613C2.18075 21.7064 3.57761 24.3197 5.62878 26.3709C7.67995 28.4221 10.2933 29.8189 13.1384 30.3849C15.9834 30.9508 18.9324 30.6603 21.6124 29.5502C24.2924 28.4402 26.583 26.5603 28.1946 24.1484C29.8062 21.7365 30.6664 18.9008 30.6664 16C30.6618 12.1116 29.1151 8.38372 26.3655 5.63418C23.616 2.88464 19.8881 1.33793 15.9997 1.33335ZM15.9997 28C13.6263 28 11.3062 27.2962 9.33284 25.9776C7.35945 24.6591 5.82138 22.7849 4.91313 20.5922C4.00488 18.3995 3.76724 15.9867 4.23026 13.6589C4.69328 11.3312 5.83617 9.19296 7.5144 7.51473C9.19263 5.8365 11.3308 4.69361 13.6586 4.23059C15.9864 3.76757 18.3992 4.00521 20.5919 4.91346C22.7846 5.82171 24.6587 7.35978 25.9773 9.33317C27.2959 11.3066 27.9997 13.6266 27.9997 16C27.9962 19.1815 26.7307 22.2317 24.4811 24.4814C22.2314 26.7311 19.1812 27.9965 15.9997 28Z"
                                            fill="#464255" />
                                        <path
                                            d="M21.7648 11.684L14.7061 18.1546L11.6088 15.0573C11.4858 14.93 11.3387 14.8284 11.176 14.7585C11.0133 14.6886 10.8384 14.6518 10.6613 14.6503C10.4843 14.6488 10.3087 14.6825 10.1449 14.7495C9.98099 14.8166 9.83212 14.9156 9.70693 15.0408C9.58174 15.166 9.48274 15.3148 9.41569 15.4787C9.34865 15.6426 9.31492 15.8181 9.31646 15.9952C9.318 16.1722 9.35478 16.3472 9.42466 16.5098C9.49453 16.6725 9.59611 16.8196 9.72346 16.9426L13.7235 20.9426C13.9664 21.1857 14.2939 21.3255 14.6374 21.3329C14.981 21.3404 15.3142 21.2149 15.5675 20.9826L23.5675 13.6493C23.8281 13.4103 23.9831 13.0775 23.9983 12.7241C24.0136 12.3708 23.8878 12.0259 23.6488 11.7653C23.4097 11.5047 23.077 11.3497 22.7236 11.3344C22.3703 11.3192 22.0254 11.4449 21.7648 11.684Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                            <div class="geex-content__summary__count__single warning-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">168</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Unpaid Invoices</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M15.9997 1.33322C13.0989 1.33322 10.2632 2.1934 7.85132 3.805C5.4394 5.41659 3.55953 7.70721 2.44945 10.3872C1.33936 13.0672 1.04891 16.0162 1.61483 18.8612C2.18075 21.7063 3.57761 24.3196 5.62878 26.3708C7.67995 28.422 10.2933 29.8188 13.1384 30.3847C15.9834 30.9506 18.9324 30.6602 21.6124 29.5501C24.2924 28.44 26.583 26.5602 28.1946 24.1482C29.8062 21.7363 30.6664 18.9007 30.6664 15.9999C30.6618 12.1115 29.1151 8.38359 26.3655 5.63405C23.616 2.88451 19.8881 1.3378 15.9997 1.33322ZM15.9997 27.9999C13.6263 27.9999 11.3062 27.2961 9.33284 25.9775C7.35945 24.6589 5.82138 22.7848 4.91313 20.5921C4.00488 18.3994 3.76724 15.9866 4.23026 13.6588C4.69328 11.331 5.83617 9.19283 7.5144 7.5146C9.19263 5.83637 11.3308 4.69348 13.6586 4.23046C15.9864 3.76744 18.3992 4.00508 20.5919 4.91333C22.7846 5.82158 24.6587 7.35965 25.9773 9.33304C27.2959 11.3064 27.9997 13.6265 27.9997 15.9999C27.9958 19.1813 26.7303 22.2313 24.4807 24.4809C22.2311 26.7305 19.1811 27.996 15.9997 27.9999Z"
                                            fill="#464255" />
                                        <path
                                            d="M16.0003 8.00001C15.6467 8.00001 15.3076 8.14048 15.0575 8.39053C14.8075 8.64058 14.667 8.97972 14.667 9.33334V18.6667C14.667 19.0203 14.8075 19.3594 15.0575 19.6095C15.3076 19.8595 15.6467 20 16.0003 20C16.354 20 16.6931 19.8595 16.9431 19.6095C17.1932 19.3594 17.3337 19.0203 17.3337 18.6667V9.33334C17.3337 8.97972 17.1932 8.64058 16.9431 8.39053C16.6931 8.14048 16.354 8.00001 16.0003 8.00001Z"
                                            fill="#464255" />
                                        <path
                                            d="M16.0003 23.9999C16.7367 23.9999 17.3337 23.403 17.3337 22.6666C17.3337 21.9302 16.7367 21.3332 16.0003 21.3332C15.2639 21.3332 14.667 21.9302 14.667 22.6666C14.667 23.403 15.2639 23.9999 16.0003 23.9999Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="geex-content__summary__balance">
                            <img src="assets/img/balance-bg.svg" class="geex-content__summary__balance__img"
                                alt="Invoice" />
                            <div class="geex-content__summary__balance__content">
                                <span class="geex-content__summary__balance__subtitle">Balance</span>
                                <h2 class="geex-content__summary__balance__title">$ 1,500.00</h2>
                                <span class="geex-content__summary__balance__time">Tuesday, February 2nd 2024, 9:24
                                    AM</span>
                                <span class="geex-content__summary__balance__chip">Main Wallet</span>
                                <button class="geex-content__summary__balance__more geex-content__toggle__btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 28 28" fill="none">
                                        <path
                                            d="M14.0003 8.16667C15.289 8.16667 16.3337 7.122 16.3337 5.83333C16.3337 4.54467 15.289 3.5 14.0003 3.5C12.7117 3.5 11.667 4.54467 11.667 5.83333C11.667 7.122 12.7117 8.16667 14.0003 8.16667Z"
                                            fill="white" />
                                        <path
                                            d="M14.0003 16.3334C15.289 16.3334 16.3337 15.2887 16.3337 14C16.3337 12.7114 15.289 11.6667 14.0003 11.6667C12.7117 11.6667 11.667 12.7114 11.667 14C11.667 15.2887 12.7117 16.3334 14.0003 16.3334Z"
                                            fill="white" />
                                        <path
                                            d="M14.0003 24.4999C15.289 24.4999 16.3337 23.4553 16.3337 22.1666C16.3337 20.8779 15.289 19.8333 14.0003 19.8333C12.7117 19.8333 11.667 20.8779 11.667 22.1666C11.667 23.4553 12.7117 24.4999 14.0003 24.4999Z"
                                            fill="white" />
                                    </svg>
                                </button>
                                <ul
                                    class="geex-content__summary__balance__more__content geex-content__toggle__content ">
                                    <li><a href="#">View Statement</a></li>
                                    <li><a href="#">Withdraw</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="geex-content__invoice">

                        <div class="geex-content__invoice__chat">
                            <button class="geex-content__invoice__chat__toggler">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3 13H18.59L13.29 18.29C13.1963 18.383 13.1219 18.4936 13.0711 18.6154C13.0203 18.7373 12.9942 18.868 12.9942 19C12.9942 19.132 13.0203 19.2627 13.0711 19.3846C13.1219 19.5064 13.1963 19.617 13.29 19.71C13.383 19.8037 13.4936 19.8781 13.6154 19.9289C13.7373 19.9797 13.868 20.0058 14 20.0058C14.132 20.0058 14.2627 19.9797 14.3846 19.9289C14.5064 19.8781 14.617 19.8037 14.71 19.71L21.71 12.71C21.8037 12.617 21.8781 12.5064 21.9289 12.3846C21.9797 12.2627 22.0058 12.132 22.0058 12C22.0058 11.868 21.9797 11.7373 21.9289 11.6154C21.8781 11.4936 21.8037 11.383 21.71 11.29L14.71 4.29C14.6168 4.19676 14.5061 4.1228 14.3843 4.07234C14.2624 4.02188 14.1319 3.99591 14 3.99591C13.7337 3.99591 13.4783 4.1017 13.29 4.29C13.1968 4.38324 13.1228 4.49393 13.0723 4.61575C13.0219 4.73758 12.9959 4.86814 12.9959 5C12.9959 5.2663 13.1017 5.5217 13.29 5.71L18.59 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13Z"
                                        fill="#464255" />
                                </svg>
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- inject:js-->
    @include('auth.inc.js')
    <!-- endinject-->
</body>


</html>
