<div>
    @if ($startPage)
        <div class="container">
            <div wire:click='startklik' class="btn btn-lg w-100 btn-info bg-gradient-info">Tambah Informasi Website</div>
        </div>
    @else
        @if (!$editMode)
            <div class="container-fluid">
                <h4 class="m-3 text-gradient-primary text-primary">Informasi Bagian Atas</h4>
                <div class="card">
                    <div class="container">

                        {{-- NAMA --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Nama Website</h6>
                            </div>
                            <div class="col-md-9">
                                {{ $nama_website }}
                            </div>
                        </div>

                        {{-- JUDUL --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Judul utama</h6>
                            </div>
                            <div class="col-md-9">
                                {{ $judul_utama }}
                            </div>
                        </div>

                        {{-- DESK --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Deskripsi judul utama</h6>
                            </div>
                            <div class="col-md-9">
                                {{ $desc_judul_utama }}
                            </div>
                        </div>

                        {{-- LOKASI --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Lokasi Maps</h6>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    @if (!$maps)
                                        <span class="font-weight-bolder">Belum menambahkan lokasi</span>
                                    @else
                                        <div class="ratio ratio-21x9 ">
                                            <iframe src="{{ $maps }}" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                            </iframe>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                        {{-- TENTANG --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Tentang Perusahaan</h6>
                            </div>
                            <div class="col-md-9">
                                <span>{{ $about }}</span>
                            </div>
                        </div>

                        {{-- LOGO WEB --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Logo Web</h6>
                            </div>
                            <div class="col-md-9">
                                @if ($oldLogo != null)
                                    <div class="">
                                        <img src="{{ asset($oldLogo) }}" alt="previewADD"
                                            onclick="previewImage('{{ asset($oldLogo) }}')" class="img-logo rounded"
                                            data-bs-target="#previewImage" data-bs-toggle="modal"
                                            data-bs-dismiss="modal">
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- GAMBAR UTAMA --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Gambar utama</h6>
                            </div>
                            <div class="col-md-9">
                                @if ($oldImage != null)
                                    <div class="d-flex flex-column ">

                                        <img src="{{ asset($oldImage) }}" alt="previewADD"
                                            onclick="previewImage('{{ asset($oldImage) }}')" class="img-logo rounded"
                                            data-bs-target="#previewImage" data-bs-toggle="modal"
                                            data-bs-dismiss="modal">
                                        @if ($image != null)
                                            <span class="text-danger">Lama</span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="container-fluid">
                <h4 class="m-3 text-gradient-info text-info">Custom style</h4>
                <div class="card">
                    <div class="container">

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Background Atas</h6>
                            </div>
                            <div class="col-md-9">
                                <div style="background-color: {{ $back_color_atas }};" class="border shadow-lg">
                                    <h4 style="color: {{ $back_color_atas }};">Warna default</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Font Atas</h6>
                            </div>
                            <div class="col-md-9">
                                <div style="background-color: {{ $font_color_atas }};" class="bordered shadow-lg">
                                    <h4 style="color: {{ $font_color_atas }};">Warna default</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Background Footer</h6>
                            </div>
                            <div class="col-md-9">
                                <div style="background-color: {{ $back_color_foot }};" class="border shadow-lg">
                                    <h4 style="color: {{ $back_color_foot }};">Warna default</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Font Footer</h6>
                            </div>
                            <div class="col-md-9">
                                <div style="background-color: {{ $font_color_foot }};" class="border shadow-lg">
                                    <h4 style="color: {{ $font_color_foot }};">Warna default</h4>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


            <div class="container-fluid">
                <h4 class="m-3 text-gradient-primary text-primary">Sosial Media</h4>
                <div class="card">
                    <div class="container">

                        {{-- FB --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-facebook btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                                    <span class="btn-inner--text">Facebook</span>
                                </button>
                            </div>

                            <div class="col-md-9">
                                <span>{{ $fb ? $fb : 'Tidak ditampilkan' }}</span>
                            </div>
                        </div>

                        {{-- TWITER --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-twitter btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                                    <span class="btn-inner--text">Twitter</span>
                                </button>
                            </div>
                            <div class="col-md-9">
                                <span>
                                    {{ $twt ? $twt : 'Tidak ditampilkan' }}
                                </span>
                            </div>
                        </div>

                        {{-- IG --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-instagram btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
                                    <span class="btn-inner--text">Instagram</span>
                                </button>
                            </div>
                            <div class="col-md-9">
                                <span>
                                    {{ $ig ? $ig : 'Tidak ditampilkan' }}
                                </span>
                            </div>
                        </div>

                        {{-- YT --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-youtube btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-youtube"></i></span>
                                    <span class="btn-inner--text">Youtube</span>
                                </button>
                            </div>
                            <div class="col-md-9">
                                <span>
                                    {{ $yt ? $yt : 'Tidak ditampilkan' }}
                                </span>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="container-fluid my-3">
                <button wire:click='editMode'
                    class="btn btn-block btn-primary btn-lg bg-gradient-primary w-100">Edit</button>
            </div>
        @else
            <div class="container-fluid">
                <h4 class="m-3 text-gradient-info text-info">Informasi Bagian Atas</h4>
                <div class="card">
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Nama Website</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="name" name="nama_website" wire:model='nama_website'
                                    class="form-control @error('nama_website') is-invalid @enderror" required
                                    autocomplete="nama_website" autofocus placeholder="Nama Website"
                                    aria-label="Nama Website">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Judul utama</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="judul_utama" name="judul_utama" wire:model='judul_utama'
                                    class="form-control @error('judul_utama') is-invalid @enderror" required
                                    autocomplete="judul_utama" autofocus placeholder="Judul Utama"
                                    aria-label="judul_utama">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Deskripsi judul utama</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="desc_judul_utama" wire:model='desc_judul_utama'
                                    class="form-control @error('desc_judul_utama') is-invalid @enderror"
                                    desc_judul_utama="desc_judul_utama" required autocomplete="desc_judul_utama"
                                    autofocus placeholder="DESKRIPSI JUDUL UTAMA" aria-label="desc_judul_utama">
                            </div>
                        </div>


                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Lokasi Maps</h6>
                            </div>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <textarea wire:model='maps' class="form-control @error('maps') is-invalid @enderror" placeholder="Google Maps Link"
                                        aria-describedby="button-addon2"></textarea>
                                    <button class="btn btn-outline-secondary m-0 " type="button" id="button-addon2"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        CARA MENDAPATKAN
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Tentang Perusahaan</h6>
                            </div>
                            <div class="col-md-9">
                                <textarea id="about" wire:model='about' class="form-control @error('about') is-invalid @enderror" about="about"
                                    required autocomplete="about" autofocus placeholder="Tentang Perusahaan" aria-label="about"></textarea>
                            </div>
                        </div>

                        {{-- LOGO WEB --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Logo Web</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                    wire:model="logo" name="logo" id="upload{{ $iteration }}">
                            </div>

                            <div class="w-100 d-flex justify-content-center">
                                <div class="d-flex justify-content-between">
                                    @if ($oldLogo != null)
                                        <div
                                            class="d-flex flex-column text-center align-items-center justify-content-center">

                                            <img src="{{ asset($oldLogo) }}" alt="previewADD"
                                                onclick="previewImage('{{ asset($oldLogo) }}')"
                                                class="img-logo rounded" data-bs-target="#previewImage"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                            @if ($logo != null)
                                                <span class="text-danger">Lama</span>
                                            @endif
                                        </div>
                                    @endif
                                    @if ($logo != null)
                                        <div
                                            class="d-flex flex-column text-center align-items-center justify-content-center">
                                            <img src="{{ $logo->temporaryUrl() }}" alt="previewADD"
                                                onclick="previewImage('{{ $logo->temporaryUrl() }}')"
                                                class="img-logo rounded" data-bs-target="#previewImage"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                            <span class="text-success">New</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- GAMBAR UTAMA --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Gambar utama</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    wire:model="image" name="image" id="upload{{ $iteration }}">
                            </div>

                            <div class="w-100 d-flex justify-content-center">
                                <div class="d-flex justify-content-between">
                                    @if ($oldImage != null)
                                        <div
                                            class="d-flex flex-column text-center align-items-center justify-content-center">

                                            <img src="{{ asset($oldImage) }}" alt="previewADD"
                                                onclick="previewImage('{{ asset($oldImage) }}')"
                                                class="img-logo rounded" data-bs-target="#previewImage"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                            @if ($image != null)
                                                <span class="text-danger">Lama</span>
                                            @endif
                                        </div>
                                    @endif
                                    @if ($image != null)
                                        <div
                                            class="d-flex flex-column text-center align-items-center justify-content-center">
                                            <img src="{{ $image->temporaryUrl() }}" alt="previewADD"
                                                onclick="previewImage('{{ $image->temporaryUrl() }}')"
                                                class="img-logo rounded" data-bs-target="#previewImage"
                                                data-bs-toggle="modal" data-bs-dismiss="modal">
                                            <span class="text-success">New</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>

            <div class="container-fluid">
                <h4 class="m-3 text-gradient-info text-info">Custom style</h4>
                <div class="card">
                    <div class="container">

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Background Atas</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="color" id="back_color_atas" wire:model="back_color_atas"
                                    class="form-control @error('back_color_atas') is-invalid @enderror" required autocomplete="back_color_atas"
                                    aria-label="back_color_atas">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Font Atas</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="color" id="font_color_atas" wire:model="font_color_atas"
                                    class="form-control @error('font_color_atas') is-invalid @enderror" required autocomplete="font_color_atas"
                                    aria-label="font_color_atas">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Background Footer</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="color" id="back_color_foot" wire:model="back_color_foot"
                                    class="form-control @error('back_color_foot') is-invalid @enderror" required autocomplete="back_color_foot"
                                    aria-label="back_color_foot">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6>Warna Font Footer</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="color" id="font_color_foot" wire:model="font_color_foot"
                                    class="form-control @error('font_color_foot') is-invalid @enderror" required autocomplete="font_color_foot"
                                    aria-label="font_color_foot">
                            </div>
                        </div>

                    </div>


                </div>
            </div>


            <div class="container-fluid">
                <h4 class="m-3 text-gradient-info text-info">Sosial Media</h4>
                <div class="card">
                    <div class="container">

                        <div class="row my-3">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-facebook btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                                    <span class="btn-inner--text">Facebook</span>
                                </button>
                            </div>

                            <div class="col-md-9">
                                <input type="text" id="fb" wire:model="fb"
                                    class="form-control @error('fb') is-invalid @enderror" required autocomplete="fb"
                                    aria-label="fb" autofocus placeholder="Facebook (Optional)">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-twitter btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                                    <span class="btn-inner--text">Twitter</span>
                                </button>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="twitter" wire:model="twt"
                                    class="form-control @error('twt') is-invalid @enderror" required
                                    autocomplete="twitter" autofocus placeholder="Twitter (Optional)"
                                    aria-label="twitter">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">

                                <button type="button" class="btn btn-instagram btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
                                    <span class="btn-inner--text">Instagram</span>
                                </button>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="ig" wire:model="ig"
                                    class="form-control @error('ig') is-invalid @enderror" required autocomplete="ig"
                                    autofocus placeholder="Instagram (Optional)" aria-label="ig">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">

                                <button type="button" class="btn btn-youtube btn-icon">
                                    <span class="btn-inner--icon"><i class="fab fa-youtube"></i></span>
                                    <span class="btn-inner--text">Youtube</span>
                                </button>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="yt" wire:model="yt"
                                    class="form-control @error('yt') is-invalid @enderror" required autocomplete="yt"
                                    autofocus placeholder="Youtube (Optional)" aria-label="yt">
                            </div>
                        </div>

                    </div>


                </div>
            </div>


            <div class="container-fluid  my-3">
                @if ($firstData)
                    <button wire:click='simpanAksi'
                        class="btn btn-block btn-info btn-lg bg-gradient-info w-100">simpan</button>
                @else
                    <button wire:click='updateAksi'
                        class="btn btn-block btn-info btn-lg bg-gradient-info w-100">simpan</button>
                @endif

                <button wire:click='batalUpdate'
                    class="btn btn-block btn-danger btn-lg bg-gradient-danger w-100">batal</button>
            </div>
        @endif
    @endif

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Di pc / laptop</h4>
                    <p>1. Buka website Google Maps di https://maps.google.com</p>
                    <p>
                        2. Telusuri lokasi yang ingin ditampilkan, Anda dapat menggunakan cara lain yaitu dengan cara
                        klik kanan pada lokasi yang Anda inginkan pada maps (peta). Kemudian, pilih pada Ada apa di
                        sini?
                    </p>
                    <p>
                        3. Lalu, akan muncul kotak informasi terkait lokasi ini beserta dengan koordinat dan nama
                        lokasi.
                    </p>
                    <p>
                        4. Maka, ketika di-klik tombol bagikan.
                    </p>
                    <p>
                        5. Lalu pilih tab Sematkan Peta dan yang terakhir pilih Salin HTML.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('scrollToTop', event => {
            window.scrollTo(0, 0);
            console.log('aaaaa');
        })
    </script>
@endpush
