<div class="form-group mt-2">
    <label for="">Nama</label>
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="text" name="nama" class="form-control mt-2" value="{{ $m->nama }}" autofocus required>
</div>
<div class="form-group mt-2">
    <label for="">Flag</label>
    <select name="flag" id="" class="form-select mt-2">
        <option value="1" {{ $m->flag == '1' ? 'selected' : '' }}>source off order</option>
        <option value="2" {{ $m->flag == '2' ? 'selected' : '' }}>aktifity</option>
        <option value="3" {{ $m->flag == '3' ? 'selected' : '' }}>cancel</option>
        <option value="4" {{ $m->flag == '4' ? 'selected' : '' }}>reject</option>
    </select>
</div>
