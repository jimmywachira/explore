<?php
require_once('views/partials/head.php');
require_once('views/partials/banner.php');
?>

<main class="w-full flex-1 text-blue-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-5 sm:py-8 lg:py-10 space-y-6 sm:space-y-8">
        <section class="relative overflow-hidden rounded-3xl border border-blue-200 bg-linear-to-r from-green-500 via-blue-600 to-white text-blue-900 shadow-2xl page-surface-strong">
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_right,white,transparent_55%)]"></div>
            <section class="page-surface-strong rounded-3xl p-4 sm:p-6 lg:p-8 shadow-sm">
                <?php
                $instagramPosts = [
                    'https://www.instagram.com/p/DWhaTF7CXO-/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DWWagZxDGp0/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DWRGmEXkuSO/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DWgCxKNDNud/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DWB0JDzEwcP/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DV-fRYUCtbj/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DVxjq5pjnyv/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DVibsowDItL/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DVTQIuiEU5u/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DWBK8jzj3wU/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DWA-rnMjMgn/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                    'https://www.instagram.com/p/DWOQscdjeWO/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                ];

                $instagramImages = array_map(function ($postUrl) {
                    if (preg_match('~/p/([^/?#]+)~', $postUrl, $matches) === 1) {
                        $shortcode = $matches[1];
                        return [
                            'post' => $postUrl,
                            'image' => "https://www.instagram.com/p/{$shortcode}/media/?size=l",
                        ];
                    }

                    return [
                        'post' => $postUrl,
                        'image' => '',
                    ];
                }, $instagramPosts);

                $featuredPost = $instagramImages[0] ?? null;
                $galleryPosts = array_slice($instagramImages, 1);
                ?>

                <div class="relative overflow-hidden rounded-3xl border border-blue-200/70 bg-white/80 p-4 sm:p-6 lg:p-8 backdrop-blur-sm">
                    <div class="absolute -top-20 -right-20 h-52 w-52 rounded-full bg-blue-500/15 blur-3xl"></div>
                    <div class="absolute -bottom-24 -left-20 h-56 w-56 rounded-full bg-green-500/15 blur-3xl"></div>

                    <div class="relative space-y-5 sm:space-y-6">
                        <div class="flex flex-wrap items-end justify-between gap-4">
                            <div class="max-w-2xl">
                                <p class="section-kicker text-xs font-bold text-blue-600">Curated Instagram Gallery</p>
                                <h2 class="section-title text-2xl sm:text-3xl lg:text-4xl font-black mt-2 text-blue-900">Premium Arrivals For High-End Buyers</h2>
                                <p class="mt-2 text-black sm:text-base">A visual catalogue of recently sourced vehicles, presented for clients who value quality, rarity, and clean ownership history.</p>
                            </div>
                            <a href="https://www.instagram.com/xplorecarimports/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-4 py-2 text-sm font-bold text-blue-900 hover:bg-blue-50 transition">
                                <ion-icon name="logo-instagram" class="icon-lg"></ion-icon>
                                View Full Instagram Catalogue
                            </a>
                        </div>

                        <?php if ($featuredPost && $featuredPost['image'] !== ''): ?>
                            <article class="group relative overflow-hidden rounded-3xl border border-blue-200/70 shadow-lg">
                                <a href="<?= htmlspecialchars($featuredPost['post'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="block">
                                    <img
                                        src="<?= htmlspecialchars($featuredPost['image'], ENT_QUOTES, 'UTF-8') ?>"
                                        alt="Featured premium vehicle"
                                        loading="lazy"
                                        class="w-full aspect-[16/10] object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                                    <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-linear-to-t from-blue-950/70 via-blue-900/20 to-transparent p-4 sm:p-5">
                                        <p class="inline-flex rounded-full bg-white/90 px-3 py-1 text-xs font-bold uppercase tracking-[0.15em] text-blue-900">Featured Listing</p>
                                    </div>
                                </a>
                            </article>
                        <?php endif; ?>

                        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-4">
                            <?php foreach ($galleryPosts as $item): ?>
                                <?php if ($item['image'] === '') continue; ?>
                                <article class="group overflow-hidden rounded-2xl border border-blue-200/70 bg-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg">
                                    <a href="<?= htmlspecialchars($item['post'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="block">
                                        <img
                                            src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>"
                                            alt="Instagram vehicle post"
                                            loading="lazy"
                                            class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-[1.04]">
                                    </a>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
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
                                    <p class="mt-2 text-black sm:text-base">A visual catalogue of recently sourced vehicles, presented for clients who value quality, rarity, and clean ownership history.</p>
                                </div>
                                <a href="https://www.instagram.com/xplorecarimports/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-4 py-2 text-sm font-bold text-blue-900 hover:bg-blue-50 transition">
                                    <ion-icon name="logo-instagram" class="icon-lg"></ion-icon>
                                    View Full Instagram Catalogue
                                </a>
                            </div>

                            <?php if ($featuredPost && $featuredPost['image'] !== ''): ?>
                                <article class="group relative overflow-hidden rounded-3xl border border-blue-200/70 shadow-lg">
                                    <a href="<?= htmlspecialchars($featuredPost['post'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="block">
                                        <img
                                            src="<?= htmlspecialchars($featuredPost['image'], ENT_QUOTES, 'UTF-8') ?>"
                                            alt="Featured premium vehicle"
                                            loading="lazy"
                                            class="w-full aspect-[16/10] object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                                        <div class="pointer-events-none absolute inset-x-0 bottom-0 bg-linear-to-t from-blue-950/70 via-blue-900/20 to-transparent p-4 sm:p-5">
                                            <p class="inline-flex rounded-full bg-white/90 px-3 py-1 text-xs font-bold uppercase tracking-[0.15em] text-blue-900">Featured Listing</p>
                                        </div>
                                    </a>
                                </article>
                            <?php endif; ?>

                            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-4">
                                <?php foreach ($galleryPosts as $item): ?>
                                    <?php if ($item['image'] === '') continue; ?>
                                    <article class="group overflow-hidden rounded-2xl border border-blue-200/70 bg-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg">
                                        <a href="<?= htmlspecialchars($item['post'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="block">
                                            <img
                                                src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>"
                                                alt="Instagram vehicle post"
                                                loading="lazy"
                                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-[1.04]">
                                        </a>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
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