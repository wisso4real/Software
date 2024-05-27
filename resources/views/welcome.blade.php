<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberHub& Services</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
        /* .btn {
            padding: 0.8rem 3rem;
            background-color: #0be7e3;
            border: 2px solid rgb(9, 40, 241);
            border-radius: 1000px;
            position: relative;
            overflow: hidden;
           }
           .btn::before,
           .btn::after {
            content: "";
            position: absolute;
            background: #000;
            background: hsl(191, 88%, 43%);
            width: 100%;
            height: 102%;
            transform: skew(30deg) translateY(0);
            transition: transform 0.3s ease;
            z-index: -1;
           }
           .btn::before {
            --direction: 1;
            top: -103%;
            left: -70%;
           }
           .btn::after {
            --direction: -1;
            top: 102%;
            left: 69%;
           }
           .btn:hover::before,
           .btn:hover::after {
            transform: skew(30deg)
             translateY(calc(
               var(--direction) * 100%
               ));
           }
           .text-container {
            display: block;
            overflow: hidden;
            position: relative;
           }
           .text {
            display: block;
            transition: 0.3s;
           }
           .btn:hover .text:nth-child(1) {
            color: white;
            translate: 0 80%;
           }
           .text:nth-child(2) {
            color: white;
            position: absolute;
            inset: 0;
            translate: 0 -80%;
           }
           .btn:hover .text:nth-child(2) {
            translate: 0 0;
           } */

           .btn{
                padding: 0.8rem 3rem;
                background-color: rgb(0, 170, 248);
                border: 2px solid #fff;
                border-radius: 1000px;
                position: relative;
                overflow: hidden;
           }
           .btn:hover{
                cursor: pointer;
                background-color: rgb(5, 47, 66);
                border: 2px solid rgb(5, 47, 66);
                color: #fff;
                transition: ease-in-out 0.5s;
           }

    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>CyberHub</h1>
            <nav>
                <ul>
                    <li><a href="/register">
                        <button class="btn">
                        <div class="text-container">
                            <span class="text">Sign Up</span>
                        </div>
                    </button>
                </a>
                <a href="/login">
                    <button class="btn">
                        <div class="text-container">
                            <span class="text">Log In</span>
                        </div>
                    </button>
                </a>    
                </li>
                
                </ul>
            </nav>
        </div>
    </header>
   <!-- Main Section -->
   <div class="container">
    <aside>
        <!-- Profile Section -->
        <div class="welcome sidebar" >
            <h2 class="welcome"> Welcome To</h2>
            <h2 class="welcome"> CyberHub</h2>
            <h2 class="welcome"> community</h2>
        </div>
        <!-- Sidebar Navigation -->
        <nav class="sidebar-nav">
            <ul>
               
            </ul>
        </nav>
    </aside>

    <main>
        <!-- Services Section -->
        <section class="posts">
            <h2>Available posts</h2>
           <article class="post">
            <h3>post Title 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquam tellus nec suscipit consequat.</p>
           </article>
           <article class="post">
            <h3>Post Title 2</h3>
            <p>Nulla facilisi. Donec fermentum magna vel felis blandit, id vestibulum orci tincidunt.</p>
           </article>
           <article class="post"> <h3>Post Title 3</h3>
            <p>Nulla facilisi. Donec fermentum magna vel felis blandit, id vestibulum orci tincidunt.</p>
           </article>
           <article class="post">
            <h3>Post Title 4</h3>
            <p>Nulla facilisi. Donec fermentum magna vel felis blandit, id vestibulum orci tincidunt.</p>
           </article>
           <article class="post">
            <h3>Post Title 5</h3>
            <p>Nulla facilisi. Donec fermentum magna vel felis blandit, id vestibulum orci tincidunt.</p>
        </article>
    
            <!-- Additional services can be added here -->
        </section>
 <!-- Jobs Section -->
 
</main>
</div>

<!-- Footer Section -->
<footer>
<div class="container">
<p>&copy; 2024 CyberHub. All rights reserved.</p>
</div>
</footer>

<script src="scripts.js"></script>
</body>
</html>