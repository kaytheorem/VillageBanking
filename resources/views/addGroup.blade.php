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
                    <h2 class="geex-content__header__title">Add Group </h2>
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
                                                        <img src="dashboard/assets/img/avatar/user.svg"
                                                            alt="Popup Img" class="" />
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
                                                        <img src="dashboard/assets/img/avatar/user.svg"
                                                            alt="Popup Img" class="" />
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
                                                        <img src="dashboard/assets/img/avatar/user.svg"
                                                            alt="Popup Img" class="" />
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
                                                        <img src="dashboard/assets/img/avatar/user.svg"
                                                            alt="Popup Img" class="" />
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
                                    <img class="user-img" src="dashboard/assets/img/avatar/user.svg"
                                        alt="user" />
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
                        <form id="groupForm" action="{{ route('group.store') }}" method="POST">
                            @csrf

                            <!-- Step 1: Group Details -->
                            <div class="form-step active" id="step-1">
                                <h2>Group Details</h2>
                                </br> </br>
                                <div class="geex-content__form__single__box">
                                    <div class="input-wrapper input-icon">
                                        <label for="group_name" class="input-label">Group Name</label>
                                        <input type="text" id="group_name" name="group_name"
                                            placeholder="Enter group name" class="form-control" required>
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>

                                <!-- Navigation Button to Next Step -->
                                <button type="button" onclick="nextStep()"
                                    class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>

                            <!-- Step 2: Constitution Details -->
                            <div class="form-step" id="step-2">
                                <h2>Group Constitution</h2>
                                </br> </br>

                                <div class="geex-content__form__single__box">
                                    <div class="input-wrapper input-icon">
                                        <label for="cycle_duration" class="input-label">Cycle Duration(Weeks)</label>
                                        <input type="number" id="cycle_duration" name="cycle_duration"
                                            placeholder="Enter cycle duration" class="form-control" required>
                                        <i class="uil uil-calendar-alt"></i>
                                    </div>

                                    <div class="input-wrapper input-icon">
                                        <label for="minimum_savings" class="input-label">Minimum Savings</label>
                                        <input type="number" id="minimum_savings" name="minimum_savings"
                                            placeholder="Enter minimum savings" class="form-control" step="0.01"
                                            required>
                                        <i class="uil uil-dollar-alt"></i>
                                    </div>

                                    <div class="input-wrapper input-icon">
                                        <label for="initial_contribution" class="input-label">Initial
                                            Contribution</label>
                                        <input type="number" id="initial_contribution" name="initial_contribution"
                                            placeholder="Enter initial contribution" class="form-control"
                                            step="0.01" required>
                                        <i class="uil uil-moneybag"></i>
                                    </div>

                                    <div class="input-wrapper input-icon">
                                        <label for="loan_term" class="input-label">Loan Term(Weeks)</label>
                                        <input type="number" id="loan_term" name="loan_term"
                                            placeholder="Enter loan term" class="form-control" required>
                                        <i class="uil uil-schedule"></i>
                                    </div>

                                    <div class="input-wrapper input-icon">
                                        <label for="meeting_frequency" class="input-label">Meeting Frequency</label>
                                        <select id="meeting_frequency" name="meeting_frequency" class="form-control"
                                            required>
                                            <option value="" disabled selected>Select meeting frequency</option>
                                            <option value="weekly">Weekly</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="2 months">2 Months</option>
                                        </select>
                                        <i class="uil uil-calendar-alt"></i>
                                    </div>



                                    <div class="input-wrapper input-icon">
                                        <label for="late_payment_fee" class="input-label">Late Payment
                                            Percentage</label>
                                        <input type="number" id="late_payment_fee" name="late_payment_fee"
                                            placeholder="Enter late payment percentage" class="form-control"
                                            step="0.01" required>
                                        <i class="uil uil-dollar-alt"></i>
                                    </div>
                                </div>

                                <!-- Navigation Buttons for Previous and Submit -->
                                <button type="button" onclick="prevStep()"
                                    class="btn btn-secondary">Previous</button>
                                <button type="submit" class="btn btn-success">Create Group</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- JavaScript for Tab Navigation -->
            <script>
                function nextStep() {
                    document.getElementById("step-1").classList.remove("active");
                    document.getElementById("step-2").classList.add("active");
                }

                function prevStep() {
                    document.getElementById("step-2").classList.remove("active");
                    document.getElementById("step-1").classList.add("active");
                }
            </script>

            <style>
                /* Hide inactive form steps */
                .form-step {
                    display: none;
                }

                .form-step.active {
                    display: block;
                }

                /* Basic styling for button positioning */
                .btn {
                    margin-top: 15px;
                }

                .btn-primary,
                .btn-secondary,
                .btn-success {
                    padding: 10px 15px 15px 15px;
                    border: none;
                    cursor: pointer;
                    margin: 15px;
                }

                .btn-primary {
                    background-color: #007bff;
                    color: white;
                }

                .btn-secondary {
                    background-color: #6c757d;
                    color: white;
                }

                .btn-success {
                    background-color: #28a745;
                    color: white;
                }

                /* General styling for input-wrapper */
                .input-wrapper {
                    position: relative;
                    margin-bottom: 15px;
                }

                /* Style for the select element to match the form-control */
                .form-control {
                    width: 100%;
                    padding: 10px 40px 10px 15px;
                    /* Padding for icon positioning */
                    font-size: 16px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    appearance: none;
                    /* Remove default dropdown arrow */
                    -webkit-appearance: none;
                    -moz-appearance: none;
                }

                /* Dropdown arrow styling */
                .form-control select {
                    background-color: transparent;
                }

                /* Icon positioning */
                .input-icon i {
                    position: absolute;
                    right: 15px;
                    top: 50%;
                    transform: translateY(-50%);
                    color: #888;
                    pointer-events: none;
                    /* Make icon unclickable */
                }

                /* Adjust icon for select elements */
                .input-wrapper.select-wrapper {
                    display: flex;
                    align-items: center;
                }

                /* Custom arrow for select dropdowns */
                .select-wrapper::after {
                    content: '\25BC';
                    /* Unicode for downward arrow */
                    font-size: 12px;
                    position: absolute;
                    right: 15px;
                    top: 50%;
                    transform: translateY(-50%);
                    color: #888;
                    pointer-events: none;
                }
            </style>

        </div>
    </main>

    <!-- inject:js-->
    @include('auth.inc.js')
    <!-- endinject-->
</body>


</html>
