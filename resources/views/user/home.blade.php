<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&family=Poppins:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="user/css/style.css">
    <title>Home</title>
</head>
<body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <a class="navbar-brand navbar-brand-web" href="#"><img src="./img/logo.svg" alt=""></a>
                      <a class="navbar-brand navbar-brand-mobile" href="#"><img src="./img/mobile-logo.svg" alt=""></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.75 16.9583C27.75 17.8098 27.0598 18.5 26.2083 18.5H7.41667C6.56523 18.5 5.875 17.8098 5.875 16.9583C5.875 16.1069 6.56523 15.4167 7.41667 15.4167H26.2083C27.0598 15.4167 27.75 16.1069 27.75 16.9583ZM27.75 9.25C27.75 10.1014 27.0598 10.7917 26.2083 10.7917H10.4167C9.56523 10.7917 8.875 10.1014 8.875 9.25C8.875 8.39856 9.56523 7.70833 10.4167 7.70833H26.2083C27.0598 7.70833 27.75 8.39856 27.75 9.25ZM26.2083 0C27.0598 0 27.75 0.690228 27.75 1.54167C27.75 2.39311 27.0598 3.08333 26.2083 3.08333H1.54167C0.690228 3.08333 0 2.39311 0 1.54167C0 0.690228 0.690228 0 1.54167 0H26.2083Z" fill="black"/>
                        </svg>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 d-flex align-items-center">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Discover</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Services
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><button class="dropdown-item" type="button">Services</button></li>
                                      <li><button class="dropdown-item" type="button">Services</button></li>
                                      <li><button class="dropdown-item" type="button">Services</button></li>
                                    </ul>
                                  </div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                          </li>

                          <li class="nav-item">
                                    @if (Route::has('login'))
                           
                                @auth

                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard </a>
                               

                                @else
                                   <li class="nav-item">
                                   <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                   </li>

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>
                                    @endif
                                @endauth
                           
                                    @endif
                             </li>
                        </ul>
                        <div class="submit-btn">
                            <button class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                      </div>
                    </div>
                  </nav>
            </div>
        </header>

        <main>
                <section class="tools-direcory-section margin-bottom-big">
                    <div class="container">
                        <div class="tools-directory d-flex flex-column align-items-center justify-content-center">
                            <div class="margin-bottom-medium">
                                <h1 class="heading-primary">AI Tools Directory</h1>
                            </div>
                            <div class="margin-bottom-medium">
                                <h4 class="sub-heading">The Best Curated List of AI Tools</h4>
                            </div>
                            
                                <form action="" method="get" class="searchBar margin-bottom-medium">
                                @csrf
                                <input id="searchQueryInput" type="search" name="search" placeholder="Search" value="" />
                                <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                    <svg style="width:35px;height:35px" viewBox="0 0 24 24"><path fill="#000000" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                                    </svg>
                                </button>
                                </form>
                               
                          
                            <div class="categories margin-bottom-medium">
                                <p class="category"><a href="#">3D</a></p>
                                <p class="category"><a href="#">Art</a></p>
                                <p class="category"><a href="#">Audio Editing</a></p>
                                <p class="category"><a href="#">Avatars</a></p>
                                <p class="category"><a href="#">Code Assistant</a></p>
                                <p class="category"><a href="#">Copywriting</a></p>
                                <p class="category"><a href="#">Customer Support</a></p>
                                <p class="category"><a href="#">Design Assistant</a></p>
                                <p class="category"><a href="#">Developer Tools</a></p>
                                <p class="category"><a href="#">Ecommerce</a></p>
                                <p class="category"><a href="#">Finance</a></p>
                                <p class="category"><a href="#">Fun</a></p>
                            </div>
                            <div class="categories-btn">
                                <a href="#">View all Categories</a>
                            </div>
                        </div>
                    </div>
                </section>
    
                <section class="services-section margin-bottom-big">
                    <div class="container">
                        <div class="filters">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Categories
                                </button>
                                <div class="dropdown-menu" data-popper-placement="bottom-start">
                                    <div class="filters-dropdown-heading">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul>
                                        <form action="">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <ul>
                                                    <li>
                                                        <label class="label-container">
                                                            All
                                                            <input type="checkbox" id="" name="" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Customer Support
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Design Assistant
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Developer Tools
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <ul>
                                                        <li>
                                                            <label class="label-container">
                                                                All
                                                                <input type="checkbox" id="" name="" checked>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Design Assistant
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Developer Tools
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="dropdown-menu-btn d-flex justify-content-between align-items-center">
                                                <a href="" class="clear-btn">Clear All</a>
                                                <button type="submit" class="btn-primary">Apply</button>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Pricing
                                </button>
                                <div class="dropdown-menu" data-popper-placement="bottom-start">
                                    <div class="filters-dropdown-heading">
                                        <h3>Pricing</h3>
                                    </div>
                                    <ul>
                                        <form action="">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <ul>
                                                    <li>
                                                        <label class="label-container">
                                                            All
                                                            <input type="checkbox" id="" name="" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Customer Support
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Design Assistant
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Developer Tools
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <ul>
                                                        <li>
                                                            <label class="label-container">
                                                                All
                                                                <input type="checkbox" id="" name="" checked>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Design Assistant
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Developer Tools
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <label class="label-container">
                                                            All
                                                            <input type="checkbox" id="" name="" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Customer Support
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Design Assistant
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Developer Tools
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                            </ul>
                                            </div>
                                            <hr>
                                            <div class="dropdown-menu-btn d-flex justify-content-between align-items-center">
                                                <a href="" class="clear-btn">Clear All</a>
                                                <button type="submit" class="btn-primary">Apply</button>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Features
                            </button>
                            <div class="dropdown-menu" data-popper-placement="bottom-start">
                                <div class="filters-dropdown-heading">
                                    <h3>Features</h3>
                                </div>
                                <ul>
                                    <form action="">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul>
                                                <li>
                                                    <label class="label-container">
                                                        All
                                                        <input type="checkbox" id="" name="" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container">
                                                        Customer Support
                                                        <input type="checkbox" id="" name="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container">
                                                        Design Assistant
                                                        <input type="checkbox" id="" name="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container">
                                                        Developer Tools
                                                        <input type="checkbox" id="" name="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <ul>
                                                    <li>
                                                        <label class="label-container">
                                                            All
                                                            <input type="checkbox" id="" name="" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Customer Support
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Design Assistant
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="label-container">
                                                            Developer Tools
                                                            <input type="checkbox" id="" name="">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <label class="label-container">
                                                        All
                                                        <input type="checkbox" id="" name="" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container">
                                                        Customer Support
                                                        <input type="checkbox" id="" name="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container">
                                                        Design Assistant
                                                        <input type="checkbox" id="" name="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container">
                                                        Developer Tools
                                                        <input type="checkbox" id="" name="">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                        </ul>
                                        </div>
                                        <hr>
                                        <div class="dropdown-menu-btn d-flex justify-content-between align-items-center">
                                            <a href="" class="clear-btn">Clear All</a>
                                            <button type="submit" class="btn-primary">Apply</button>
                                        </div>
                                    </form>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="tags">
                            <p class="tag">Freemium 
                                <svg class="ms-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4222 1.98904C14.5149 1.89651 14.5884 1.78664 14.6386 1.6657C14.6888 1.54476 14.7146 1.41512 14.7147 1.28418C14.7148 1.15325 14.6891 1.02357 14.6391 0.902574C14.589 0.781574 14.5156 0.671612 14.4231 0.578969C14.3306 0.486326 14.2207 0.412815 14.0998 0.362633C13.9788 0.312452 13.8492 0.286582 13.7183 0.286502C13.5873 0.286421 13.4577 0.312131 13.3367 0.362164C13.2157 0.412197 13.1057 0.485573 13.013 0.578102L7.00011 6.59104L0.988914 0.578102C0.801813 0.391001 0.548048 0.285889 0.283447 0.285889C0.0188458 0.285889 -0.234918 0.391001 -0.42202 0.578102C-0.609121 0.765204 -0.714233 1.01897 -0.714233 1.28357C-0.714233 1.54817 -0.609121 1.80193 -0.42202 1.98904L5.59091 8.00024L-0.42202 14.0114C-0.514663 14.1041 -0.588151 14.2141 -0.63829 14.3351C-0.688428 14.4562 -0.714233 14.5859 -0.714233 14.7169C-0.714233 14.8479 -0.688428 14.9777 -0.63829 15.0987C-0.588151 15.2197 -0.514663 15.3297 -0.42202 15.4224C-0.234918 15.6095 0.0188457 15.7146 0.283447 15.7146C0.414464 15.7146 0.544199 15.6888 0.665243 15.6386C0.786287 15.5885 0.896271 15.515 0.988914 15.4224L7.00011 9.40944L13.013 15.4224C13.2001 15.6092 13.4538 15.7141 13.7183 15.714C13.9827 15.7138 14.2362 15.6086 14.4231 15.4215C14.61 15.2344 14.7149 14.9807 14.7147 14.7163C14.7146 14.4519 14.6093 14.1983 14.4222 14.0114L8.40931 8.00024L14.4222 1.98904Z" fill="black"/>
                                </svg>
                            </p>
                            <p class="tag">Freemium 
                                <svg class="ms-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4222 1.98904C14.5149 1.89651 14.5884 1.78664 14.6386 1.6657C14.6888 1.54476 14.7146 1.41512 14.7147 1.28418C14.7148 1.15325 14.6891 1.02357 14.6391 0.902574C14.589 0.781574 14.5156 0.671612 14.4231 0.578969C14.3306 0.486326 14.2207 0.412815 14.0998 0.362633C13.9788 0.312452 13.8492 0.286582 13.7183 0.286502C13.5873 0.286421 13.4577 0.312131 13.3367 0.362164C13.2157 0.412197 13.1057 0.485573 13.013 0.578102L7.00011 6.59104L0.988914 0.578102C0.801813 0.391001 0.548048 0.285889 0.283447 0.285889C0.0188458 0.285889 -0.234918 0.391001 -0.42202 0.578102C-0.609121 0.765204 -0.714233 1.01897 -0.714233 1.28357C-0.714233 1.54817 -0.609121 1.80193 -0.42202 1.98904L5.59091 8.00024L-0.42202 14.0114C-0.514663 14.1041 -0.588151 14.2141 -0.63829 14.3351C-0.688428 14.4562 -0.714233 14.5859 -0.714233 14.7169C-0.714233 14.8479 -0.688428 14.9777 -0.63829 15.0987C-0.588151 15.2197 -0.514663 15.3297 -0.42202 15.4224C-0.234918 15.6095 0.0188457 15.7146 0.283447 15.7146C0.414464 15.7146 0.544199 15.6888 0.665243 15.6386C0.786287 15.5885 0.896271 15.515 0.988914 15.4224L7.00011 9.40944L13.013 15.4224C13.2001 15.6092 13.4538 15.7141 13.7183 15.714C13.9827 15.7138 14.2362 15.6086 14.4231 15.4215C14.61 15.2344 14.7149 14.9807 14.7147 14.7163C14.7146 14.4519 14.6093 14.1983 14.4222 14.0114L8.40931 8.00024L14.4222 1.98904Z" fill="black"/>
                                </svg>
                            </p>
                            <p class="tag">Freemium 
                                <svg class="ms-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4222 1.98904C14.5149 1.89651 14.5884 1.78664 14.6386 1.6657C14.6888 1.54476 14.7146 1.41512 14.7147 1.28418C14.7148 1.15325 14.6891 1.02357 14.6391 0.902574C14.589 0.781574 14.5156 0.671612 14.4231 0.578969C14.3306 0.486326 14.2207 0.412815 14.0998 0.362633C13.9788 0.312452 13.8492 0.286582 13.7183 0.286502C13.5873 0.286421 13.4577 0.312131 13.3367 0.362164C13.2157 0.412197 13.1057 0.485573 13.013 0.578102L7.00011 6.59104L0.988914 0.578102C0.801813 0.391001 0.548048 0.285889 0.283447 0.285889C0.0188458 0.285889 -0.234918 0.391001 -0.42202 0.578102C-0.609121 0.765204 -0.714233 1.01897 -0.714233 1.28357C-0.714233 1.54817 -0.609121 1.80193 -0.42202 1.98904L5.59091 8.00024L-0.42202 14.0114C-0.514663 14.1041 -0.588151 14.2141 -0.63829 14.3351C-0.688428 14.4562 -0.714233 14.5859 -0.714233 14.7169C-0.714233 14.8479 -0.688428 14.9777 -0.63829 15.0987C-0.588151 15.2197 -0.514663 15.3297 -0.42202 15.4224C-0.234918 15.6095 0.0188457 15.7146 0.283447 15.7146C0.414464 15.7146 0.544199 15.6888 0.665243 15.6386C0.786287 15.5885 0.896271 15.515 0.988914 15.4224L7.00011 9.40944L13.013 15.4224C13.2001 15.6092 13.4538 15.7141 13.7183 15.714C13.9827 15.7138 14.2362 15.6086 14.4231 15.4215C14.61 15.2344 14.7149 14.9807 14.7147 14.7163C14.7146 14.4519 14.6093 14.1983 14.4222 14.0114L8.40931 8.00024L14.4222 1.98904Z" fill="black"/>
                                </svg>
                            </p>
                        </div>
                        <div class="avaialable-services d-flex justify-content-between">
                            <p><span>107, 323</span> Services Available</p>
                            <div class="d-flex align-items-center">
                                <span>Sort by:</span>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Best Selling
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><button class="dropdown-item" type="button">Best Selling</button></li>
                                      <li><button class="dropdown-item" type="button">Best Selling</button></li>
                                      <li><button class="dropdown-item" type="button">Best Selling</button></li>
                                    </ul>
                                  </div>
                            </div>
                        </div>
    
    
                        <div class="mobile-filters-heading">
                            <div class="fil d-flex align-items-center" onclick="showFilterSidebar()">
                                <h4>Filters</h4>
                                <div class="filter-icon">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.9375 11.1569H16.7844C16.6076 10.5726 16.2475 10.0607 15.7573 9.69694C15.2671 9.33314 14.6729 9.13672 14.0625 9.13672C13.4521 9.13672 12.8579 9.33314 12.3677 9.69694C11.8775 10.0607 11.5174 10.5726 11.3406 11.1569H1.0625C0.847012 11.1569 0.640349 11.2425 0.487976 11.3948C0.335603 11.5472 0.25 11.7539 0.25 11.9694C0.25 12.1849 0.335603 12.3915 0.487976 12.5439C0.640349 12.6963 0.847012 12.7819 1.0625 12.7819H11.3406C11.5174 13.3661 11.8775 13.878 12.3677 14.2418C12.8579 14.6056 13.4521 14.802 14.0625 14.802C14.6729 14.802 15.2671 14.6056 15.7573 14.2418C16.2475 13.878 16.6076 13.3661 16.7844 12.7819H18.9375C19.153 12.7819 19.3597 12.6963 19.512 12.5439C19.6644 12.3915 19.75 12.1849 19.75 11.9694C19.75 11.7539 19.6644 11.5472 19.512 11.3948C19.3597 11.2425 19.153 11.1569 18.9375 11.1569ZM14.0625 13.1881C13.8215 13.1881 13.5858 13.1166 13.3854 12.9827C13.185 12.8488 13.0288 12.6585 12.9365 12.4358C12.8443 12.2131 12.8201 11.968 12.8672 11.7316C12.9142 11.4952 13.0303 11.278 13.2007 11.1076C13.3712 10.9371 13.5883 10.8211 13.8247 10.774C14.0611 10.727 14.3062 10.7512 14.5289 10.8434C14.7516 10.9356 14.9419 11.0919 15.0759 11.2923C15.2098 11.4927 15.2812 11.7283 15.2812 11.9694C15.2812 12.2926 15.1528 12.6026 14.9243 12.8312C14.6957 13.0597 14.3857 13.1881 14.0625 13.1881ZM1.0625 3.84437H4.84062C5.01741 4.42864 5.37751 4.94051 5.86768 5.30431C6.35785 5.66811 6.95208 5.86453 7.5625 5.86453C8.17292 5.86453 8.76715 5.66811 9.25732 5.30431C9.74749 4.94051 10.1076 4.42864 10.2844 3.84437H18.9375C19.153 3.84437 19.3597 3.75877 19.512 3.6064C19.6644 3.45402 19.75 3.24736 19.75 3.03187C19.75 2.81638 19.6644 2.60972 19.512 2.45735C19.3597 2.30498 19.153 2.21937 18.9375 2.21937H10.2844C10.1076 1.63511 9.74749 1.12324 9.25732 0.759439C8.76715 0.395639 8.17292 0.199219 7.5625 0.199219C6.95208 0.199219 6.35785 0.395639 5.86768 0.759439C5.37751 1.12324 5.01741 1.63511 4.84062 2.21937H1.0625C0.847012 2.21937 0.640349 2.30498 0.487976 2.45735C0.335603 2.60972 0.25 2.81638 0.25 3.03187C0.25 3.24736 0.335603 3.45402 0.487976 3.6064C0.640349 3.75877 0.847012 3.84437 1.0625 3.84437ZM7.5625 1.81312C7.80355 1.81312 8.03918 1.8846 8.2396 2.01852C8.44002 2.15244 8.59623 2.34278 8.68848 2.56548C8.78072 2.78817 8.80486 3.03323 8.75783 3.26964C8.71081 3.50605 8.59473 3.72321 8.42429 3.89366C8.25384 4.0641 8.03668 4.18018 7.80027 4.22721C7.56385 4.27423 7.3188 4.2501 7.0961 4.15785C6.87341 4.06561 6.68306 3.9094 6.54915 3.70897C6.41523 3.50855 6.34375 3.27292 6.34375 3.03187C6.34375 2.70864 6.47215 2.39865 6.70071 2.17009C6.92927 1.94153 7.23927 1.81312 7.5625 1.81312Z" fill="black"/>
                                    </svg>  
                                </div>                              
                            </div>
                            <div class="best-selling">
                                <div class="d-flex align-items-center">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Best Selling
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><button class="dropdown-item" type="button">Best Selling</button></li>
                                          <li><button class="dropdown-item" type="button">Best Selling</button></li>
                                          <li><button class="dropdown-item" type="button">Best Selling</button></li>
                                        </ul>
                                      </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="mobile-filters"  id="mobile-filters">
                            <div class="container">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="logo">
                                        <img src="./img/mobile-logo.svg" alt="">
                                    </div>
                                    <div class="close-btn" onclick="hideFilterSidebar()">
                                        <img src="./img/close-fil.svg" alt="">
                                    </div>
                                </div>
    
                                <div class="heading">
                                    <h4>Filters</h4>
                                </div>
                                <hr>
    
                                <form action="">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                              Categories
                                            </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <ul>
                                                        <li>
                                                            <label class="label-container">
                                                                All
                                                                <input type="checkbox" id="" name="" checked>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                              Pricing
                                            </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <ul>
                                                        <li>
                                                            <label class="label-container">
                                                                All
                                                                <input type="checkbox" id="" name="" checked>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                              Features
                                            </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <ul>
                                                        <li>
                                                            <label class="label-container">
                                                                All
                                                                <input type="checkbox" id="" name="" checked>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="label-container">
                                                                Customer Support
                                                                <input type="checkbox" id="" name="">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
    
                                      <div class="mobile-filter-btns">
                                        <div class="clear-btn">
                                            <a href="" class="clear">Clear All Filters</a>
                                        </div>
                                        <div class="apply-btn">
                                            <button type="submit" class="btn-primary">
                                                Apply Filters
                                            </button>
                                        </div>
                                      </div>
                                </form>
                                
                            </div>
                        </div>
        
                        <div class="services">
                            <div class="row">
                            @foreach($products as $product)
                                <div class="col-xl-4 col-md-6">
                                   
                                    <div class="service-box">
                                        <div class="img">
                                            <img src="{{asset('upload/products/'.$product->image)}}" width="100%" height="100px" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="heading d-flex justify-content-between align-items-center">
                                                <h2>{{$product->product_name}}</h2>
                                                <p>Freemium</p>
                                            </div>
                                            <div>
                                                <p class="sub-heading">{{$product->overview}}</p>
                                            </div>
                                            <div>
                                                <p class="tag">{{$product->hashtags}}</p>
                                            </div>
                                            <div class="visit-link d-flex align-items-center justify-content-between">
                                                <a href="#" class="link">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    {{$product->visit_link}}   
                                                    <path d="M4.875 15C4.875 12.8625 6.6125 11.125 8.75 11.125H13.75V8.75H8.75C5.3 8.75 2.5 11.55 2.5 15C2.5 18.45 5.3 21.25 8.75 21.25H13.75V18.875H8.75C6.6125 18.875 4.875 17.1375 4.875 15ZM10 16.25H20V13.75H10V16.25ZM21.25 8.75H16.25V11.125H21.25C23.3875 11.125 25.125 12.8625 25.125 15C25.125 17.1375 23.3875 18.875 21.25 18.875H16.25V21.25H21.25C24.7 21.25 27.5 18.45 27.5 15C27.5 11.55 24.7 8.75 21.25 8.75Z" fill="white"/>
                                                    </svg>
                                                         Visit Link
                                                </a>
                                                <div>
                                                    <div class="fav">
                                                        <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M24.8128 13.7868L14.5003 24.0003L4.18779 13.7868C3.50759 13.1249 2.9718 12.3293 2.61417 11.4502C2.25654 10.571 2.08481 9.62736 2.10981 8.67859C2.1348 7.72981 2.35597 6.79649 2.75938 5.93739C3.1628 5.07829 3.73973 4.31203 4.45384 3.68685C5.16794 3.06167 6.00376 2.59113 6.90866 2.30484C7.81355 2.01855 8.76792 1.92273 9.71167 2.02341C10.6554 2.12408 11.5681 2.41907 12.3922 2.8898C13.2164 3.36053 13.9341 3.9968 14.5003 4.75855C15.0689 4.00233 15.7875 3.37162 16.6111 2.90589C17.4346 2.44015 18.3455 2.14942 19.2866 2.05189C20.2277 1.95437 21.1788 2.05214 22.0804 2.33909C22.9819 2.62605 23.8146 3.096 24.5262 3.71955C25.2378 4.3431 25.813 5.10682 26.2159 5.96291C26.6187 6.81899 26.8406 7.74902 26.8675 8.69478C26.8944 9.64054 26.7258 10.5817 26.3722 11.4593C26.0187 12.3369 25.4878 13.1321 24.8128 13.7951" stroke="#FF2828" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div> 
                                @endforeach
                            </div>

                            </div>
        
                            <div class="pagination">
                                <button class="btn-nav left-btn">
                                    <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M35.4684 16.6057L25.5928 26.5029L35.4684 36.4001L32.4281 39.4404L19.4906 26.5029L32.4281 13.5654L35.4684 16.6057Z" fill="#454F5B"/>
                                    </svg>                                
                                </button>
                                <div class="page-numbers">
                                  <button class="btn-page btn-selected">1</button>
                                  <button class="btn-page">2</button>
                                 
                                </div>
                                <button class="btn-nav right-btn">
                                    <svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.0256 16.6067L26.9013 26.5039L17.0256 36.4011L20.0659 39.4414L33.0034 26.5039L20.0659 13.5664L17.0256 16.6067Z" fill="#454F5B"/>
                                    </svg>
                                </button>
                              </div>
                        </div>
                    </div>
                </section>
        </main>

        <footer>
            <div class="container">
                <section class="footer-section margin-bottom-big">
                    <hr>
                    <div class="row mt-5 mb-3">
                        <div class="col-lg mb-3 mb-lg-0">
                            <div class="footer-content">
                                <div class="heading">
                                    <h1>Learn More</h1>
                                </div>
                                <div class="links">
                                    <a href="#" class="link">Read Our Blog</a>
                                    <a href="#" class="link">Q&A Community</a>
                                    <a href="#" class="link">Our Store</a>
                                    <a href="#" class="link">Our Guarantee</a>
                                    <a href="#" class="link">Safety</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mb-3 mb-lg-0">
                            <div class="footer-content">
                                <div class="heading">
                                    <h1>Quick Links</h1>
                                </div>
                                <div class="links">
                                    <a href="#" class="link">About Us</a>
                                    <a href="#" class="link">Contact Us</a>
                                    <a href="#" class="link">Accessibility</a>
                                    <a href="#" class="link">Get the App</a>
                                    <a href="#" class="link">Press</a>
                                    <a href="#" class="link">Careers</a>
                                    <a href="#" class="link">Investor Relations</a>
                                    <a href="#" class="link">Press</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mb-3 mb-lg-0">
                            <div class="footer-content">
                                <div class="heading">
                                    <h1>Popular Cities</h1>
                                </div>
                                <div class="links">
                                    <a href="#" class="link">London</a>
                                    <a href="#" class="link">Surrey</a>
                                    <a href="#" class="link">Edinburgh</a>
                                    <a href="#" class="link">Ascot</a>
                                    <a href="#" class="link">St Albans</a>
                                    <a href="#" class="link">Glasgow</a>
                                    <a href="#" class="link">Bristol</a>
                                    <a href="#" class="link">Bath</a>
                                    <a href="#" class="link">Manchester Bolton</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mb-3 mb-lg-0">
                            <div class="footer-content">
                                <div class="heading">
                                    <h1>About Us</h1>
                                </div>
                                <div class="links">
                                    <a href="#" class="link">Our Story</a>
                                    <a href="#" class="link">In the press </a>
                                    <a href="#" class="link">Blog</a>
                                    <a href="#" class="link">Help</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mb-3 mb-lg-0">
                            <div class="social-icons">
                                <a href="#" class="social-link">
                                    <svg width="17" height="28" viewBox="0 0 17 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.0015 15.8075L15.8012 10.7837H10.8011V7.52359C10.8011 6.14918 11.4995 4.80947 13.739 4.80947H16.0121V0.532271C16.0121 0.532271 13.9493 0.192871 11.977 0.192871C7.8592 0.192871 5.16761 2.59904 5.16761 6.95485V10.7837H0.590332V15.8075H5.16761V27.9521H10.8011V15.8075H15.0015Z" fill="black"/>
                                    </svg>
                                </a>
                                <a href="#" class="social-link">
                                    <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.8179 5.46543C22.834 5.69313 22.834 5.92089 22.834 6.14859C22.834 13.0938 17.5988 21.0963 8.03033 21.0963C5.08247 21.0963 2.34405 20.2342 0.0405273 18.7379C0.459362 18.7866 0.862033 18.8029 1.29698 18.8029C3.72932 18.8029 5.96843 17.9734 7.75647 16.5583C5.46907 16.5095 3.55216 14.9969 2.8917 12.9149C3.2139 12.9637 3.53604 12.9962 3.87435 12.9962C4.34148 12.9962 4.80866 12.9311 5.24356 12.8173C2.85952 12.3293 1.07143 10.2149 1.07143 7.66124V7.59621C1.76406 7.98658 2.56955 8.23055 3.42324 8.26304C2.0218 7.31964 1.10366 5.70941 1.10366 3.88769C1.10366 2.9118 1.36134 2.01721 1.81241 1.23648C4.37366 4.42445 8.2236 6.50636 12.5406 6.73412C12.4601 6.34375 12.4118 5.93716 12.4118 5.53052C12.4118 2.63528 14.7314 0.276855 17.6148 0.276855C19.1129 0.276855 20.466 0.911196 21.4164 1.9359C22.5923 1.7082 23.7199 1.26902 24.7186 0.667223C24.332 1.88714 23.5105 2.91185 22.4312 3.56241C23.4783 3.44861 24.4931 3.15577 25.4274 2.74918C24.7187 3.79011 23.8327 4.71719 22.8179 5.46543Z" fill="black"/>
                                    </svg>                                        
                                </a>
                                <a href="#" class="social-link">
                                    <svg width="31" height="22" viewBox="0 0 31 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.4948 0.492432H5.86591H5.86623C4.53427 0.492432 3.25709 1.02133 2.31551 1.96321C1.3736 2.9048 0.844727 4.18198 0.844727 5.51394V16.0131V16.0128C0.844727 17.3448 1.37362 18.6219 2.31551 19.5635C3.25709 20.5054 4.53427 21.0343 5.86623 21.0343H25.4951H25.4948C26.8268 21.0343 28.1039 20.5054 29.0455 19.5635C29.9874 18.6219 30.5163 17.3448 30.5163 16.0128V5.51362V5.51394C30.5163 4.18198 29.9874 2.9048 29.0455 1.96321C28.1039 1.0213 26.8268 0.492432 25.4948 0.492432ZM21.4917 10.9639L12.5902 15.5287C12.5195 15.565 12.4351 15.5625 12.3673 15.5214C12.2992 15.4807 12.2574 15.4071 12.2568 15.3278V6.19811C12.2574 6.11882 12.2992 6.04527 12.3673 6.00451C12.4351 5.96344 12.5195 5.96089 12.5902 5.99719L21.4917 10.562C21.5678 10.6012 21.6158 10.6795 21.6158 10.7652C21.6158 10.8509 21.5678 10.9292 21.4917 10.9684V10.9639Z" fill="black"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© 2023 AI Markk. All Rights Reserved.</p>
                    </div>
                </section>
            </div>
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="user/index.js"></script>
    </body>
</html>