<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">
                <?php 
                if($this->uri->segment(1) =='Indikator'){
                    echo "Mutu";
                  }elseif($this->uri->segment(1) =='Master'){
                    echo "Pengaturan";
                  }else{
                    echo "Mutu";

                }
                ?>
                </a>
              </li>
              <li class="breadcrumb-item active"><?php echo $this->uri->segment(2);?></li>
            </ol>