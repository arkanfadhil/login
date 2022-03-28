<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<h1>Selamat Datang <?= $_SESSION['nama']; ?></h1>
<h2>Laman Beranda</h2>
<h3>NIP Anda Adalah: <?= $_SESSION['nip'] ?></h3>
<div class="container" align="center">
    <h3 class="text-center">Data Pegawai</h3><br />
      <p></p>
      <div class="table-responsive" id="data"></div>  
    </div>
 </div>
 <script>
   $(document).ready(function(){
      $(document).on('click', '.column_sort', function(){
         var nama_kolom = $(this).attr("id");
         var order = $(this).data("order");
        var keyword = $("#s_keyword").val();
         var arrow = '';
         if(order == 'asc'){
              arrow = '&nbsp;<span class="fa fa-arrow-down"></span>';
         	  var order = 'desc';
         } else {
         	  var order = 'asc';
              arrow = '&nbsp;<span class="fa fa-arrow-up"></span>';
         }
         $.ajax({
            url:"data.php",
            method:"POST",
            data:{nama_kolom:nama_kolom, order:order, keyword:keyword},
            success:function(data)
            {
                    $('#data').html(data);
                 	$('#'+nama_kolom+'').append(arrow);
            }
         })
      });

      load_data();
      function load_data(page){
      	var nama_kolom = $("#nama_kolom").val();
        var order = $("#nip").data("order");
        if(order == 'desc')
        {
              arrow = '&nbsp;<span class="fa fa-arrow-down"></span>';
        } else 
        {
              arrow = '&nbsp;<span class="fa fa-arrow-up"></span>';
        }
        var keyword = $("#s_keyword").val();
           $.ajax({
                url:"data.php",
                method:"POST",
                data:{page:page,nama_kolom:nama_kolom,order:order,keyword:keyword},
                success:function(data){
                     $('#data').html(data);
                     $('#'+nama_kolom+'').append(arrow);
                }
           })
      }

      $(document).on('click', '.halaman', function(){
           var page = $(this).attr("id");
           load_data(page);
      });

      $(document).on('click', '.search', function(){
           load_data();
	    });

   });
</script>
