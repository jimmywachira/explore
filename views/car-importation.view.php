<?php require_once('views/partials/head.php'); ?>
<?php require_once('views/partials/banner.php'); ?>

<main class="w-full flex-1 text-slate-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10 lg:py-12 space-y-8 sm:space-y-10">
        <section class="rounded-3xl border border-slate-200 bg-white/90 p-6 sm:p-8 lg:p-10 shadow-sm">
            <p class="inline-flex items-center text-xs uppercase tracking-[0.2em] text-emerald-600 font-bold"><ion-icon name="sparkles" class="icon-lg mr-2"></ion-icon>Core Service</p>
            <h1 class="inline-flex items-center text-3xl sm:text-4xl lg:text-5xl font-black mt-2 mb-4"><ion-icon name="car-sport" class="icon-xl mr-3 text-emerald-600"></ion-icon>Car Importation Services in Kenya</h1>
            <p class="text-sm sm:text-base text-slate-700 max-w-3xl leading-relaxed">
                Xplore Car Imports handles your import journey from first consultation to final handover.
                We help you select the right Japanese unit, estimate landed cost clearly, and guide you through each milestone.
            </p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-5">
            <article class="rounded-2xl border border-slate-200 bg-white/85 p-5">
                <h2 class="inline-flex items-center text-lg font-bold mb-2"><ion-icon name="search" class="icon-lg mr-2 text-emerald-600"></ion-icon>Vehicle Selection</h2>
                <p class="text-sm text-slate-700">Shortlisted options based on budget, usage, and Kenyan market suitability.</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white/85 p-5">
                <h2 class="inline-flex items-center text-lg font-bold mb-2"><ion-icon name="wallet" class="icon-lg mr-2 text-emerald-600"></ion-icon>Transparent Costing</h2>
                <p class="text-sm text-slate-700">Clear guidance on CIF ranges, statutory charges, and expected timelines.</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white/85 p-5">
                <h2 class="inline-flex items-center text-lg font-bold mb-2"><ion-icon name="navigate" class="icon-lg mr-2 text-emerald-600"></ion-icon>End-to-End Guidance</h2>
                <p class="text-sm text-slate-700">Support from sourcing to customs process and final local handover coordination.</p>
            </article>
        </section>

        <section class="rounded-3xl border border-emerald-300 bg-linear-to-r from-emerald-600 via-emerald-500 to-green-500 text-white p-6 sm:p-8 text-center shadow-xl">
            <h2 class="inline-flex items-center text-2xl sm:text-3xl font-black mb-3"><ion-icon name="rocket" class="icon-xl mr-2"></ion-icon>Ready to Start Your Car Import?</h2>
            <p class="text-sm sm:text-base text-emerald-50 max-w-2xl mx-auto mb-5">Speak to our team and get a practical plan for your next car import.</p>
            <a href="/contact.php" class="inline-flex items-center rounded-xl bg-white px-5 py-3 text-emerald-700 font-black hover:bg-emerald-50 transition"><ion-icon name="call" class="icon-lg mr-2"></ion-icon>Contact Team</a>
        </section>
    </div>
</main>

<?php require_once('views/partials/footer.php'); ?>

</body>

</html>