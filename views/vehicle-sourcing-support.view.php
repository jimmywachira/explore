<?php require_once('views/partials/head.php'); ?>
<?php require_once('views/partials/banner.php'); ?>

<main class="w-full flex-1 text-slate-900">
    <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10 lg:py-12 space-y-8 sm:space-y-10">
        <section class="rounded-3xl border border-slate-200 bg-white/90 p-6 sm:p-8 lg:p-10 shadow-sm">
            <p class="inline-flex items-center text-xs uppercase tracking-[0.2em] text-emerald-600 font-bold"><ion-icon name="bulb" class="icon-lg mr-2"></ion-icon>Advisory Service</p>
            <h1 class="inline-flex items-center text-3xl sm:text-4xl lg:text-5xl font-black mt-2 mb-4"><ion-icon name="construct" class="icon-xl mr-3 text-emerald-600"></ion-icon>Vehicle Sourcing Support for Japanese Imports</h1>
            <p class="text-sm sm:text-base text-slate-700 max-w-3xl leading-relaxed">
                We help you shortlist the right vehicle for your goals, budget, and operating conditions.
                Whether for personal use or business, sourcing starts with strategy, not guesswork.
            </p>
        </section>

        <section class="rounded-3xl border border-slate-200 bg-white/90 p-6 sm:p-8 shadow-sm">
            <h2 class="inline-flex items-center text-2xl font-black mb-4"><ion-icon name="layers" class="icon-xl mr-3 text-emerald-600"></ion-icon>How We Support Vehicle Sourcing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm sm:text-base text-slate-700">
                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-5">
                    <h3 class="inline-flex items-center font-bold mb-2"><ion-icon name="map" class="icon-lg mr-2 text-emerald-600"></ion-icon>Needs Mapping</h3>
                    <p>We define your use-case, budget range, and key priorities first.</p>
                </article>
                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-5">
                    <h3 class="inline-flex items-center font-bold mb-2"><ion-icon name="list" class="icon-lg mr-2 text-emerald-600"></ion-icon>Targeted Shortlist</h3>
                    <p>We provide realistic, relevant options instead of overwhelming lists.</p>
                </article>
                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-5">
                    <h3 class="inline-flex items-center font-bold mb-2"><ion-icon name="funnel" class="icon-lg mr-2 text-emerald-600"></ion-icon>Risk Filters</h3>
                    <p>Questionable units are screened out early to protect your budget.</p>
                </article>
                <article class="rounded-2xl border border-slate-200 bg-slate-50/80 p-5">
                    <h3 class="inline-flex items-center font-bold mb-2"><ion-icon name="analytics" class="icon-lg mr-2 text-emerald-600"></ion-icon>Decision Support</h3>
                    <p>Clear recommendations based on long-term value and practicality.</p>
                </article>
            </div>
        </section>

        <section class="rounded-3xl border border-emerald-300 bg-linear-to-r from-emerald-600 via-emerald-500 to-green-500 text-white p-6 sm:p-8 text-center shadow-xl">
            <h2 class="inline-flex items-center text-2xl sm:text-3xl font-black mb-3"><ion-icon name="car" class="icon-xl mr-2"></ion-icon>Need a Better Japanese Vehicle Match?</h2>
            <p class="text-sm sm:text-base text-emerald-50 max-w-2xl mx-auto mb-5">Tell us your budget and intended use. We will guide you to the best-fit options.</p>
            <a href="/contact.php" class="inline-flex items-center rounded-xl bg-white px-5 py-3 text-emerald-700 font-black hover:bg-emerald-50 transition"><ion-icon name="chatbubbles" class="icon-lg mr-2"></ion-icon>Request Sourcing Help</a>
        </section>
    </div>
</main>

<?php require_once('views/partials/footer.php'); ?>

</body>

</html>