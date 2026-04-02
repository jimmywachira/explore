<?php require_once('views/partials/head.php'); ?>
<?php require_once('views/partials/banner.php'); ?>

<main class="w-full flex-1 text-blue-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10 lg:py-12 space-y-8 sm:space-y-10">
        <section class="page-surface-strong rounded-3xl p-6 sm:p-8 lg:p-10 shadow-sm">
            <p class="hero-kicker inline-flex items-center text-xs uppercase tracking-[0.2em] text-emerald-600 font-bold"><ion-icon name="shield-checkmark" class="icon-lg mr-2"></ion-icon>Protection First</p>
            <h1 class="hero-title inline-flex items-center text-3xl sm:text-4xl lg:text-5xl font-black mt-2 mb-4"><ion-icon name="scan" class="icon-xl mr-3 text-emerald-600"></ion-icon>Imported Car Inspection Guidance in Kenya</h1>
            <p class="text-sm sm:text-base text-blue-700 max-w-3xl leading-relaxed">
                We help you review condition details before purchase so you can make confident decisions.
                From auction sheet interpretation to risk notes, our goal is to reduce surprises.
            </p>
        </section>

        <section class="page-surface-strong rounded-3xl p-6 sm:p-8 shadow-sm">
            <h2 class="section-title inline-flex items-center text-2xl font-black mb-4"><ion-icon name="checkmark-done" class="icon-xl mr-3 text-emerald-600"></ion-icon>What We Check Before You Buy</h2>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm sm:text-base text-blue-700 list-disc pl-5">
                <li>Auction grade and interior/exterior notes</li>
                <li>Mileage consistency and wear indicators</li>
                <li>Accident/repair flags and structural concerns</li>
                <li>Engine, transmission, and warning signs</li>
                <li>Suitability for Kenyan road and business use</li>
                <li>Value-for-money recommendation</li>
            </ul>
        </section>

        <section class="page-surface-strong rounded-3xl p-6 sm:p-8 text-center shadow-xl">
            <h2 class="section-title inline-flex items-center text-2xl sm:text-3xl font-black mb-3 headline-accent"><ion-icon name="help-buoy" class="icon-xl mr-2"></ion-icon>Need Help Reviewing an Imported Car?</h2>
            <p class="text-sm sm:text-base text-blue-700 max-w-2xl mx-auto mb-5">Send us your preferred option and we will advise on whether to proceed.</p>
            <a href="/contact.php" class="inline-flex items-center rounded-xl bg-blue-600 px-5 py-3 text-white font-black hover:bg-blue-700 transition"><ion-icon name="chatbox-ellipses" class="icon-lg mr-2"></ion-icon>Get Inspection Support</a>
        </section>
    </div>
</main>

<?php require_once('views/partials/footer.php'); ?>

</body>

</html>
