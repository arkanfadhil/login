<?php include ('db.php'); ?>
     <div class="col-sm-8">
      </div>
     <div class="col-sm-4">
        <div class="form-group form-inline">
            <input type="text" name="s_keyword" id="s_keyword" class="form-control" 
            <?php if (isset($_POST['keyword'])) 
            {
              echo 'value="'.$_POST['keyword'].'"';
            }
              ?>
              >
        <button id="search" name="search" class="btn btn-warning search"><i class="fa fa-search"></i> Cari</button>
      </div>
    </div>

  <table class="table table-bordered table-striped">
            <?php 
            if (isset($_POST['nama_kolom']))
            {
            echo '<input type="hidden" id="nama_kolom" class="nama_kolom" value="'.$_POST['nama_kolom'].'" />';
            }

            if(isset($_POST['order']))
            {
                $order = $_POST['order'];
                $order=$order;       
                   echo '
                        <tr>
                             <th>No</th>
                             <th><a class="column_sort" id="nip" data-order="'.$order.'" href="#">NIP</a></th>
                             <th><a class="column_sort" id="nama" data-order="'.$order.'" href="#">Nama</a></th>
                             <th><a class="column_sort" id="alamat" data-order="'.$order.'" href="#">Alamat</a></th>
                        </tr>';
            } 
            else
            {
                  ?>
            <tr>
              <th>No</th>
              <th><a class="column_sort" id="nip" data-order="desc" href="#">NIP</a></th>
              <th><a class="column_sort" id="nama" data-order="desc" href="#">Nama</a></th>
              <th><a class="column_sort" id="alamat" data-order="desc" href="#">Alamat</a></th>
            </tr>
            <?php 
            }



              $no=1;
              $page = (isset($_POST['page']))? $_POST['page'] : 1;
              $limit = 10; 
              $limit_start = ($page - 1) * $limit;
              $no = $limit_start + 1;
              $query = mysqli_query($DB,"SELECT * FROM pegawai ORDER BY nip ASC LIMIT $limit_start, $limit");
                       if (isset($_POST['order']))
                       {
                         if (isset($_POST['keyword'])) 
                         {
                                        $s_keyword = $_POST['keyword'];
                                        $search_keyword = '%'. $s_keyword .'%';
                                        if (isset($_POST['nama_kolom']))
                                        {
                                        $nama_kolom = $_POST["nama_kolom"];
                                          if ($nama_kolom=='')
                                          {
                                            $nama_kolom='nip';
                                          }
                                        }
                                        else
                                        {
                                         $nama_kolom='nip'; 
                                        }
                                        $orderby = $order;
                                        $query =  mysqli_query($DB,"SELECT * FROM pegawai WHERE nama LIKE '%".$search_keyword."%' or nip LIKE '%".$search_keyword."%'  or alamat  LIKE '%".$search_keyword."%'  ORDER BY ". $nama_kolom ." ". $orderby ."  LIMIT $limit_start, $limit");
                          }
                          else
                          {
                                          $nama_kolom = $_POST["nama_kolom"];
                                          $orderby = $order;
                                          $query = mysqli_query($DB,"SELECT * FROM pegawai ORDER BY ". $nama_kolom ." ". $orderby ." LIMIT $limit_start, $limit");
                           }     
                        }


                      if (isset($_POST['keyword'])) 
                      {
                        $s_keyword = $_POST['keyword'];
                        $search_keyword = '%'. $s_keyword .'%';
                        $query =  mysqli_query($DB,"SELECT * FROM pegawai WHERE nama LIKE '%".$search_keyword."%' or nip LIKE '%".$search_keyword."%'  or alamat  LIKE '%".$search_keyword."%'  LIMIT $limit_start, $limit ");
                          if (isset($_POST['order']))
                          {
                                 if (isset($_POST['nama_kolom']))
                                  {
                                    $nama_kolom = $_POST["nama_kolom"];
                                       if ($nama_kolom=='')
                                          {
                                            $nama_kolom='nip';
                                          }
                                  }
                                  else
                                  {
                                     $nama_kolom='nip'; 
                                  }
                                $orderby = $order;
                                $query =  mysqli_query($DB,"SELECT * FROM pegawai WHERE nama LIKE '%".$search_keyword."%' or nip LIKE '%".$search_keyword."%'  or alamat  LIKE '%".$search_keyword."%'  ORDER BY ". $nama_kolom ." ". $orderby ."  LIMIT $limit_start, $limit");
                       
                          }
                          else
                          {
                            $query =  mysqli_query($DB,"SELECT * FROM pegawai WHERE nama LIKE '%".$search_keyword."%' or nip LIKE '%".$search_keyword."%'  or alamat  LIKE '%".$search_keyword."%'  LIMIT $limit_start, $limit");
                          }
                      }

             while ($row = mysqli_fetch_assoc($query))
                  {  ?>  
                        <tr>  
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row["nip"]; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["alamat"]; ?></td>
                        </tr>
            <?php } ?>
      </table>

 
        <?php

          $query_jumlah = mysqli_query($DB,"SELECT count(*) AS jumlah FROM pegawai");
            if (isset($_POST['keyword'])) 
            {
              $s_keyword = $_POST['keyword'];
              $search_keyword = '%'. $s_keyword .'%';
              $query_jumlah =  mysqli_query($DB,"SELECT count(*) as jumlah FROM pegawai WHERE nama LIKE '%".$search_keyword."%' or nip LIKE '%".$search_keyword."%'  or alamat  LIKE '%".$search_keyword."%' ");
            }
              $row = mysqli_fetch_assoc($query_jumlah);
              $total_records = $row['jumlah'];
        ?>

        <p>Total baris : <?php echo $total_records; ?></p>
        <nav class="mb-5">
                <ul class="pagination justify-content-end">
                  <?php
                    $jumlah_page = ceil($total_records / $limit);
                    $jumlah_number = 1;
                    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                    $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
              
                    if($page == 1){
                      echo '<li class="page-item disabled"><a class="page-link" href="#">Awal</a></li>';
                      echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                    } else {
                      $link_prev = ($page > 1)? $page - 1 : 1;
                      echo '<li class="page-item halaman" id="1"><a class="page-link" href="#">Awal</a></li>';
                      echo '<li class="page-item halaman" id="'.$link_prev.'"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                    }
       
                    for($i = $start_number; $i <= $end_number; $i++){
                      $link_active = ($page == $i)? ' active' : '';
                      echo '<li class="page-item halaman '.$link_active.'" id="'.$i.'"><a class="page-link" href="#">'.$i.'</a></li>';
                    }
       
                    if($page == $jumlah_page){
                      echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                      echo '<li class="page-item disabled"><a class="page-link" href="#">Akhir</a></li>';
                    } else {
                      $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                      echo '<li class="page-item halaman" id="'.$link_next.'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                      echo '<li class="page-item halaman" id="'.$jumlah_page.'"><a class="page-link" href="#">Akhir</a></li>';
                    }
                  ?>
                </ul>
        </nav>
