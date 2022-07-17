@if (Session::has('hapus'))
    <script>
        Swal.fire(
            'Good job!',
            'Data Berhasil di Hapus',
            'success'
        )
    </script>
@endif
@if (Session::has('simpan'))
    <script>
        Swal.fire(
            'Good job!',
            'Data Berhasil di Simpan',
            'success'
        )
    </script>
@endif
@if (Session::has('update'))
    <script>
        Swal.fire(
            'Good job!',
            'Data Berhasil di update',
            'success'
        )
    </script>
@endif
