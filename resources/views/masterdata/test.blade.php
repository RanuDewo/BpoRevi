<!DOCTYPE html>
<html>

<head>
    <title>Tutorial PHP Datatables Dengan PHP Dan MySQL</title>
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <table id="tabel-data">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Job Title</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($m as $i)
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <a href="#" class="btn btn-success btn-sm mt-2 mr-2 edit" data-id="{{ $i->id }}"
                            data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i>
                            Edit</a>
                        <a href="{{ url('/master_data/hapus/' . $i->id) }}" id="hapus"
                            class="btn btn-danger btn-sm mt-2 mr-2 hapus" data-id="{{ $i->nama }}"><i
                                class="bi bi-trash"></i>
                            Hapus</a>
                    </td>
                </tr>
            @endforeach

        </tbody>

        <script>
            $(document).ready(function() {
                $('#tabel-data').DataTable();
            });
        </script>

    </table>
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('master_data/update') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div id="modal_edit">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @section('script')
        <script>
            $(document).ready(function() {
                $('.hapus').on('click', function(events) {
                    events.preventDefault();
                    var id = $(this).data('id');
                    console.log(id);
                    const url = $(this).attr('href');
                    var id = $(this).data('id');
                    Swal.fire({
                        title: 'Peringatan',
                        text: "Apakah Data = " + id + ", ingin dihapus?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = url;
                        }
                    })
                })

                $('.edit').on('click', function() {
                    alert("o");
                    var id = $(this).data("id");
                    console.log(id);
                    $.ajax({
                        type: 'GET',
                        url: 'master_data/edit/' + id,
                        success: function(data) {
                            $('#modal_edit').html(data)
                            // console.log(data)
                        }
                    })
                })
                // $('.datatable').DataTable({
                //     responsive: true
                // });

            })
        </script>
    @endsection
</body>

</html>
