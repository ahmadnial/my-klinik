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
    <div class="modal fade" id="TambahPasien" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-lg">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalLabelLarge">Data Pasien Baru</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group col-sm-6">
                        <label for="">Nama Pasien/No. MR</label>
                        <select class="form-control select2" style="width: 100%;" name="fr_nm_pasien">
                            {{-- <option selected="selected">Alabama</option> --}}
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
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
                    <div class="form-group col-lg-6">
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
                    <div class="form-group">
                        <label for="">Berat Badan</label>
                        <input type="text" class="form-control" name="fr_bb" placeholder="Nomor Telephone/WA Pasien">
                    </div>
                    <div class="form-group">
                        <label for="">Alergi</label>
                        <input type="text" class="form-control" name="fr_alergi" placeholder="Nomor Telephone/WA Pasien">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea type="date" class="form-control" name="fr_alamat">Alamat Lengkap Pasien</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telephone</label>
                        <input type="text" class="form-control" name="fr_no_tlp" placeholder="Nomor Telephone/WA Pasien">
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> --}}
                    <button type="button" class="btn btn-success"><i class="fa fa-save"></i> &nbsp; Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection
