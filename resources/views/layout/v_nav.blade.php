         <li class="nav-item">
                <a class="nav-link" href="/">
                  @if(auth()->user()->level == 1 )
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                   <i class="fas fa-dolly-flatbed"></i>
                    <span>Data Gudang</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                
                        <h6 class="collapse-header">Input data barang</h6>
                        <a class="collapse-item" href="/ibrg">Input Barang</a>
                        <a class="collapse-item" href="/pnjl">Penjualan Barang</a>
                        <a class="collapse-item" href="/lpr">Laporan</a>
                          <a class="collapse-item" href="/kbg">Ketersediaan Barang<br>Gudang</a>
                    </div>
                </div>
            </li>

             <!-- Heading -->
            <div class="sidebar-heading">
                Data Penjualan
            </div>

            <li class="nav-item">
                     <a class="nav-link" href="/kpt">
                  <i class="fas fa-store"></i>
                    <span>Keuntungan penjualan tahunan</span></a>
                    
            </li>

            <li class="nav-item">
              @elseif(auth()->user()->level == 2 )
                <a class="nav-link" href="/homeuser">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>

                      <a class="nav-link" href="/lpruser">
                  <i class="fas fa-hand-holding-usd"></i>
                    <span>Laporan keuangan</span></a>

                    <a class="nav-link" href="/kbguser">
                 <i class="fas fa-boxes"></i>
                    <span>Ketersediaan barang <br> gudang</span></a>

                    <a class="nav-link" href="/kptuser">
                  <i class="fas fa-chart-line"></i>
                    <span>Keuntungan penjualan <br> tahunan</span></a>

                  
            </li>
         
         
 @endif