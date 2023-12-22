    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="/dashboard" class="item {{ request()->is('dashboard') ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="/transaksi" class="item {{ request()->is('transaksi', 'transaksi/detail') ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Riwayat</strong>
            </div>
        </a>

        <a href="#" class="item">
            <div class="col">
                <div class="action-button large">
                    <ion-icon name="add-outline" role="img" class="md hydrated" aria-label="arrow up outline"></ion-icon>
                </div>
            </div>
        </a>

        <a href="/rekening" class="item {{ request()->is('rekening') ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <strong>Rekening</strong>
            </div>
        </a>
        <a href="/akun" class="item {{ request()->is('akun', 'syarat-ketentuan', 'hubungi-kami', 'pusat-bantuan') ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="person-outline"></ion-icon>
                <strong>Akun</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->