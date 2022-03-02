
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">DATA PERSONEL POLRES PAYAKUMBUH </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Data Personel  </a>
          </div>
          <ul class="sidebar-menu">
            <li><a class="nav-link" href=""><i class="fas fa-home"></i> <span> Dashboard </span></a></li>              
            <li><a href="{{ route('pangkat.index')}}" class="nav-link" href=""><i class="fas fa-columns"></i> <span> Data Pangkat </span></a></li>              
            <li><a href="{{ route('ruangan.index')}}" class="nav-link" href=""><i class="fas fa-columns"></i> <span> Data Ruangan </span></a></li>              
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data </span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('datapersonel.index')}}">Semua Data</a></li>
                @php
                  $ruangans = \App\Ruangan::get();    
                @endphp
                @foreach($ruangans as $ruangan)
                  <li><a class="nav-link" href="{{ route('data.personel.ruangan.index', $ruangan->id)}} ">{{ $ruangan->nama }}</a></li>
                @endforeach
              </ul>
            </li>
          </ul>
          </div>
        </aside>
      </div>