<?php
require_once('views/partials/head.php');
require_once('views/partials/banner.php');
?>

<main class="w-full flex-1 text-blue-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-5 sm:py-8 lg:py-10 space-y-6 sm:space-y-8">
        <section class="relative overflow-hidden rounded-3xl border border-blue-200 bg-linear-to-r from-green-500 via-blue-600 to-white text-blue-900 shadow-2xl page-surface-strong">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_right,white,transparent_55%)]"></div>
            <div class="relative p-6 sm:p-8 lg:p-12  bg-green-500">
                <div class="grid grid-cols-1  lg:grid-cols-3 gap-6 lg:gap-8 items-end">
                    <div class="lg:col-span-2 space-y-4 rounded-2xl p-4 sm:p-6 shadow-lg">
                        <p class="inline-flex items-center gap-2 rounded-full bg-white/30 px-3 py-1 text-xs sm:font-bold uppercase tracking-[0.2em]">
                            <ion-icon name="globe-outline" class="icon-lg"></ion-icon>
                            Japan Direct Imports
                        </p>
                        <h1 class="hero-title text-3xl sm:text-4xl lg:text-5xl font-black text-blue-900 inline-flex items-center gap-3">
                            Premium Imports to Kenya Made Clear, Fast, and Reliable
                        </h1>
                        <p class="sm:text-base lg:text-lg text-blue-800/90 max-w-3xl">
                            Xplore Car Imports helps Kenyan buyers source premium Japanese vehicles with verified history,
                            pre-shipment inspection, transparent pricing, and complete delivery support from Japan to your doorstep.
                        </p>
                        <div class="flex flex-wrap gap-3 pt-2">
                            <a href="/contact.php" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 sm:text-base font-bold text-white hover:bg-blue-700 transition">
                                <ion-icon name="chatbubble-ellipses-outline" class="icon-lg"></ion-icon>
                                Request Import Consultation
                            </a>
                            <a href="/about.php" class="inline-flex items-center gap-2 rounded-xl border border-blue-600/20 bg-white/60 px-5 py-3 sm:text-base font-bold text-blue-900 hover:bg-white/90 transition">
                                <ion-icon name="information-circle-outline" class="icon-lg"></ion-icon>
                                Learn How We Work
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-white/50 bg-white/45 backdrop-blur-sm p-5 shadow-lg">
                        <p class="text-xs uppercase tracking-[0.18em] font-bold text-blue-600 inline-flex items-center gap-2"><ion-icon name="sparkles-outline" class="icon-lg"></ion-icon>What You Get</p>
                        <ul class="mt-3 space-y-2 sm:text-base font-semibold text-blue-800">
                            <li>Verified Japanese stock</li>
                            <li>Transparent CIF guidance</li>
                            <li>Port clearing support</li>
                            <li>Nairobi handover options</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
            <div class="page-surface rounded-2xl p-4 sm:p-5">
                <p class="text-2xl sm:text-3xl font-black text-blue-600 inline-flex items-center gap-2"><ion-icon name="time-outline" class="icon-lg"></ion-icon>4-6</p>
                <p class="text-blue-700">Weeks typical shipping window</p>
            </div>
            <div class="page-surface rounded-2xl p-4 sm:p-5">
                <p class="text-2xl sm:text-3xl font-black text-blue-600 inline-flex items-center gap-2"><ion-icon name="shield-checkmark-outline" class="icon-lg"></ion-icon>100%</p>
                <p class="text-blue-700">Price transparency commitment</p>
            </div>
            <div class="page-surface rounded-2xl p-4 sm:p-5">
                <p class="text-2xl sm:text-3xl font-black text-blue-600 inline-flex items-center gap-2"><ion-icon name="ribbon-outline" class="icon-lg"></ion-icon>KEBS</p>
                <p class="text-blue-700">Compliance-first sourcing policy</p>
            </div>
            <div class="page-surface rounded-2xl p-4 sm:p-5">
                <p class="text-2xl sm:text-3xl font-black text-blue-600 inline-flex items-center gap-2"><ion-icon name="people-outline" class="icon-lg"></ion-icon>1:1</p>
                <p class="text-blue-700">Dedicated buyer guidance</p>
            </div>
        </section>

        <section class="page-surface-strong rounded-3xl p-4 sm:p-6 lg:p-8 shadow-sm">
            <div class="flex flex-wrap items-end justify-between gap-4 mb-5 sm:mb-6">
                <div class="max-w-2xl">
                    <p class="section-kicker text-xs font-bold text-blue-600">Featured Inventory</p>
                    <h2 class="section-title text-2xl sm:text-3xl lg:text-4xl font-black mt-2 mb-2 headline-accent inline-flex items-center gap-2"><ion-icon name="images-outline" class="icon-lg"></ion-icon>Vehicle Showcase</h2>
                    <p class="text-black sm:text-base">Tap any vehicle image to open a full premium detail page with specs, pricing guidance, and consultation options.</p>
                </div>
                <a href="/contact.php" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-4 py-2.5 text-blue-900 font-bold hover:bg-blue-50 transition">
                    <ion-icon name="chatbubbles-outline" class="icon-lg"></ion-icon>
                    Need a specific model?
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 sm:gap-5">
                <?php foreach ($featuredCars as $car): ?>
                    <article class="group overflow-hidden rounded-3xl page-surface transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5">
                        <a href="/car-details.php?car=<?= urlencode($car['id']) ?>" class="block w-full overflow-hidden bg-white">
                            <img
                                src="<?= htmlspecialchars($car['image'], ENT_QUOTES, 'UTF-8') ?>"
                                alt="Featured vehicle image"
                                loading="lazy"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-[1.04]">
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="page-surface-strong rounded-3xl p-4 sm:p-6 lg:p-8">
            <div class="max-w-3xl mb-6">
                <p class="section-kicker text-xs font-bold text-blue-600">Our Core Services</p>
                <h2 class="section-title text-2xl sm:text-3xl lg:text-4xl font-black mt-2 mb-3 headline-accent"><ion-icon name="layers-outline" class="icon-lg"></ion-icon>End-to-End Japanese Car Import Support</h2>
                <p class="sm:text-base text-black">Everything is structured to reduce risk, save time, and keep you informed from selection to delivery.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
                <article class="page-surface rounded-2xl p-4 sm:p-5">
                    <h3 class="font-bold text-lg mb-2 inline-flex items-center gap-2"><ion-icon name="car-sport-outline" class="icon-lg"></ion-icon>Vehicle Sourcing</h3>
                    <p class="text-black">We identify options matching your budget, preferences, and business needs from trusted Japanese suppliers.</p>
                </article>
                <article class="page-surface rounded-2xl p-4 sm:p-5">
                    <h3 class="font-bold text-lg mb-2 inline-flex items-center gap-2"><ion-icon name="search-outline" class="icon-lg"></ion-icon>Inspection & Verification</h3>
                    <p class="text-black">Every shortlisted car is backed by condition details, mileage checks, and history verification before commitment.</p>
                </article>
                <article class="page-surface rounded-2xl p-4 sm:p-5">
                    <h3 class="font-bold text-lg mb-2 inline-flex items-center gap-2"><ion-icon name="boat-outline" class="icon-lg"></ion-icon>Shipping Coordination</h3>
                    <p class="text-black">We manage booking and shipping timelines while sharing status updates so you know exactly where your car is.</p>
                </article>
                <article class="page-surface rounded-2xl p-4 sm:p-5">
                    <h3 class="font-bold text-lg mb-2 inline-flex items-center gap-2"><ion-icon name="document-text-outline" class="icon-lg"></ion-icon>Customs & Clearing</h3>
                    <p class="text-black">Our team supports the clearing process with practical guidance on documents, timelines, and expected costs.</p>
                </article>
                <article class="page-surface rounded-2xl p-4 sm:p-5">
                    <h3 class="font-bold text-lg mb-2 inline-flex items-center gap-2"><ion-icon name="briefcase-outline" class="icon-lg"></ion-icon>Business Advisory</h3>
                    <p class="text-black">Need a taxi-ready or business-focused unit? We advise on model selection, efficiency, and operating considerations.</p>
                </article>
                <article class="page-surface rounded-2xl p-4 sm:p-5">
                    <h3 class="font-bold text-lg mb-2 inline-flex items-center gap-2"><ion-icon name="key-outline" class="icon-lg"></ion-icon>Handover Support</h3>
                    <p class="text-black">From arrival updates to collection planning, we help ensure a smooth final step before you hit the road.</p>
                </article>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-5">
            <div class="page-surface-strong rounded-3xl p-4 sm:p-6">
                <p class="section-kicker text-xs font-bold text-blue-600">How It Works</p>
                <h2 class="section-title text-2xl sm:text-3xl font-black mt-2 mb-4 inline-flex items-center gap-2"><ion-icon name="git-network-outline" class="icon-lg"></ion-icon>Simple, Structured, Transparent</h2>
                <ol class="space-y-3 sm:text-base text-blue-700 list-decimal pl-5">
                    <li>Share your target model, budget, and timeline.</li>
                    <li>Receive verified options with clear landed-cost guidance.</li>
                    <li>Approve your unit and proceed with secure purchasing steps.</li>
                    <li>Track shipping, clearing, and collection milestones in real time.</li>
                </ol>
            </div>

            <div class="page-surface-strong rounded-3xl p-4 sm:p-6">
                <p class="section-kicker text-xs font-bold text-blue-600">Why Buyers Choose Xplore</p>
                <h2 class="section-title text-2xl sm:text-3xl font-black mt-2 mb-4 text-blue-900 inline-flex items-center gap-2"><ion-icon name="medal-outline" class="icon-lg"></ion-icon>Trusted Japanese Car Import Partner in Kenya</h2>
                <ul class="space-y-3 sm:text-base text-blue-800">
                    <li>Transparent communication at each stage</li>
                    <li>Practical, non-hyped recommendations</li>
                    <li>Strong focus on compliance and reliability</li>
                    <li>Support tailored to personal and business buyers</li>
                </ul>
            </div>
        </section>

        <section class="page-surface-strong rounded-3xl p-6 sm:p-8 text-center">
            <p class="section-kicker text-xs font-bold text-blue-600">Ready To Start?</p>
            <h2 class="section-title text-2xl sm:text-3xl lg:text-4xl font-black mt-2 mb-3 headline-accent">Get a Japanese Car Import Quote Before You Commit</h2>
            <p class="sm:text-base text-blue-700 max-w-2xl mx-auto mb-6">
                Book a consultation with Xplore Car Imports and get a clear plan for your next import,
                including realistic timelines, expected costs, and vehicle options that match your goals.
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="/contact.php" class="inline-flex items-center gap-2 rounded-xl bg-linear-to-r from-green-500 to-blue-600 px-5 py-3 text-white font-bold hover:from-green-600 hover:to-blue-700 transition"><ion-icon name="call-outline" class="icon-lg"></ion-icon>Talk to Our Team</a>
                <a href="/about.php" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-5 py-3 text-blue-900 font-bold hover:bg-blue-50 transition"><ion-icon name="people-circle-outline" class="icon-lg"></ion-icon>About Xplore</a>
            </div>
        </section>
    </div>
</main>

<?php require_once('views/partials/footer.php'); ?>
</body>

</html>