<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberHub& Services</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1>CyberHub</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
   <!-- Main Section -->
   <div class="container">
    <aside>
        <!-- Profile Section -->
        <div class="profile">
            <img src="profile-pic.jpg" alt="Profile Picture">
            <h2>John Doe</h2>
            <p>Software Engineer</p>
        </div>
        <!-- Sidebar Navigation -->
        <nav class="sidebar-nav">
            <ul>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Connections</a></li>
                <li><a href="#">Groups</a></li>
                <li><a href="#">Events</a></li>
            </ul>
        </nav>
    </aside>

    <main>
        <!-- Services Section -->
        <section class="services">
            <h2>Available Services</h2>
            <div class="service">
                <img src="service1.jpg" alt="Service 1">
                <h3>Web Development</h3>
                <p>Starting at $100</p>
            </div>
            <div class="service">
                <img src="service2.jpg" alt="Service 2">
                <h3>Graphic Design</h3>
                <p>Starting at $50</p>
            </div>
            <!-- Additional services can be added here -->
        </section>
 <!-- Jobs Section -->
 <section class="jobs">
    <h2>Job Listings</h2>
    <div class="job">
        <h3>Frontend Developer</h3>
        <p>Company XYZ</p>
        <p>Location: Remote</p>
    </div>
    <div class="job">
        <h3>Graphic Designer</h3>
        <p>Company ABC</p>
        <p>Location: New York, NY</p>
    </div>
    <!-- Additional job listings can be added here -->
</section>
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