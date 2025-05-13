@extends('layouts.userFront')
@section('content')
<div class="container py-5">
    <h2 class="mb-4">Pertanyaan yang Sering Diajukan (FAQ)</h2>

    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                Bisakah saya memperpanjang pemesanan yang sudah ada?
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Sayangnya tidak mungkin untuk memperpanjang pemesanan yang sudah dimulai. Anda dapat membuat pemesanan baru di situs web atau Anda dapat menghubungi kantor setempat tempat Anda mengumpulkan mobil karena mereka mungkin dapat membantu Anda memperluas pemesanan. Anda akan menemukan nomor kontak pada voucher konfirmasi Anda yang telah Anda kirim.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                    Apa saja syarat untuk menyewa mobil?
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Anda hanya perlu membawa KTP dan SIM A yang masih berlaku. Untuk penyewaan lepas kunci, mungkin diperlukan dokumen tambahan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                Ketika saya melakukan penawaran, itu menunjukkan tidak ada ketersediaan. Apa artinya?
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Ini berarti bahwa untuk tanggal dan lokasi yang Anda pilih sayangnya tidak ada mobil yang tersedia. Semua agen penyewaan mobil kami terjual habis.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                Bisakah saya memesan lebih dari satu mobil dalam satu waktu?
                </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Sayangnya Anda tidak dapat memesan dua mobil pada saat yang sama, karena setiap mobil yang dipesan memiliki nomor reservasi sendiri. Harap diperhatikan jika Anda perlu memiliki 2 mobil untuk tanggal dan lokasi yang sama, Anda perlu membuat 2 pemesanan terpisah dan mereka harus dibuat dalam nama driver utama dan setiap pengemudi harus memiliki kartu kredit dalam namanya.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                Bisakah saya mengubah reservasi saya?
                </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Tim reservasi kami selalu berusaha membantu Anda jika Anda ingin mengubah reservasi Anda, Anda dapat dengan mudah menghubungi kami melalui telepon atau melalui email atau masuk ke dalam pemesanan Anda. Kami tidak membebankan biaya administrasi untuk memodifikasi atau mengubah reservasi Anda, tetapi tergantung bagaimana Anda ingin memodifikasi reservasi Anda, biaya tambahan mungkin terjadi. Misalnya, jika Anda perlu memodifikasi lokasi pengambilan tanggal, waktu dll kami tidak dapat menjamin harga yang sama seperti yang semula dikutip karena agen penyewaan mobil mengubah harga mereka secara konstan.
                </div>
            </div>
        </div>
        
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                Dapatkah saya menyewa mobil dengan SIM sementara?
                </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Tidak, semua agen penyewaan mobil yang bekerja sama dengan kami tidak menerima lisensi mengemudi sementara. Anda harus memiliki surat izin mengemudi penuh agar dapat menyewa mobil.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                Apa kebijakan pembatalannya?
                </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Drivezy memberikan pembatalan gratis untuk pemesanan Anda hingga 7 hari setelah pemesanan dikonfirmasi.
                Jika masa sewa Anda dimulai dalam waktu kurang dari 7 hari, Anda masih dapat membatalkan secara gratis hingga 48 jam sebelum jadwal sewa dimulai.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8">
                Kebijakan Pembayaran dan Pengembalian Deposit
                </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <ul>
                       <li>Saat melakukan pemesanan, Anda tidak perlu membayar penuh di awal.</li> 

                        <li>Drivezy hanya akan menagih deposit sebesar 20% dari total harga sewa untuk memastikan kendaraan tersedia.</li>

                        <li>Kebijakan pembatalan berikut ini hanya berlaku untuk deposit.</li>
                    </ul>
                    Catatan: Untuk semua pemesanan dengan deposit kurang dari Rp250.000, tidak ada pengembalian dana.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9">
                Dapatkah saya membayar atau memesan dengan orang lain kartu kreditnya?
                </button>
            </h2>
            <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Harap diperhatikan Anda hanya dapat membayar deposit online ketika harga mobil sewaan dibagi menjadi dua pembayaran. Untuk membayar saldo di kantor lokal, pengemudi utama harus menggunakan dan menunjukkan kartu kredit atas namanya. Untuk pemesanan prabayar lengkap, Anda harus menggunakan kartu kredit driver utama untuk menempatkan pemesanan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10">
                Bagaimana saya tahu, jika reservasi saya dikonfirmasi?
                </button>
            </h2>
            <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Semua pemesanan yang dilakukan di situs web yang dioperasikan oleh Drivezy.com akan menerima nomor konfirmasi sementara. Nomor sementara ini tidak berarti bahwa kendaraan tersedia dan hanya untuk keperluan admin. Nomor konfirmasi pemesanan akhir anda akan dikirimkan kepada anda dengan kupon sewa resmi Anda dalam waktu 24 jam kecuali jika kantor lokal memiliki penundaan konfirmasi. Drivezy.com tidak bertanggung jawab atas keterlambatan tersebut.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq11">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11">
                Bisakah saya memesan mobil tanpa kartu kredit?
                </button>
            </h2>
            <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Tidak, Anda harus memiliki kartu kredit untuk dapat melakukan pemesanan di situs web kami. Harap diperhatikan bahwa pengemudi utama harus memiliki kartu kredit atas namanya
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq12">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12">
                Apakah bisa menyewa mobil tanpa sopir?
                </button>
            </h2>
            <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Ya, kami menyediakan pilihan lepas kunci dengan syarat dan dokumen yang lengkap.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq13">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13">
                Apa yang terjadi jika saya telat mengembalikan mobil?
                </button>
            </h2>
            <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Keterlambatan akan dikenakan biaya tambahan per jam. Jika lebih dari 1 hari sesuai jadwal pemesanan, maka akan dikenakan denda perhari.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq14">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14">
                Apakah harga sudah termasuk bensin dan tol?
                </button>
            </h2>
            <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Untuk layanan lepas kunci, harga tidak termasuk bensin dan tol. Untuk paket dengan sopir, bisa dinegosiasikan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq15">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15">
                Apakah bisa mengantar atau menjemput mobil ke lokasi saya?
                </button>
            </h2>
            <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Ya, kami menyediakan layanan antar-jemput ke bandara, hotel, atau rumah Anda (tergantung wilayah).
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq15">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15">
                Apakah bisa mengantar atau menjemput mobil ke lokasi saya?
                </button>
            </h2>
            <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Ya, kami menyediakan layanan antar-jemput ke bandara, hotel, atau rumah Anda (tergantung wilayah).
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq16">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16">
                Apa yang harus dilakukan jika terjadi kecelakaan atau kerusakan?
                </button>
            </h2>
            <div id="collapse16" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Segera hubungi tim kami. Jika terjadi kecelakaan, penyewa wajib membuat laporan polisi. Asuransi kendaraan berlaku sesuai ketentuan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq17">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17">
                Apakah mobil dilindungi asuransi?
                </button>
            </h2>
            <div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Ya, semua kendaraan kami memiliki perlindungan asuransi dasar. Biaya klaim bisa dibebankan pada penyewa jika terbukti lalai.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq18">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18">
                Apakah sopir sudah termasuk dalam harga sewa?
                </button>
            </h2>
            <div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Belum, menggunakan sopir akan dikenakan biaya tambahan. Anda bisa memilih sewa dengan atau tanpa sopir saat pemesanan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq19">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19">
                Bagaimana jika saya kehilangan kunci atau dokumen kendaraan?
                </button>
            </h2>
            <div id="collapse19" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Anda akan dikenakan biaya penggantian sesuai dengan kebijakan kami. Segera hubungi kami jika terjadi kehilangan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq20">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20">
                Apakah mobil akan dalam kondisi bersih dan penuh bensin saat diambil?
                </button>
            </h2>
            <div id="collapse20" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                Ya, semua mobil kami disiapkan dalam kondisi bersih dan dengan bensin cukup untuk penggunaan awal. Harap dikembalikan dengan kondisi serupa.
                </div>
            </div>
        </div>

    </div>
</div>

<div class="bg-light rounded-4 p-5 my-5 text-center shadow-sm">
    <div class="mb-3">
    <i class="bi bi-chat-dots text-primary fs-1"></i>

    </div>
    <h3 class="fw-bold mb-3">Tidak dapat menemukan jawabannya?<br>
        Kami dengan senang hati membantu Anda dalam perjalanan Anda</h3>
    <p class="text-muted mb-4">Apakah Anda ingin menghubungi kami? Silakan isi formulir kontak kami. Kami akan melakukan yang terbaik untuk menanggapi pesan Anda sesegera mungkin.</p>
    <a href="{{ route('contact') }}" class="btn btn-primary px-4">Isi formulir kontak</a>
</div>

@endsection
