<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

$navLinks = [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'Testimonials', 'href' => '/testimonials.php'],
        ['label' => 'About', 'href' => '/about.php'],
        ['label' => 'Contact', 'href' => '/contact.php'],
];

$isActive = static function (string $href) use ($currentPath): bool {
        return $currentPath === $href;
};
?>

<!-- Main Navigation -->
<nav class="sticky top-0 z-50 w-full backdrop-blur-xl shadow-[0_10px_30px_rgba(2,6,23,0.06)] p-2">
        <!-- Top Contact Bar -->
        <div class="w-full lg:w-4/5 xl:w-3/4 text-blue-700 mx-auto mb-2 px-3 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-end gap-2 sm:gap-6 py-2 text-xs sm:text-sm">
                        <a href="tel:+254757356989" class="flex items-center gap-2 hover:text-blue-700 transition-colors group max-w-full">
                                <ion-icon name="call-outline" class="icon-lg group-hover:scale-110 transition-transform"></ion-icon>
                                <span class="font-medium">+254 757 356 989</span>
                        </a>
                        <a href="mailto:info@xplorecar.com" class="flex items-center gap-2 hover:text-blue-700 transition-colors group max-w-full">
                                <ion-icon name="mail-outline" class="icon-lg group-hover:scale-110 transition-transform"></ion-icon>
                                <span class="font-medium break-all sm:break-normal">info@xplorecar.com</span>
                        </a>
                </div>
        </div>

        <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 lg:h-[72px] gap-4">
                        <!-- Logo -->
                        <a href="/" class="flex items-center gap-2 shrink-0">
                                <div class="h-10 w-10 rounded-full bg-green-600 flex items-center justify-center shadow-md shadow-blue-500/20">
                                        <ion-icon name="car-sport-outline" class="text-black p-2 icon-2xl"></ion-icon>
                                </div>
                                <div class="leading-tight">
                                        <p class="text-base sm:text-lg lg:text-xl font-extrabold text-blue-800">Xplore Car Imports</p>
                                </div>
                        </a>

                        <!-- Desktop Links -->
                        <div class="hidden md:flex items-center gap-1 rounded-full border border-blue-200/70 px-4 py-2 shadow-sm backdrop-blur">
                                <?php foreach ($navLinks as $link): ?>
                                        <?php $active = $isActive($link['href']); ?>
                                        <a
                                                href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>"
                                                class="px-4 py-2 rounded-full text-sm font-medium transition-all <?= $active ? 'bg-blue-600 text-white shadow-sm' : 'text-blue-700 hover:bg-blue-50' ?>">
                                                <?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?>
                                        </a>
                                <?php endforeach; ?>
                        </div>

                        <!-- Desktop CTA -->
                        <div class="hidden md:flex items-center shrink-0">
                                <a href="https://wa.me/c/254757356989" target="_blank" class="inline-flex items-center p-2 rounded-full bg-linear-to-r from-green-500 to-blue-600 text-white font-semibold hover:from-green-600 hover:to-blue-700 transition-all shadow-sm hover:shadow-md hover:-translate-y-0.5">
                                        <ion-icon name="logo-whatsapp" class="icon-lg"></ion-icon>
                                        <span></span>
                                </a>
                        </div>

                        <!-- Mobile Menu Button -->
                        <button
                                id="mobile-menu-btn"
                                class="md:hidden h-10 w-10 rounded-xl border border-blue-200/70 bg-white/90 text-blue-900 hover:bg-blue-50 transition-colors flex items-center justify-center"
                                aria-label="Toggle menu"
                                aria-expanded="false">
                                <ion-icon name="menu-outline" class="icon-xl"></ion-icon>
                        </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="hidden md:hidden border-t border-blue-200/70 py-3 space-y-1">
                        <?php foreach ($navLinks as $link): ?>
                                <?php $active = $isActive($link['href']); ?>
                                <a
                                        href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>"
                                        class="block px-4 py-3 rounded-xl text-sm font-medium <?= $active ? 'bg-blue-600 text-white' : 'text-blue-700 hover:bg-blue-50' ?>">
                                        <?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?>
                                </a>
                        <?php endforeach; ?>
                </div>
        </div>
</nav>

<script>
        document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuBtn = document.getElementById('mobile-menu-btn');
                const mobileMenu = document.getElementById('mobile-menu');

                if (!mobileMenuBtn || !mobileMenu) {
                        return;
                }

                mobileMenuBtn.addEventListener('click', function() {
                        mobileMenu.classList.toggle('hidden');
                        const isExpanded = this.getAttribute('aria-expanded') === 'true';
                        this.setAttribute('aria-expanded', String(!isExpanded));

                        const icon = this.querySelector('ion-icon');
                        if (icon) {
                                icon.setAttribute('name', isExpanded ? 'menu-outline' : 'close-outline');
                        }
                });

                mobileMenu.querySelectorAll('a').forEach(function(element) {
                        element.addEventListener('click', function() {
                                mobileMenu.classList.add('hidden');
                                mobileMenuBtn.setAttribute('aria-expanded', 'false');
                                const icon = mobileMenuBtn.querySelector('ion-icon');
                                if (icon) {
                                        icon.setAttribute('name', 'menu-outline');
                                }
                        });
                });
        });
</script>