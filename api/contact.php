<?php include(__DIR__ . '/header.php') ?>
<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1>Contact us</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Start Contact
    ============================================= -->
<div class="contact-area default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 contact-form-box">
                <div class="content">
                    <div class="heading">
                        <h2 class="title">Need Help?</h2>
                        <p class="desc">Reach out to explore the most dependable sovereign solutions.</p>
                    </div>
                    <form action="send-mail.php" method="POST" class="contact-form" id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name*"
                                        type="text" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Please describe what you need." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit" class="btn-default btn-highlighted">
                                    Get a free consultation
                                </button>
                                <div class="hero-btn">

                                </div>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 info col-md-6">
                <div class="contact-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab_1" data-bs-toggle="tab" data-bs-target="#tabs_1"
                                type="button" role="tab" aria-controls="tabs_1" aria-selected="true">Get in
                                Touch</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab_2" data-bs-toggle="tab" data-bs-target="#tabs_2"
                                type="button" role="tab" aria-controls="tabs_2" aria-selected="false">Google
                                Maps</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs_1" role="tabpanel" aria-labelledby="tab_1">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            <strong>Our location</strong>
                                            Muscat Hills, Muscat, Oman
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            <strong>Write to us</strong>
                                            <a href="mailto:info@marsadtech.me" class="text-reset">info@marsadtech.me</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            <strong>Make a call</strong>
                                            <a href="tel:+971563292225" class="text-reset">+ 971 056.329.2225</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="tabs_2" role="tabpanel" aria-labelledby="tab_2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14627.712174626427!2d58.294916044414!3d23.571027678179078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e8e00ea95b1b5c9%3A0xc6f3c9dfd53594e5!2sMuscat%20Hills%2C%20Muscat%2C%20Oman!5e0!3m2!1sen!2sin!4v1750619261097!5m2!1sen!2sin"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->
<!-- Contact Toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast align-items-center border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body" id="toastMessage"></div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var WHATSAPP_NUMBER = '971563292225';
        var form = document.getElementById('contactForm');
        var submitBtn = document.getElementById('submit');

        function showToast(message, ok) {
            var toastEl = document.getElementById('liveToast');
            toastEl.classList.remove(ok ? 'text-bg-danger' : 'text-bg-success');
            toastEl.classList.add(ok ? 'text-bg-success' : 'text-bg-danger');
            document.getElementById('toastMessage').textContent = message;
            new bootstrap.Toast(toastEl).show();
        }

        function openWhatsApp(formData) {
            var text = [
                'Hi Marsad, I just submitted the contact form on your website.',
                '',
                'Name: ' + formData.get('name'),
                'Email: ' + formData.get('email'),
                'Phone: ' + formData.get('phone'),
                '',
                'Message: ' + formData.get('comments')
            ].join('\n');
            window.open('https://wa.me/' + WHATSAPP_NUMBER + '?text=' + encodeURIComponent(text), '_blank', 'noopener');
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(form);
            // Open before awaiting so browsers treat it as part of the click and don't block the popup
            openWhatsApp(formData);
            submitBtn.disabled = true;

            fetch(form.action, { method: 'POST', body: formData })
                .then(function (res) { return res.json(); })
                .then(function (result) {
                    showToast(result.message, result.success);
                    if (result.success) form.reset();
                })
                .catch(function () {
                    showToast('Ooops! There was a problem sending your message. Please try again.', false);
                })
                .finally(function () {
                    submitBtn.disabled = false;
                });
        });
    });
</script>
<?php include(__DIR__ . '/footer.php') ?>