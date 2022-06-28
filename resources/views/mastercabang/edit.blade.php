<div class="form-group mt-2">
    <label for="">Nama</label>
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="text" name="nama" class="form-control mt-2" value="{{ $m->nama_cabang }}" autofocus required>
</div>
<div class="form-group mt-2">
    <label for="">Lat</label>
    <input type="text" name="lat" class="form-control mt-2" value="{{ $m->lat }}">
</div>
<div class="form-group mt-2">
    <label for="">Long</label>
    <input type="text" name="long" class="form-control mt-2" value="{{ $m->long }}">
</div>
