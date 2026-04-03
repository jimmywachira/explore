<?php
require_once('views/partials/head.php');
require_once('views/partials/banner.php');
?>

<main class="w-full flex-1 text-blue-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-5 sm:py-8 lg:py-10 space-y-6 sm:space-y-8">
        <section class="text-center max-w-3xl mx-auto space-y-4 sm:space-y-5">
            <p class="hero-kicker inline-flex items-center gap-2 rounded-full bg-sky-100 px-4 py-1.5 text-xs sm:text-sm font-bold uppercase tracking-[0.2em] text-sky-700">
                <ion-icon name="mail-open-outline" class="icon-lg"></ion-icon>
                Get In Touch
            </p>
            <h1 class="hero-title text-3xl sm:text-4xl lg:text-5xl font-black">
                Contact Xplore Car Imports for Japanese Car Import Support
            </h1>
            <p class="text-sm sm:text-base lg:text-lg text-blue-700 leading-relaxed">
                Have questions about importing a vehicle from Japan? Our team will guide you through sourcing,
                verification, shipping, and delivery with practical support every step of the way.
            </p>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-5 lg:gap-8">
            <div class="lg:col-span-2 page-surface-strong rounded-3xl p-5 sm:p-6 lg:p-8 shadow-sm">
                <div class="mb-7 sm:mb-8">
                    <h2 class="section-title text-2xl sm:text-3xl font-black mb-2 inline-flex items-center gap-2"><ion-icon name="paper-plane-outline" class="icon-lg"></ion-icon>Send Us a Message About Your Import</h2>
                    <p class="text-sm text-blue-600">
                        Fill in your details and our team will respond as soon as possible during business hours.
                    </p>
                </div>

                <!-- Success/Error Message -->
                <div id="formMessage" class="hidden p-4 rounded-xl text-sm font-medium mb-6"></div>

                <form id="contactForm" class="space-y-5 sm:space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                        <div>
                            <label for="name" class="block text-sm font-semibold mb-2">Full Name <span class="text-red-600">*</span></label>
                            <input id="name" name="name" type="text" placeholder="John Doe" required class="w-full rounded-xl border border-blue-300 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold mb-2">Email Address <span class="text-red-600">*</span></label>
                            <input id="email" name="email" type="email" placeholder="john@example.com" required class="w-full rounded-xl border border-blue-300 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                        <div>
                            <label for="phone" class="block text-sm font-semibold mb-2">Phone Number <span class="text-red-600">*</span></label>
                            <input id="phone" name="phone" type="tel" placeholder="+254 757 356 989" required class="w-full rounded-xl border border-blue-300 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" />
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-semibold mb-2">Subject <span class="text-red-600">*</span></label>
                            <select id="subject" name="subject" required class="w-full rounded-xl border border-blue-300 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                <option value="">Select a subject</option>
                                <option value="Car Inquiry">Car Inquiry</option>
                                <option value="Inspection Report">Inspection Report</option>
                                <option value="Shipping Question">Shipping Question</option>
                                <option value="General Inquiry">General Inquiry</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold mb-2">Message <span class="text-red-600">*</span></label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us what vehicle you are looking for and your budget range..." required class="w-full rounded-xl border border-blue-300 bg-white px-4 py-3 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
                        <p class="mt-2 text-xs text-blue-500">Tip: Include preferred make, model, and timeline for faster support.</p>
                    </div>

                    <button type="submit" id="submitBtn" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-xl bg-linear-to-r from-sky-600 to-blue-500 px-6 py-3.5 text-white font-bold hover:from-sky-700 hover:to-blue-600 transition">
                        <ion-icon name="send-outline" class="icon-lg"></ion-icon>
                        Send Message
                    </button>
                </form>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const form = document.getElementById('contactForm');
                        const messageDiv = document.getElementById('formMessage');
                        const submitBtn = document.getElementById('submitBtn');

                        if (!form) return;

                        form.addEventListener('submit', async function(e) {
                            e.preventDefault();

                            // Show loading state
                            submitBtn.disabled = true;
                            const originalText = submitBtn.innerHTML;
                            submitBtn.innerHTML = '<ion-icon name="hourglass-outline" class="icon-lg animate-spin"></ion-icon> Sending...';

                            try {
                                const formData = new FormData(form);
                                const response = await fetch('/handle-contact.php', {
                                    method: 'POST',
                                    body: formData
                                });

                                const data = await response.json();

                                // Show message
                                messageDiv.classList.remove('hidden');
                                if (data.success) {
                                    messageDiv.className = 'p-4 rounded-xl text-sm font-medium bg-blue-100 text-blue-800 border border-blue-300';
                                    form.reset();
                                } else {
                                    messageDiv.className = 'p-4 rounded-xl text-sm font-medium bg-red-100 text-red-800 border border-red-300';
                                }
                                messageDiv.textContent = data.message;

                                // Auto-hide success message after 5 seconds
                                if (data.success) {
                                    setTimeout(() => {
                                        messageDiv.classList.add('hidden');
                                    }, 5000);
                                }
                            } catch (error) {
                                messageDiv.classList.remove('hidden');
                                messageDiv.className = 'p-4 rounded-xl text-sm font-medium bg-red-100 text-red-800 border border-red-300';
                                messageDiv.textContent = 'An error occurred. Please try again or contact us directly.';
                                console.error('Form error:', error);
                            } finally {
                                // Restore button state
                                submitBtn.disabled = false;
                                submitBtn.innerHTML = originalText;
                            }
                        });
                    });
                </script>
            </div>

            <aside class="lg:col-span-1 space-y-4 sm:space-y-5">
                <article class="page-surface rounded-2xl p-5 sm:p-6">
                    <h3 class="section-kicker text-sm font-bold uppercase tracking-wide text-sky-700 mb-2 inline-flex items-center gap-2"><ion-icon name="call-outline" class="icon-lg"></ion-icon>Call or Text</h3>
                    <p class="text-lg font-black text-blue-900">+254 757 356 989</p>
                    <p class="text-sm text-blue-600 mt-1">Available for inquiries</p>
                </article>

                <article class="page-surface rounded-2xl p-5 sm:p-6">
                    <h3 class="section-kicker text-sm font-bold uppercase tracking-wide text-sky-700 mb-2 inline-flex items-center gap-2"><ion-icon name="logo-whatsapp" class="icon-lg"></ion-icon>WhatsApp Us</h3>
                    <a href="https://wa.me/254757356989" target="_blank" class="text-base font-black text-sky-700 hover:text-sky-800 transition">
                        Chat with our team
                    </a>
                    <p class="text-sm text-blue-600 mt-1">Quick replies for pricing and process questions</p>
                </article>

                <article class="page-surface rounded-2xl p-5 sm:p-6">
                    <h3 class="section-kicker text-sm font-bold uppercase tracking-wide text-sky-700 mb-2 inline-flex items-center gap-2"><ion-icon name="mail-outline" class="icon-lg"></ion-icon>Email</h3>
                    <a href="mailto:info@xplorecar.com" class="text-base font-black text-sky-700 hover:text-sky-800 transition">
                        info@xplorecar.com
                    </a>
                    <p class="text-sm text-blue-600 mt-1"> Fast responses to your inquiries</p>
                </article>

                <article class="page-surface-strong rounded-2xl p-5 sm:p-6">
                    <h3 class="section-kicker text-sm font-bold uppercase tracking-wide text-sky-700 mb-2 inline-flex items-center gap-2"><ion-icon name="time-outline" class="icon-lg"></ion-icon>Business Hours</h3>
                    <p class="text-sm text-blue-700"><span class="font-semibold">Mon - Fri:</span> 8:00 AM - 5:00 PM</p>
                    <p class="text-sm text-blue-700"><span class="font-semibold">Sat</span> 10:00 AM - 4:00 PM</p>
                </article>
            </aside>
        </section>

        <section class="page-surface-strong rounded-3xl p-5 sm:p-6 lg:p-8 shadow-sm">
            <div class="mb-6">
                <h2 class="section-title text-2xl sm:text-3xl font-black mt-2 mb-2 inline-flex items-center gap-2"><ion-icon name="map-outline" class="icon-lg"></ion-icon>Find Xplore Car Imports Easily</h2>
                <p class="section-kicker inline-flex items-center gap-2 ml-2"><ion-icon name="pin-outline" class="icon-lg"></ion-icon>Visit Our Office</p>
                <p class="text-sm sm:text-base text-blue-700">Use the map below to locate our office and plan your visit. Appointments are recommended for personalized support.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 lg:gap-8 items-stretch">
                <div class="lg:col-span-3 overflow-hidden rounded-2xl border border-blue-200 bg-white">
                    <iframe
                        title="Xplore Car Imports Location"
                        src="https://www.google.com/maps?q=2nd+Floor,+Zuhura+Place,+Thika&output=embed"
                        class="w-full h-[320px] sm:h-[360px] lg:h-full min-h-[320px]"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="lg:col-span-2 page-surface rounded-2xl p-5 sm:p-6 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.18em] text-blue-600 font-bold">Office Address</p>
                            <p class="mt-1 text-base sm:text-lg text-blue-900 font-semibold">2nd Floor, Zuhura Place, Thika</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.18em] text-blue-600 font-bold">Working Hours</p>
                            <p class="mt-1 text-sm text-blue-700">Mon - Fri: 8:00 AM - 5:00 PM</p>
                            <p class="text-sm text-blue-700">Sat: 10:00 AM - 4:00 PM</p>
                        </div>
                        <p class="text-sm text-blue-700">Need help navigating? Call us and our team will guide you to our office in real time.</p>
                    </div>

                    <div class="mt-5 flex flex-wrap gap-3">
                        <a href="https://www.google.com/maps/search/?api=1&query=2nd+Floor%2C+Zuhura+Place%2C+Thika" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-white text-sm font-semibold hover:bg-blue-700 transition">
                            <ion-icon name="navigate-outline" class="icon-lg"></ion-icon>
                            Open in Google Maps
                        </a>
                        <a href="tel:+254757356989" class="inline-flex items-center gap-2 rounded-xl border border-blue-300 px-4 py-2.5 text-blue-900 text-sm font-semibold hover:bg-blue-50 transition">
                            <ion-icon name="call-outline" class="icon-lg"></ion-icon>
                            Call for Directions
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-surface-strong rounded-3xl p-5 sm:p-6 lg:p-8 text-center shadow-xl">
            <p class="section-kicker text-xs uppercase tracking-[0.2em] font-bold text-blue-100">Need A Faster Start?</p>
            <h2 class="section-title text-2xl sm:text-3xl lg:text-4xl font-black mt-2 mb-3 text-blue-900">Get Your Car Import Plan Today</h2>
            <p class="text-sm sm:text-base text-blue-700 max-w-2xl mx-auto mb-6">
                Share your budget and preferred vehicle type. We will guide you on the best options,
                estimated landed costs, and the next practical step.
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="https://wa.me/254757356989" target="_blank" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-white font-black hover:bg-blue-700 transition">
                    <ion-icon name="logo-whatsapp" class="icon-lg"></ion-icon>
                    Chat on WhatsApp
                </a>
                <a href="/" class="inline-flex items-center gap-2 rounded-xl border border-blue-300 px-5 py-3 text-blue-900 font-black hover:bg-blue-50 transition">
                    <ion-icon name="home-outline" class="icon-lg"></ion-icon>
                    Back to Home
                </a>
            </div>
        </section>
    </div>
</main>
<?php require_once('views/partials/footer.php'); ?>

</body>

</html>
