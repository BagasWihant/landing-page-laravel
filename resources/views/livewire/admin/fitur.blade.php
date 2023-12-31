<div>
    <div class="col-lg-2 col-md-3 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">

        <button class="btn btn-icon btn-3 bg-gradient-info" type="button" data-bs-toggle="modal"
            data-bs-target="#modalFitur">
            <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
            <span class="btn-inner--text"> Fitur</span>
        </button>
        <!-- Modal tambah kategori-->
        <div wire:ignore.self class="modal fade" id="modalFitur" tabindex="-1" role="dialog" data-bs-backdrop="static"
            data-bs-keyboard="false" aria-labelledby="modalFitur" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"
                            wire:click="clearForm">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                @if ($kondisiModal == 'tambah')
                                    <h5 class="font-weight-bolder text-center text-info text-gradient">Tambah Fitur
                                    </h5>
                            </div>
                            <div class="card-body">
                                <form role="form text-left" wire:submit.prevent="tambahFitur"
                                    enctype="multipart/form-data">
                                @else
                                    <h5 class="font-weight-bolder text-center text-warning text-gradient">Update Fitur
                                    </h5>
                            </div>
                            <div class="card-body">
                                <form role="form text-left" wire:submit.prevent="updateFitur"
                                    enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="">
                                        <label>Nama</label>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                wire:model="nama" placeholder="Nama" aria-label="Nama"
                                                name="nama">
                                        </div>
                                        @error('nama')
                                            <span class="text-danger"
                                                style="font-size:0.7rem !important;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Image</label>
                                            <div class="input-group">
                                                <input type="file"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    wire:model="image" name="image" id="upload{{ $iteration }}">
                                            </div>
                                            @error('image')
                                                <span class="text-danger"
                                                    style="font-size:0.7rem !important;">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4 align-self-center">
                                            <div class="d-flex justify-content-between">
                                                @if ($oldImage != null)
                                                <div class="d-flex flex-column text-center">

                                                    <img src="{{ asset($oldImage) }}" alt="previewADD"
                                                    onclick="previewImage('{{ asset($oldImage) }}')"
                                                    class="avatar rounded" data-bs-target="#previewImage"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">
                                                    @if($image !=null)
                                                    <span class="text-danger">Lama</span>
                                                    @endif
                                                </div>
                                                @endif
                                                @if ($image != null)
                                                <div class="d-flex flex-column text-center">
                                                    <img src="{{ $image->temporaryUrl() }}" alt="previewADD"
                                                    onclick="previewImage('{{ $image->temporaryUrl() }}')"
                                                    class="avatar rounded" data-bs-target="#previewImage"
                                                    data-bs-toggle="modal" data-bs-dismiss="modal">
                                                    <span class="text-success">New</span>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <label class="form-check-label" for="status">Tampilkan</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="status" name="status"
                                            checked="" wire:model="status">
                                    </div>
                                    <div class="text-center">
                                        @if ($kondisiModal == 'tambah')
                                            <button type="submit"
                                                class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah</button>
                                        @else
                                            <button type="submit"
                                                class="btn btn-round bg-gradient-warning btn-lg w-100 mt-4 mb-0">update</button>
                                        @endif
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto" id="popopol">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal image -->
        <div class="modal fade" id="previewImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="previewImageLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="" id="srcPreviewImage" style="width: 100%">
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-target="#modalFitur"
                                data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-md">{{ $loop->iteration }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-md">{{ $d->nama }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">
                                        @if ($d->gambar)
                                            <div>
                                                <img src="{{ asset($d->gambar) }}" class="avatar avatar-sm me-3"
                                                    alt="user2">
                                            </div>
                                        @else
                                            <img src="{{ asset('/img/no-img.png') }}"
                                                class="avatar avatar-sm me-3"alt="user2">
                                        @endif
                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="d-flex px-2">
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-md">{{ $d->status == 1 ? 'Tampil' : 'Sembunyi' }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a wire:click="getID({{ $d->id }})" type="button" data-bs-toggle="modal"
                                    data-bs-target="#modalFitur" class="btn btn-link text-warning text-gradient">
                                    <span class="btn-inner--icon"><i class="fas fa-edit me-2"></i>edit</span>
                                </a>
                                <button wire:click="getID({{ $d->id }},'delete')"
                                    class="btn btn-link text-danger text-gradient " type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-trash me-2"></i>delete</span>
                                </button>
                                @if ($d->status == '1')
                                <button wire:click="hide({{ $d->id }})"
                                    class="btn btn-link text-primary text-gradient" type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-eye-slash"></i>sembunyikan</span>
                                </button>
                                @else
                                <button wire:click="show({{ $d->id }})"
                                    class="btn btn-link text-success text-gradient" type="button">
                                    <span class="btn-inner--icon"><i class="fas fa-eye me-2"></i>tampilkan</span>
                                </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{ $data->links('layouts/pagination') }}
        </div>
    </div>

</div>
@push('script')
    <script>
        window.addEventListener('modalhide', event => {
            $('#modalFitur').modal('hide')
        })


        function previewImage(src) {
            $('#srcPreviewImage').attr('src', src)

        }
    </script>
@endpush
