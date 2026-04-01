<?php require_once('views/partials/head.php'); ?>
<?php require_once('views/partials/banner.php'); ?>

<main class="w-full flex-1 text-slate-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10 lg:py-12 space-y-8 sm:space-y-10">
        <section class="relative overflow-hidden rounded-3xl min-h-[420px] sm:min-h-[500px] lg:min-h-[580px] flex items-center">
            <img
                src="https://www.mazdausa.com/siteassets/vehicles/2026/cx-5/04_btv/004_exterior/ext.-360s/2.5-s/360-rhodium-white/e360-my26-cx5-s-rhodiumwhite-v2-024.jpg"
                alt="Xplore customer testimonials"
                class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-linear-to-br from-slate-950/85 via-emerald-950/55 to-slate-950/80"></div>
            <div class="absolute inset-0 bg-linear-to-r from-slate-950/75 via-slate-950/35 to-transparent"></div>

            <div class="relative z-10 p-6 sm:p-10 lg:p-14 w-full">
                <div class="max-w-4xl space-y-5 sm:space-y-6 text-white">
                    <p class="inline-flex items-center rounded-full border border-emerald-300/60 bg-emerald-400/15 px-4 py-1.5 text-xs sm:text-sm font-bold uppercase tracking-[0.2em] text-emerald-200">
                        <ion-icon name="chatbubbles" class="icon-lg mr-2"></ion-icon>
                        Verified Client Experiences
                    </p>
                    <h1 class="text-3xl sm:text-4xl lg:text-6xl font-black leading-tight">
                        Trusted by Buyers Who Wanted Confidence,
                        <span class="bg-linear-to-r from-emerald-300 to-cyan-300 bg-clip-text text-transparent">Not Guesswork</span>
                    </h1>
                    <p class="text-sm sm:text-base lg:text-lg text-slate-100/95 max-w-3xl leading-relaxed">
                        These stories come from real clients who imported with Xplore Cars Imports and received guided support
                        from vehicle selection to customs clearance and delivery.
                    </p>
                    <div class="flex flex-wrap gap-3 pt-1">
                        <a href="/contact.php" class="inline-flex items-center rounded-xl bg-emerald-500 px-5 py-3 text-sm sm:text-base font-bold text-white hover:bg-emerald-600 transition">
                            <ion-icon name="paper-plane" class="icon-lg mr-2"></ion-icon>
                            Start Your Import Journey
                        </a>
                        <a href="/about.php" class="inline-flex items-center rounded-xl border border-white/45 bg-white/10 px-5 py-3 text-sm sm:text-base font-bold text-white hover:bg-white/20 transition">
                            <ion-icon name="people" class="icon-lg mr-2"></ion-icon>
                            Learn About Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
            <article class="rounded-2xl border border-slate-200 bg-white/85 p-4 sm:p-5 shadow-sm text-center">
                <ion-icon name="happy" class="icon-xl text-emerald-600 mb-1"></ion-icon>
                <p class="text-2xl sm:text-3xl font-black text-emerald-600">10+</p>
                <p class="text-sm text-slate-700">Happy Customers</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white/85 p-4 sm:p-5 shadow-sm text-center">
                <ion-icon name="star" class="icon-xl text-emerald-600 mb-1"></ion-icon>
                <p class="text-2xl sm:text-3xl font-black text-emerald-600">4.9/5</p>
                <p class="text-sm text-slate-700">Average Rating</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white/85 p-4 sm:p-5 shadow-sm text-center">
                <ion-icon name="car-sport" class="icon-xl text-emerald-600 mb-1"></ion-icon>
                <p class="text-2xl sm:text-3xl font-black text-emerald-600">10+</p>
                <p class="text-sm text-slate-700">Vehicles Imported</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white/85 p-4 sm:p-5 shadow-sm text-center">
                <ion-icon name="shield-checkmark" class="icon-xl text-emerald-600 mb-1"></ion-icon>
                <p class="text-2xl sm:text-3xl font-black text-emerald-600">100%</p>
                <p class="text-sm text-slate-700">Support Commitment</p>
            </article>
        </section>

        <section class="rounded-3xl border border-slate-200 bg-white/90 p-6 sm:p-8 lg:p-10 shadow-sm">
            <div class="text-center mb-8 sm:mb-10">
                <p class="uppercase tracking-[0.2em] text-xs font-bold text-emerald-600 mb-3">Video Stories</p>
                <h2 class="inline-flex items-center justify-center text-2xl sm:text-4xl lg:text-5xl font-black mb-3"><ion-icon name="videocam" class="icon-xl mr-3 text-emerald-600"></ion-icon>Hear It Directly From Our Clients</h2>
                <p class="text-sm sm:text-base text-slate-700 max-w-2xl mx-auto">Real voices. Real delivery experiences. Real outcomes for Kenyan car buyers importing from Japan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-slate-50/70 transition-all duration-300 hover:border-emerald-400/50 hover:shadow-xl">
                    <div class="aspect-video w-full overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/ubvbEjIL2Mk" title="Client Testimonial 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="p-5 sm:p-6">
                        <p class="text-base font-bold mb-1">First-Time Import Success Story</p>
                        <p class="text-sm text-slate-600">Private Vehicle Owner</p>
                    </div>
                </article>

                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-slate-50/70 transition-all duration-300 hover:border-emerald-400/50 hover:shadow-xl">
                    <div class="aspect-video w-full overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/8APihMmKJb4?start=5" title="Client Testimonial 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="p-5 sm:p-6">
                        <p class="text-base font-bold mb-1">Smooth Import and Delivery Journey</p>
                        <p class="text-sm text-slate-600">Private Vehicle Owner</p>
                    </div>
                </article>

                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-slate-50/70 transition-all duration-300 hover:border-emerald-400/50 hover:shadow-xl">
                    <div class="aspect-video w-full overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/ztZaKMBXPTI" title="Client Testimonial 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="p-5 sm:p-6">
                        <p class="text-base font-bold mb-1">Business Buyer Experience</p>
                        <p class="text-sm text-slate-600">Fleet and Commercial Investor</p>
                    </div>
                </article>

                <article class="group overflow-hidden rounded-3xl border border-slate-200 bg-slate-50/70 transition-all duration-300 hover:border-emerald-400/50 hover:shadow-xl">
                    <div class="aspect-video w-full overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/t2E0UnaAsMA?start=36" title="Client Testimonial 4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="p-5 sm:p-6">
                        <p class="text-base font-bold mb-1">Transparent Service and Support</p>
                        <p class="text-sm text-slate-600">Private Vehicle Owner</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="rounded-3xl border border-slate-200 bg-white/90 p-6 sm:p-8 lg:p-10 shadow-sm">
            <div class="text-center mb-8 sm:mb-10">
                <p class="uppercase tracking-[0.2em] text-xs font-bold text-cyan-600 mb-3">Client Reviews</p>
                <h2 class="inline-flex items-center justify-center text-2xl sm:text-4xl font-black mb-3"><ion-icon name="ribbon" class="icon-xl mr-3 text-cyan-600"></ion-icon>What Clients Appreciate Most</h2>
                <p class="text-sm sm:text-base text-slate-700 max-w-2xl mx-auto">From communication quality to final handover, these are the moments clients remember.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 sm:p-7 hover:border-emerald-400/40 transition">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-11 w-11 rounded-full bg-linear-to-br from-emerald-400 to-cyan-400 text-black text-sm font-black flex items-center justify-center">DK</div>
                            <div>
                                <h3 class="font-bold">David K***</h3>
                                <p class="text-xs text-slate-500">Taxi Business Owner</p>
                            </div>
                        </div>
                        <div class="flex gap-1 text-emerald-500" aria-label="5 star rating">
                            <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed">Xplore Cars Imports handled everything from selection to customs with professionalism. I saved money and time, and the process felt fully managed end to end.</p>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 sm:p-7 hover:border-emerald-400/40 transition">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-11 w-11 rounded-full bg-linear-to-br from-emerald-400 to-cyan-400 text-black text-sm font-black flex items-center justify-center">AM</div>
                            <div>
                                <h3 class="font-bold">Amelia ***</h3>
                                <p class="text-xs text-slate-500">Private Vehicle Owner</p>
                            </div>
                        </div>
                        <div class="flex gap-1 text-emerald-500" aria-label="5 star rating">
                            <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed">I had many questions before importing, and the team answered each one clearly. My vehicle arrived in excellent condition, exactly as promised.</p>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 sm:p-7 hover:border-emerald-400/40 transition">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-11 w-11 rounded-full bg-linear-to-br from-emerald-400 to-cyan-400 text-black text-sm font-black flex items-center justify-center">SK</div>
                            <div>
                                <h3 class="font-bold">Samuel K***</h3>
                                <p class="text-xs text-slate-500">Commercial Investor</p>
                            </div>
                        </div>
                        <div class="flex gap-1 text-emerald-500" aria-label="5 star rating">
                            <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed">I imported multiple vehicles for business and the consistency was impressive. Their customs expertise and communication made scaling my fleet easier.</p>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 sm:p-7 hover:border-emerald-400/40 transition">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-11 w-11 rounded-full bg-linear-to-br from-emerald-400 to-cyan-400 text-black text-sm font-black flex items-center justify-center">NJ</div>
                            <div>
                                <h3 class="font-bold">Njoro ***</h3>
                                <p class="text-xs text-slate-500">Family Business Owner</p>
                            </div>
                        </div>
                        <div class="flex gap-1 text-emerald-500" aria-label="5 star rating">
                            <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed">The guidance was honest and practical. I was helped to choose within budget and still get quality. Delivery was faster than I expected.</p>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 sm:p-7 hover:border-emerald-400/40 transition">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-11 w-11 rounded-full bg-linear-to-br from-emerald-400 to-cyan-400 text-black text-sm font-black flex items-center justify-center">GK</div>
                            <div>
                                <h3 class="font-bold">Grace K***</h3>
                                <p class="text-xs text-slate-500">Transport Business Owner</p>
                            </div>
                        </div>
                        <div class="flex gap-1 text-emerald-500" aria-label="5 star rating">
                            <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed">Their transparency stands out. Every detail was explained, and I always knew the next step. I now refer friends and colleagues to Xplore.</p>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-6 sm:p-7 hover:border-emerald-400/40 transition">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="h-11 w-11 rounded-full bg-linear-to-br from-emerald-400 to-cyan-400 text-black text-sm font-black flex items-center justify-center">JW</div>
                            <div>
                                <h3 class="font-bold">Joseph W***</h3>
                                <p class="text-xs text-slate-500">Executive Professional</p>
                            </div>
                        </div>
                        <div class="flex gap-1 text-emerald-500" aria-label="5 star rating">
                            <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon>
                        </div>
                    </div>
                    <p class="text-sm text-slate-700 leading-relaxed">The process was clear from start to finish and the final car quality was excellent. It felt secure, transparent, and worth every step.</p>
                </article>
            </div>
        </section>

        <section class="relative overflow-hidden rounded-3xl border border-emerald-300 bg-linear-to-r from-emerald-600 via-emerald-500 to-green-500 text-white shadow-xl">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top,white,transparent_60%)]"></div>
            <div class="relative p-6 sm:p-8 lg:p-10 text-center">
                <p class="text-xs uppercase tracking-[0.2em] font-bold text-emerald-100">Start Your Journey</p>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black mt-2 mb-3">Ready to Import Your Next Car with Confidence?</h2>
                <p class="text-sm sm:text-base text-emerald-50 max-w-2xl mx-auto mb-6">
                    Work with a team that keeps pricing clear, timelines realistic, and communication consistent from day one.
                </p>
                <div class="flex flex-wrap justify-center gap-3">
                    <a href="/contact.php" class="inline-flex items-center rounded-xl bg-white px-5 py-3 text-emerald-700 font-black hover:bg-emerald-50 transition">
                        <ion-icon name="chatbubble-ellipses" class="icon-lg mr-2"></ion-icon>
                        Talk to Our Team
                    </a>
                    <a href="/about.php" class="inline-flex items-center rounded-xl border border-white/60 px-5 py-3 font-black text-white hover:bg-white/15 transition">
                        <ion-icon name="arrow-forward-circle" class="icon-lg mr-2"></ion-icon>
                        Learn About Us
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Footer -->
<?php require_once('views/partials/footer.php'); ?>

</body>

</html>