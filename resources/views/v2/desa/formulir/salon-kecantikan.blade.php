<div class="card-body">
    <h4 class="card-title">Detail Permohonan {{$sublayanan->id}}</h4>
    <input type="hidden" name="sublayanan_id" value="{{$sublayanan->id}}">
    <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Nama Usaha</label>
        <div class="col-sm-9">
            <input type="text" value="{{old('nama_usaha')}}" class="form-control @if($errors->get('nama_usaha')) is-invalid @endif" name="nama_usaha" placeholder="Nama Usaha">
            @if($errors->get('nama_usaha'))
                @foreach ($errors->get('nama_usaha') as $pesan)
                    <div class="invalid-feedback">
                        {{$pesan}}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Alamat Usaha</label>
        <div class="col-sm-9">
            <input type="text" value="{{old('alamat_usaha')}}" class="form-control @if($errors->get('alamat_usaha')) is-invalid @endif" name="alamat_usaha" placeholder="Alamat Usaha">
            @if($errors->get('alamat_usaha'))
                @foreach ($errors->get('alamat_usaha') as $pesan)
                    <div class="invalid-feedback">
                        {{$pesan}}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Jenis Permohonan</label>
        <div class="col-sm-9">
            <select name="jenis" class="form-control @if($errors->get('jenis')) is-invalid @endif" value="{{old('jenis')}}" id="jenis_permohonan">
                <option selected>Pilih Jenis Permohonan</option>
                <option value="1">Permohonan Baru</option>
                <option value="2">Daftar Ulang</option>
                <option value="3">Balik Nama</option>
            </select>
            @if($errors->get('jenis'))
                @foreach ($errors->get('jenis') as $pesan)
                    <div class="invalid-feedback">
                        {{$pesan}}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group row" id="balik_nama">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Nama Pemilik Usaha Lama</label>
        <div class="col-sm-9">
            <input type="text" value="{{old('usaha_lama')}}" class="form-control @if($errors->get('usaha_lama')) is-invalid @endif" name="usaha_lama" placeholder="Nama Pemilik Usaha Lama">
            @if($errors->get('usaha_lama'))
                @foreach ($errors->get('usaha_lama') as $pesan)
                    <div class="invalid-feedback">
                        {{$pesan}}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<div class="card-body">
<h4 class="card-title">Berkas Lampiran</h4>
    <div class="form-group row">
        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Scan Kartu Tanda Penduduk</label>
        <div class="custom-file col-sm-9">
            <input type="file" class="form-control @if($errors->get('scan_ktp')) is-invalid @endif" name="scan_ktp">
            @if($errors->get('scan_ktp'))
                @foreach ($errors->get('scan_ktp') as $pesan)
                    <div class="invalid-feedback">
                        {{$pesan}}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group row">
    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Scan Pengantar dari {{$daerah->jenis_daerah}} terkait lokasi usaha</label>
        <div class="custom-file col-sm-9">
            <input type="file" class="form-control @if($errors->get('scan_pengantar')) is-invalid @endif" name="scan_pengantar">
            @if($errors->get('scan_pengantar'))
                @foreach ($errors->get('scan_pengantar') as $pesan)
                    <div class="invalid-feedback">
                        {{$pesan}}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@section('js')
    <script>
    $(document).ready(function(){
        $("#balik_nama").hide('true');
            $('#jenis_permohonan').on('change',function(){
            var optionText = $(this).val();
            if(optionText == "3"){
                $("#balik_nama").show('true');
            }else{
                $("#balik_nama").hide('true');
            }
        });
    });
    </script>
@endsection