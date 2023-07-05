<div>
    @if ($startPage)
        <div class="container">
            <div wire:click='startklik' class="btn btn-lg w-100 btn-info bg-gradient-info">Tambah Slogan</div>
        </div>
    @else
        @if (!$editMode)
            <div class="container-fluid">
                <h4 class="m-3 text-gradient-primary text-primary">Slogan</h4>
                <div class="card">
                    <div class="container">

                        {{-- judul --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Judul</h6>
                            </div>
                            <div class="col-md-9">
                                {{ $slogan }}
                            </div>
                        </div>

                        {{-- JUDUL --}}
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Keterangan</h6>
                            </div>
                            <div class="col-md-9">
                                {{ $keterangan }}
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
                <h4 class="m-3 text-gradient-info text-info">Slogan</h4>
                <div class="card">
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Slogan</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="name" name="slogan" wire:model='slogan'
                                    class="form-control @error('slogan') is-invalid @enderror" required
                                    autocomplete="slogan" autofocus placeholder="Slogan"
                                    aria-label="Slogan">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">
                                <h6 for="">Keterangan</h6>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="keterangan" name="keterangan" wire:model='keterangan'
                                    class="form-control @error('keterangan') is-invalid @enderror" required
                                    autocomplete="keterangan" autofocus placeholder="Keterangan"
                                    aria-label="keterangan">
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="container-fluid  my-3">
                @if ($firstData)
                    <button wire:click='simpanAksi'
                        class="btn btn-block btn-info btn-lg bg-gradient-info w-100">Simpan</button>
                @else
                    <button wire:click='updateAksi'
                        class="btn btn-block btn-info btn-lg bg-gradient-info w-100">update</button>
                @endif

                <button wire:click='batalUpdate'
                    class="btn btn-block btn-danger btn-lg bg-gradient-danger w-100">batal</button>
            </div>
        @endif
    @endif

</div>

@push('script')
    <script>
        window.addEventListener('scrollToTop', event => {
            window.scrollTo(0, 0);
            console.log('aaaaa');
        })
    </script>
@endpush
