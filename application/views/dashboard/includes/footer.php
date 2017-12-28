    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Petex 2017</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" style = "cursor: pointer;">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url()?>assets/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?= base_url()?>assets/chartjs/Chart.min.js"></script>
    <script src="<?= base_url()?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url()?>assets/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url()?>assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?= base_url()?>assets/admin/js/sb-admin-datatables.min.js"></script>
    <script src="<?= base_url()?>assets/admin/js/sb-admin-charts.min.js"></script>
    <!-- Counters Scripts-->
    <script src="<?= base_url() ?>assets/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/sb-admin-counter.js"></script>
    <!-- Tab Script-->
    <script>
        $('#user_tab a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
     </script>
</div>
</body>
</html>
