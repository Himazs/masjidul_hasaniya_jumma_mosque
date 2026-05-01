<?php
// index.php - Main Website
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Al-Masjidul Hasaniyya Jummah Mosque</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Al-Masjidul Hasaniyya Mosque Ethungahakotuwa Udubaddawa Kurunegala" name="keywords">
    <meta content="Official website of Al-Masjidul Hasaniyya Jummah Mosque – Ethungahakotuwa, Udubaddawa, Kurunegala District. Daily prayers, Jummah, sermons, Quran classes, and development projects." name="description">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        :root {
            --primary: #008080;
            --primary-dark: #004d4d;
            --secondary: #FFD700;
            --accent: #e67e22;
            --light: #f8f9fa;
            --dark: #1e1e1e;
            --gold: #d4af37;
        }

        body {
            font-family: 'Lato', sans-serif;
            color: var(--dark);
            padding-top: 80px;
            line-height: 1.8;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cinzel', serif;
            font-weight: 700;
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        .navbar-brand {
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary) !important;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            color: var(--dark) !important;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.4s ease;
            border-radius: 2px;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        .navbar-nav .nav-link.active {
            color: var(--primary) !important;
            font-weight: 600;
        }

        /* Hero Sections */
        .hero-section {
            background: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), 
                        url('https://images.unsplash.com/photo-1543362453-624bf73af4de?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80') center center no-repeat;
            background-size: cover;
            min-height: 85vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .hero-section p.lead {
            font-size: 1.5rem;
            margin-bottom: 2.5rem;
            max-width: 700px;
            font-weight: 300;
        }

        /* Page Sections */
        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
            animation: fadeInUp 0.8s ease-in;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Content Sections */
        .content-section {
            padding: 100px 0;
        }

        .section-title {
            position: relative;
            margin-bottom: 3rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            bottom: -15px;
            left: 0;
            border-radius: 3px;
        }

        .section-title.text-center::after {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Cards */
        .activity-card, .event-card, .sermon-card {
            transition: all 0.4s ease;
            height: 100%;
            border: none;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        .activity-card::before, .event-card::before, .sermon-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .activity-card:hover, .event-card:hover, .sermon-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .icon-box {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(26, 95, 180, 0.3);
        }

        .activity-card:hover .icon-box {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 15px 25px rgba(26, 95, 180, 0.4);
        }

        .icon-box i {
            color: white;
            font-size: 2.5rem;
        }

        /* Images */
        .img-placeholder {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
        }

        .img-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.1);
        }

        .img-placeholder i {
            font-size: 4rem;
            z-index: 1;
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border: none;
            padding: 14px 35px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(26, 95, 180, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.6s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(26, 95, 180, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, var(--secondary), #a8320e);
            border: none;
            padding: 14px 35px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 20px rgba(196, 60, 18, 0.3);
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #a8320e, var(--secondary));
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(196, 60, 18, 0.4);
        }

        .btn-outline-light {
            border: 2px solid white;
            color: white;
            padding: 12px 33px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.4s ease;
        }

        .btn-outline-light:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255,255,255,0.2);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--dark), #0f0f0f);
            color: white;
            padding: 80px 0 20px;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .footer h3, .footer h4 {
            color: white;
        }

        .footer a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer a:hover {
            color: white;
            transform: translateX(5px);
        }

        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            display: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            transition: all 0.4s ease;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .back-to-top:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
            color: white;
        }

        /* Spinner */
        #spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* WhatsApp Button */
        .whatsapp-float {
            position: fixed;
            width: 70px;
            height: 70px;
            bottom: 30px;
            left: 30px;
            background: linear-gradient(135deg, #25d366, #128C7E);
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            font-size: 35px;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            animation: pulse 2s infinite;
            text-decoration: none;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        .whatsapp-float:hover {
            transform: scale(1.15);
            animation: none;
            color: white;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .hero-section h1 { font-size: 3.5rem; }
        }

        @media (max-width: 992px) {
            .hero-section { min-height: 70vh; padding: 100px 0 60px; }
            .hero-section h1 { font-size: 3rem; }
            .hero-section p.lead { font-size: 1.3rem; }
            .content-section { padding: 80px 0; }
            .navbar-brand { font-size: 1.6rem; }
        }

        @media (max-width: 768px) {
            body { padding-top: 70px; }
            .hero-section { min-height: 60vh; padding: 80px 0 40px; }
            .hero-section h1 { font-size: 2.5rem; }
            .hero-section p.lead { font-size: 1.2rem; }
            .content-section { padding: 60px 0; }
            .section-title { font-size: 1.8rem; }
            .whatsapp-float { width: 60px; height: 60px; bottom: 20px; left: 20px; font-size: 30px; }
            .back-to-top { width: 50px; height: 50px; font-size: 1.2rem; }
            .btn-primary, .btn-secondary, .btn-outline-light { padding: 12px 25px; font-size: 0.9rem; }
            .navbar-nav .nav-link { margin: 5px 0; text-align: center; }
            .navbar-collapse { background: rgba(255, 255, 255, 0.98); padding: 20px; border-radius: 10px; margin-top: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        }

        @media (max-width: 576px) {
            .hero-section { min-height: 50vh; padding: 70px 0 30px; }
            .hero-section h1 { font-size: 2rem; }
            .hero-section p.lead { font-size: 1rem; }
            .content-section { padding: 40px 0; }
            .section-title { font-size: 1.6rem; }
            .icon-box { width: 70px; height: 70px; }
            .icon-box i { font-size: 2rem; }
            .event-date { width: 70px; height: 70px; margin-right: 15px; }
            .event-date .day { font-size: 1.5rem; }
            .event-date .month { font-size: 0.9rem; }
        }

        @media (max-width: 400px) {
            .hero-section h1 { font-size: 1.8rem; }
            .navbar-brand { font-size: 1.4rem; }
            .btn-primary, .btn-secondary, .btn-outline-light { padding: 10px 20px; font-size: 0.85rem; }
        }

        /* Quran Verse Styling */
        .quran-verse {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 50px;
            border-radius: 15px;
            text-align: center;
            margin: 50px 0;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .quran-verse::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .quran-verse .arabic {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-family: 'Traditional Arabic', 'Times New Roman', serif;
            line-height: 1.5;
        }

        .quran-verse .translation {
            font-size: 1.3rem;
            font-style: italic;
            font-weight: 300;
        }

        /* Progress Bar */
        .progress {
            height: 30px;
            border-radius: 15px;
            background: #e9ecef;
            overflow: hidden;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.1);
        }

        .progress-bar {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        /* Event Date */
        .event-date {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            width: 90px;
            height: 90px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-right: 25px;
            flex-shrink: 0;
            box-shadow: 0 10px 20px rgba(26, 95, 180, 0.3);
        }

        .event-date .day {
            font-size: 2rem;
            line-height: 1;
        }

        .event-date .month {
            font-size: 1.1rem;
        }

        /* Mosque Image Section */
        .mosque-gallery {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            height: 100%;
        }

        .mosque-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .mosque-gallery:hover img {
            transform: scale(1.05);
        }

        /* Form Styling */
        .form-control {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 5px 20px rgba(0,128,128,0.3);
            border-color: var(--primary);
        }
    </style>
</head>

<body>
    <!-- Spinner -->
    <div id="spinner">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/94767646614?text=Assalamu%20Alaikum!%20I%20would%20like%20to%20get%20more%20information%20about%20Al-Masjidul%20Hasaniyya%20Mosque" class="whatsapp-float" target="_blank" title="Contact us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="showPage('home')">
                <i class="fas fa-mosque me-2"></i>AL-MASJIDUL<span class="text-primary"> HASSANIYYA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="showPage('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('about')">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('activities')">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('events')">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('bayan')">Bayan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('gallery')">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('contact')">Contact</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="btn btn-primary" href="#" onclick="showPage('donate')">Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Page -->
    <section id="home" class="page-section active">
        <div class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="animate__animated animate__fadeIn">Welcome to Al-Masjidul Hasaniyya</h1>
                        <p class="lead animate__animated animate__fadeIn">A place of worship, community, and spiritual growth in Ethungahakotuwa, Udubaddawa, Kurunegala District.</p>
                        <a href="#" onclick="showPage('donate')" class="btn btn-primary animate__animated animate__fadeIn">Support Our Mosque</a>
                        <a href="#" onclick="showPage('activities')" class="btn btn-outline-light ms-2 animate__animated animate__fadeIn">Our Activities</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="quran-verse">
                    <div class="arabic">إِنَّمَا يَعْمُرُ مَسَاجِدَ اللَّهِ مَنْ آمَنَ بِاللَّهِ وَالْيَوْمِ الْآخِرِ</div>
                    <div class="translation">"The mosques of Allah are only to be maintained by those who believe in Allah and the Last Day..." [Quran 9:18]</div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="section-title">Our Mission</h2>
                        <p>We aim to foster a vibrant Muslim community through worship, education, and social welfare, serving as a beacon of faith and unity in Kurunegala.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="mosque-gallery">
                            <img src="https://images.unsplash.com/photo-1543362453-624bf73af4de?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Mosque">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Page -->
    <section id="about" class="page-section">
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), url('https://images.unsplash.com/photo-1519742866993-66d3cf21bb17?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" onclick="showPage('home')" class="text-white">Home</a></li>
                                <li class="breadcrumb-item text-white-50 active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title text-center">Our Story</h2>
                    <p class="lead">Al-Masjidul Hasaniyya is a cornerstone of the Muslim community in Ethungahakotuwa, dedicated to worship, education, and service.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3>History</h3>
                        <p>Established in 1990, our mosque has grown from a small prayer space to a vibrant community center, serving hundreds of worshippers weekly.</p>
                    </div>
                    <div class="col-lg-6">
                        <h3>Vision</h3>
                        <p>We strive to create a nurturing environment for spiritual growth, Islamic education, and community welfare, guided by the teachings of the Quran and Sunnah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Page -->
    <section id="activities" class="page-section">
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), url('https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80');">
            <img src="https://images.unsplash.com/photo-1601597111152-f4ff63471b0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Activities Overlay" class="hero-image-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Our Activities</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" onclick="showPage('home')" class="text-white">Home</a></li>
                                <li class="breadcrumb-item text-white-50 active">Activities</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title text-center">Religious & Community Activities</h2>
                    <p class="lead">We offer a wide range of religious, educational, and community programs to serve our community and strengthen faith.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card bg-white rounded p-4 text-center">
                            <div class="icon-box">
                                <i class="fas fa-praying-hands"></i>
                            </div>
                            <h4 class="mb-3">Five Daily Prayers</h4>
                            <p class="mb-4">Congregational prayers held five times daily, strengthening unity and faith within our community.</p>
                            <div class="bg-light p-3 rounded">
                                <h6 class="text-primary">Prayer Times</h6>
                                <ul class="list-unstyled small">
                                    <?php
                                    $sql = "SELECT * FROM prayer_times ORDER BY id DESC LIMIT 1";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        echo "<li>Fajr: " . htmlspecialchars($row['fajr']) . "</li>";
                                        echo "<li>Dhuhr: " . htmlspecialchars($row['dhuhr']) . "</li>";
                                        echo "<li>Asr: " . htmlspecialchars($row['asr']) . "</li>";
                                        echo "<li>Maghrib: " . htmlspecialchars($row['maghrib']) . "</li>";
                                        echo "<li>Isha: " . htmlspecialchars($row['isha']) . "</li>";
                                    } else {
                                        echo "<li>No times available</li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card bg-white rounded p-4 text-center">
                            <div class="icon-box">
                                <i class="fas fa-mosque"></i>
                            </div>
                            <h4 class="mb-3">Jummah Prayer</h4>
                            <p class="mb-4">Friday congregational prayers with Khutbah (sermon) for men. Special arrangements for women attendees.</p>
                            <div class="bg-light p-3 rounded">
                                <h6 class="text-primary">Friday Schedule</h6>
                                <ul class="list-unstyled small">
                                    <?php
                                    if (isset($row)) {
                                        echo "<li>First Jama'ah: " . htmlspecialchars($row['jummah1']) . "</li>";
                                        echo "<li>Second Jama'ah: " . htmlspecialchars($row['jummah2']) . "</li>";
                                    }
                                    ?>
                                    <li>Khutbah in Tamil & Sinhala</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card bg-white rounded p-4 text-center">
                            <div class="icon-box">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h4 class="mb-3">Qur'an Madrasah</h4>
                            <p class="mb-4">Comprehensive Quranic education for children including recitation, memorization, and Islamic studies.</p>
                            <div class="bg-light p-3 rounded">
                                <h6 class="text-primary">Class Schedule</h6>
                                <ul class="list-unstyled small">
                                    <li>Weekdays: 4:00 PM - 6:00 PM</li>
                                    <li>Weekends: 9:00 AM - 12:00 PM</li>
                                    <li>Ages: 5-15 years</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card bg-white rounded p-4 text-center">
                            <div class="icon-box">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="mb-3">Tharbiyya Training</h4>
                            <p class="mb-4">Character building and religious training sessions for youth and students to develop strong moral values.</p>
                            <div class="bg-light p-3 rounded">
                                <h6 class="text-primary">Training Schedule</h6>
                                <ul class="list-unstyled small">
                                    <li>Youth: Saturdays 3:00 PM</li>
                                    <li>Students: Sundays 10:00 AM</li>
                                    <li>Special camps during holidays</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card bg-white rounded p-4 text-center">
                            <div class="icon-box">
                                <i class="fas fa-microphone-alt"></i>
                            </div>
                            <h4 class="mb-3">Religious Sermons</h4>
                            <p class="mb-4">Weekly Bayan sessions for spiritual guidance, covering various Islamic topics for both men and women.</p>
                            <div class="bg-light p-3 rounded">
                                <h6 class="text-primary">Sermon Schedule</h6>
                                <ul class="list-unstyled small">
                                    <li>Men: Friday after Maghrib</li>
                                    <li>Women: Sunday 10:00 AM</li>
                                    <li>Special monthly programs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="activity-card bg-white rounded p-4 text-center">
                            <div class="icon-box">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <h4 class="mb-3">Community Support</h4>
                            <p class="mb-4">Charity programs, family assistance, orphan support, and social welfare projects serving the community.</p>
                            <div class="bg-light p-3 rounded">
                                <h6 class="text-primary">Services</h6>
                                <ul class="list-unstyled small">
                                    <li>Zakat distribution</li>
                                    <li>Family assistance</li>
                                    <li>Educational support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Page -->
    <section id="events" class="page-section">
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), url('https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80');">
            <img src="https://images.unsplash.com/photo-1543362453-624bf73af4de?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Events Overlay" class="hero-image-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Upcoming Events</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" onclick="showPage('home')" class="text-white">Home</a></li>
                                <li class="breadcrumb-item text-white-50 active">Events</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title text-center">Community Programs & Special Occasions</h2>
                    <p class="lead">Join us for these special events that bring our community together in faith and fellowship.</p>
                </div>
                <div class="row g-4">
                    <?php
                    $sql = "SELECT * FROM events ORDER BY event_date ASC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $date_parts = explode('-', $row['event_date']);
                            $day = ltrim($date_parts[2], '0');
                            $month = date('M', mktime(0, 0, 0, $date_parts[1], 10));
                            echo '<div class="col-lg-6">
                                    <div class="event-card bg-white rounded p-4 d-flex">
                                        <div class="event-date">
                                            <div class="day">' . $day . '</div>
                                            <div class="month">' . strtoupper($month) . '</div>
                                        </div>
                                        <div>
                                            <h4>' . htmlspecialchars($row['title']) . '</h4>
                                            <p class="text-muted"><i class="fas fa-clock me-2"></i>' . htmlspecialchars($row['event_time']) . '</p>
                                            <p>' . htmlspecialchars($row['description']) . '</p>
                                            <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                                        </div>
                                    </div>
                                  </div>';
                        }
                    } else {
                        echo '<p class="text-center">No upcoming events at the moment.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Bayan Page -->
    <section id="bayan" class="page-section">
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), url('https://images.unsplash.com/photo-1584556818267-697ed42777e1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');">
            <img src="https://images.unsplash.com/photo-1591607388347-9ce64adcb3a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Bayan Overlay" class="hero-image-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Islamic Bayan</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" onclick="showPage('home')" class="text-white">Home</a></li>
                                <li class="breadcrumb-item text-white-50 active">Bayan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title text-center">Friday Bayan & Religious Talks</h2>
                    <p class="lead">Listen to our collection of bayan and religious talks for spiritual growth and Islamic knowledge.</p>
                </div>
                <div class="row g-4">
                    <?php
                    $sql = "SELECT * FROM bayan ORDER BY date DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $badge = (strtotime($row['date']) > time() - 604800) ? '<span class="badge bg-primary">New</span>' : '<span class="badge bg-secondary">Archived</span>';
                            echo '<div class="col-lg-6">
                                    <div class="sermon-card bg-white rounded p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="mb-0">' . htmlspecialchars($row['title']) . '</h4>
                                            ' . $badge . '
                                        </div>
                                        <p class="text-muted mb-3"><i class="fas fa-calendar me-2"></i>' . date('F d, Y', strtotime($row['date'])) . ' | <i class="fas fa-user me-2"></i>' . htmlspecialchars($row['speaker']) . '</p>
                                        <p class="mb-3">' . htmlspecialchars($row['description']) . '</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="btn btn-sm btn-primary">Listen Now</a>
                                            <span class="text-muted"><i class="fas fa-clock me-1"></i>' . htmlspecialchars($row['duration']) . '</span>
                                        </div>
                                    </div>
                                  </div>';
                        }
                    } else {
                        echo '<p class="text-center">No bayan available at the moment.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Page -->
    <section id="gallery" class="page-section">
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), url('https://images.unsplash.com/photo-1519742866993-66d3cf21bb17?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Gallery</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" onclick="showPage('home')" class="text-white">Home</a></li>
                                <li class="breadcrumb-item text-white-50 active">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title text-center">Our Moments</h2>
                    <p class="lead">Explore photos from our community events, prayers, and activities.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="mosque-gallery">
                            <img src="https://images.unsplash.com/photo-1543362453-624bf73af4de?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Community Prayer">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mosque-gallery">
                            <img src="https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Eid Celebration">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mosque-gallery">
                            <img src="https://images.unsplash.com/photo-1601597111152-f4ff63471b0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Quran Class">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Page -->
    <section id="contact" class="page-section">
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), url('https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2069&q=80');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" onclick="showPage('home')" class="text-white">Home</a></li>
                                <li class="breadcrumb-item text-white-50 active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title text-center">Get in Touch</h2>
                    <p class="lead">We'd love to hear from you. Reach out with any questions or feedback.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h3>Contact Information</h3>
                        <p><i class="fas fa-map-marker-alt me-2"></i>Ethungahakotuwa, Udubaddawa, Kurunegala District, Sri Lanka</p>
                        <p><i class="fas fa-phone me-2"></i>+94 76 764 6614</p>
                        <p><i class="fas fa-envelope me-2"></i>info@almasjidulhasaniyya.org</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donate Page -->
    <section id="donate" class="page-section">
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 128, 128, 0.85), rgba(0, 128, 128, 0.75)), url('https://images.unsplash.com/photo-1591607388347-9ce64adcb3a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Support Our Mosque</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" onclick="showPage('home')" class="text-white">Home</a></li>
                                <li class="breadcrumb-item text-white-50 active">Donate</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title text-center">Make a Difference</h2>
                    <p class="lead">Your generous donations help maintain our mosque and support our community programs.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Bank Details</h3>
                        <p>Bank: Bank of Ceylon</p>
                        <p>Account Name: Al-Masjidul Hasaniyya</p>
                        <p>Account Number: 123456789</p>
                        <p>Branch: Kurunegala</p>
                    </div>
                    <div class="col-lg-6">
                        <h3>Progress</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                        <p class="mt-3">We’ve raised 75% of our goal for the mosque renovation project. Help us reach 100%!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>About Us</h4>
                    <p>Al-Masjidul Hasaniyya is dedicated to serving the Muslim community in Ethungahakotuwa through worship, education, and welfare programs.</p>
                </div>
                <div class="col-lg-4">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" onclick="showPage('home')">Home</a></li>
                        <li><a href="#" onclick="showPage('about')">About</a></li>
                        <li><a href="#" onclick="showPage('activities')">Activities</a></li>
                        <li><a href="#" onclick="showPage('events')">Events</a></li>
                        <li><a href="#" onclick="showPage('bayan')">Bayan</a></li>
                        <li><a href="#" onclick="showPage('contact')">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Ethungahakotuwa, Udubaddawa, Kurunegala District</p>
                    <p><i class="fas fa-phone me-2"></i>+94 76 764 6614</p>
                    <p><i class="fas fa-envelope me-2"></i>info@almasjidulhasaniyya.org</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <p>&copy; 2025 Al-Masjidul Hasaniyya. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Page navigation function
        function showPage(pageId) {
            document.querySelectorAll('.page-section').forEach(page => {
                page.classList.remove('active');
            });
            document.getElementById(pageId).classList.add('active');
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.textContent.toLowerCase() === pageId.toLowerCase()) {
                    link.classList.add('active');
                }
            });
            window.scrollTo({ top: 0, behavior: 'smooth' });
            return false;
        }

        // Spinner
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('spinner').style.display = 'none';
            }, 1000);
        });

        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.querySelector('.back-to-top');
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        });

        document.querySelector('.back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            showPage('home');
        });

        // Intersection Observer for animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.activity-card, .event-card, .sermon-card, .section-title, .mosque-gallery').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>