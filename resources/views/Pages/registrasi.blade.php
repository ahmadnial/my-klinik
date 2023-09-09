@extends('pages.master')

@section('konten')
    <button type="submit" class="btn btn-success mb-6 pull-right" data-toggle="modal" data-target="#TambahPasien">Registrasi
        Baru</button>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">REGISTRASI PASIEN</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table1" class="table table-bordered table-hover">
                        <thead class="bg-success">
                            <tr>
                                <th>Nama Pasien</th>
                                <th>Kode Registrasi</th>
                                <th>Layanan</th>
                                <th>Umur</th>
                                <th>BB</th>
                                {{-- <th>Diet</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            {{-- <td></td> --}}
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- The modal -->
    <div class="modal fade" id="TambahPasien" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalLabelLarge">Registrasi Pasien</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group col-sm-6">
                        <label for="">Kode Registrasi</label>
                        <input type="text" class="form-control" name="fr_kd_reg" readonly value="{{ $kd_reg }}">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">Nama Pasien/No. MR</label>
                        <select class="form-control-pasien" id="search" style="width: 100%;" name="fr_nm_pasien"
                            onchange="getData()"></select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="fr_tgl_lahir" placeholder="Tanggal Lahir Pasien">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">Jenis Kelamin</label>
                        <select name="fs_jenis_kelamin" id="fr_jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <hr>
                    <hr> <br>
                    <div class="form-group col-sm-6">
                        <label for="">Layanan</label>
                        <select name="fs_jenis_kelamin" id="fr_layanan" class="form-control">
                            <option value="Laki-laki">Layanan</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">Dokter</label>
                        <select name="fs_jenis_kelamin" id="fr_dokter" class="form-control">
                            <option value="Laki-laki">Dokter</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="">Jaminan</label>
                        <select name="fs_jenis_kelamin" id="fr_jaminan" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <br>
                    <hr>
                    <div class="form-group col-sm-12">
                        <label for="">Berat Badan</label>
                        <input type="text" class="form-control" name="fr_bb" placeholder="Nomor Telephone/WA Pasien">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="">Alergi</label>
                        <input type="text" class="form-control" name="fr_alergi" id="fr_alamat"
                            placeholder="Nomor Telephone/WA Pasien">
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="">Alamat</label>
                        <textarea type="date" class="form-control" name="">Alamat Lengkap Pasien</textarea>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="">Nomor Telephone</label>
                        <input type="text" class="form-control" name="fr_no_tlp"
                            placeholder="Nomor Telephone/WA Pasien">
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> --}}
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-success"><i class="fa fa-save"></i> &nbsp; Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Ajax Search Registrasi
        var path = "{{ route('registrasiSearch') }}";

        $('#search').select2({
            placeholder: 'Nama Pasien / no.MR',
            ajax: {
                url: path,
                dataType: 'json',
                delay: 150,
                processResults: function(isdata) {
                    return {
                        results: $.map(isdata, function(item) {
                            return {
                                // text: item.fs_mr,
                                text: item.fs_mr + ' - ' + item.fs_nama + ' - ' + item.fs_tgl_lahir,
                                id: item.fs_mr,
                                alamat: item.fs_alamat,
                            }
                        })
                    };
                },
                cache: true
            }
        });

        function getData() {
            // alert($('#search').val());
            var fs_mr = $('#search').val();
            $.ajax({
                url: "{{ url('getDasos') }}" + '/' + fs_mr,
                type: 'GET',
                data: fs_mr,

                success: function(isdata2) {
                    var json = isdata2;
                    obj = JSON.stringify(json);
                    // alert(json.fs_alamat),
                    // const tz = 'fs_alamat';
                    // console.log(obj[tz]);
                    $("#fr_alamat").val(obj);
                }
            })
        };

        // function getData() {
        //     var search = $('#search').val();
        //     // var search = $('#search').find(':selected');

        //     $.ajax({
        //         url: ur,
        //         // dataType: 'json',
        //         data: 'search' + search,
        //         success: function(isdata2) {
        //             var json = isdata2,
        //                 obj = JSON.stringify(json);
        //             console.log(obj);
        //             // $("#fr_alamat").val(obj.fs_alamat);
        //         },
        //     });

        // };
    </script>
@endpush
