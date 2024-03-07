       <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('quixmas/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('quixmas/js/custom.min.js') }}"></script>
    <script src="{{ asset('quixmas/js/settings.js') }}"></script>
    <script src="{{ asset('quixmas/js/gleek.js') }}"></script>
    <script src="{{ asset('quixmas/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('quixmas/js/dashboard/dashboard-2.js') }}"></script>   
    
    <script src="{{ asset('quixmas/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('quixmas/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('quixmas/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

    <script src="{{ asset('quixmas/plugins/validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/validation/jquery.validate-init.js')}}"></script>
     
    {{-- Adminltee  --}}
    <script src="{{ asset('quixmas/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('quixmas/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Mengimpor library JavaScript Bootstrap -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Mengimpor library JavaScript Bootstrap Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- Library QR Code -->
<script src="https://cdn.jsdelivr.net/npm/qrcode"></script>

    <script>
        window.localStorage.clear();
        $(document).ready(function () {

$('#list-items').html(localStorage.getItem('listItems'));

$('.add-items').submit(function(event) 
{
event.preventDefault();

var item = $('#todo-list-item').val();
if(item) 
{
$('#list-items').append("<li><div class='round d-inline-block'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>" + item + "</label><a class='remove'><i class='fa fa-trash'></i></a></li>");




// <div class='round'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>

// dfdfdf</label>





localStorage.setItem('listItems', $('#list-items').html());

$('#todo-list-item').val("");
}

});

$(document).on('change', '.checkbox', function() 
{
if($(this).attr('checked')) 
{
$(this).removeAttr('checked');
} 
else 
{
$(this).attr('checked', 'checked');
}

$(this).parent().toggleClass('completed');

localStorage.setItem('listItems', $('#list-items').html());
});

$(document).on('click', '.remove', function() 
{
$(this).parent().remove();

localStorage.setItem('listItems', $('#list-items').html());
});

});
    </script>
<script>
    $(document).ready(function() {
        var total_harga = $("#total_harga").text().replace(/\D/g,'');
        console.log(total_harga);
        $("#total").val(total_harga).toString().replace(/\D/g,'');
        $('#diskon').on('input', function() {
            var diskon = $(this).val().toString().replace(/\D/g,'');
            var harga_akhir = total_harga-diskon;
            if(harga_akhir<0){
              alert('diskon tidak boleh lebih besar dari harga');
            }else{
            $('#total').val(harga_akhir).toString().replace(/\D/g,'');
            }
        });
        $('#bayar').on('input', function() {
            var total = $('#total').val().toString().replace(/\D/g,'');
            var bayar = $(this).val().toString().replace(/\D/g,'');
            var kembalian = bayar-total;
            
            $('#kembalian').val(kembalian).toString().replace(/\D/g,'');
        });
    });
  </script>
  <script>
  $(document).ready(function() {
      $('.tambah_stok').on('click', function() {
          var id = $(this).data('id');
          var nama = $(this).data('nama');
          $("#tambah_stok_modal #id").val(id);
          $("#tambah_stok_modal #nama_barang").val(nama);
      });
  });
</script>
 

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
    $(document).ready(function(){
      $('#datepicker').datepicker({
        format: "mm-yyyy",
        minViewMode: 1
      });
    });
    </script>
    


   

    
