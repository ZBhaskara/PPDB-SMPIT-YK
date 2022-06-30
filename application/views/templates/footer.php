<!-- Footer -->
<footer class="sticky-footer bg-white shadow-sm">
    <div class="container">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SMPIT YOGYAKARTA <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Log Out?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih Log out jika iya</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Error Sweetalert -->
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>


<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->

<script src="<?= base_url('assets/'); ?>js/demo/jquery-ui.js"></script>
<!-- <script src="<?= base_url('assets/'); ?>js/demo/jquery-3.3.1.js"></script> -->
<script src="<?= base_url('assets/'); ?>js/demo/bootstrap.js"></script>


<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
<!-- <script src="<?= base_url('assets/'); ?>js/chart-area-demo.js"></script>
<script src="<?= base_url('assets/'); ?>js/chart-pie-demo.js"></script> -->




<script>
    //=================Upload Image js================
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    //=================Modal Upload edit data================
    function select_data($id, $email, $name) {
        $("#id").val($id);
        $("#email").val($email);
        $("#name").val($name);
    }


    //================= Mengapus akses user checkbox================
    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess') ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId,
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });

    });

    //=================Auto select Provinsi/kabupaten dinamis================
    $(document).ready(function() {
        $('#provinsi').on('change', function() {
            var id_prov = $(this).val();

            if (id_prov == '') {
                $('#kabupaten').prop('disabled', true);
            } else {
                $('#kabupaten').prop('disabled', false);
                $.ajax({
                    url: "<?= base_url() ?>Pendaftar/getkabupaten",
                    type: "POST",
                    data: {
                        'id_prov': id_prov
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#kabupaten').html(data);
                    },
                    error: function() {
                        alert('Errorr..');
                    }
                });
            }
        });
    });

    //=================Auto select Kabupaten/kelurahan dinamis================
    $(document).ready(function() {
        $('#kabupaten').on('change', function() {
            var id_kabupaten = $(this).val();

            if (id_kabupaten == '') {
                $('#kecamatan').prop('disabled', true);
            } else {
                $('#kecamatan').prop('disabled', false);
                $.ajax({
                    url: "<?= base_url() ?>Pendaftar/getKecamatan",
                    type: "POST",
                    data: {
                        'id_kabupaten': id_kabupaten
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#kecamatan').html(data);
                    },
                    error: function() {
                        alert('Errorr..');
                    }
                });
            }
        });
    });

    //=================Auto field data cek pendaftaran ================
    $(document).ready(function() {
        $("#title").autocomplete({
            source: "<?php echo site_url('pendaftar/get_autocomplete/?'); ?>",

            select: function(event, ui) {
                $('[name="kode_pendaftaran"]').val(ui.item.label);
                $('[name="nama_siswa"]').val(ui.item.nama);
                $('[name="status_pendaftaran"]').val(ui.item.status);
                $('[name="ttl"]').val(ui.item.ttl);
                var x = document.getElementById("myDIV");
                x.style.display = "block";
            }
        });
    });

    //=================Get data nik cek pendaftaran================
    function handlechange() {
        var x = document.getElementById("title").value;
        document.getElementById("niknya").innerHTML = x;


    }

    //=================Auto select Kabupaten/kelurahan dinamis================
    $(document).ready(function() {
        $('#provinsi').on('change', function() {
            var id_prov = $(this).val();

            if (id_prov == '') {
                $('#kabupaten').prop('disabled', true);
            } else {
                $('#kabupaten').prop('disabled', false);
                $.ajax({
                    url: "<?= base_url() ?>Pendaftar/getkabupaten",
                    type: "POST",
                    data: {
                        'id_prov': id_prov
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#kabupaten').html(data);
                    },
                    error: function() {
                        alert('Errorr..');
                    }
                });
            }
        });
    });

    //=================Auto select Kabupaten/kelurahan dinamis================
    $(document).ready(function() {
        $('#kabupaten').on('change', function() {
            var id_kabupaten = $(this).val();

            if (id_kabupaten == '') {
                $('#kecamatan').prop('disabled', true);
            } else {
                $('#kecamatan').prop('disabled', false);
                $.ajax({
                    url: "<?= base_url() ?>Pendaftar/getKecamatan",
                    type: "POST",
                    data: {
                        'id_kabupaten': id_kabupaten
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#kecamatan').html(data);
                    },
                    error: function() {
                        alert('Errorr..');
                    }
                });
            }
        });
    });


    //=================Disable jika inputan  kosong================
    function EnableDisable(title) {
        //Reference the Button.
        var btnSubmit = document.getElementById("btnSubmit");
        // var title.length;
        //Verify the TextBox value.
        if (title.value.trim() != null) {
            //Enable the TextBox when TextBox has value.
            btnSubmit.disabled = false;
        } else {
            //Disable the TextBox when TextBox is empty.
            btnSubmit.disabled = true;
        }
    };

    //=================Hanya input angka Kode pendaftaran ================
    $(function() {
        $('#only-number').on('keydown', '#title', function(e) {
            -1 !== $
                .inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/
                .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) ||
                35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) &&
                (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
        });
    })
</script>

<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
<script src="<?= base_url('assets/') ?>dist/jquery.simple-calendar.js"></script>


</body>

</html>