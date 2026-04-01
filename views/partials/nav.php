<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

$navLinks = [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'About', 'href' => '/about.php'],
        ['label' => 'Testimonials', 'href' => '/testimonials.php'],
        ['label' => 'Contact', 'href' => '/contact.php'],
];

$isActive = static function (string $href) use ($currentPath): bool {
        return $currentPath === $href;
};
?>

<!-- Main Navigation -->
<nav class="sticky top-0 z-50 w-full backdrop-blur-sm shadow-sm p-2">
        <!-- Top Contact Bar -->
        <div class="w-full lg:w-4/5 xl:w-3/4 text-green-600 mx-auto mb-2 px-3 sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-end gap-2 sm:gap-6 py-2 text-xs sm:text-sm">
                        <a href="tel:+254757356989" class="flex items-center gap-2 hover:text-green-700 transition-colors group">
                                <ion-icon name="call-outline" class="icon-lg group-hover:scale-110 transition-transform"></ion-icon>
                                <span class="font-medium">+254 757 356 989</span>
                        </a>
                        <a href="mailto:info@xplorecar.com" class="flex items-center gap-2 hover:text-green-700 transition-colors group">
                                <ion-icon name="mail-outline" class="icon-lg group-hover:scale-110 transition-transform"></ion-icon>
                                <span class="font-medium">info@xplorecar.com</span>
                        </a>
                </div>
        </div>

        <div class="w-full lg:w-4/5 xl:w-3/4 mx-auto px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 lg:h-[72px] gap-4">
                        <!-- Logo -->
                        <a href="/" class="flex items-center gap-2 shrink-0">
                                <div class="h-10 w-10 rounded-full bg-linear-to-br from-green-400 to-green-500 flex items-center justify-center shadow-md shadow-green-500/20">
                                        <ion-icon name="car-sport-outline" class="text-black icon-xl"></ion-icon>
                                </div>
                                <div class="leading-tight">
                                        <p class="text-base sm:text-lg lg:text-xl font-extrabold text-black">Xplore Car Imports</p>
                                </div>
                        </a>

                        <!-- Desktop Links -->
                        <div class="hidden md:flex items-center gap-1 rounded-full border border-black/10 bg-black/5 px-4 py-2">
                                <?php foreach ($navLinks as $link): ?>
                                        <?php $active = $isActive($link['href']); ?>
                                        <a
                                                href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>"
                                                class="px-4 py-2 rounded-full text-sm font-medium transition-all <?= $active ? 'bg-green-400 text-black shadow-sm' : 'text-black hover:bg-black/10' ?>">
                                                <?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?>
                                        </a>
                                <?php endforeach; ?>
                        </div>

                        <!-- Desktop CTA -->
                        <div class="hidden md:flex items-center gap-2 shrink-0">
                                <a href="/contact.php" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-linear-to-r from-green-500 to-emerald-500 text-white text-sm font-semibold hover:from-green-600 hover:to-emerald-600 transition-colors shadow-sm">
                                        <ion-icon name="chatbubble-ellipses-outline" class="icon-lg"></ion-icon>
                                        <span>Get Started</span>
                                </a>
                        </div>

                        <!-- Mobile Menu Button -->
                        <button
                                id="mobile-menu-btn"
                                class="md:hidden h-10 w-10 rounded-xl border border-black/10 bg-black/5 text-black hover:bg-black/10 transition-colors flex items-center justify-center"
                                aria-label="Toggle menu"
                                aria-expanded="false">
                                <ion-icon name="menu-outline" class="icon-xl"></ion-icon>
                        </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="hidden md:hidden border-t border-black/10 py-3 space-y-1">
                        <?php foreach ($navLinks as $link): ?>
                                <?php $active = $isActive($link['href']); ?>
                                <a
                                        href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>"
                                        class="block px-4 py-3 rounded-xl text-sm font-medium <?= $active ? 'bg-green-400 text-black' : 'text-black hover:bg-black/10' ?>">
                                        <?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?>
                                </a>
                        <?php endforeach; ?>
                        <a href="/contact.php" class="mt-2 block px-4 py-3 rounded-xl text-sm font-semibold bg-green-500 text-white hover:bg-green-600 transition-colors">
                                Contact Team
                        </a>
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