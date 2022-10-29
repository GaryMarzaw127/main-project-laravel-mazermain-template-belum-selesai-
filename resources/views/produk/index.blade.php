<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">

{{-- <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

{{-- <!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> --}}



    <style>
        table.dataTable td{
            padding: 15px 8px;
        }
        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <h5 class="font-bold">Toko Paser Sentral</h5>
                {{-- <a href="index.html"><img src="assets/images/logo/pause.png" alt="Logo" srcset="">Logout</a> --}}
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    
     <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="{{ route('supplier.index') }}" class='sidebar-link'>
                    <i class="bi bi-basket-fill"></i>
                    <span>Supplier</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="{{ route('kategori.index') }}" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="{{ route('produk.index') }}" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Produk</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Pembelian</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Pengeluaran</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Penjualan</span>
                </a>
            </li>

        <li class="sidebar-title">Transaksi</li>
            
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Transaksi</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="#">Transaksi Lama</a>
                </li>
                <li class="submenu-item ">
                    <a href="#">Transaksi Baru</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-title">Laporan</li>

        <li
            class="sidebar-item">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Laporan Penjualan</span>
            </a>
        </li>

        <li class="sidebar-title">Setting</li>

        <li
           class="sidebar-item">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Pengaturan User</span>
            </a>
        </li>

        <br>
        <li  class="sidebar-item">
           <form action="/logout" method="post">
                @csrf
                <button type="submit" class='btn btn-danger'>Logout</button>
            </form>
        </li>
    </div>
    
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>Produk Statistics</h3>
  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @section('breadcrumb')
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
            @show
            
        </ol>
    </nav>
</div>


 <!-- Basic Tables start -->
 <section class="section">
    <div class="card">
        <div class="card-header">
            <div class="btn-group">
                <button onclick="addForm('{{ route('produk.store') }}')" class="btn btn-success" style="border-radius: 5px;">Tambah Produk</button>
                <button onclick="deleteSelected('{{ route('produk.delete_selected') }}')" class="btn btn-danger" style="margin-left: 5px; border-radius: 5px;">Hapus Multiple</button>
            
            </div>
        </div>

        {{-- restock ulang product alert --}}
        <?php
        $conn = mysqli_connect("localhost","root","","skripsi");

        $ambildatastock = mysqli_query($conn, "select * from produk where stok < 3");
        
        while($fetch=mysqli_fetch_array($ambildatastock)){
            $barang = $fetch['nama_produk'];
        

        ?>


        <div class="alert alert-danger alert-dismissible fade show " style="padding: 18px; margin-left: 22px; margin-right: 22px; margin-bottom: 1%;" ><i class="bi bi-exclamation-circle"></i>
            <strong>Perhatian, Stok Produk Dengan Nama "<?=$barang;?>" Tersisa Sedikit</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
            <i class="bi bi-exclamation-circle"></i>
        </div>

        <?php
            }
        ?>


        {{-- restock ulang product alert --}}

        <div class="card-body">
            <form action="" class="form-produk">
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="form-check-input form-check-danger form-check-glow" name="select_all" id="select_all">
                            </th>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Diskon</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </form>
        </div>
    </div>

</section>


<!-- Basic Tables end -->

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Skripsi</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#">192102125-Muhammad Reza Anggawirya</a></p>
                    </div>
                </div>
            </footer>
      
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/js/mazer.js"></script>
<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
<script src="assets/vendors/fontawesome/all.min.js"></script>

{{-- validator --}}
<script src="js/validator.min.js"></script>

{{-- <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

{{-- trigger form produk --}}
@includeIf('produk.form')

<script>
    // Jquery Datatable
    let table;
    
    $(function () {
        table = $(".table").DataTable({
            processing: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('produk.data') }}',
            },
            columns: [
                {data: 'select_all'},
                {data: 'DT_RowIndex', searchable: false, sortable: false },
                {data: 'kode_produk', sortable: false},
                {data: 'nama_produk', sortable: false},
                {data: 'nama_kategori', sortable: false},
                {data: 'merk', sortable: false},
                {data: 'harga_beli'},
                {data: 'harga_jual'},
                {data: 'diskon'},
                {data: 'stok'},
                {data: 'aksi', searchable: false, sortable: false },
            ]
            
             
        });

        $('#modal-form').validator().on('submit', function (e){
            if (! e.preventDefault()) {
                $.ajax({
                    url: $('#modal-form form').attr('action'),
                    type: 'post',
                    data: $('#modal-form form').serialize()
                })
                .done((response) => {
                    $('#modal-form').modal('hide');
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('tidak dapat menyimpan data');
                    return;
                });
            }
        });

        $('[name=select_all]').on('click', function() {
            $(':checkbox').prop('checked', this.checked);

        });
    });

   

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Produk')
        
        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_produk]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Produk')
        
        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_produk]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_produk]').val(response.nama_produk);
                $('#modal-form [name=id_kategori]').val(response.id_kategori);
                $('#modal-form [name=merk]').val(response.merk);
                $('#modal-form [name=harga_beli]').val(response.harga_beli);
                $('#modal-form [name=harga_jual]').val(response.harga_jual);
                $('#modal-form [name=diskon]').val(response.diskon);
                $('#modal-form [name=stok]').val(response.stok);
                table.ajax.reload();
            })
            .fail((errors) => {
                alert('tidak dapat menyimpan data');
                return;
            });
    }

    function deleteData(url) {
        if(confirm('Yakin ingin menghapus data yang dipilih ?')) {
           
            $.post(url, {
            '_token': '{{ csrf_token() }}',
            '_method': 'delete'
            })
            .done((response) => {
                table.ajax.reload();
            })
            .fail((errors) => {
                alert('tidak dapat menghapus data');
                return;
            });
        }
    }

    function deleteSelected(url) {
        if ($('input:checked').length > 1) {
            if (confirm('Yakin ingin menghapus data yang dipilih ? ')) {
                $.post(url, $('.form-produk').serialize())
                
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
            }
        } else {
            alert('Pilih data yang akan dihapus');
        }
    }

</script>

</body>

</html>


