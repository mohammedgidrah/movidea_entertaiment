@extends('main')

@section('title', 'Contact Us')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<style>
    *{
       text-transform: none !important;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 200px 20px 0 20px;
    }
    
    h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    
    .breadcrumb {
        font-size: 0.9rem;
        color: #ccc;
    }
    
    .breadcrumb a {
        color: #fff;
        text-decoration: none;
    }
    
    .breadcrumb span {
        margin: 0 10px;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 40px;
    }
    
    @media (max-width: 900px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .map-container {
        height: 400px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    
    .contact-info {
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .info-item {
        display: flex;
        align-items: baseline;
        margin-bottom: 25px;
    }
    
    .info-icon {
        background-color: #e91e63;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .info-content h3 {
        margin-bottom: 5px;
        color: #2c3e50;
    }
    
    .info-content p {
        margin-bottom: 5px;
    }
    
    .contact-link {
        color: #2c3e50!important;
        text-decoration: none;
        transition: color 0.3s ease;
        display: block;
        margin-bottom: 5px;
    }
    
    .contact-link:hover {
        color: #e91e63 !important;
    }
    
    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 10px;
        flex-wrap: wrap;
    }
    
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: #2c3e50;
        color: white;
        border-radius: 50%;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .social-links a:hover {
        background-color: #e91e63;
        transform: translateY(-3px);
        z-index: 10;
    }
    
    .contact-form {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }
    
    .form-title {
        text-align: center;
        margin-bottom: 30px;
        color: #2c3e50;
        position: relative;
        padding-bottom: 15px;
    }
    
    .form-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #e91e63;
    }
    
    .form-group {
        margin-bottom: 20px;
        position: relative;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #2c3e50;
    }
    
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        transition: border 0.3s ease;
    }
    
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #e91e63;
    }
    
    input:hover,
    textarea:hover {
        border-color:#D6D7DC !important;
    }
    
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    @media (max-width: 600px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
    
    textarea {
        min-height: 150px;
        resize: vertical;
    }
    
    button {
        background-color: #e91e63;
        color: white;
        border: none;
        padding: 14px 28px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }
    
    button:hover {
        background-color: #c2185b;
    }
    
    .error {
        color: #e91e63;
        font-size: 14px;
        margin-top: 5px;
        display: none;
    }
    
    .form-group.invalid input,
    .form-group.invalid textarea {
        border-color: #e91e63;
    }
    
    .form-group.invalid .error {
        display: block;
    }
    
    .alert {
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    
    .tooltip {
        position: relative;
        display: inline-block;
    }
    
    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #2c3e50;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: -120%;
        left: 50%;
        margin-left: -70px;
        opacity: 0;
        transition: opacity 0.3s;
        font-size: 12px;
    }
    
    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
    
    @media (max-width: 1139.5px) {
        .container {
            padding: 0;
        }
    }
</style>

<div class="container">
  @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="contact-grid">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.680376761166!2d-0.1272003230252242!3d51.507322217951004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ce3941eb1f%3A0x1a5b356eaef5030!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1689876312773!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <div class="contact-info">
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-content">
                    <h3>Our Location</h3>
                    <a href="https://goo.gl/maps/7VzJ8WZqZqZqZqZq5" target="_blank" class="contact-link">
                        <i class="fas fa-external-link-alt"></i> 123 Business Avenue, London, UK
                    </a>
                    <a href="https://www.google.com/maps/dir//123+Business+Avenue,+London,+UK" target="_blank" class="contact-link">
                        <i class="fas fa-directions"></i> Get Directions
                    </a>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info-content">
                    <h3>Phone Number</h3>
                    <a href="tel:+442012345678" class="contact-link">
                        <i class="fas fa-phone"></i> +44 20 1234 5678
                    </a>
                    <a href="tel:+442098765432" class="contact-link">
                        <i class="fas fa-phone"></i> +44 20 9876 5432
                    </a>
                    <a href="https://wa.me/442012345678" target="_blank" class="contact-link">
                        <i class="fab fa-whatsapp"></i> WhatsApp Us
                    </a>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-content">
                    <h3>Email Address</h3>
                    <a href="mailto:info@yourcompany.com" class="contact-link">
                        <i class="fas fa-envelope"></i> info@yourcompany.com
                    </a>
                    <a href="mailto:support@yourcompany.com" class="contact-link">
                        <i class="fas fa-envelope"></i> support@yourcompany.com
                    </a>
                    <a href="#contact-form" class="contact-link">
                        <i class="fas fa-paper-plane"></i> Send us a message
                    </a>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <div class="info-content">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#" class="tooltip">
                            <i class="fab fa-facebook-f"></i>
                            <span class="tooltiptext">Facebook</span>
                        </a>
                        <a href="#" class="tooltip">
                            <i class="fab fa-twitter"></i>
                            <span class="tooltiptext">Twitter</span>
                        </a>
                        <a href="#" class="tooltip">
                            <i class="fab fa-instagram"></i>
                            <span class="tooltiptext">Instagram</span>
                        </a>
                        <a href="#" class="tooltip">
                            <i class="fab fa-linkedin-in"></i>
                            <span class="tooltiptext">LinkedIn</span>
                        </a>
                        <a href="#" class="tooltip">
                            <i class="fab fa-youtube"></i>
                            <span class="tooltiptext">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form" id="contact-form">
        <h2 class="form-title">Send Us a Message</h2>
        
        <form method="POST" action="{{ route('contact.send') }}">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    <div class="error" id="name-error">Please enter your name</div>
                </div>
                
                <div class="form-group">
                    <label for="email">Your Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    <div class="error" id="email-error">Please enter a valid email address</div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" value="{{ old('subject') }}">
            </div>
            
            <div class="form-group">
                <label for="message">Your Message *</label>
                <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                <div class="error" id="message-error">Please enter your message</div>
            </div>
            
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('message');
        
        // Validate individual fields as user types
        nameInput.addEventListener('blur', function() {
            validateField(nameInput, 'name-error', 'Please enter your name');
        });
        
        emailInput.addEventListener('blur', function() {
            validateEmail();
        });
        
        messageInput.addEventListener('blur', function() {
            validateField(messageInput, 'message-error', 'Please enter your message');
        });
        
        // Add click event to scroll to form
        document.querySelector('a[href="#contact-form"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.contact-form').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });
        
        // Field validation functions
        function validateField(field, errorId, errorMessage) {
            const errorElement = document.getElementById(errorId);
            const formGroup = field.closest('.form-group');
            
            if (!field.value.trim()) {
                formGroup.classList.add('invalid');
                errorElement.textContent = errorMessage;
                return false;
            } else {
                formGroup.classList.remove('invalid');
                return true;
            }
        }
        
        function validateEmail() {
            const errorElement = document.getElementById('email-error');
            const formGroup = emailInput.closest('.form-group');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!emailInput.value.trim()) {
                formGroup.classList.add('invalid');
                errorElement.textContent = 'Please enter your email address';
                return false;
            } else if (!emailRegex.test(emailInput.value)) {
                formGroup.classList.add('invalid');
                errorElement.textContent = 'Please enter a valid email address';
                return false;
            } else {
                formGroup.classList.remove('invalid');
                return true;
            }
        }
    });
</script>
@endsection