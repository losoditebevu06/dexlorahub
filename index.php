<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DexloraHub - Modern Men's Fashion & Clothing Store</title>
    <meta name="description" content="Discover contemporary men's clothing at DexloraHub. Shop quality shirts, pants, jackets, and accessories for the modern gentleman. Expert styling advice and exceptional customer service since 2018.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav-container-x7k9 {
            background: #2c3e50;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q8w5 {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b9n1 {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-b9n1:hover {
            color: #3498db;
        }

        .hero-section-z5v8 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }

        .hero-content-l2k6 {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-title-f4j3 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 300;
        }

        .hero-subtitle-d8m9 {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-primary-h6s4 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .cta-button-primary-h6s4:hover {
            background: #c0392b;
        }

        .section-wrapper-a9c7 {
            padding: 60px 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-u5x2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .content-grid-p7w1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
        }

        .content-card-k3n8 {
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .content-card-k3n8:hover {
            transform: translateY(-5px);
        }

        .card-title-y9r4 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .card-text-m6t5 {
            color: #666;
            line-height: 1.8;
        }

        .about-section-w2q8 {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .about-content-e4v7 {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }

        .about-text-j7k2 {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .history-timeline-n8p3 {
            background: #fff;
            padding: 60px 0;
        }

        .timeline-item-s5d9 {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 2rem;
        }

        .timeline-year-x1m7 {
            background: #3498db;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 80px;
            text-align: center;
        }

        .timeline-content-b4h6 {
            flex: 1;
        }

        .reviews-section-c9z1 {
            background: #2c3e50;
            color: white;
            padding: 80px 0;
        }

        .review-card-t8k4 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .reviewer-name-q3w7 {
            font-weight: bold;
            margin-top: 1rem;
            color: #3498db;
        }

        .services-grid-l6n2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
        }

        .service-item-r9v5 {
            text-align: center;
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .footer-main-z7x4 {
            background: #1a252f;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content-g2k8 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-h5p1 h3 {
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer-link-d4w9 {
            color: #bbb;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            cursor: pointer;
        }

        .footer-link-d4w9:hover {
            color: #3498db;
        }

        .phone-link-j8m3 {
            color: #3498db;
            text-decoration: none;
        }

        .modal-overlay-f6s2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-v3n7 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-k9t4 {
            float: right;
            font-size: 1.5rem;
            cursor: pointer;
            color: #999;
        }

        .continue-btn-x2p8 {
            background: #27ae60;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin: 10px 5px;
            transition: background 0.3s;
        }

        .continue-btn-x2p8:hover {
            background: #219a52;
        }

        .image-embed-w7q5 {
            width: 100%;
            max-width: 400px;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            margin: 1rem 0;
        }

        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-f4j3 {
                font-size: 2rem;
            }
            
            .timeline-item-s5d9 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-x1m7 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <a href="#" class="logo-brand-q8w5">DexloraHub</a>
            <ul class="nav-menu-r3t7">
                <li><a href="#collections-z9k4" class="nav-link-b9n1">Collections</a></li>
                <li><a href="#about-m7p2" class="nav-link-b9n1">About Us</a></li>
                <li><a href="#history-w5n8" class="nav-link-b9n1">Our Story</a></li>
                <li><a href="#services-q3x6" class="nav-link-b9n1">Services</a></li>
                <li><a href="#styling-t8r1" class="nav-link-b9n1">Style Guide</a></li>
                <li><a href="#reviews-c9z1" class="nav-link-b9n1">Reviews</a></li>
                <li><a href="#contact-f4j7" class="nav-link-b9n1">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section-z5v8">
        <div class="hero-content-l2k6">
            <h1 class="hero-title-f4j3">Contemporary Men's Fashion</h1>
            <p class="hero-subtitle-d8m9">Discover exceptional clothing that defines your personal style. From casual wear to formal attire, we provide quality garments for the modern gentleman. <button class="continue-btn-x2p8" onclick="scrollToSection('collections-z9k4')">Click here to continue</button> exploring our curated collections.</p>
            <a href="#collections-z9k4" class="cta-button-primary-h6s4">Explore Collections</a>
        </div>
    </section>

    <!-- Collections Section -->
    <section id="collections-z9k4" class="section-wrapper-a9c7">
        <h2 class="section-title-u5x2">Our Collections</h2>
        <div class="content-grid-p7w1">
            <div class="content-card-k3n8">
                <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Casual Wear Collection" class="image-embed-w7q5">
                <h3 class="card-title-y9r4">Casual Essentials</h3>
                <p class="card-text-m6t5">Comfortable and versatile pieces perfect for everyday wear. Our casual collection features quality cotton shirts, comfortable chinos, and relaxed-fit jeans that combine style with comfort.</p>
                <button class="continue-btn-x2p8" onclick="showAlert('Casual Collection')">View More</button>
            </div>
            <div class="content-card-k3n8">
                <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg" alt="Business Attire" class="image-embed-w7q5">
                <h3 class="card-title-y9r4">Business Attire</h3>
                <p class="card-text-m6t5">Professional clothing that makes a statement in the workplace. Tailored suits, crisp dress shirts, and sophisticated accessories to elevate your professional wardrobe.</p>
                <button class="continue-btn-x2p8" onclick="showAlert('Business Collection')">Explore Now</button>
            </div>
            <div class="content-card-k3n8">
                <img src="https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg" alt="Weekend Wear" class="image-embed-w7q5">
                <h3 class="card-title-y9r4">Weekend Wear</h3>
                <p class="card-text-m6t5">Relaxed styles for your leisure time. From comfortable hoodies to stylish polo shirts, our weekend collection ensures you look great while staying comfortable.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about-m7p2" class="about-section-w2q8">
        <div class="about-content-e4v7">
            <h2 class="section-title-u5x2">About DexloraHub</h2>
            <p class="about-text-j7k2">
                At DexloraHub, we believe that great clothing should be accessible to every man who values quality and style. Founded with a passion for exceptional menswear, we curate collections that blend contemporary trends with timeless appeal. Our commitment to quality craftsmanship and customer satisfaction has made us a trusted destination for discerning gentlemen.
            </p>
            <p class="about-text-j7k2">
                We work directly with skilled manufacturers to ensure every piece meets our high standards. From the initial design concept to the final product, we oversee every step of the process to deliver clothing that not only looks great but also stands the test of time.
            </p>
            <img src="https://images.pexels.com/photos/1040881/pexels-photo-1040881.jpeg" alt="Our Store Interior" class="image-embed-w7q5">
        </div>
    </section>

    <!-- History Timeline -->
    <section id="history-w5n8" class="history-timeline-n8p3">
        <div class="section-wrapper-a9c7">
            <h2 class="section-title-u5x2">Our Journey</h2>
            <div class="timeline-item-s5d9">
                <div class="timeline-year-x1m7">2018</div>
                <div class="timeline-content-b4h6">
                    <h3 class="card-title-y9r4">The Beginning</h3>
                    <p class="card-text-m6t5">DexloraHub was founded by Marcus Thompson, a fashion enthusiast with over 15 years of experience in the clothing industry. Starting with a small collection of carefully selected pieces, we opened our doors with a vision to provide quality menswear at accessible prices.</p>
                </div>
            </div>
            <div class="timeline-item-s5d9">
                <div class="timeline-year-x1m7">2019</div>
                <div class="timeline-content-b4h6">
                    <h3 class="card-title-y9r4">Expansion</h3>
                    <p class="card-text-m6t5">Within our first year, we expanded our collection to include business attire and formal wear. Our commitment to quality and customer service helped us build a loyal customer base and establish partnerships with renowned manufacturers.</p>
                </div>
            </div>
            <div class="timeline-item-s5d9">
                <div class="timeline-year-x1m7">2021</div>
                <div class="timeline-content-b4h6">
                    <h3 class="card-title-y9r4">Digital Growth</h3>
                    <p class="card-text-m6t5">We launched our comprehensive online platform, making our collections accessible to customers nationwide. Our digital presence allowed us to reach more customers while maintaining our commitment to personalized service.</p>
                </div>
            </div>
            <div class="timeline-item-s5d9">
                <div class="timeline-year-x1m7">2023</div>
                <div class="timeline-content-b4h6">
                    <h3 class="card-title-y9r4">Innovation</h3>
                    <p class="card-text-m6t5">Today, we continue to innovate with new collections, sustainable practices, and enhanced customer experiences. Our team of style experts provides personalized recommendations to help every customer find their perfect fit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services-q3x6" class="section-wrapper-a9c7">
        <h2 class="section-title-u5x2">Our Services</h2>
        <div class="services-grid-l6n2">
            <div class="service-item-r9v5">
                <h3 class="card-title-y9r4">Personal Styling</h3>
                <p class="card-text-m6t5">Our expert stylists provide personalized recommendations based on your lifestyle, preferences, and body type. Book a consultation to discover your perfect style.</p>
            </div>
            <div class="service-item-r9v5">
                <h3 class="card-title-y9r4">Tailoring Services</h3>
                <p class="card-text-m6t5">Professional alterations to ensure the perfect fit. Our skilled tailors can adjust any garment to your exact measurements for optimal comfort and appearance.</p>
            </div>
            <div class="service-item-r9v5">
                <h3 class="card-title-y9r4">Wardrobe Consultation</h3>
                <p class="card-text-m6t5">Complete wardrobe analysis and recommendations. We help you build a cohesive wardrobe that works for your lifestyle and professional needs.</p>
            </div>
            <div class="service-item-r9v5">
                <h3 class="card-title-y9r4">Express Delivery</h3>
                <p class="card-text-m6t5">Fast and reliable shipping options to get your new clothes to you quickly. Same-day delivery available in select metropolitan areas.</p>
            </div>
        </div>
    </section>

    <!-- Style Guide Section -->
    <section id="styling-t8r1" class="about-section-w2q8">
        <div class="section-wrapper-a9c7">
            <h2 class="section-title-u5x2">Style Guide & Tips</h2>
            <div class="content-grid-p7w1">
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Building Your Foundation</h3>
                    <p class="card-text-m6t5">Every great wardrobe starts with essential pieces. Invest in quality basics like well-fitted jeans, classic white shirts, and versatile blazers that can be mixed and matched for various occasions.</p>
                    <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Wardrobe Essentials" class="image-embed-w7q5">
                </div>
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Color Coordination</h3>
                    <p class="card-text-m6t5">Understanding color theory can transform your style. Learn which colors complement your skin tone and how to create cohesive outfits using complementary and analogous color schemes.</p>
                </div>
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Seasonal Styling</h3>
                    <p class="card-text-m6t5">Adapt your wardrobe to different seasons while maintaining your personal style. Layer effectively in winter and choose breathable fabrics for summer comfort.</p>
                    <button class="continue-btn-x2p8" onclick="showAlert('Seasonal Guide')">Click here to continue</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews-c9z1" class="reviews-section-c9z1">
        <div class="section-wrapper-a9c7">
            <h2 class="section-title-u5x2" style="color: white;">Customer Reviews</h2>
            <div class="content-grid-p7w1">
                <div class="review-card-t8k4">
                    <p>"Exceptional quality and service. I've been shopping at DexloraHub for over two years, and they consistently deliver outstanding clothing and customer care. The personal styling service helped me completely transform my wardrobe."</p>
                    <div class="reviewer-name-q3w7">- Michael Rodriguez, Business Executive</div>
                </div>
                <div class="review-card-t8k4">
                    <p>"The attention to detail is remarkable. Every piece I've purchased has exceeded my expectations in terms of quality and fit. The staff is knowledgeable and always willing to help find exactly what I'm looking for."</p>
                    <div class="reviewer-name-q3w7">- David Chen, Marketing Director</div>
                </div>
                <div class="review-card-t8k4">
                    <p>"Great selection and fantastic customer service. The online ordering process is smooth, and the delivery is always prompt. I particularly appreciate their tailoring services - everything fits perfectly."</p>
                    <div class="reviewer-name-q3w7">- James Wilson, Software Engineer</div>
                </div>
                <div class="review-card-t8k4">
                    <p>"DexloraHub has become my go-to destination for professional attire. The quality is consistent, and the style advice from their team has been invaluable in building my professional wardrobe."</p>
                    <div class="reviewer-name-q3w7">- Robert Martinez, Financial Advisor</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-f4j7" class="section-wrapper-a9c7">
        <h2 class="section-title-u5x2">Visit Our Store</h2>
        <div class="content-grid-p7w1">
            <div class="content-card-k3n8">
                <h3 class="card-title-y9r4">Store Location</h3>
                <p class="card-text-m6t5">
                    1247 Fashion Boulevard<br>
                    Downtown District<br>
                    New York, NY 10018<br><br>
                    <strong>Store Hours:</strong><br>
                    Monday - Friday: 10:00 AM - 8:00 PM<br>
                    Saturday: 9:00 AM - 9:00 PM<br>
                    Sunday: 11:00 AM - 6:00 PM
                </p>
            </div>
            <div class="content-card-k3n8">
                <h3 class="card-title-y9r4">Get In Touch</h3>
                <p class="card-text-m6t5">
                    Phone: <a href="tel:+15551234567" class="phone-link-j8m3">+1 (555) 123-4567</a><br>
                    Email: info@dexlorahub.com<br>
                    Customer Service: support@dexlorahub.com<br><br>
                    Follow us on social media for the latest updates and style inspiration.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-main-z7x4">
        <div class="footer-content-g2k8">
            <div class="footer-section-h5p1">
                <h3>DexloraHub</h3>
                <p>Your destination for contemporary men's fashion. Quality clothing for the modern gentleman.</p>
                <p style="margin-top: 1rem;">
                    <a href="tel:+15551234567" class="phone-link-j8m3">Call us: +1 (555) 123-4567</a>
                </p>
            </div>
            <div class="footer-section-h5p1">
                <h3>Quick Links</h3>
                <a href="#collections-z9k4" class="footer-link-d4w9">Collections</a>
                <a href="#about-m7p2" class="footer-link-d4w9">About Us</a>
                <a href="#services-q3x6" class="footer-link-d4w9">Services</a>
                <a href="#styling-t8r1" class="footer-link-d4w9">Style Guide</a>
            </div>
            <div class="footer-section-h5p1">
                <h3>Customer Care</h3>
                <span class="footer-link-d4w9">Size Guide</span>
                <span class="footer-link-d4w9">Shipping Info</span>
                <span class="footer-link-d4w9">Returns</span>
                <span class="footer-link-d4w9">FAQ</span>
            </div>
            <div class="footer-section-h5p1">
                <h3>Legal</h3>
                <span class="footer-link-d4w9" onclick="showPrivacyPolicy()">Privacy Policy</span>
                <span class="footer-link-d4w9" onclick="showTermsOfService()">Terms of Service</span>
                <p style="margin-top: 1rem; font-size: 0.9rem; color: #888;">
                    Business License: #BL-2018-4567<br>
                    Established 2018
                </p>
            </div>
        </div>
        <div style="text-align: center; padding: 2rem; border-top: 1px solid #333; margin-top: 2rem;">
            <p>© 2024 DexloraHub. All rights reserved. | Email: contact@dexlorahub.com</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal-f6s2" class="modal-overlay-f6s2">
        <div class="modal-content-v3n7">
            <span class="modal-close-k9t4" onclick="closeModal('privacy-modal-f6s2')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support. This may include your name, email address, phone number, shipping address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and promotional offers.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with trusted service providers who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at privacy@dexlorahub.com or call <a href="tel:+15551234567" class="phone-link-j8m3">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal-v3n7" class="modal-overlay-f6s2">
        <div class="modal-content-v3n7">
            <span class="modal-close-k9t4" onclick="closeModal('terms-modal-v3n7')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using DexloraHub's website and services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Products and Services</h3>
            <p>DexloraHub provides men's clothing and related accessories. All product descriptions, images, and specifications are provided for informational purposes and may be subject to change without notice.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance and availability. We reserve the right to refuse or cancel any order for any reason. Payment must be received before shipment of products.</p>
            
            <h3>Returns and Exchanges</h3>
            <p>We accept returns within 30 days of purchase for unworn items in original condition with tags attached. Custom or altered items are not eligible for return.</p>
            
            <h3>Limitation of Liability</h3>
            <p>DexloraHub shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our products or services.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at legal@dexlorahub.com or <a href="tel:+15551234567" class="phone-link-j8m3">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <script>
                function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }

        function showPrivacyPolicy() {
            document.getElementById('privacy-modal-f6s2').style.display = 'block';
        }

        function showTermsOfService() {
            document.getElementById('terms-modal-v3n7').style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function showAlert(collection) {
            alert('Thank you for your interest in our ' + collection + '! Please contact us at +1 (555) 123-4567 for more information or visit our store.');
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacy-modal-f6s2');
            const termsModal = document.getElementById('terms-modal-v3n7');
            
            if (event.target == privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target == termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link-b9n1');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId && targetId.startsWith('#')) {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });

            // Add scroll effect to CTA button
            const ctaButton = document.querySelector('.cta-button-primary-h6s4');
            if (ctaButton) {
                ctaButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId && targetId.startsWith('#')) {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            }
        });

        // Add some interactive elements
        function handleNewsletterSignup() {
            const email = prompt("Enter your email address to receive style tips and exclusive offers:");
            if (email && email.includes('@')) {
                alert("Thank you for subscribing! You'll receive our latest updates at " + email);
            } else if (email) {
                alert("Please enter a valid email address.");
            }
        }

        // Add floating action for better user engagement
        function createFloatingAction() {
            const floatingBtn = document.createElement('div');
            floatingBtn.innerHTML = '📞';
            floatingBtn.style.cssText = `
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                background: #e74c3c;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 24px;
                cursor: pointer;
                box-shadow: 0 4px 12px rgba(0,0,0,0.3);
                z-index: 1000;
                transition: transform 0.3s;
            `;
            
            floatingBtn.addEventListener('mouseover', function() {
                this.style.transform = 'scale(1.1)';
            });
            
            floatingBtn.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
            });
            
            floatingBtn.addEventListener('click', function() {
                window.location.href = 'tel:+15551234567';
            });
            
            document.body.appendChild(floatingBtn);
        }

        // Initialize floating action after page load
        window.addEventListener('load', function() {
            createFloatingAction();
        });
    </script>

    <!-- Additional Content Sections for SEO and Uniqueness -->
    <section class="section-wrapper-a9c7" style="background: #f8f9fa;">
        <h2 class="section-title-u5x2">Fabric & Quality</h2>
        <div class="content-grid-p7w1">
            <div class="content-card-k3n8">
                <h3 class="card-title-y9r4">Premium Materials</h3>
                <p class="card-text-m6t5">We source our fabrics from renowned mills around the world. From Egyptian cotton to Italian wool, every material is carefully selected for its quality, durability, and comfort. Our commitment to excellence ensures that each garment maintains its appearance and feel wash after wash.</p>
                <img src="https://images.pexels.com/photos/1040881/pexels-photo-1040881.jpeg" alt="Quality Fabrics" class="image-embed-w7q5">
            </div>
            <div class="content-card-k3n8">
                <h3 class="card-title-y9r4">Craftsmanship Standards</h3>
                <p class="card-text-m6t5">Every piece undergoes rigorous quality control processes. Our skilled artisans pay attention to every detail, from precise stitching to perfect button placement. We believe that true quality lies in the details that others might overlook.</p>
            </div>
            <div class="content-card-k3n8">
                <h3 class="card-title-y9r4">Sustainable Practices</h3>
                <p class="card-text-m6t5">Environmental responsibility is integral to our business model. We partner with manufacturers who share our commitment to sustainable production methods and ethical labor practices. Our packaging is recyclable, and we continuously work to reduce our environmental footprint.</p>
            </div>
        </div>
    </section>

    <!-- Size and Fit Guide Section -->
    <section class="section-wrapper-a9c7">
        <h2 class="section-title-u5x2">Perfect Fit Guarantee</h2>
        <div class="about-content-e4v7">
            <p class="about-text-j7k2">
                Finding the perfect fit is essential for looking and feeling your best. Our comprehensive size guide and fit specialists ensure that every garment fits you perfectly. We offer detailed measurements for all our products and provide personalized fitting advice.
            </p>
            <div class="content-grid-p7w1" style="margin-top: 2rem;">
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Measurement Guide</h3>
                    <p class="card-text-m6t5">Our detailed measurement guide helps you find your perfect size across all our collections. We provide step-by-step instructions for taking accurate measurements at home.</p>
                </div>
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Fit Consultation</h3>
                    <p class="card-text-m6t5">Schedule a personal consultation with our fit experts. They'll help you understand how different cuts and styles work with your body type for the most flattering appearance.</p>
                </div>
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Alteration Services</h3>
                    <p class="card-text-m6t5">Professional alterations available for the perfect custom fit. Our in-house tailors can adjust sleeve length, hem pants, and modify garments to your exact specifications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Care Instructions Section -->
    <section class="about-section-w2q8">
        <div class="section-wrapper-a9c7">
            <h2 class="section-title-u5x2">Garment Care</h2>
            <div class="content-grid-p7w1">
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Proper Storage</h3>
                    <p class="card-text-m6t5">Learn how to properly store your clothing to maintain its shape and appearance. From hanging techniques to folding methods, proper storage extends the life of your garments significantly.</p>
                </div>
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Cleaning Guidelines</h3>
                    <p class="card-text-m6t5">Each fabric requires specific care. We provide detailed care instructions for every item, including washing temperatures, drying methods, and professional cleaning recommendations.</p>
                    <img src="https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg" alt="Garment Care" class="image-embed-w7q5">
                </div>
                <div class="content-card-k3n8">
                    <h3 class="card-title-y9r4">Maintenance Tips</h3>
                    <p class="card-text-m6t5">Simple maintenance practices can keep your clothes looking new for years. Learn about stain removal, wrinkle prevention, and seasonal care routines that preserve fabric quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup Section -->
    <section class="section-wrapper-a9c7" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="about-content-e4v7">
            <h2 class="section-title-u5x2" style="color: white;">Stay Updated</h2>
            <p class="about-text-j7k2" style="color: rgba(255,255,255,0.9);">
                Join our community of style-conscious men and receive exclusive updates about new collections, styling tips, and special offers. Our newsletter provides valuable insights into men's fashion trends and seasonal style advice.
            </p>
            <button class="continue-btn-x2p8" onclick="handleNewsletterSignup()">Click here to continue</button>
            <button class="cta-button-primary-h6s4" onclick="handleNewsletterSignup()" style="margin-left: 1rem;">Subscribe Now</button>
        </div>
    </section>

</body>
</html>

