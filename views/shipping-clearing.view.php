<?php require_once('views/partials/head.php'); ?>
<?php require_once('views/partials/banner.php'); ?>

<main class="w-full flex-1 text-blue-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10 lg:py-12 space-y-8 sm:space-y-10">
        <section class="page-surface-strong rounded-3xl p-6 sm:p-8 lg:p-10 shadow-sm">
            <p class="hero-kicker inline-flex items-center text-xs uppercase tracking-[0.2em] text-emerald-600 font-bold"><ion-icon name="boat" class="icon-lg mr-2"></ion-icon>Logistics Service</p>
            <h1 class="hero-title inline-flex items-center text-3xl sm:text-4xl lg:text-5xl font-black mt-2 mb-4"><ion-icon name="globe" class="icon-xl mr-3 text-emerald-600"></ion-icon>Shipping and Clearing Support for Imported Cars</h1>
            <p class="text-sm sm:text-base text-blue-700 max-w-3xl leading-relaxed">
                We coordinate shipment milestones and provide guidance through customs and port processes
                so delivery feels predictable instead of stressful.
            </p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-4 gap-4 sm:gap-5">
            <article class="page-surface rounded-2xl p-5 text-center">
                <ion-icon name="clipboard" class="icon-xl text-emerald-600"></ion-icon>
                <p class="text-2xl font-black text-emerald-600">1</p>
                <p class="text-sm text-blue-700 mt-1">Booking and export prep</p>
            </article>
            <article class="page-surface rounded-2xl p-5 text-center">
                <ion-icon name="trail-sign" class="icon-xl text-emerald-600"></ion-icon>
                <p class="text-2xl font-black text-emerald-600">2</p>
                <p class="text-sm text-blue-700 mt-1">Transit tracking updates</p>
            </article>
            <article class="page-surface rounded-2xl p-5 text-center">
                <ion-icon name="document-text" class="icon-xl text-emerald-600"></ion-icon>
                <p class="text-2xl font-black text-emerald-600">3</p>
                <p class="text-sm text-blue-700 mt-1">Customs and clearing guidance</p>
            </article>
            <article class="page-surface rounded-2xl p-5 text-center">
                <ion-icon name="checkmark-circle" class="icon-xl text-emerald-600"></ion-icon>
                <p class="text-2xl font-black text-emerald-600">4</p>
                <p class="text-sm text-blue-700 mt-1">Collection and handover support</p>
            </article>
        </section>

        <section class="page-surface-strong rounded-3xl p-6 sm:p-8 text-center shadow-xl">
            <h2 class="section-title inline-flex items-center text-2xl sm:text-3xl font-black mb-3 headline-accent"><ion-icon name="compass" class="icon-xl mr-2"></ion-icon>Track Your Import from Japan with Confidence</h2>
            <p class="text-sm sm:text-base text-blue-700 max-w-2xl mx-auto mb-5">We keep you updated from shipment to final local delivery planning.</p>
            <a href="/contact.php" class="inline-flex items-center rounded-xl bg-emerald-600 px-5 py-3 text-white font-black hover:bg-emerald-700 transition"><ion-icon name="call" class="icon-lg mr-2"></ion-icon>Talk to Logistics Team</a>
        </section>
    </div>
</main>

<?php require_once('views/partials/footer.php'); ?>

</body>

</html>
