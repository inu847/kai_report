<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="{{ route('dashboard.index') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Dokumen Pegawai</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('dashboard.form') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Form</p>
      </a>
    </li>

    {{-- <li class="nav-item">
      <a href="{{ route('dashboard.format') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Format Dokumen</p>
      </a>
    </li> --}}

    <li class="nav-item">
        <a href="{{ route('dashboard.documentPreview') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Dokumen Preview</p>
        </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('dashboard.page1Download') }}" class="nav-link">
        <i class="far fa-file-pdf"></i>
        <p>Dokumen Halaman 1</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('dashboard.page2Download') }}" class="nav-link">
        <i class="far fa-file-pdf"></i>
        <p>Dokumen Halaman 2</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('dashboard.page3Download') }}" class="nav-link">
        <i class="far fa-file-pdf"></i>
        <p>Dokumen Halaman 3</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('dashboard.page4Download') }}" class="nav-link">
        <i class="far fa-file-pdf"></i>
        <p>Dokumen Halaman 4</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{ route('export.swakelola') }}" class="nav-link">
        <i class="fas fa-table"></i>
        <p>Dokumen Swakelola</p>
      </a>
    </li>
</ul>