@extends('layouts.index')

@section('content')
</head>
<br>
<body>
  <div>
    <ul class="carousel">
      <li class="carousel-item">
        <a href="#sejarah"><img src="{{asset('images/homecarousel/6.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#visimisi"><img src="{{asset('images/homecarousel/7.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#layanan"><img src="{{asset('images/homecarousel/8.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#"><img src="{{asset('images/homecarousel/9.png')}}" alt=""></a>
      </li>
      <li class="carousel-item">
        <a href="#"><img src="{{asset('images/homecarousel/10.png')}}" alt=""></a>
      </li>
    </ul>
    <br>
    <br>
  </div>

    <hr>
    <div>
      <a id="sejarah" class="center teal-text"><h2>Sejarah</h2></a>
    </div>

    <div class="card-panel teal lighten-5">
     <p>Laboratorium Keperawatan Program Studi (Prodi) Diploma III dan Diploma IV Keperawatan Semarang sekarang menempati Gedung Laboratorium yang diresmikan oleh Dr. Karneni, MPH, Kepala Kantor Wilayah Departemen Kesehatan Provinsi Jawa Tengah pada hari Rabu tanggal 1 Juni 1994. Gedung ini merupakan bantuan Badan Penyelenggara Pendidikan (BP-3) Pendidikan Ahli Madya (PAM) Keperawatan Semarang.</p>
     <p>Mulai tahun 2001, sesuai dengan Surat Keputusan Menteri Kesehatan dan Kesejahteraan Sosial RI Nomor 298 / MENKES-KESOS / SK / IV/ 2001 tanggal 16 April 2001 dan terakhir diubah dengan Peraturan Menteri Kesehatan RI Nomor 890 / MENKES/ VIII/ 2007 tanggal 2 Agustus 2007 tentang Organisasi dan Tata Kerja Politeknik Kesehatan maka, Laboratorim PAM Keperawatan Semarang berubah menjadi Laboratorium Keperawatan Prodi D III Keperawatan Semarang, yang merupakan salah satu dari prodi di lingkungan Jurusan Keperawatan Semarang Politeknik Kesehatan Semarang.</p>
     <p>Dalam perkembangannya, sejak tahun 2007 Jurusan Keperawatan Politeknik Kesehatan Kemenkes Semarang membuka program studi diploma IV Keperawatan. Pembukaan prodi baru tersebut berdampak pada pelayanan laboratorium keperawatan semarang. Dengan demikian, sejak tahun 2007 sampai sekarang, laboratorium keperawatan juga melayani kegiatan praktek bagi mahasiswa Prodi Diploma III dan Prodi Diploma IV Keperawatan. Selain mahasiswa di lingkungan program studi keperawatan, laboratorium keperawatan pun melayani mahasiswa prodi lain di lingkungan Poltekkes Kemenkes Semarang, diantaranya adalah mahasiswa Teknik Radiodiagnostik dan Radioterapi.</p>
   </div>

   <hr>
   <div>
     <a id="visimisi" class="center light-blue-text"><h2>Visi & Misi</h2></a>
   </div>
   
   <div class="card-panel light-blue lighten-5">
     <div class="row">
       <div class="col s12 m6 l3"><h4>Visi</h4></div>
       <div class="col s0 m6 l9"><p>Laboratorium Keperawatan Semarang memiliki visi menjadi laboratorium keperawatan berstandar nasional pada tahun 2020.</p></div>
     </div>
     <hr>
     <div class="row">
       <div class="col s12 m6 l3"><h4>Misi</h4></div>
       <div class="col s0 m6 l9">
         <p>1.	Menyelenggarakan pembelajaran keterampilan keperawatan (nursing skills) secara terstruktur dan profesional.</p>
         <p>2.	Memfasilitasi pelayanan penelitian bidang keperawatan yang dilaksanakan oleh sivitas akademika maupun pihak lain yang membutuhkan.</p>
         <p>3.  Memfasilitasi pelayanan kegiatan pengabdian kepada masyarakat.</p>
         <p>4.	Meningkatkan kemampuan pengelolaan laboratorium untuk menjamin terselenggaranya pembelajaran yang sesuai standar ISO 17025.</p>
         <p>5.	Secara bertahap dan berkesinambungan terus melengkapi sarana, prasarana dan alat yang dibutuhkan guna terpenuhinya standar nasional  laboratorium keperawatan.</p>
         <p>6.	Mengembangkan modul, standar prosedur dan metode pembelajaran laboratorium guna mendukung pencapaian standar kompetensi peserta didik. </p>
         <p>7.	Menciptakan keamanan dan keselamatan kerja di laboratorium.</p>
         <p>8.	Menciptakan lingkungan belajar yang kondusif.</p>
       </div>
     </div>
   </div>

   <hr>
   <div>
     <a id="layanan" class="center indigo-text"><h2>Layanan</h2></a>
   </div>

    <ul class="collapsible" data-collapsible="expandable">
      <li>
        <div class="collapsible-header"><i class="material-icons">check</i>
          <h4>Pendidikan</h4>
        </div>
        <div class="collapsible-body indigo lighten-5">
          <p>Kebutuhan Dasar Manusia ( KDM )<br>
          Keperawatan Maternitas<br>
          Keperawatan Anak dan Tumbuh Kembang<br>
          Keperawatan Medikal Bedah<br>
          Keperawatan Jiwa<br>
          Keperawatan Keluarga<br>
          Keperawatan Kegawatdaruratan / Kritis<br>
          </p></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">check</i>
          <h4>Penelitian</h4>
        </div>
        <div class="collapsible-body indigo lighten-5">
          <p>Penyediaan sarana dan prasarana penelitian untuk dosen dan mahasiswa di bidang keperawatan</p>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">check</i>
          <h4>Pengabdian kepada masyarakat</h4>
        </div>
        <div class="collapsible-body indigo lighten-5">
          <p>Penyediaan sarana dan prasarana pengabdian masyarakat untuk dosen dan mahasiswa di bidang keperawatan</p>
        </div>
      </li>
    </ul>

    <hr>


</body>
@endsection
