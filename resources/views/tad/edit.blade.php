<div class="form-group mt-2">
    <label for="">Nama</label>
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="text" name="nama" class="form-control mt-2" value="{{ $m->name }}" autofocus required>
</div>
<div class="form-group mt-2">
    <label for="">Level</label>
    <select name="flag" id="" class="form-select mt-2">
        <option value="5" {{ $m->flag == '1' ? 'selected' : '' }}>Area</option>
        <option value="4" {{ $m->flag == '2' ? 'selected' : '' }}>Cabang / SM</option>
    </select>
</div>


<div class="form-group mt-2">
    <label for="">Area</label>
    <select class = "form-control" name ="area">
        <?php
            $jumA  = count($area);
            $jumA-- ;
            for ($x = 0; $x <= $jumA; $x++) {
                 echo "<option value=". $area[$x]->id . ">". $area[$x]->nama_area . "</option>" ;  
             }
        ?>
     </select>
            </div>

<div class="form-group mt-2">
    <label for="">Cabang</label>
    <select class = "form-control" name ="cabang">
        <?php
            $jumB  = count($cabang);
            $jumB-- ;
            for ($x = 0; $x <= $jumB; $x++) {
                 echo "<option value=". $cabang[$x]->id . ">". $cabang[$x]->nama_cabang . "</option>" ;  
             }
        ?>
     </select>
</div>