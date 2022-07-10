<div class="form-group mt-2">
    <label for="">Nama</label>
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="text" name="nama_client" class="form-control mt-2" value="{{ $m->nama_client }}" autofocus required>
</div>
<div class="form-group mt-2">
    <label for="">Alamat</label>

    <textarea type="text" name="alamat" class="form-control mt-2" required>{{$m->alamat}}</textarea>
</div>

