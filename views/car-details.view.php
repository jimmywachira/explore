<?php
require_once('views/partials/head.php');
require_once('views/partials/banner.php');
?>

<main class="w-full flex-1 text-blue-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-5 sm:py-8 lg:py-10 space-y-6 sm:space-y-8">
        <section class="page-surface-strong rounded-3xl p-4 sm:p-6 lg:p-8 shadow-sm">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <nav aria-label="Breadcrumb" class="text-xs sm:text-sm text-blue-700">
                    <a href="/" class="hover:text-blue-900 transition">Home</a>
                    <span class="mx-2">/</span>
                    <a href="/#featured-inventory" class="hover:text-blue-900 transition">Featured Inventory</a>
                    <span class="mx-2">/</span>
                    <span class="text-blue-900 font-bold">Selected Vehicle</span>
                </nav>
                <a href="/" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-4 py-2 text-blue-900 font-bold hover:bg-blue-50 transition">
                    <ion-icon name="arrow-back-outline" class="icon-lg"></ion-icon>
                    Back to Gallery
                </a>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-5 lg:gap-6">
            <div class="lg:col-span-2 space-y-4 sm:space-y-5">
                <article class="overflow-hidden rounded-3xl page-surface-strong shadow-sm">
                    <div class="relative bg-white">
                        <img
                            src="<?= htmlspecialchars($car['image'], ENT_QUOTES, 'UTF-8') ?>"
                            alt="Featured vehicle image"
                            class="w-full h-[320px] sm:h-[420px] lg:h-[520px] object-cover"
                            loading="eager">
                        <div class="absolute top-3 left-3 sm:top-4 sm:left-4 inline-flex items-center gap-2 rounded-full bg-white/90 px-3 py-1.5 text-xs sm:text-sm text-blue-900 font-bold shadow-sm">
                            <ion-icon name="sparkles-outline" class="icon-lg"></ion-icon>
                            Premium Stock
                        </div>

                    </div>
                </article>

                <?php if (false): ?>
                    <article class="page-surface rounded-3xl p-4 sm:p-6 shadow-sm">
                        <div class="flex items-center justify-between gap-3 flex-wrap mb-4">
                            <h2 class="section-title text-xl sm:text-2xl font-black inline-flex items-center gap-2"><ion-icon name="information-circle-outline" class="icon-lg"></ion-icon>Vehicle Specifications</h2>
                            <span class="inline-flex items-center gap-2 rounded-full bg-blue-50 border border-blue-100 px-3 py-1 text-xs sm:text-sm font-bold text-blue-700">Auction Grade <?= htmlspecialchars($car['grade'], ENT_QUOTES, 'UTF-8') ?></span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                            <div class="rounded-2xl border border-blue-100 bg-white p-3 sm:p-4">
                                <p class="text-xs text-blue-600 uppercase tracking-wider">Make</p>
                                <p class="text-base sm:text-lg font-bold text-blue-900"><?= htmlspecialchars($car['make'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <div class="rounded-2xl border border-blue-100 bg-white p-3 sm:p-4">
                                <p class="text-xs text-blue-600 uppercase tracking-wider">Model</p>
                                <p class="text-base sm:text-lg font-bold text-blue-900"><?= htmlspecialchars($car['model'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <div class="rounded-2xl border border-blue-100 bg-white p-3 sm:p-4">
                                <p class="text-xs text-blue-600 uppercase tracking-wider">Mileage</p>
                                <p class="text-base sm:text-lg font-bold text-blue-900"><?= htmlspecialchars($car['mileage'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <div class="rounded-2xl border border-blue-100 bg-white p-3 sm:p-4">
                                <p class="text-xs text-blue-600 uppercase tracking-wider">Engine</p>
                                <p class="text-base sm:text-lg font-bold text-blue-900"><?= htmlspecialchars($car['engine'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <div class="rounded-2xl border border-blue-100 bg-white p-3 sm:p-4">
                                <p class="text-xs text-blue-600 uppercase tracking-wider">Transmission</p>
                                <p class="text-base sm:text-lg font-bold text-blue-900"><?= htmlspecialchars($car['transmission'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <div class="rounded-2xl border border-blue-100 bg-white p-3 sm:p-4">
                                <p class="text-xs text-blue-600 uppercase tracking-wider">Fuel</p>
                                <p class="text-base sm:text-lg font-bold text-blue-900"><?= htmlspecialchars($car['fuel'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <div class="rounded-2xl border border-blue-100 bg-white p-3 sm:p-4 sm:col-span-2">
                                <p class="text-xs text-blue-600 uppercase tracking-wider">VIN Number</p>
                                <p class="text-sm sm:text-base font-bold text-blue-900 break-all"><?= htmlspecialchars($car['vin'], ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>

                <article class="page-surface rounded-3xl p-4 sm:p-6 shadow-sm">
                    <h2 class="section-title text-xl sm:text-2xl font-black mb-3 inline-flex items-center gap-2"><ion-icon name="clipboard-outline" class="icon-lg"></ion-icon>Import Advisory</h2>
                    <div class="space-y-3 text-black sm:text-base">
                        <p>
                            This featured unit is profiled as a high-value Japan import option with a strong reliability-to-cost balance.
                        </p>
                        <p>
                            Xplore handles inspection checks, shipping coordination, and clearing support so your ownership journey stays transparent from purchase to delivery.
                        </p>
                        <p>
                            For high-end buyers and fleet clients, we can also source similar alternatives with matching spec targets and timeline requirements.
                        </p>
                    </div>
                </article>
            </div>

            <aside class="space-y-4 sm:space-y-5">
                <article class="rounded-3xl bg-linear-to-br from-green-500 via-blue-600 to-blue-700 p-5 sm:p-6 text-white shadow-xl">
                    <p class="text-xs sm:text-sm uppercase tracking-[0.18em]">CIF Price Guidance</p>
                    <p class="text-sm text-blue-100 mt-2">Estimated cost to Kenya before final local registration and delivery choices.</p>

                    <div class="mt-5 space-y-2.5">
                        <a href="/contact.php" class="inline-flex w-full justify-center items-center gap-2 rounded-xl bg-white text-blue-900 px-4 py-3 font-bold hover:bg-blue-50 transition">
                            <ion-icon name="mail-outline" class="icon-lg"></ion-icon>
                            Request Full Quotation
                        </a>
                        <a href="https://wa.me/254757356989?text=Hello%20Xplore%2C%20I%20am%20interested%20in%20this%20featured%20vehicle" target="_blank" rel="noopener noreferrer" class="inline-flex w-full justify-center items-center gap-2 rounded-xl border border-white/40 px-4 py-3 font-bold hover:bg-white/10 transition">
                            <ion-icon name="logo-whatsapp" class="icon-lg"></ion-icon>
                            Discuss on WhatsApp
                        </a>
                    </div>

                    <div class="mt-5 pt-4 border-t border-white/25 text-sm text-blue-100">
                        <p class="inline-flex items-center gap-2"><ion-icon name="shield-checkmark-outline" class="icon-lg"></ion-icon>Transparent pricing. Verified sourcing. End-to-end support.</p>
                    </div>
                </article>

                <article class="page-surface rounded-3xl p-4 sm:p-5 shadow-sm">
                    <h3 class="text-lg font-bold text-blue-900 mb-3 inline-flex items-center gap-2"><ion-icon name="logo-instagram" class="icon-lg"></ion-icon>Source Reference</h3>
                    <a href="<?= htmlspecialchars($car['instagram'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-4 py-2.5 text-blue-900 font-bold hover:bg-blue-50 transition w-full justify-center">
                        View Original Instagram Post
                    </a>
                </article>

                <article class="page-surface rounded-3xl p-4 sm:p-5 shadow-sm">
                    <h3 class="text-lg font-bold text-blue-900 mb-3 inline-flex items-center gap-2"><ion-icon name="call-outline" class="icon-lg"></ion-icon>Direct Contact</h3>
                    <div class="space-y-2.5 text-sm sm:text-base">
                        <a href="tel:+254757356989" class="flex items-center gap-2 text-blue-900 hover:text-blue-700 transition"><ion-icon name="call-outline" class="icon-lg"></ion-icon>+254 757 356 989</a>
                        <a href="mailto:info@xplorecar.com" class="flex items-center gap-2 text-blue-900 hover:text-blue-700 transition"><ion-icon name="mail-outline" class="icon-lg"></ion-icon>info@xplorecar.com</a>
                    </div>
                </article>
            </aside>
        </section>

        <?php if (!empty($similarCars)): ?>
            <section class="page-surface-strong rounded-3xl p-4 sm:p-6 lg:p-8 shadow-sm">
                <div class="flex items-center justify-between gap-3 flex-wrap mb-5">
                    <div>
                        <p class="section-kicker text-xs font-bold text-blue-600">More Options</p>
                        <h2 class="section-title text-2xl sm:text-3xl font-black mt-2">Similar Vehicles</h2>
                    </div>
                    <a href="/" class="inline-flex items-center gap-2 rounded-xl border border-blue-200 bg-white px-4 py-2.5 text-blue-900 font-bold hover:bg-blue-50 transition">
                        View All Featured Cars
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
                    <?php foreach ($similarCars as $similarCar): ?>
                        <article class="group overflow-hidden rounded-3xl page-surface transition-all duration-300 hover:shadow-xl">
                            <a href="/car-details-<?= urlencode($similarCar['id']) ?>.html" class="block">
                                <img src="<?= htmlspecialchars($similarCar['image'], ENT_QUOTES, 'UTF-8') ?>" alt="Featured vehicle image" class="w-full aspect-[4/3] object-cover transition-transform duration-500 group-hover:scale-[1.04]" loading="lazy">
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php require_once('views/partials/footer.php'); ?>
</body>

</html>