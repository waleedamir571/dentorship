<?php include 'partials/header.php'; ?>



<div class="banner-area-start">
    <div class="container-full-header">
        <div class="row">
            <div class="col-lg-6">
                <img src="assets/images/home/signup.png" alt="">

            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="form-container">
                        <div class="form-card">
                            <h1 class="form-title ptb-15">Create your account</h1>

                            <form>
                                <!-- Name fields - Two columns -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="firstName" >First Name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="First name...">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                    </div>
                                </div>

                                <!-- Username field -->
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" placeholder="Username...">
                                </div>

                                <!-- Email field -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Email address">
                                </div>

                                <!-- Password fields - Two columns -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="password-input">
                                            <input type="password" id="password" placeholder="Create password">
                                            <button type="button" class="password-toggle"
                                                onclick="togglePasswordVisibility('password')">
                                                <i class="fa-solid fa-eye" id="password-icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm Password</label>
                                        <div class="password-input">
                                            <input type="password" id="confirmPassword" placeholder="Confirm password">
                                            <button type="button" class="password-toggle"
                                                onclick="togglePasswordVisibility('confirmPassword')">
                                                <i class="fa-solid fa-eye" id="confirmPassword-icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Terms checkbox -->
                                <div class="d-flex space-between">


                                    <div class="form-check">
                                        <input type="checkbox" id="terms">
                                        <label for="terms">
                                            I agree to the <a href="#" class="terms-link">Terms and Conditions</a>
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="form-action">
                                        <button type="submit" class="submit-button">Create Account &nbsp; <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M3.75 12H20.25" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></button>
                                    </div>
                                </div>

                                <!-- Or divider -->
                                <div class="divider">
                                    <span class="signup">Sign up with</span>
                                </div>

                                <!-- Social sign-in buttons -->
                                <div class="social-buttons">
                                    <div class="google-btn">
                                        <div class="google-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_700_3607)">
                                                    <path
                                                        d="M4.43242 12.0846L3.73625 14.6835L1.19176 14.7373C0.431328 13.3269 0 11.7132 0 9.99832C0 8.34008 0.403281 6.77633 1.11812 5.39941H1.11867L3.38398 5.81473L4.37633 8.06645C4.16863 8.67195 4.05543 9.32195 4.05543 9.99832C4.05551 10.7324 4.18848 11.4357 4.43242 12.0846Z"
                                                        fill="#FBBB00" />
                                                    <path
                                                        d="M19.8252 8.13184C19.94 8.73676 19.9999 9.36148 19.9999 9.99996C19.9999 10.7159 19.9246 11.4143 19.7812 12.0879C19.2944 14.3802 18.0224 16.3818 16.2604 17.7983L16.2598 17.7978L13.4065 17.6522L13.0027 15.1313C14.1719 14.4456 15.0857 13.3725 15.567 12.0879H10.2197V8.13184H15.645H19.8252Z"
                                                        fill="#518EF8" />
                                                    <path
                                                        d="M16.2595 17.7965L16.2601 17.797C14.5464 19.1745 12.3694 19.9987 9.99965 19.9987C6.19141 19.9987 2.88043 17.8701 1.19141 14.7377L4.43207 12.085C5.27656 14.3388 7.45074 15.9432 9.99965 15.9432C11.0952 15.9432 12.1216 15.647 13.0024 15.13L16.2595 17.7965Z"
                                                        fill="#28B446" />
                                                    <path
                                                        d="M16.383 2.30219L13.1434 4.95437C12.2319 4.38461 11.1544 4.05547 10 4.05547C7.39344 4.05547 5.17859 5.73348 4.37641 8.06812L1.11871 5.40109H1.11816C2.78246 2.1923 6.1352 0 10 0C12.4264 0 14.6511 0.864297 16.383 2.30219Z"
                                                        fill="#F14336" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_700_3607">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="google-text">Google</div>
                                    </div>
                                    <div class="google-btn">
                                        <div class="google-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M11.25 6.875V4.375C11.25 3.685 11.81 3.125 12.5 3.125H13.75V0H11.25C9.17875 0 7.5 1.67875 7.5 3.75V6.875H5V10H7.5V20H11.25V10H13.75L15 6.875H11.25Z"
                                                    fill="#4267B2" />
                                            </svg>
                                        </div>
                                        <div class="google-text">Facebook</div>
                                    </div>
                                    <div class="google-btn">
                                        <div class="google-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M13.7493 0C12.6831 0.0737496 11.4368 0.756246 10.7106 1.64499C10.0481 2.45124 9.5031 3.64873 9.7156 4.81247C10.8806 4.84872 12.0843 4.14998 12.7818 3.24623C13.4343 2.40499 13.9281 1.21499 13.7493 0Z"
                                                    fill="black" />
                                                <path
                                                    d="M17.9624 6.70989C16.9387 5.42615 15.5 4.68115 14.1412 4.68115C12.3475 4.68115 11.5887 5.5399 10.3425 5.5399C9.05749 5.5399 8.08125 4.68365 6.53001 4.68365C5.00627 4.68365 3.38378 5.6149 2.35503 7.20739C0.908792 9.44987 1.15629 13.6661 3.50003 17.2573C4.33877 18.5423 5.45877 19.9873 6.92376 19.9998C8.2275 20.0123 8.595 19.1636 10.3612 19.1548C12.1275 19.1448 12.4625 20.0111 13.7637 19.9973C15.23 19.9861 16.4112 18.3848 17.2499 17.0998C17.8512 16.1786 18.0749 15.7148 18.5412 14.6748C15.15 13.3836 14.6062 8.56113 17.9624 6.70989Z"
                                                    fill="black" />
                                            </svg>
                                        </div>
                                        <div class="google-text">Apple</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>