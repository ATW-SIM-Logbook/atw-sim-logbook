<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/login">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SIM Logbook <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

    <!-- Custom scripts DataTables-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
    <!-- Bootstrap core JavaScript-->
    {{-- <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 

    <!-- Core plugin JavaScript-->
    {{-- <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>  --}}

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    
    <!-- Custom scripts DataTables: Logbook-->
    <script type="text/javascript">
        $(document).ready(function() {
          
          var table = $('.table-logbook').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('logbook.list') }}",
              columns: [
                  {data: 'id'},
                  {data: 'nrp'},
                  {data: 'nama'},
                  {data: 'hari'},
                  {data: 'tanggal'},
                  {data: 'kegiatan'},
                  {data: 'keterangan'},
                //   {
                //       data: 'action', 
                //       name: 'action', 
                //       orderable: true, 
                //       searchable: true
                //   },
              ]
          });
          
        });
    </script>

</body>

</html>