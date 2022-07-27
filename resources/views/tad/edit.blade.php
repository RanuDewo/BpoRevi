<div class="form-group mt-2">
    <label for="">Nama</label>
    <input type="hidden" name="id" value="{{$user->id}}">
    <input type="text" name="nama" class="form-control mt-2" value="{{ $user->name }}" autofocus required>
</div>
<div class="form-group mt-2">
    <label for="">Zona</label>
    <select name="zona" id="" class="form-select mt-2">
        <option value="0">Free zone</option>
        <option value="1">In zone </option>
    </select>
</div>


<!-- <div class="form-group mt-2">
    <label for="">Area</label>
    <select class = "form-control" name ="area">
        <?php
            // $jumA  = count($user);
            // $jumA-- ;
            // for ($x = 0; $x <= $jumA; $x++) {
            //      echo "<option value=". $area[$x]->id . ">". $area[$x]->nama_area . "</option>" ;  
            //  }
        ?>
     </select>
            </div>

<div class="form-group mt-2">
    <label for="">Cabang</label>
    <select class = "form-control" name ="cabang">
        <?php
            // $jumB  = count($cabang);
            // $jumB-- ;
            // for ($x = 0; $x <= $jumB; $x++) {
            //      echo "<option value=". $cabang[$x]->id . ">". $cabang[$x]->nama_cabang . "</option>" ;  
            //  }
        ?>
     </select>
</div> -->